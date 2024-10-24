<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPengadaan;
use App\Models\UserSkpd;
use App\Models\SkpdList; // Pastikan Anda memiliki model untuk SKPD list
use App\Models\Message;  // Pastikan Anda memiliki model Message untuk pesan
use Illuminate\Support\Facades\Auth;

class EvaluasiController extends Controller
{
    public function getData($data_id)
    {
        // Mengambil data dari DataPengadaan
        $dataPengadaan = DataPengadaan::find($data_id);

        if (!$dataPengadaan) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        // Mendapatkan nama SKPD
        $skpd = SkpdList::find($dataPengadaan->skpd_id);

        if (!$skpd) {
            return response()->json(['error' => 'SKPD tidak ditemukan'], 404);
        }

        $data = [
            'skpd_nama' => $skpd->skpd_nama,
            'pekerjaan' => $dataPengadaan->data_paket_pekerjaan,
        ];

        return response()->json($data);
    }

    public function store(Request $request)
    {
        // Validasi permintaan
        $request->validate([
            'data_id' => 'required|exists:data_pengadaan,data_id',
            'skpd_nama' => 'required',
            'pekerjaan' => 'required',
            'pesan' => 'required',
        ]);

        // Mengambil DataPengadaan
        $dataPengadaan = DataPengadaan::find($request->data_id);

        // Mendapatkan skpd_id
        $skpd_id = $dataPengadaan->skpd_id;

        // Mengambil UserSkpd dengan skpd_id yang sama
        $userSkpd = UserSkpd::where('skpd_id', $skpd_id)->first();

        if (!$userSkpd) {
            return redirect()->back()->with('error', 'User SKPD tidak ditemukan');
        }

        // Membuat pesan (asumsi Anda memiliki model Message dan tabel messages)
        $message = new Message();
        $message->from_user_id = Auth::id(); // User yang sedang login
        $message->to_user_id = $userSkpd->user_id;
        $message->subject = 'Evaluasi Permohonan Lelang';
        $message->message = $request->pesan;
        $message->save();

        return redirect()->back()->with('success', 'Evaluasi berhasil dikirim');
    }
}
