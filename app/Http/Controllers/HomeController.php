<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

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
        $users=DB::table('users')->get();
        return view('home',["users"=>$users]);
    }
    /**
     * Brisanje korisnika iz baze podataka
     */
    public function delete($id)
    {
        DB::table("users")->where("id",$id)->delete();
        return redirect("/");
    }
}
