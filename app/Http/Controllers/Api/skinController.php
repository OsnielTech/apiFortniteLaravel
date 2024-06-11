<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skin;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Validator; 

class skinController extends Controller
{
    

    public function index()
    {

         $skins = Skin::all();

        // if($skins ->empty()){

        //     $data = [
        //         'message' => 'No se encuentra ninguna skin',
        //         'status' => 404
        //     ];
        //     return response()->json($data, 200);
        // }
        // return response()->json($skins, 200);
        $data = [
            'skin' => $skins,
            'status' => 200
        ];
        return response()->json($data, 200);

    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[

        'nameSkin' => 'required',
        'seasonSkin' => 'required',
        'chapterSkin' => 'required',
        'setSkin' => 'required',
        'rarityLevelSkin' => 'required',
        'priceSkin' => 'required'

        ]);

        if($validator->fails()){

            $data = [
                'message' => 'Error de validacion de datos',
                'errors' => $validator->errors(),
                'status' => 404
            ];
            return response()->json($data, 400);
        }

        $skin = Skin::create([

        'nameSkin' => $request->nameSkin,
        'seasonSkin' => $request->seasonSkin,
        'chapterSkin' => $request->chapterSkin,
        'setSkin' => $request->setSkin,
        'rarityLevelSkin' => $request->rarityLevelSkin,
        'priceSkin' => $request->priceSkin
        ]);

        if(!$skin){

            $data = [
                'message' => 'Error al crear la skin',
                
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'skin' => $skin,
            'status' => 201
        ];
        return response()->json($data, 201);

    }
}
