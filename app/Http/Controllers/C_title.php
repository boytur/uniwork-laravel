<?php

namespace App\Http\Controllers;

use App\Models\M_titles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class C_title extends Controller
{
    public function index(){

        $data['titles'] = M_titles::all();
        return view('titles.index', $data);
    }

    public function create(){

    }

    public function store(Request $request){
        $tit_name = $request->input('tit_name');
        $tit_is_active = $request->input('tit_is_active');

        if($tit_is_active == "on"){
            $tit_is_active = 1;
        }
        else{
            $tit_is_active = 0;
        }

        $m_title = new M_titles;
        $m_title -> tit_name = $tit_name;
        $m_title -> tit_is_active = $tit_is_active;
        $m_title -> save();

        return Redirect::to('/title');

    }
}
