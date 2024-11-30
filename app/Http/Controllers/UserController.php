<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function create($name, $phone, $pin)
    {
        $user = User::create([
            'name' => $name,
            'phone' => $phone,
            'pin' => $pin
        ]);
        return $user;
    }
    
    public function update($name, $phone, $pin, $id)
    {

        $user = User::find($id);
        $user->update([
            'name' => $name,
            'phone' => $phone,
            'pin' => $pin
        ]);
        return $user;
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return "user deleted";
    }
}
