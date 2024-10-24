<?php

namespace App\Http\Controllers;

use App\Models\Pokja;
use App\Models\Anggota;
use App\Models\SkpdList;
use App\Models\UserSkpd;
use App\Models\skpd_list;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DataPengadaan;
use App\Models\jenis_kontrak;
use App\Models\SyaratDokumen;
use App\Models\DataSumberDana;
use GuzzleHttp\Promise\Create;
use App\Models\jenis_pengadaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\EvaluasiLelangNotification;

class SKPDController extends Controller
{
// =================================================DASHBOARD=================================
   public function dashboardskpd(){
    //   $user_id = Auth::guard('userskpd')->user()->user_id;
    //   $skpd = DB::table('user_skpd')
    //   ->where('user_id', $user_id)->get();

      $user_id = Auth::guard('userulp')->user()->user_id;
      $skpd = DB::table('users_ulp')
      ->where('ulp_id', $user_id)->get();
      

      return view('skpd.index', compact('skpd'));
   }


// ==============================================PROFIL SKPD=================================
   public function profilskpd()
   {
      // script AUTH===
    //   $user_id = Auth::guard('userskpd')->user()->user_id;
    //   $profilskpd = DB::table('user_skpd')
    //   ->where('user_id', $user_id)->get();
      $ulp_id = Auth::guard('userulp')->user()->ulp_id;
      $profilskpd = DB::table('users_ulp')
      ->where('ulp_id', $ulp_id)->get();

      return view('skpd.profilskpd', compact('profilskpd'));

   }

   // Halaman Edit Profil SKPD
   public function profilskpdedit(Request $request)
   {
      $user_id = $request->user_id;
      $profilskpd = DB::table('user_skpd')->where('user_id', $user_id)->first();
      return view('skpd.editprofilskpd', compact('profilskpd'));
   }

   // Update profil SKPD
   public function profilskpdupdate(Request $request)
   {
      $user_id            = $request->user_id;
      $user_nip           = $request->user_nip;
      $user_usernm        = $request->user_usernm ;
      $user_email         = $request->user_email;
      $password           = Hash::make($request->password);
      $user_alamat        = $request->user_alamat;
      $user_hp            = $request->user_hp;

      try {
         $data = [
            'user_nip'        => $user_nip,
            'user_usernm'     => $user_usernm,
            'user_email'      => $user_email,
            'password'        => $password,
            'user_alamat'     => $user_alamat,
            'user_hp'         => $user_hp,
         ];
         DB::table('user_skpd')->where('user_id', $user_id)->update($data);
         return redirect()->back()->with(['success' => 'Profil Berhasil di Ubah']);
      } catch (\Exception $e) {
         return Redirect::back()->with(['error'=>'Profil Gagal di Update']);
      }
   }
// =============================================PROFIL DINAS SKPD=============================
  
   public function profildinasskpd(Request $request){
    // $user_id = Auth::guard('userskpd')->user()->user_id;
    // $skpdprofildinas = DB::table('user_skpd')
    //     ->where('user_id', $user_id)
    //     ->join('skpd_list', 'user_skpd.skpd_id', '=', 'skpd_list.skpd_id')
    //     ->get();
    $ulp_id = Auth::guard('userulp')->user()->ulp_id;
    $skpdprofildinas = DB::table('users_ulp')
        ->where('ulp_id', $ulp_id)
        ->join('skpd_list', 'users_ulp.skpd_id', '=', 'skpd_list.skpd_id')
        ->get();

    // Untuk debug, lihat data yang dikembalikan
   //  dd($skpdprofildinas); 
    
    return view('skpd.profildinas', compact('skpdprofildinas'));
}
   // Edit Profil Dinas SKPD
   public function profildinasskpdedit(Request $request)
   {

      $skpd_id = $request->skpd_id;
      $skpdprofildinas = DB::table('skpd_list')->where('skpd_id', $skpd_id)->first();

      return view('skpd.profildinasedit', compact('skpdprofildinas'));
   }

   
public function profildinasskpdupdate(Request $request)
{
    $skpd_id = $request->skpd_id;
    $skpd_kelompok = $request->skpd_kelompok;
    $skpd_nama = $request->skpd_nama;
    $skpd_inisial = $request->skpd_inisial;
    $skpd_alamat = $request->skpd_alamat;
    $skpd_telp = $request->skpd_telp;
    $skpd_pimpinan = $request->skpd_pimpinan;
    $skpd_pimpinan_nip = $request->skpd_pimpinan_nip;
 
   
    try {
        $data = [
            'skpd_id' => $skpd_id,
            'skpd_kelompok' => $skpd_kelompok,
            'skpd_nama' => $skpd_nama,
            'skpd_inisial' => $skpd_inisial,
            'skpd_alamat' => $skpd_alamat,
            'skpd_telp' => $skpd_telp,
            'skpd_pimpinan' => $skpd_pimpinan,
            'skpd_pimpinan_nip' => $skpd_pimpinan_nip,
         
        ];
        DB::table('skpd_list')->where('skpd_id', $skpd_id)->update($data);
        session()->flash('success', 'Profil Berhasil di Ubah');
    } catch (\Exception $e) {
        session()->flash('error', 'Profil Gagal di Edit');
    }

    return redirect()->back();
}


// ===================================================SUMBER DANA SKPD=================================
   // TAMPILKAN SUMBER DANA SKPD REVISI
   public function sumberdana(){ 
      $user_id = Auth::guard('userskpd')->user()->user_id;
      $datasumberdana = DB::table('user_skpd')
      ->where('user_id', $user_id)
      ->join('data_sumber_dana', 'user_skpd.user_id', '=', 'data_sumber_dana.dana_skpd')
      ->paginate(5);

      // dd($datasumberdana);

      return view('skpd.sumberdana', compact('datasumberdana'));
   }
 
   // TAMBAH SUMBER DANA SKPD REVISI
   public function sumberdanastore(Request $request){
      $user_id = Auth::guard('userskpd')->user()->user_id;
      $dana_id = $request->dana_id;
      $dana_nama  = $request->dana_nama;

      try {
         $data = [
            'dana_id' => $dana_id,
            'dana_skpd' => $user_id,
            'dana_nama' => $dana_nama,
         ];
         DB::table('data_sumber_dana')->insert($data);
         return redirect()->back()->with(['success' => 'Dana Berhasil di Tambahkan']);
      } catch (\Exception $e) {
         return redirect()->back()->with(['error' => 'Dana Gagal di Tambahkan']);
      }
   }

   // EDIT SUMBER DANA SKPD REVISI
   public function sumberdanaskpdedit(Request $request)
   {
      $dana_id = $request->dana_id;
      $sumberdana = DB::table('data_sumber_dana')->where('dana_id', $dana_id)->first();
      return view('skpd.sumberdanaedit', compact('sumberdana'));
   }

   // UPDATE DANA SKPD
   public function sumberdanaupdate(Request $request){
      $dana_id = $request->dana_id;
      $dana_nama  = $request->dana_nama;

      try {
         $data = [
            'dana_id' => $dana_id,
            'dana_nama' => $dana_nama,
         ];
         DB::table('data_sumber_dana')->where('dana_id', $dana_id)->update($data);
         return redirect()->back()->with(['success' => 'Dana Berhasil di Ubah']);
      } catch (\Exception $e) {
         return redirect()->back()->with(['error' => 'Dana Gagal di di Ubah']);
      }
   }

   // HAPUS DANA SKPD
   public function sumberdanadeleteskpd($dana_id)
   {
      $delete = DB::table('data_sumber_dana')->where('dana_id', $dana_id)->delete();
      if ($delete) {
          return Redirect::back()->with(['success' => 'Data Berhasil di Hapus']);
      }else {
          return Redirect::back()->with(['error' => 'Data Gagal di Hapus']);
      }
   }

// Permohonan Lelang Index
// public function permohonanlelangskpd()
//     {
        // $user_id = Auth::guard('userskpd')->user()->user_id;
        
    //     $user_id = Auth::guard('userulp')->user()->user_id;

    //     // Menampilkan data di dashboard permohonan lelang | Tahap Revisi
    //     $datapengadaan = DB::table('user_skpd')
    //         ->where('user_id', $user_id)
    //         ->join('data_pengadaan', 'user_skpd.user_id', '=', 'data_pengadaan.skpd_id')
    //         ->join('data_sumber_dana', 'user_skpd.user_id', '=', 'data_sumber_dana.dana_skpd')
    //         ->join('jenis_kontrak', 'data_pengadaan.jenis_id', '=', 'jenis_kontrak.kontrak_id')
    //         ->paginate(5);

    //     // Menampilkan data jenis pengadaan
    //     $jenispengadaan = jenis_pengadaan::all();

    //     // Relasi Form Sumber Dana
    //     $sumberdana = DB::table('user_skpd')
    //         ->where('user_id', $user_id)
    //         ->join('data_sumber_dana', 'user_skpd.user_id', '=', 'data_sumber_dana.dana_skpd')
    //         ->get();

    //     // Relasi ke PPK
    //     $datappk = DB::table('user_skpd')
    //         ->where('user_id', $user_id)
    //         ->join('data_ppk', 'user_skpd.skpd_id', '=', 'data_ppk.skpd_id')
    //         ->get();

    //     return view('skpd.permohonanlelang', compact('datapengadaan', 'sumberdana', 'jenispengadaan', 'datappk'));
    // }

    
// if (Auth::guard('userulp')->check()) {
//         $user_id = Auth::guard('userulp')->user()->ulp_id;
//     } elseif (Auth::guard('userskpd')->check()) {
//         // If authenticated as userskpd
//         $user_id = Auth::guard('userskpd')->user()->user_id;
//     }
//          $user_id = Auth::guard('userulp')->user()->user_id;
//     //  $user_id = Auth::guard('userskpd')->user()->user_id;
    
//       // Menampilkan data di dashboard permohonan lelang | Tahap Revisi
//       $query = DB::table('user_skpd')
//          ->where('user_id', $user_id)
//          ->join('data_pengadaan', 'user_skpd.user_id', '=', 'data_pengadaan.skpd_id')
//          ->join('data_sumber_dana', 'data_pengadaan.data_sumber_dana', '=', 'data_sumber_dana.dana_id')
//          ->join('jenis_kontrak', 'data_pengadaan.jenis_id', '=', 'jenis_kontrak.kontrak_id')
//          ->select('data_pengadaan.data_id', 
//                   'data_pengadaan.data_kode_rekening', 
//                   'data_pengadaan.data_paket_pekerjaan', 
//                   'data_pengadaan.pagu_anggaran', 
//                   'data_pengadaan.data_hps', 
//                   'data_pengadaan.data_jwaktu_pelaksanaan', 
//                   'data_pengadaan.no_surat', 
//                   'data_pengadaan.tgl_surat', 
//                   'data_pengadaan.jns_tahun', 
//                   'data_pengadaan.data_tahun', 
//                   DB::raw('GROUP_CONCAT(DISTINCT data_sumber_dana.dana_nama SEPARATOR ", ") as dana_nama'), 
//                   'jenis_kontrak.kontrak_nama')
//          ->groupBy('data_pengadaan.data_id', 
//                   'data_pengadaan.data_kode_rekening', 
//                   'data_pengadaan.data_paket_pekerjaan', 
//                   'data_pengadaan.pagu_anggaran', 
//                   'data_pengadaan.data_hps', 
//                   'data_pengadaan.data_jwaktu_pelaksanaan', 
//                   'data_pengadaan.no_surat', 
//                   'data_pengadaan.tgl_surat', 
//                   'data_pengadaan.jns_tahun', 
//                   'data_pengadaan.data_tahun', 
//                   'jenis_kontrak.kontrak_nama');

//       $query->orderBy('data_pengadaan.created_at', 'DESC');
//       $datapengadaan = $query->paginate(10);

//       // Menampilkan data jenis pengadaan
//       $jenispengadaan = jenis_pengadaan::all();

//       // Relasi Form Sumber Dana
//       $sumberdana = DB::table('user_skpd')
//       ->where('user_id', $user_id)
//       ->join('data_sumber_dana', 'user_skpd.user_id', '=', 'data_sumber_dana.dana_skpd')
//       ->get();

//        return view('skpd.permohonanlelang', compact('datapengadaan', 'sumberdana', 'jenispengadaan'));

//    }

//    public function permohonanlelangskpd(Request $request)
// {
//      $datapengadaan = DB::table('user_skpd')
//             ->join('data_pengadaan', 'user_skpd.user_id', '=', 'data_pengadaan.skpd_id')
//             ->join('data_sumber_dana', 'data_pengadaan.data_sumber_dana', '=', 'data_sumber_dana.dana_id')
//             ->join('jenis_kontrak', 'data_pengadaan.jenis_id', '=', 'jenis_kontrak.kontrak_id')
//             ->select(
//                 'data_pengadaan.data_id',
//                 'data_pengadaan.data_kode_rekening',
//                 'data_pengadaan.data_paket_pekerjaan',
//                 'data_pengadaan.pagu_anggaran',
//                 'data_pengadaan.data_hps',
//                 'data_pengadaan.data_jwaktu_pelaksanaan',
//                 'data_pengadaan.no_surat',
//                 'data_pengadaan.tgl_surat',
//                 'data_pengadaan.jns_tahun',
//                 'data_pengadaan.data_tahun',
//                 DB::raw('GROUP_CONCAT(DISTINCT data_sumber_dana.dana_nama SEPARATOR ", ") as dana_nama'),
//                 'jenis_kontrak.kontrak_nama'
//             )
//             ->groupBy(
//                 'data_pengadaan.data_id',
//                 'data_pengadaan.data_kode_rekening',
//                 'data_pengadaan.data_paket_pekerjaan',
//                 'data_pengadaan.pagu_anggaran',
//                 'data_pengadaan.data_hps',
//                 'data_pengadaan.data_jwaktu_pelaksanaan',
//                 'data_pengadaan.no_surat',
//                 'data_pengadaan.tgl_surat',
//                 'data_pengadaan.jns_tahun',
//                 'jenis_kontrak.kontrak_nama'
//             )
//             ->orderBy('data_pengadaan.created_at', 'DESC')
//             ->paginate(10);

//         return view('skpd.permohonanlelang', compact('datapengadaan'));
//     }



public function permohonanlelangskpd(Request $request)
{
    if (Auth::guard('userulp')->check()) {
        // Tidak perlu mengambil user_id, karena kita tidak membatasi query
    } else {
        return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
    }

    // Query untuk menampilkan semua data permohonan lelang dengan informasi user_id dan skpd_id
    $query = DB::table('user_skpd')
        ->join('data_pengadaan', 'user_skpd.user_id', '=', 'data_pengadaan.skpd_id')
        ->join('data_sumber_dana', 'data_pengadaan.data_sumber_dana', '=', 'data_sumber_dana.dana_id')
        ->join('jenis_kontrak', 'data_pengadaan.jenis_id', '=', 'jenis_kontrak.kontrak_id')
        ->select(
            'user_skpd.user_id',
            'user_skpd.user_id as penginput_id', // Menampilkan user_id dari user_skpd
            'user_skpd.skpd_id', // Menampilkan skpd_id dari user_skpd
            'data_pengadaan.data_id',
            'data_pengadaan.data_kode_rekening',
            'data_pengadaan.data_paket_pekerjaan',
            'data_pengadaan.pagu_anggaran',
            'data_pengadaan.data_hps',
            'data_pengadaan.data_jwaktu_pelaksanaan',
            'data_pengadaan.no_surat',
            'data_pengadaan.tgl_surat',
            'data_pengadaan.jns_tahun',
            'data_pengadaan.data_tahun',
            DB::raw('GROUP_CONCAT(DISTINCT data_sumber_dana.dana_nama SEPARATOR ", ") as dana_nama'),
            'jenis_kontrak.kontrak_nama'
        )
        ->groupBy(
            'user_skpd.user_id',
            'user_skpd.skpd_id', // Tambahkan skpd_id ke group by
            'data_pengadaan.data_id',
            'data_pengadaan.data_kode_rekening',
            'data_pengadaan.data_paket_pekerjaan',
            'data_pengadaan.pagu_anggaran',
            'data_pengadaan.data_hps',
            'data_pengadaan.data_jwaktu_pelaksanaan',
            'data_pengadaan.no_surat',
            'data_pengadaan.tgl_surat',
            'data_pengadaan.jns_tahun',
            'data_pengadaan.data_tahun',
            'jenis_kontrak.kontrak_nama'
        );

    $query->orderBy('data_pengadaan.created_at', 'DESC');
    $datapengadaan = $query->paginate(10);

    $jenispengadaan = jenis_pengadaan::all();

    return view('skpd.permohonanlelang', compact('datapengadaan', 'jenispengadaan'));
}


// public function permohonanlelangskpd(Request $request)
// {
//     if (Auth::guard('userulp')->check()) {
//         // Tidak perlu mengambil user_id, karena kita tidak membatasi query
//     } else {
//         return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
//     }

//     // Query untuk menampilkan semua data permohonan lelang yang belum didisposisikan
//     $query = DB::table('user_skpd')
//         ->join('data_pengadaan', 'user_skpd.user_id', '=', 'data_pengadaan.skpd_id')
//         ->join('data_sumber_dana', 'data_pengadaan.data_sumber_dana', '=', 'data_sumber_dana.dana_id')
//         ->join('jenis_kontrak', 'data_pengadaan.jenis_id', '=', 'jenis_kontrak.kontrak_id')
//         ->select(
//             'user_skpd.user_id',
//               'user_skpd.user_id as penginput_id', // Menampilkan user_id dari user_skpd
//             'user_skpd.skpd_id',
//             'data_pengadaan.data_id',
//             'data_pengadaan.data_kode_rekening',
//             'data_pengadaan.data_paket_pekerjaan',
//             'data_pengadaan.pagu_anggaran',
//             'data_pengadaan.data_hps',
//             'data_pengadaan.data_jwaktu_pelaksanaan',
//             'data_pengadaan.no_surat',
//             'data_pengadaan.tgl_surat',
//             'data_pengadaan.jns_tahun',
//             'data_pengadaan.data_tahun',
//             DB::raw('GROUP_CONCAT(DISTINCT data_sumber_dana.dana_nama SEPARATOR ", ") as dana_nama'),
//             'jenis_kontrak.kontrak_nama'
//         )
//         ->where('data_pengadaan.sts_disposisi', '!=', 1) // Tambahkan filter untuk hanya menampilkan yang belum didisposisikan
//         ->groupBy(
//             'user_skpd.user_id',
//             'user_skpd.skpd_id',
//             'data_pengadaan.data_id',
//             'data_pengadaan.data_kode_rekening',
//             'data_pengadaan.data_paket_pekerjaan',
//             'data_pengadaan.pagu_anggaran',
//             'data_pengadaan.data_hps',
//             'data_pengadaan.data_jwaktu_pelaksanaan',
//             'data_pengadaan.no_surat',
//             'data_pengadaan.tgl_surat',
//             'data_pengadaan.jns_tahun',
//             'data_pengadaan.data_tahun',
//             'jenis_kontrak.kontrak_nama'
//         )
//         ->orderBy('data_pengadaan.created_at', 'DESC');

//     $datapengadaan = $query->paginate(10);
//     $jenispengadaan = jenis_pengadaan::all();

//     return view('skpd.permohonanlelang', compact('datapengadaan', 'jenispengadaan'));
// }

public function permohonanlelangevaluasi()
{
    // Sama seperti metode permohonanlelang(), dengan kemungkinan filter atau modifikasi jika diperlukan
    $datapengadaan = DB::table('user_skpd')
        ->join('data_pengadaan', 'user_skpd.user_id', '=', 'data_pengadaan.skpd_id')
        ->join('data_sumber_dana', 'data_pengadaan.data_sumber_dana', '=', 'data_sumber_dana.dana_id')
        ->join('jenis_kontrak', 'data_pengadaan.jenis_id', '=', 'jenis_kontrak.kontrak_id')
        ->select(
            'user_skpd.user_id',
            'user_skpd.user_id as penginput_id',
            'user_skpd.skpd_id',
            'data_pengadaan.data_id',
            'data_pengadaan.data_kode_rekening',
            'data_pengadaan.data_paket_pekerjaan',
            'data_pengadaan.pagu_anggaran',
            'data_pengadaan.data_hps',
            'data_pengadaan.data_jwaktu_pelaksanaan',
            'data_pengadaan.no_surat',
            'data_pengadaan.tgl_surat',
            'data_pengadaan.jns_tahun',
            'data_pengadaan.data_tahun',
            DB::raw('GROUP_CONCAT(DISTINCT data_sumber_dana.dana_nama SEPARATOR ", ") as dana_nama'),
            'jenis_kontrak.kontrak_nama'
        )
        ->where('data_pengadaan.sts_disposisi', '!=', 1)
        ->groupBy(
            'user_skpd.user_id',
            'user_skpd.skpd_id',
            'data_pengadaan.data_id',
            'data_pengadaan.data_kode_rekening',
            'data_pengadaan.data_paket_pekerjaan',
            'data_pengadaan.pagu_anggaran',
            'data_pengadaan.data_hps',
            'data_pengadaan.data_jwaktu_pelaksanaan',
            'data_pengadaan.no_surat',
            'data_pengadaan.tgl_surat',
            'data_pengadaan.jns_tahun',
            'data_pengadaan.data_tahun',
            'jenis_kontrak.kontrak_nama'
        )
        ->orderBy('data_pengadaan.created_at', 'DESC')
        ->paginate(10);

    $jenispengadaan = jenis_pengadaan::all();

    return view('skpd.permohonanlelangevaluasi', compact('datapengadaan', 'jenispengadaan'));
}










    // Untuk menampilkan sub kategori dari jenis kontrak
    public function getJeniskontrak(Request $request)
    {
        $jeniskontrak = jenis_kontrak::where('pengadaan_id', $request->jenis_id)
            ->pluck('kontrak_id', 'kontrak_nama');
        return response()->json($jeniskontrak);
    }

    // Buat Permohonan Lelang
    public function store(Request $request)
    {
        // $skpd_id = Auth::guard('userskpd')->user()->user_id;
        $skpd_id = Auth::guard('userulp')->user()->user_id;

        $data = [
            'data_id' => $request->data_id,
            'jenis_id' => $request->jenis_id,
            'jenis_kontrak' => $request->jenis_kontrak,
            'data_sumber_dana' => $request->data_sumber_dana,
            'skpd_id' => $skpd_id,
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'data_tahun' => $request->data_tahun,
            'data_paket_pekerjaan' => $request->data_paket_pekerjaan,
            'data_kode_rekening' => $request->data_kode_rekening,
            'data_hps' => str_replace('.', '', $request->data_hps),
            'pagu_anggaran' => str_replace('.', '', $request->pagu_anggaran),
            'sub_kegiatan' => $request->sub_kegiatan,
            'data_lokasi' => $request->data_lokasi,
            'data_rpelaksanaan_a' => $request->data_rpelaksanaan_a,
            'data_rpelaksanaan_b' => $request->data_rpelaksanaan_b,
            'data_jwaktu_pelaksanaan' => $request->data_jwaktu_pelaksanaan,
            'jns_tahun' => '-',
        ];

        try {
            DB::table('data_pengadaan')->insert($data);
            return Redirect::back()->with(['success' => 'Data Berhasil di Simpan']);
        } catch (\Exception $e) {
            return Redirect::back()->with(['error' => 'Data Gagal di Simpan']);
        }
    }

   

    // Update Permohonan Lelang
    public function permohonanedit(Request $request)
    {
        $data_id = $request->data_id;
        $jenispengadaan = jenis_pengadaan::all();
        $sumberdana = DataSumberDana::all();
        $datapengadaan = DB::table('data_pengadaan')->where('data_id', $data_id)->first();

        return view('skpd.permohonanlelangedit', compact('datapengadaan', 'jenispengadaan', 'sumberdana'));
    }

    
    public function permohonanupdate(Request $request, $data_id)
{
    $skpd_id = Auth::guard('userskpd')->user()->user_id;

    $data = [
        'data_id' => $data_id,
        'jenis_id' => $request->jenis_id,
        'jenis_kontrak' => $request->jenis_kontrak,
        'data_sumber_dana' => $request->data_sumber_dana,
        'skpd_id' => $skpd_id,
        'no_surat' => $request->no_surat,
        'tgl_surat' => $request->tgl_surat,
        'data_tahun' => $request->data_tahun,
        'data_paket_pekerjaan' => $request->data_paket_pekerjaan,
        'data_kode_rekening' => $request->data_kode_rekening,
        'data_hps' => str_replace('.', '', $request->data_hps),
        'pagu_anggaran' => str_replace('.', '', $request->pagu_anggaran),
        'sub_kegiatan' => $request->sub_kegiatan,
        'data_lokasi' => $request->data_lokasi,
        'data_rpelaksanaan_a' => $request->data_rpelaksanaan_a,
        'data_rpelaksanaan_b' => $request->data_rpelaksanaan_b,
        'data_jwaktu_pelaksanaan' => $request->data_jwaktu_pelaksanaan,
        'jns_tahun' => '-',
    ];

    try {
        DB::table('data_pengadaan')->where('data_id', $data_id)->update($data);
        return redirect()->back()->with(['success' => 'Data berhasil diubah']);
    } catch (\Exception $e) {
        return redirect()->back()->with(['error' => 'Data gagal diubah']);
    }
}


    // Hapus Permohonan Lelang
    public function permohonandelete($data_id)
    {
        $delete = DB::table('data_pengadaan')->where('data_id', $data_id)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil di Hapus']);
        } else {
            return Redirect::back()->with(['error' => 'Data Gagal di Hapus']);
        }
    }

//permohonan disposisi
//     public function permohonanDisposisi(Request $request)
// {
//     if (Auth::guard('userulp')->check()) {
//         // Tidak perlu mengambil user_id, karena kita tidak membatasi query
//     } else {
//         return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
//     }

//     // Query untuk menampilkan data dengan sts_disposisi = 1
//     $query = DB::table('user_skpd')
//         ->join('data_pengadaan', 'user_skpd.user_id', '=', 'data_pengadaan.skpd_id')
//         ->join('data_sumber_dana', 'data_pengadaan.data_sumber_dana', '=', 'data_sumber_dana.dana_id')
//         ->join('jenis_kontrak', 'data_pengadaan.jenis_id', '=', 'jenis_kontrak.kontrak_id')
//         ->select(
//             'user_skpd.user_id',
//             'user_skpd.skpd_id',
//             'data_pengadaan.data_id',
//             'data_pengadaan.data_kode_rekening',
//             'data_pengadaan.data_paket_pekerjaan',
//             'data_pengadaan.pagu_anggaran',
//             'data_pengadaan.data_hps',
//             'data_pengadaan.data_jwaktu_pelaksanaan',
//             'data_pengadaan.no_surat',
//             'data_pengadaan.tgl_surat',
//             'data_pengadaan.jns_tahun',
//             'data_pengadaan.data_tahun',
//             DB::raw('GROUP_CONCAT(DISTINCT data_sumber_dana.dana_nama SEPARATOR ", ") as dana_nama'),
//             'jenis_kontrak.kontrak_nama'
//         )
//         ->where('data_pengadaan.sts_disposisi', '1') // Filter berdasarkan sts_disposisi = 1
//         ->groupBy(
//             'user_skpd.user_id',
//             'user_skpd.skpd_id',
//             'data_pengadaan.data_id',
//             'data_pengadaan.data_kode_rekening',
//             'data_pengadaan.data_paket_pekerjaan',
//             'data_pengadaan.pagu_anggaran',
//             'data_pengadaan.data_hps',
//             'data_pengadaan.data_jwaktu_pelaksanaan',
//             'data_pengadaan.no_surat',
//             'data_pengadaan.tgl_surat',
//             'data_pengadaan.jns_tahun',
//             'data_pengadaan.data_tahun',
//             'jenis_kontrak.kontrak_nama'
//         )
//         ->orderBy('data_pengadaan.created_at', 'DESC');

//     $datapengadaan = $query->paginate(10);

//     $jenispengadaan = jenis_pengadaan::all();

//     return view('skpd.permohonanlelangdisposisi', compact('datapengadaan', 'jenispengadaan'));
// }

public function permohonanDisposisi(Request $request)
{
    if (Auth::guard('userulp')->check()) {
        // Tidak perlu mengambil user_id, karena kita tidak membatasi query
    } else {
        return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
    }

    // Memfilter sts_disposisi jika disediakan dari request
    $sts_disposisi = $request->input('sts_disposisi', 1); // Default 1 jika tidak ada input

    // Query dengan filter sts_disposisi
    $query = DB::table('user_skpd')
        ->join('data_pengadaan', 'user_skpd.user_id', '=', 'data_pengadaan.skpd_id')
        ->join('data_sumber_dana', 'data_pengadaan.data_sumber_dana', '=', 'data_sumber_dana.dana_id')
        ->join('jenis_kontrak', 'data_pengadaan.jenis_id', '=', 'jenis_kontrak.kontrak_id')
        ->select(
            'user_skpd.user_id',
            'user_skpd.skpd_id',
            'data_pengadaan.data_id',
            'data_pengadaan.data_kode_rekening',
            'data_pengadaan.data_paket_pekerjaan',
            'data_pengadaan.pagu_anggaran',
            'data_pengadaan.data_hps',
            'data_pengadaan.data_jwaktu_pelaksanaan',
            'data_pengadaan.no_surat',
            'data_pengadaan.tgl_surat',
            'data_pengadaan.jns_tahun',
            'data_pengadaan.data_tahun',
            DB::raw('GROUP_CONCAT(DISTINCT data_sumber_dana.dana_nama SEPARATOR ", ") as dana_nama'),
            'jenis_kontrak.kontrak_nama'
        )
        ->where('data_pengadaan.sts_disposisi', $sts_disposisi) // Filter sts_disposisi
        ->groupBy(
            'user_skpd.user_id',
            'user_skpd.skpd_id',
            'data_pengadaan.data_id',
            'data_pengadaan.data_kode_rekening',
            'data_pengadaan.data_paket_pekerjaan',
            'data_pengadaan.pagu_anggaran',
            'data_pengadaan.data_hps',
            'data_pengadaan.data_jwaktu_pelaksanaan',
            'data_pengadaan.no_surat',
            'data_pengadaan.tgl_surat',
            'data_pengadaan.jns_tahun',
            'data_pengadaan.data_tahun',
            'jenis_kontrak.kontrak_nama'
        )
        ->orderBy('data_pengadaan.created_at', 'DESC');

    $datapengadaan = $query->paginate(10);
    // Ambil data Pokja
    $pokjaList = Pokja::all(); // Ambil semua data Pokja

    $jenispengadaan = jenis_pengadaan::all();

    return view('skpd.permohonanlelangdisposisi', compact('datapengadaan','pokjaList', 'jenispengadaan'));
}

public function getAnggotaByPokja($pokjaId)
{
    // Mengambil anggota berdasarkan id_pokja
    $anggota = Anggota::where('id_pokja', $pokjaId)->get();

    return response()->json($anggota);
}



// public function updateDisposisi($id)
// {
//     // Cari data pengadaan berdasarkan ID
//     $dataPengadaan = DB::table('data_pengadaan')->where('data_id', $id)->first();

//     if ($dataPengadaan) {
//         // Update kolom sts_disposisi menjadi 1
//         DB::table('data_pengadaan')->where('data_id', $id)->update([
//             'sts_disposisi' => 1,
//             'updated_at' => now(),
//         ]);

//         return redirect()->back()->with('success', 'Data berhasil didisposisikan.');
//     } else {
//         return redirect()->back()->with('error', 'Data tidak ditemukan.');
//     }
// }

public function updateDisposisi($id)
{
    // Cari data pengadaan berdasarkan ID
    $dataPengadaan = DB::table('data_pengadaan')->where('data_id', $id)->first();

    if ($dataPengadaan) {
        // Update kolom sts_disposisi menjadi 1
        DB::table('data_pengadaan')->where('data_id', $id)->update([
            'sts_disposisi' => 1, // Pastikan kolom sts_disposisi diset 1
            'updated_at' => now(), // Waktu update
        ]);

        return redirect()->back()->with('success', 'Data berhasil didisposisikan.');
    } else {
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }
}

public function showDisposisiDetail($id)
{
    // Fetch the details of the selected data_pengadaan record
    $dataPengadaan = DB::table('data_pengadaan')
        ->join('user_skpd', 'data_pengadaan.skpd_id', '=', 'user_skpd.skpd_id')
        ->join('data_sumber_dana', 'data_pengadaan.data_sumber_dana', '=', 'data_sumber_dana.dana_id')
        ->join('jenis_kontrak', 'data_pengadaan.jenis_id', '=', 'jenis_kontrak.kontrak_id')
        ->select(
            'data_pengadaan.*',
            'user_skpd.skpd_id',
            'data_sumber_dana.dana_nama',
            'jenis_kontrak.kontrak_nama'
        )
        ->where('data_pengadaan.data_id', $id)
        ->first();

    if (!$dataPengadaan) {
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }

    // Pass the data to the view
    return view('skpd.disposisidetail', compact('dataPengadaan'));
}







    public function skpdlist()
    {
        // $user_id = Auth::guard('userskpd')->user()->user_id;
        $ulp_id = Auth::guard('userulp')->user()->ulp_id;
        $skpdlist = SkpdList::all();
        return view('skpd.skpdlist', compact('skpdlist'));
    }

    public function buatskpdlist()
    {
        Log::info('buatskpdlist method called');
        return view('skpd.buatskpdlist');
    }

    public function storeskpdlist(Request $request)
    {
        // dd($request->all());

        Log::info($request->all());
        $request->validate([
            'skpd_id' => 'required',
            'satker_id' => 'required',
            'skpd_kat_id' => 'required',
            'skpd_kode' => 'required',
            'skpd_nama' => 'required',
            'skpd_inisial' => 'required',
            'skpd_alamat' => 'required',
            'skpd_telp' => 'required',
            'skpd_pimpinan' => 'required',
            'skpd_pimpinan_nip' => 'required',
            'skpd_pengajuan' => 'required',
            'skpd_verifikasi' => 'required',
            'skpd_e_lelang' => 'required',
        ]);

        SkpdList::create($request->all());
        return redirect()->route('skpd.skpdlist')->with('success', 'SKPD created successfully.');
    }

    public function showskpdlist(SkpdList $skpd_list)
    {
        return view('skpd.showskpdlist', compact('skpd_list'));
    }

    public function editskpdlist(SkpdList $skpd_list)
    {
        return view('skpd.editskpdlist', compact('skpd_list'));
    }

   
    public function updateskpdlist(Request $request, SkpdList $skpd_list)
{
    $request->validate([
        'skpd_id' => 'sometimes|required',
        'satker_id' => 'sometimes|required',
        'skpd_kat_id' => 'sometimes|required',
        'skpd_kode' => 'sometimes|required',
        'skpd_nama' => 'sometimes|required',
        'skpd_inisial' => 'sometimes|required',
        'skpd_alamat' => 'sometimes|required',
        'skpd_telp' => 'sometimes|required',
        'skpd_pimpinan' => 'sometimes|required',
        'skpd_pimpinan_nip' => 'sometimes|required',
        'skpd_pengajuan' => 'sometimes|required|integer',
        'skpd_verifikasi' => 'sometimes|required|integer',
        'skpd_e_lelang' => 'sometimes|required|integer',
    ]);

    $data = $request->only(array_keys($request->all()));

    // Convert boolean to integer for fields that should be integers
    if (isset($data['skpd_pengajuan'])) {
        $data['skpd_pengajuan'] = $data['skpd_pengajuan'] ? 1 : 0;
    }
    if (isset($data['skpd_verifikasi'])) {
        $data['skpd_verifikasi'] = $data['skpd_verifikasi'] ? 1 : 0;
    }
    if (isset($data['skpd_e_lelang'])) {
        $data['skpd_e_lelang'] = $data['skpd_e_lelang'] ? 1 : 0;
    }

    $skpd_list->update($data);

    return redirect()->route('skpd.skpdlist')->with('success', 'SKPD updated successfully.');
}


    public function destroyskpdlist(SkpdList $skpd_list)
    {
        $skpd_list->delete();
        return redirect()->route('skpd.skpdlist')->with('success', 'SKPD deleted successfully.');
    }

    public function syaratdokumen()
    {
        $syaratdokumen = SyaratDokumen::all();
        return view('skpd.syaratdokumen', compact('syaratdokumen'));
    }

    public function createsyarat()
    {
        return view('skpd.createsyarat');
    }

    public function storesyarat(Request $request)
    {
        $request->validate([
            'jenis_pengadaan' => 'required|in:pengadaan_barang,jasa_konsultasi,pekerjaan_konstruksi,jasa_lainnya',
            'nama_dokumen' => 'required',
            'keterangan' => 'nullable',
        ]);

        SyaratDokumen::create($request->all());
        return redirect()->route('skpd.syaratdokumen')->with('success', 'Dokumen berhasil ditambahkan.');
    }

    public function showsyarat(SyaratDokumen $syaratdokumen)
    {
        return view('skpd.showsyarat', compact('syaratdokumen'));
    }

    public function editsyarat(SyaratDokumen $syaratdokumen)
    {
        return view('skpd.editsyarat', compact('syaratdokumen'));
    }

    
    public function updatesyarat(Request $request, SyaratDokumen $syaratdokumen)
    {
        $request->validate([
            'jenis_pengadaan' => 'required|in:pengadaan_barang,jasa_konsultasi,pekerjaan_konstruksi,jasa_lainnya',
            'nama_dokumen' => 'required',
            'keterangan' => 'nullable',
        ]);

        $syaratdokumen->update($request->all());
        return redirect()->route('skpd.syaratdokumen')->with('success', 'Dokumen berhasil diupdate.');
    }



    public function destroysyarat(SyaratDokumen $syaratdokumen)
    {
        $syaratdokumen->delete();
        return redirect()->route('skpd.syaratdokumen')->with('success', 'Dokumen berhasil dihapus.');
    }


public function pokja()
    {
        $pokja = Pokja::with('anggota')->get();
        return view('skpd.pokja', compact('pokja'));
    }

    public function createPokja()
    {
        return view('skpd.createPokja');
    }

    public function storePokja(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'no_sk' => 'required',
            'handphone' => 'required',
            'email' => 'required|email|unique:pokja,email',
        ]);

        Pokja::create($request->all());

        return redirect()->route('skpd.pokja')->with('success', 'Pokja created successfully.');
    }

    public function showPokja(Pokja $pokja)
    {
        $pokja->load('anggota');
        return view('skpd.showPokja', compact('pokja'));
    }

    public function editPokja(Pokja $pokja)
    {
        return view('skpd.editPokja', compact('pokja'));
    }

    public function updatePokja(Request $request, $id_pokja)
    {
        $pokja = Pokja::findOrFail($id_pokja);

        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'no_sk' => 'required',
            'handphone' => 'required',
            'email' => 'required|email|unique:pokja,email,' . $id_pokja . ',id_pokja',
        ]);

        $pokja->update($request->all());

        return redirect()->route('skpd.pokja')->with('success', 'Pokja updated successfully.');
    }

    public function destroyPokja(Pokja $pokja)
    {
        $pokja->delete();

        return redirect()->route('skpd.pokja')->with('success', 'Pokja deleted successfully.');
    }

    public function createAnggota(Pokja $pokja)
    {
        return view('skpd.createAnggota', compact('pokja'));
    }

   public function editAnggota($id_anggota)
{
    $anggota = Anggota::findOrFail($id_anggota);
    $pokja = $anggota->pokja; // Mengambil pokja terkait dengan anggota

    return view('skpd.editAnggota', compact('anggota', 'pokja'));
}

    // Method untuk menyimpan anggota baru
    public function storeAnggota(Request $request, Pokja $pokja)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'password' => 'required|min:6',
            'jabatan' => 'required',
            'no_sk' => 'required',
            'handphone' => 'required',
            'email' => 'required|email|unique:anggota,email',
            'status' => 'required|in:0,1',
            'rule' => 'required|in:0,1,2,3',
        ]);

        $anggota = new Anggota([
            'nip' => $request->input('nip'),
            'nama' => $request->input('nama'),
            'password' => Hash::make($request->input('password')), // Hashing password
            'jabatan' => $request->input('jabatan'),
            'no_sk' => $request->input('no_sk'),
            'handphone' => $request->input('handphone'),
            'email' => $request->input('email'),
            'status' => $request->input('status'),
            'rule' => $request->input('rule'),
        ]);

        $anggota->id_pokja = $pokja->id_pokja;
        $anggota->save();

        return redirect()->route('skpd.showPokja', $pokja->id_pokja)->with('success', 'Anggota added successfully.');
    }

    // Method untuk mengupdate data anggota
    public function updateAnggota(Request $request, $id_anggota)
    {
        $anggota = Anggota::findOrFail($id_anggota);

        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'no_sk' => 'required',
            'handphone' => 'required',
            'email' => 'required|email|unique:anggota,email,' . $id_anggota . ',id_anggota',
            'status' => 'required|in:0,1',
            'rule' => 'required|in:0,1,2,3',
        ]);

        $anggota->nip = $request->input('nip');
        $anggota->nama = $request->input('nama');
        $anggota->jabatan = $request->input('jabatan');
        $anggota->no_sk = $request->input('no_sk');
        $anggota->handphone = $request->input('handphone');
        $anggota->email = $request->input('email');
        $anggota->status = $request->input('status');
        $anggota->rule = $request->input('rule');

        // Update password jika diisi
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'nullable|min:6',
            ]);
            $anggota->password = Hash::make($request->input('password'));
        }

        $anggota->save();

        // return redirect()->route('skpd.showPokja', $anggota->id_pokja)->with('success', 'Anggota updated successfully.');
        return redirect()->route('skpd.showAnggota', $anggota->id_pokja)
                     ->with('success', 'Anggota updated successfully.');
    }

  public function showAnggota($pokjaId)
{
    $pokja = Pokja::with('anggota')->findOrFail($pokjaId);
    return view('skpd.showAnggota', compact('pokja'));
}

public function destroyAnggota($id_anggota)
{
    $anggota = Anggota::findOrFail($id_anggota);

    // Menghapus anggota
    $anggota->delete();

    // Redirect kembali ke halaman yang sesuai dengan pesan sukses
    return redirect()->route('skpd.showPokja', $anggota->id_pokja)->with('success', 'Anggota deleted successfully.');
}

// coba
 
    

}