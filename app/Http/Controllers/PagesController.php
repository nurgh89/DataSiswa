<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('/home');
    }

    public function about()
    {
        $nama = 'Nurhayati';
        return view('/about', ['nama' => $nama]);
    }
    
    public function contact_us()
    {
        return view('/contact_us');
    }

}
