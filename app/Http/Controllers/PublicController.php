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
        $works = [
            [
                'id' => 1, 
                'title' => 'Lorem1', 
                'alt' => 'Lorem', 
                'img' => '/img/place.png'
            ],
            [
                'id' => 2, 
                'title' => 'Lorem2', 
                'alt' => 'Lorem', 
                'img' => '/img/place.png'
            ],
            [
                'id' => 3, 
                'title' => 'Lorem3', 
                'alt' => 'Lorem', 
                'img' => '/img/place.png'
            ]
        ];
        return view ('escursioni', ['works' => $works]);
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
