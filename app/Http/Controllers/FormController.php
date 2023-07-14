<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __construct()
    {
    }

    public function single()
    {
        return view('form-single');
    }

    public function multiple()
    {
        return view('form-multiple');
    }

    public function storeSingle(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => ['required', 'max:100'],
                'email' => ['required', 'max:100'],
                'password' => ['required', 'min:6', 'confirmed'],
            ]
        );

        return redirect()->route('form-single')->with('success', 'User sukses disimpan.');
    }

    public function storeMultiple(Request $request)
    {
        // indetify form
        $form = $request->user;

        // errorbag
        $validator = Validator::make(
            $request->input(),
            [
                'name' => ['required', 'min:3', 'max:100'],
                'email' => ['required', 'max:100'],
                'password' => ['required', 'min:6', 'confirmed'],
            ]

        );

        if ($validator->fails()) {
            return redirect('form-multiple')->withErrors($validator, $form)->withInput();
        }

        return redirect('form-multiple')->with('success', 'User sukses disimpan.');
    }
}
