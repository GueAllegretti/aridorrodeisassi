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
            [
                'id' => 1, 
                'alt' => 'camera-1', 
                'img' => '/img/camera-1.webp'
            ],
            [
                'id' => 2, 
                'alt' => 'camera-2', 
                'img' => '/img/camera-2.webp'
            ],
            [
                'id' => 3, 
                'alt' => 'camera-3', 
                'img' => '/img/camera-3.webp'
            ],
            [
                'id' => 4, 
                'alt' => 'camera-3', 
                'img' => '/img/camera-4.webp'
            ]
            ];

            $fotoCucina = [
                [
                    'id' => 5, 
                    'alt' => 'cucina-1', 
                    'img' => '/img/cucina-1.webp'
                ],
                [
                    'id' => 6, 
                    'alt' => 'cucina-2', 
                    'img' => '/img/cucina-2.webp'
                ],
                [
                    'id' => 6, 
                    'alt' => 'cucina-3', 
                    'img' => '/img/cucina-3.webp'
                ]
                ];
        return view ('casa', ['fotoCamere' => $fotoCamere], ['fotoCucina' => $fotoCucina]);
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

    public function contact() {
        return view ('contact');
    }

    public function cookies() {
        return view ('cookies');
    }
}
