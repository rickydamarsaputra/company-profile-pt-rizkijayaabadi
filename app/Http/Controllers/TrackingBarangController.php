<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Models\TrackingDetail;
use App\Models\Truck;
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

    public function updateView($no_surat_jalan)
    {
        $no_surat_jalan_decrypt = Crypt::decryptString($no_surat_jalan);
        $tracking = Tracking::where('no_surat_jalan', '=', $no_surat_jalan_decrypt)->first();
        $status = ['diproses', 'dikirim', 'sampai'];

        return view('pages.tracking-barang.update', [
            'tracking' => $tracking,
            'status' => $status
        ]);
    }

    public function updateAction(Request $request, $no_surat_jalan)
    {
        $no_surat_jalan_decrypt = decrypt($no_surat_jalan);
        $tracking = Tracking::where('no_surat_jalan', '=', $no_surat_jalan_decrypt)->first();

        $this->validate($request, [
            'no_surat_jalan' => 'required',
            'nama_customer' => 'required',
            'alamat_tujuan' => 'required'
        ]);

        $tracking->update([
            'no_surat_jalan' => $request->no_surat_jalan,
            'nama_customer' => $request->nama_customer,
            'alamat_tujuan' => $request->alamat_tujuan,
            'status' => $request->status
        ]);

        return redirect()->route('tracking-barang.index.view');
    }

    public function detailView($no_surat_jalan)
    {
        $no_surat_jalan_decrypt = Crypt::decryptString($no_surat_jalan);
        $tracking = Tracking::where('no_surat_jalan', '=', $no_surat_jalan_decrypt)->first();
        $timeline = TrackingDetail::where('tracking_no_surat_jalan', '=', $tracking->no_surat_jalan)->orderBy('step', 'desc')->get(['id', 'title', 'sub_title', 'created_at']);

        $step = TrackingDetail::where('tracking_no_surat_jalan', '=', $tracking->no_surat_jalan)->orderBy('step', 'desc')->first('step');
        $current_step = empty($step->step) ? 1 : $step->step + 1;

        return view('pages.tracking-barang.detail', [
            'no_surat_jalan' => $no_surat_jalan,
            'tracking' => $tracking,
            'timeline' => $timeline,
            'current_step' => $current_step
        ]);
    }

    public function deleteAction($no_surat_jalan)
    {
        $no_surat_jalan_decrypt = Crypt::decryptString($no_surat_jalan);
        $tracking = Tracking::where('no_surat_jalan', '=', $no_surat_jalan_decrypt)->first();
        $tracking->delete();

        return redirect()->back();
    }

    public function createTimelineAction(Request $request, $no_surat_jalan)
    {
        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required'
        ]);

        $no_surat_jalan_decrypt = Crypt::decryptString($no_surat_jalan);
        $tracking = Tracking::where('no_surat_jalan', '=', $no_surat_jalan_decrypt)->first();

        TrackingDetail::create([
            'tracking_no_surat_jalan' => $no_surat_jalan_decrypt,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'step' => $request->step
        ]);

        if ($tracking->status == 'diproses') {
            $tracking->update([
                'status' => 'dikirim'
            ]);
        }

        return redirect()->back();
    }

    public function timelineUpdateView($id)
    {
        $id_timeline_decrypt = decrypt($id);
        $timeline = TrackingDetail::where('id', '=', $id_timeline_decrypt)->first(['id', 'tracking_no_surat_jalan', 'title', 'sub_title']);
        $tracking = Tracking::where('no_surat_jalan', '=', $timeline->tracking_no_surat_jalan)->first(['no_surat_jalan']);

        return view('pages.tracking-barang.timeline-update', [
            'timeline' => $timeline,
            'tracking' => $tracking
        ]);
    }

    public function timelineUpdateAction(Request $request, $id)
    {
        $id_timeline_decrypt = decrypt($id);
        $timeline = TrackingDetail::where('id', '=', $id_timeline_decrypt)->first(['id', 'tracking_no_surat_jalan', 'title', 'sub_title']);
        $no_surat_jalan_crypt = Crypt::encryptString($timeline->tracking_no_surat_jalan);

        $timeline->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title
        ]);

        return redirect()->route('tracking-barang.detail.view', $no_surat_jalan_crypt);
    }

    public function datatables()
    {
        $model = Tracking::get(['no_surat_jalan', 'nama_customer', 'status']);

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('no_surat_jalan_crypt', function (Tracking $tracking) {
                return Crypt::encryptString($tracking->no_surat_jalan);
            })
            ->toJson();
    }

    public function trackingBarang(Request $request)
    {
        $tracking = Tracking::where('no_surat_jalan', '=', $request->no_surat_jalan)->first();
        if (empty($tracking)) return redirect()->route('index');
        $timeline = TrackingDetail::where('tracking_no_surat_jalan', '=', $tracking->no_surat_jalan)->orderBy('step', 'desc')->get(['id', 'title', 'sub_title', 'created_at']);
        $trucks = Truck::get(['nama', 'gambar', 'deskripsi']);

        return view('index', [
            'tracking' => $tracking,
            'timeline' => $timeline,
            'trucks' => $trucks
        ]);
    }
}
