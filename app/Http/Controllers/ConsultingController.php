<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultingController
{
    public function index() {
        return view('consulting-services');
    }
}
