<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Sheet;
use App\Song;

class SheetsController extends Controller
{
    // public function sheet_select($id){
    //     $sheet = Sheet::find($id);
    //     $songs = Sheet::find($id)->songs();

    //     return view('sheets.sheet_confirm',['sheet' => $sheet,'songs'=> $songs]);

    // }
   
    public function sheet_confirm(){
        $sheet = Sheet::latest()->first();
        $songs = Sheet::find(1)->songs();
        
        return view('sheets.sheet_confirm',['sheet' => $sheet,'songs'=> $songs]);
    }



    public function profile(){
        $auths = Auth::user();
        return view('profile.profile',[ 'auths' => $auths ]);


    }

    public function profile_edit(){
        $auths = Auth::user();
        return view('profile.profile_edit',[ 'auths' => $auths ]);


    }
    
}
