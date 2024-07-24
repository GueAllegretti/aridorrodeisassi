<?php

namespace App\Http\Controllers;

use App\Mail\ThankYouMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function index(){
        return view('index');
    }

    public function casa() {
        return view ('casa');
    }

    public function escursioni() {
        return view ('escursioni');
    }

    public function posizione() {
        return view ('posizione');
    }

    public function contact() {
        return view ('contact');
    }

    public function cookies() {
        return view ('cookies');
    }
}
