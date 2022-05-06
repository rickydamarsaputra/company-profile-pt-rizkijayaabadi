<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DataTables;
use Illuminate\Support\Facades\Crypt;

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

    public function updateView($id)
    {
        $id_decrypt = Crypt::decryptString($id);
        $truck = Truck::where('id', '=', $id_decrypt)->first(['id', 'nama', 'gambar', 'deskripsi']);

        return view('pages.truck.update', [
            'truck' => $truck
        ]);
    }

    public function updateAction(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        $id_decrypt = decrypt($id);
        $truck = Truck::where('id', '=', $id_decrypt)->first();

        if (!empty($request->file('gambar'))) {
            Storage::disk('public')->delete($truck->gambar);
            $file_name_and_extension = Str::slug($request->nama) . '.' . $request->file('gambar')->getClientOriginalExtension();

            $path = Storage::disk('public')->putFileAs(
                'trucks-img',
                $request->file('gambar'),
                $file_name_and_extension
            );

            $truck->update([
                'gambar' => $path
            ]);
        }

        $truck->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('truck.index.view');
    }

    public function detailView($id)
    {
        $id_decrypt = Crypt::decryptString($id);
        $truck = Truck::where('id', '=', $id_decrypt)->first();

        return view('pages.truck.detail', [
            'truck' => $truck
        ]);
    }

    public function deleteAction($id)
    {
        $id_decrypt = Crypt::decryptString($id);
        $truck = Truck::where('id', '=', $id_decrypt)->first();

        Storage::disk('public')->delete($truck->gambar);
        $truck->delete();

        return redirect()->back();
    }

    public function datatables()
    {
        $model = Truck::get(['id', 'nama', 'gambar']);

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('id_crypt', function (Truck $truck) {
                return Crypt::encryptString($truck->id);
            })
            ->toJson();
    }
}
