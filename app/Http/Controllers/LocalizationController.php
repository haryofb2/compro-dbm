<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function switch($language = ''){

        request()->session()->put('locale', $language);

        // Arahkan ke halaman sebelumnya.
        return redirect()->back();
    }
}
