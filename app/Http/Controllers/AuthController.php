<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // // Proses Login SKPD
    public function proseslogin(Request $request){
        // if(Auth::guard('userskpd')->attempt(['user_nip' => $request->user_nip, 'password' => $request->password])) {
        if(Auth::guard('userulp')->attempt(['ulp_nip' => $request->ulp_nip, 'password' => $request->password])) {
       
            return redirect('/ulp/dashboard');
        } else {
           
            return redirect('/loginskpd')->with(['warning' => 'NIP / Password Tidak Terdaftar!']);
        }
    }



    // Proses Logout Siswa
    public function proseslogout(){
        // if(Auth::guard('userskpd')->check()){
        // Auth::guard('userskpd')->logout();
        if(Auth::guard('userulp')->check()){
        Auth::guard('userulp')->logout();
         return redirect('/loginulp');
       
        }
    }
}


