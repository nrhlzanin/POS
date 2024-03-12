<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        // //tambah data user dengan Eloquent Model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data); //tambahkan data ke tabel m_user

        //tambah data user dengan Eloquent Model
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data); //update data user

        // //coba akses model UserModel
        // $user = UserModel::all(); //ambil semua data dari tabel m_user

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data); //update data user
        
        // J4 1.1 Langkah 2
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager 2',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // J4 1.1 Langkah 4
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();

        // j4 2.1 Langkah 1
        // $user = UserModel::find(1);

        // j4 2.1 Langkah 4
        // $user = UserModel::where('level_id', 1)->first();

        // j4 2.1 Langkah 6
        // $user = UserModel::firstwhere('level_id', 1)->first();

        // j4 2.1 Langkah 8
        // $user = UserModel::findOr(1, ['username', 'nama'], function() {
        //     abort(404);
        // });

        // j4 2.1 Langkah 10
        // $user = UserModel::findOr(20, ['username', 'nama'], function() {
        //     abort(404);
        // });

        // j4 2.2 Langkah 1
        $user = UserModel::findOrFail(1);

        // j4 2.2 Langkah 3
        $user = UserModel::where('username', 'manager9')->firstOrFail();

        return view('user', ['data' => $user]);
    }
}
