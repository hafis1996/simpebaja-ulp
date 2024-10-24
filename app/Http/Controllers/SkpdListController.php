<?php

namespace App\Http\Controllers;

use App\Models\SkpdList;
use Illuminate\Http\Request;

class SkpdListController extends Controller
{
   public function show($id)
{
    $skpd = SkpdList::find($id); // Menggunakan model SkpdList
    
    if (!$skpd) {
        return response()->json(['message' => 'SKPD not found'], 404);
    }

    return response()->json([
        'skpd_nama' => $skpd->nama, 
        'data_paket_pekerjaan' => $skpd->paket_pekerjaan, 
    ]);
}


}
