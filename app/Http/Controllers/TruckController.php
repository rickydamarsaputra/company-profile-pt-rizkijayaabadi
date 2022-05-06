<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DataTables;

class TruckController extends Controller
{
    public function index()
    {
        return view('pages.truck.index');
    }

    public function createView()
    {
        return view('pages.truck.create');
    }

    public function createAction(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required'
        ]);

        $file_name_and_extension = Str::slug($request->nama) . '.' . $request->file('gambar')->getClientOriginalExtension();

        $path = Storage::disk('public')->putFileAs(
            'trucks-img',
            $request->file('gambar'),
            $file_name_and_extension
        );

        Truck::create([
            'nama' => $request->nama,
            'gambar' => $path,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('truck.index.view');
    }

    public function datatables()
    {
        $model = Truck::get(['nama', 'gambar']);

        return DataTables::of($model)
            ->addIndexColumn()
            ->toJson();
    }
}
