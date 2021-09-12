<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '[2031710017] Eva Monika Septiana';
    }

    public function articles($id){
        return 'Halaman Artikel dengan id'.$id;
    }
}
