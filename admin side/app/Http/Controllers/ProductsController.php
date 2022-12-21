<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index(){
       return response()->redirectTo('/index?get=messages');
    }

    public function show(){
        $mails = DB::table('Contacts')->get();
        return view('index',['messages'=>$mails]);
    }

    // public function pract(){
    //     return view('addProduct');
    // }

    public function create(request $request){

        $request->validate([
            'btn_color' => ['nullable'],
            'images'=> ['nullable','mimes:jpg,jpeg,png,gif','max:2048'],
            'ady_TM' => ['required'],
            'sarp_edilisi_TM' => ['required'],
            'ulanys_hasiyetleri_TM' => ['required']
        ]);

        $imgPath = null;
        if ($request->hasFile('images')){
            $rand_str = Str::random(8);
            $imgPath = $request->file('images')->storeAs(
                'admin_bedreler',
                $rand_str . '.' . $request->file('images')->getClientOriginalExtension(),
                'common',

            );
        }
        $_POST['images'] = $imgPath;
        $product = new products();
        $product->create($_POST);
        return response()->redirectTo('/index?get=add_product');
    }
}



