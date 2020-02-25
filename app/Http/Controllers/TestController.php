<?php

namespace App\Http\Controllers;

use App\Test;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(User $user)

    {
        $user = User::all();
        return view('test.test', compact('user'));

    }
    public function show()

    {

        $tests = Test::all();



        return view('test.show', compact('tests'));

    }


    public function create(Request $request)
    {

        $data = request()->validate([
            'nome'=>'required',
            'sobrenome'=>'required',

        ]);

        $test = new Test();

        $test->nome = $request->nome;
        $test->sobrenome = $request->sobrenome;

        $test->save();



        return redirect('test.show');

    }
}
