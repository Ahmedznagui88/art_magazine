<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public $artists =[
        [
            'picture' => '/media/med.jpeg',
            'id' => '1',
            'name' => 'MED',


        ],

        [
            'picture' => '/media/lore.jpeg',
            'id' => '2',
            'name' => 'LORE',

        ],

        [
            'picture' => '/media/manto.jpeg',
            'id' => '3',
            'name' => 'MANTO',

        ],

        [
            'picture' => '/media/giuly.jpeg',
            'id' => '4',
            'name' => 'GIULY',

        ],

    ];

    public function index(){
        return view('artists',['artists' => $this->artists] );

    }

    public function show($id){
        foreach($this->artists as $artist){
            if($id == $artist['id']){
                return view ('artists-detail', ['artist' => $artist]);
            }
        }
    }

}
