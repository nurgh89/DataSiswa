<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function home()
    {
        return view('/home');
    }

    public function about()
    {
        $nama = 'Nurhayati';
        return view('/about', ['nama' => $nama]);
    }

    public function mahasiswa()
    {
        return view('/mahasiswa');
    }
    
    public function contact_us()
    {
        return view('/contact_us');
    }

}