<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
