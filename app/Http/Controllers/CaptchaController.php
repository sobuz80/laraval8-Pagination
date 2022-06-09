<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function index()

    {
        return view('index');
    }

    public function capthcaFormValidate(Request $request)

    {
        $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'captcha' => 'required|captcha'

        ]);
    }

    public function reloadCaptcha()

    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}
