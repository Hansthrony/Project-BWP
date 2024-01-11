<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\Users;
use App\Models\library;
use App\Models\listnonbuku;
use App\Models\NonBuku;
use App\Models\trans_saldo;
use App\Models\buku_trans;
use App\Models\nonbuku_trans;
use App\Models\Transaksi;
use App\Models\cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DateTime;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    // Untuk test, semua data tidak masuk db untuk tidak merusak struktur, data dimasukkan kedalam temp array
    public function lihatSemuaUser()
    {
        $users = Users::all();
        return response()->json(['status' => 200,'users' => $users], 200);
    }

    public function tesAddUser(Request $request)
    {
        $data = [];
        $email = $request->input("txtEmail");
        $nama = $request->input("txtNama");
        $username = $request->input("txtUsername");
        $pass = $request->input("txtPass");
        $cpass = $request->input("txtCpass");
        $date = $request->input("txtDate");
        $roles = $request->input("cbRole");
        if($pass != $cpass)
        {
            return response()->json(['status' => 400, 'message' => 'Konfirmasi Password Tidak Sama'],400);
        }
        else 
        {
            if(blank($email) || blank($nama) || blank($username) || blank($pass) || blank($cpass) || blank($date))
            {
                return response()->json(['status' => 400, 'message' => 'Terdapat field yang kosong'],400);
            }
            else 
            {
                $cust = Users::where('username','LIKE', '%' . $username . '%')->first();
                if($cust)
                {
                    return response()->json(['status' => 400, 'message' => 'Username Udah Ada'],400);
                }
                else 
                {
                    $user = new users();
                    $user->email = $email;
                    $user->nama = $nama;
                    $user->username = $username;
                    $user->password = bcrypt($pass);
                    $user->tgl_lahir = $date;
                    $user->users_id_role = $roles;
                    if($roles == 2)
                    {

                        $user->status = "-";
                    }
                    else 
                    {
                        $user->status = "active";
                    }
                    $user->saldo = 0;
                    $data = $user;
                    return response()->json(['status' => 201, "data" => $data],201);
                }
            }
        }
    }

    public function tesLogin(Request $request)
    {
        $data = [];
    }
}
