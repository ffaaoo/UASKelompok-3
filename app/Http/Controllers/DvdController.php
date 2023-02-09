<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dvd;
use App\Models\Harga;
use Illuminate\Support\Facades\DB;
use PDF;

class DvdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataOrder = Dvd::all();
        return view('admin.index', compact('dataOrder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
            'layanan' => 'nullable'
        ]);

        $order = Dvd::create([
            'nama' => $validatedData['nama'],
            'nomor' => $validatedData['nomor'],
            'alamat' => $validatedData['alamat'],
            'layanan' => $validatedData['layanan']
        ]);

        if ($order) {
            return redirect()
                ->route('order.index')
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Dvd::findOrFail($id);
        return view('admin.edit_order', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
            'layanan' => 'nullable'
        ]);

        $order = Dvd::findOrFail($id);
        $order->update([
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'alamat' => $request->alamat,
            'layanan' => $request->layanan
        ]);

        if ($order) {
            return redirect()
                ->route('order.index')
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Dvd::findOrFail($id);
        $order->delete();

        if ($order) {
            return redirect()
                ->back()->with('message', 'Order berhasil dihapus !');
        } else {
            return redirect()
                ->back()->with('message', 'Order gagal dihapus !');
        }
    }



    // public function createPDF() {
    //     // retreive all records from db
    //     $data = Dvd::all();
    //     // share data to view
    //     view()->share('dataOrder',$data);
    //     $pdf = PDF::loadView('pdf_view', $data);
    //     // download PDF file with download method
    //     return $pdf->download('pdf_file.pdf');
    //   }
}
