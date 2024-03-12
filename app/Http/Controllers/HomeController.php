<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        if ($user->hasRole('Admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('Guru')) {
            return redirect()->route('guru.dashboard');
        }elseif ($user->hasRole('Siswa')) {
            return redirect()->route('siswa.index');
        } else {
            return view('home');
        }
    }

    public function adminHome()
    {
        return view('admin.dashboard');
    }

    /**
     * Menampilkan halaman rumah untuk manager.
     *
     * @return \Illuminate\View\View
     */
    public function guruHome()
    {
        return view('guru.dashboard');
    }

    public function siswaHome()
    {
        return view('siswa.index');
    }
}
