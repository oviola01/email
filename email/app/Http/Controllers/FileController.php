<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
   {
       return view('fileUpload'); //resources/views mappán belül keres, lehetne mappa.almappa.fileupload is
   }

    //megadjuk, milyen formátumokat fogadunk el, és a max fájlméretet (a mértékegység kb-ban értendő):
    public function store(Request $request)
        {
        $request->validate([
            'file' => 'required|mimes:txt,pdf,xlx,csv|max:2048',
        ]);
   	//ha eredeti nevét megtartanád, a jobb oldalon legyen:
        $fileName = $request->file->getClientOriginalName();
        //$fileName = time().'.'.$request->file->extension();  

        $request->file->move(public_path('uploads'), $fileName); //itt adom meg, hova mentsen


        /*  
            Write Code Here for
            Store $fileName name in DATABASE from HERE
        */
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file', $fileName);


    }

}
