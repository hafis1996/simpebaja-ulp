<?php

namespace App\Http\Controllers;

use App\Models\UserUlp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserUlpController extends Controller
{
    //
public function create()
    {
        return view('skpd.user_ulp');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'ulp_id' => 'required|string|max:255|unique:users_ulp',
            'ulp_nip' => 'nullable|string|max:50',
            'ulp_nama' => 'nullable|string|max:50',
            'ulp_alamat' => 'nullable|string',
            'ulp_email' => 'nullable|string|email|max:100',
            'ulp_hp' => 'nullable|string|max:20',
            'ulp_username' => 'nullable|string|max:255',
            'ulp_password' => 'required|string|min:8|confirmed',
            'level' => 'required|string|in:superadmin,admin',
        ]);

        $userUlp = new UserUlp;
        // $userUlp->ulp_id = $request->ulp_id;
        $userUlp->ulp_nip = $request->ulp_nip;
        $userUlp->ulp_nama = $request->ulp_nama;
        $userUlp->ulp_alamat = $request->ulp_alamat;
        $userUlp->ulp_email = $request->ulp_email;
        $userUlp->ulp_hp = $request->ulp_hp;
        $userUlp->ulp_username = $request->ulp_username;
        $userUlp->ulp_password = Hash::make($request->ulp_password);
        $userUlp->level = $request->level;
        $userUlp->save();

        return redirect()->route('store')->with('success', 'User ULP created successfully.');
    }
public function show($id)
    {
        $userUlp = UserUlp::findOrFail($id);
        return view('skpd.user_ulp.show', compact('userUlp'));
    }

    public function edit($id)
    {
        $userUlp = UserUlp::findOrFail($id);
        return view('skpd.user_ulp.edit', compact('userUlp'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ulp_nip' => 'nullable|string|max:50',
            'ulp_nama' => 'nullable|string|max:50',
            'ulp_alamat' => 'nullable|string',
            'ulp_email' => 'nullable|string|email|max:100',
            'ulp_hp' => 'nullable|string|max:20',
            'ulp_username' => 'nullable|string|max:255',
            'ulp_password' => 'nullable|string|min:8|confirmed',
            'level' => 'required|string|in:superadmin,admin',
        ]);

        $userUlp = UserUlp::findOrFail($id);
        $userUlp->ulp_nip = $request->ulp_nip;
        $userUlp->ulp_nama = $request->ulp_nama;
        $userUlp->ulp_alamat = $request->ulp_alamat;
        $userUlp->ulp_email = $request->ulp_email;
        $userUlp->ulp_hp = $request->ulp_hp;
        $userUlp->ulp_username = $request->ulp_username;

        if ($request->ulp_password) {
            $userUlp->ulp_password = Hash::make($request->ulp_password);
        }

        $userUlp->level = $request->level;
        $userUlp->save();

        return redirect()->route('show', $userUlp->ulp_id)->with('success', 'User ULP updated successfully.');
    }

    public function destroy($id)
    {
        $userUlp = UserUlp::findOrFail($id);
        $userUlp->delete();

        return redirect()->route('create')->with('success', 'User ULP deleted successfully.');
    }

}
 