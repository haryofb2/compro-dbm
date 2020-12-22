<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $master = Menu::where('category','1')->get();
        $trans = Menu::where('category','2')->get();
        $menu = Menu::where('category','3')->get();
        return view('backend.dashboard.home',[
        //     'div' => $div,
        //     'pos' => $pos,
        //     'emp' => $emp,
            'master' => $master,
            'trans' => $trans,
            'menu' => $menu,
        ]);
        // return view('backend.dashboard.home');
    }

    // function switch ($language = '') {
    //     // Simpan locale ke session.
    //     request()->session()->put('locale', $language);

    //     // Arahkan ke halaman sebelumnya.
    //     return redirect()->back();
    //   }
}