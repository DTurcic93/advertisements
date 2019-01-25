<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Advert;

class ApplicationController extends Controller
{
    public function index(){
        $req = Request::create('http://localhost:8000/api/ads', 'GET');
        $adverts = json_decode(Route::dispatch($req)->getContent());

        return view('showAll', ['adverts' =>$adverts]);
    }

    public function details($id){
        $req =  Request::create("http://localhost:8000/api/ads/$id", 'GET');
        $ad  = json_decode(Route::dispatch($req)->getContent());

        return view('adDetails', ['ad'=>$ad[0]]);
    }

    public function delete($id){
        $req = Request::create("http://localhost:8000/api/ads/delete/$id", 'GET');
        $response = json_decode(Route::dispatch($req)->getContent());

        return $this->index();
    }

    public function showInsertForm(){
        return view('insertform');
    }

    public function insert(Request $request){
        $title = $request->input('title');
        $details = $request->input('details');
        $price = $request->input('price');
        $picture = $request->input('picture');

        DB::table('adverts')->insert([
            'title'=>$title,
            'details'=>$details,
            'price'=>$price,
            'picture'=>$picture
        ]);
        return $this->index();
    }

    public function update($id){
        $req = Request::create("http://localhost:8000/api/ads/$id", 'GET');
        $ad = json_decode(Route::dispatch($req)->getContent());

        return view('updateAd', ['ad' => $ad[0]]);
    }

    public function updateDetails(Request $request){
        $id = $request->input('id');
        $title = $request->input('title');
        $details = $request->input('details');
        $price = $request->input('price');
        $picture = $request->input('picture');

        DB::table('adverts')
        ->where('id', $id)
        ->update([
            'title'=>$title,
            'details'=>$details,
            'price'=>$price,
            'picture'=>$picture
        ]);
        return $this->index();
    }
}
