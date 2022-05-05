<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Models\TrackingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use DataTables;

class TrackingBarangController extends Controller
{
    public function index()
    {
        return view('pages.tracking-barang.index');
    }

    public function createView()
    {
        return view('pages.tracking-barang.create');
    }

    public function createAction(Request $request)
    {
        $this->validate($request, [
            'no_surat_jalan' => 'required',
            'nama_customer' => 'required',
            'alamat_tujuan' => 'required'
        ]);

        Tracking::create([
            'no_surat_jalan' => $request->no_surat_jalan,
            'nama_customer' => $request->nama_customer,
            'alamat_tujuan' => $request->alamat_tujuan,
            'status' => 'diproses'
        ]);

        return redirect()->route('tracking-barang.index.view');
    }

    public function detailView($no_surat_jalan)
    {
        $no_surat_jalan_decrypt = Crypt::decryptString($no_surat_jalan);
        $tracking = Tracking::where('no_surat_jalan', '=', $no_surat_jalan_decrypt)->first();
        $timeline = TrackingDetail::where('tracking_no_surat_jalan', '=', $tracking->no_surat_jalan)->orderBy('step', 'desc')->get(['title', 'sub_title', 'created_at']);

        $step = TrackingDetail::where('tracking_no_surat_jalan', '=', $tracking->no_surat_jalan)->orderBy('step', 'desc')->first('step');
        $current_step = empty($step->step) ? 1 : $step->step + 1;

        return view('pages.tracking-barang.detail', [
            'no_surat_jalan' => $no_surat_jalan,
            'tracking' => $tracking,
            'timeline' => $timeline,
            'current_step' => $current_step
        ]);
    }

    public function createTimelineAction(Request $request, $no_surat_jalan)
    {
        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required'
        ]);

        $no_surat_jalan_decrypt = Crypt::decryptString($no_surat_jalan);
        TrackingDetail::create([
            'tracking_no_surat_jalan' => $no_surat_jalan_decrypt,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'step' => $request->step
        ]);

        return redirect()->back();
    }

    public function datatables()
    {
        $model = Tracking::get(['no_surat_jalan', 'nama_customer', 'status']);

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('no_surat_jalan_crypt', function (Tracking $tracking) {
                return Crypt::encryptString($tracking->no_surat_jalan);
            })
            ->toJson();;
    }
}
