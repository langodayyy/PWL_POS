<?php

namespace App\Http\Controllers;
use App\Models\UserModel;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data = [ //tambah data user dengan Eloquent Model
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);
        //ambil semua data user
        $user = UserModel::all();
        //tampilkan ke view user
        return view('user',['data'=>$user]);
    }
}
