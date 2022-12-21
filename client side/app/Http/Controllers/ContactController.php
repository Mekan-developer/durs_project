<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Products;

class ContactController extends Controller
{

    public function index(){
        return response()->redirectTo('/tm');
    }


    public function show(request $req){
        $locale = app()->getLocale();
        $products = Products::select(['id','categories','btn_color','images','ady_'.$locale,'sarp_edilisi_'.$locale,'ulanys_hasiyetleri_'.$locale])->get();
        $ady = 'ady_'.$locale; $sarpEdilis = 'sarp_edilisi_'.$locale; $ulanys = 'ulanys_hasiyetleri_'.$locale;
        return view('index',compact('products','ady','sarpEdilis','ulanys'));
    }

    public function store(Request $request){

        Contact::create($request->all());
        return response()->redirectTo('/tm');
    }
}
