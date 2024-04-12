<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{

    public function contact()
    {
        return view('frontend.contact');
    }

    public function services()
    {
        return view('frontend.service');
    }

    public function telecom_infrastructure()
    {
        return view('frontend.telecom_infrastructure');
    }

    public function construction()
    {
        return view('frontend.construction');
    }

    public function Audio()
    {
        return view('frontend.Audio');
    }

    public function biomedical()
    {
        return view('frontend.biomedical');
    }
}
