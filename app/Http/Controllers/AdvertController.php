<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Advert;



class AdvertController extends Controller
{
    public function getAll(){
        return Advert::all();
    }

    public function getDetails($id){
        return Advert::first()->where('id','=', $id)->get();
    }

    public function insert(Request $request){

        $title=$request->input('title');
        $details=$request->input('details');
        $price=$request->input('price');
        $picture=$request->input('picture');

        DB::table('adverts')->insert([
            'title'=>$title,
            'details'=>$details,
            'price'=>$price,
            'picure'=>$picture
        ]);
        return "true";
    }

    public function update(Request $request){
        $id=$request->input('id');
        $title=$request->input('title');
        $details=$request->input('details');
        $price=$request->input('price');
        $picture=$request->input('picture');

        DB::table('adverts')
        ->where('id',$id)
        ->update([
            'title'=>$title,
            'details'=>$details,
            'price'=>$price,
            'picture'=>$picture
        ]);
        return "true";
    }

    public function delete($id){
        DB::table('adverts')->where('id', $id)->delete();
        return "true";

    }
}
