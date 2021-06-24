<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home($name)
    {
        return "Salam Chemen !".$name;
    }

    public function index()
    {
        $maglumat = 'Ashgabat';
        return view('index',compact('maglumat'));
    }



    // upload file start

    public function upload()
    {
        return view('upload');
    }

    public function uploadFile(Request $req)
    {
        $rrr = $req->file->store('public');
       dd($rrr);
        // return back();

        // dd($req->file);


        // $path=$req->file('file')->store('/','public');
        
        //     return $path;

        // $bir=$req->file;
        // return $bir;
        
    }

    // upload file end
}
