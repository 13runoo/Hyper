<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'firstname' => 'required|string:min3',
                'lastname' => 'required|string|min:3',
                'email' => 'required|string|min:3',
                'number' => 'required|string|min:3',
                'password' => 'required|string|min:1',
                'confirmPassword' => 'required|string|min:1',

            ]
        );
        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }
        // Salvar no banco de dados
        User::create($request->all());
        return redirect()->route('board');
    }

    public function Home()
    {
        return view("home");
    }
    public function index()
    {
        $users = User::all();
        return view('listaUsuarios',compact('users'));
    }

    public function destroy(int $id)
{
 $users = User::findOrFail($id);
 $users->delete();
 return redirect()->route('user.index');
}

}
