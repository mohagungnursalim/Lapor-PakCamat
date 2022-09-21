<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aduan;
use Alert;
class AduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome',[
            "title" => "Lapor PakGub | Home"
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // store data from front kontak
     public function store(Aduan $aduan,Request $request)
     {
          
         $validatedData = $request->validate([
 
             'email' => 'required|email',
             'name' => 'required',
             'pesan'=> 'required|min:5',
        ],[
            'email.required' => 'Email wajib di isi!',
            'email.email' => 'Harus memakai email yang valid',
            'name.required' => 'Nama wajib di isi!',
            'pesan.required' => 'Pesan wajib di isi!',
            'pesan.min' => 'Pesan harus lebih dari 10 karakter'
        ]
    );
        
 
       $aduan::create($validatedData);
    
       $request->session(Alert::success('success', 'Pesan berhasil terkirim,akan segera kami proses!'));
        return redirect('/');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aduan = Aduan::find($id);
            if (is_null($aduan)) 
            {
                return $this->sendError('Data tidak ditemukan.');
            }

                return response()->json([
                "success" => true,
                "message" => "Aduan berhasil di ambil.",
                "data" => $aduan
                ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
