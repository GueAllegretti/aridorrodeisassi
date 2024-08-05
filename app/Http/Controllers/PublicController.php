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
        $fotoCamere = [
            ['id' => 1, 'alt' => 'camera-1', 'img' => '/img/camera-1.webp'],
            ['id' => 2, 'alt' => 'camera-2', 'img' => '/img/camera-2.webp'],
            ['id' => 3, 'alt' => 'camera-3', 'img' => '/img/camera-3.webp'],
            ['id' => 4, 'alt' => 'camera-4', 'img' => '/img/camera-4.webp'],
            ['id' => 5, 'alt' => 'camera-5', 'img' => '/img/camera-5.webp']
        ];
    
        $fotoCucina = [
            ['id' => 1, 'alt' => 'cucina-1', 'img' => '/img/cucina-1.webp'],
            ['id' => 2, 'alt' => 'cucina-2', 'img' => '/img/cucina-2.webp'],
            ['id' => 3, 'alt' => 'cucina-3', 'img' => '/img/cucina-3.webp'],
            ['id' => 4, 'alt' => 'cucina-4', 'img' => '/img/cucina-4.webp']
        ];
    
        $fotoBagno = [
            ['id' => 1, 'alt' => 'bagno-1', 'img' => '/img/bagno-1.webp'],
            ['id' => 2, 'alt' => 'bagno-2', 'img' => '/img/bagno-2.webp'],
            ['id' => 3, 'alt' => 'bagno-3', 'img' => '/img/bagno-3.webp']
        ];

        $fotoEsterno = [
            ['id' => 1, 'alt' => 'Esterno-1', 'img' => '/img/Esterno-1.webp'],
            ['id' => 2, 'alt' => 'Esterno-2', 'img' => '/img/Esterno-2.webp'],
            ['id' => 3, 'alt' => 'Esterno-3', 'img' => '/img/Esterno-3.webp']
        ];
    
        $data = [
            'fotoCamere' => $fotoCamere,
            'fotoCucina' => $fotoCucina,
            'fotoBagno' => $fotoBagno,
            'fotoEsterno' => $fotoEsterno
        ];
    
        return view('casa', $data);
    }

    public function escursioni() {
        $works = [
            [
                'id' => 1, 
                'title' => 'Cammino materano', 
                'alt' => 'Cammino_materano', 
                'img' => '/img/tour-1.jpg'
            ],
            [
                'id' => 2, 
                'title' => 'Chiese rupestri', 
                'alt' => 'Chiese_rupestri', 
                'img' => '/img/tour-2.jpeg'
            ],
            [
                'id' => 3, 
                'title' => 'Cammino materano', 
                'alt' => 'Cammino_materano', 
                'img' => '/img/tour-3.jpg'
            ]
        ];
        return view ('escursioni', ['works' => $works]);
    }

    public function contact() {
        return view ('contact');
    }

    public function cookies() {
        return view ('cookies');
    }

    public function locale($locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
