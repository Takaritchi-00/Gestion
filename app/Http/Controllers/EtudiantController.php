<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index(){
        $list = Etudiant::all();
        return view('listetu',['list'=>$list]);
    }
}
