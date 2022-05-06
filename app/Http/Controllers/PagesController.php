<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $trucks = Truck::get(['nama', 'gambar', 'deskripsi']);

        return view('index', [
            'trucks' => $trucks
        ]);
    }
}
