<?php

namespace App\Http\Controllers;

use App\Models\UserSkpd;
use App\Models\SkpdList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserSkpdController extends Controller
{
    /**
     * Menampilkan daftar pengguna untuk SKPD tertentu.
     */
    public function index($skpd_id)
    {
        $skpd = SkpdList::findOrFail($skpd_id);
        $users = $skpd->users()->get();
        return view('user_skpd.index', compact('skpd', 'users'));
    }

    /**
     * Menampilkan form untuk membuat pengguna baru.
     */
    public function create($skpd_id)
    {
        $skpd = SkpdList::findOrFail($skpd_id);
        return view('user_skpd.create', compact('skpd'));
    }

    /**
     * Menyimpan pengguna baru ke database.
     */
    public function store(Request $request, $skpd_id)
    {
        $skpd = SkpdList::findOrFail($skpd_id);

        $request->validate([
            'user_nip' => 'required|unique:user_skpd,user_nip',
            'user_usernm' => 'required|unique:user_skpd,user_usernm',
            'password' => 'required|min:6|confirmed',
            'user_email' => 'required|email|unique:user_skpd,user_email',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        UserSkpd::create([
            'skpd_id' => $skpd->skpd_id,
            'user_nip' => $request->user_nip,
            'user_usernm' => $request->user_usernm,
            'password' => Hash::make($request->password),
            'user_email' => $request->user_email,
            'user_nama' => $request->user_nama,
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp,
            'user_status' => $request->user_status,
            'user_rule' => $request->user_rule,
            // Isi field lain jika ada
        ]);

        return redirect()->route('skpd.users.index', $skpd_id)->with('success', 'User SKPD berhasil dibuat.');
    }

    /**
     * Menampilkan detail pengguna.
     */
    public function show($skpd_id, $user_id)
    {
        $skpd = SkpdList::findOrFail($skpd_id);
        $user = UserSkpd::where('skpd_id', $skpd_id)->findOrFail($user_id);
        return view('user_skpd.show', compact('skpd', 'user'));
    }

    /**
     * Menampilkan form untuk mengedit pengguna.
     */
    public function edit($skpd_id, $user_id)
    {
        $skpd = SkpdList::findOrFail($skpd_id);
        $user = UserSkpd::where('skpd_id', $skpd_id)->findOrFail($user_id);
        return view('user_skpd.edit', compact('skpd', 'user'));
    }

    /**
     * Memperbarui data pengguna di database.
     */
    public function update(Request $request, $skpd_id, $user_id)
    {
        $skpd = SkpdList::findOrFail($skpd_id);
        $user = UserSkpd::where('skpd_id', $skpd_id)->findOrFail($user_id);

        $request->validate([
            'user_nip' => 'required|unique:user_skpd,user_nip,' . $user_id . ',user_id',
            'user_usernm' => 'required|unique:user_skpd,user_usernm,' . $user_id . ',user_id',
            'password' => 'nullable|min:6|confirmed',
            'user_email' => 'required|email|unique:user_skpd,user_email,' . $user_id . ',user_id',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        $user->user_nip = $request->user_nip;
        $user->user_usernm = $request->user_usernm;
        $user->user_email = $request->user_email;
        $user->user_nama = $request->user_nama;
        $user->user_alamat = $request->user_alamat;
        $user->user_hp = $request->user_hp;
        $user->user_status = $request->user_status;
        $user->user_rule = $request->user_rule;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('skpd.users.index', $skpd_id)->with('success', 'User SKPD berhasil diperbarui.');
    }

    /**
     * Menghapus pengguna dari database.
     */
    public function destroy($skpd_id, $user_id)
    {
        $user = UserSkpd::where('skpd_id', $skpd_id)->findOrFail($user_id);
        $user->delete();

        return redirect()->route('skpd.users.index', $skpd_id)->with('success', 'User SKPD berhasil dihapus.');
    }
}
