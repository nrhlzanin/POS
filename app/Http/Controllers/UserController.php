<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ]);
        $user->username = 'manager12';

        $user->save();

        $wasChanged = $user->wasChanged(); // true
        $wasUsernameChanged = $user->wasChanged('username'); // true
        $wasFieldsChanged = $user->wasChanged(['username', 'level_id']); // true
        $wasNamaChanged = $user->wasChanged('nama'); // false
        
        dd($wasChanged, $wasUsernameChanged, $wasFieldsChanged, $wasNamaChanged);
    }
}
