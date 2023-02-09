<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dvd;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homepage');
    }

    public function create()
    {
        return view('customer.create_order');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
            'berat' => 'nullable',
            'layanan' => 'nullable'
        ]);

        $order = Dvd::create([
            'nama' => $validatedData['nama'],
            'nomor' => $validatedData['nomor'],
            'alamat' => $validatedData['alamat'],
            'layanan' => $validatedData['layanan']
        ]);

        if ($order) {
            return redirect('/')
                ->with([
                    'berhasil' => 'Data order berhasil disimpan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Data order gagal disimpan, mohon coba lagi'
                ]);
        }
    }

    public function listdvd()
    {
        return view('listdvd');
    }


    public function about()
    {
        return view('about');
    }
}
