<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jagung;
use App\Models\Sawah;
use App\Models\PadiLadang;
use App\Models\Intersection;
use App\Models\BatasKelurahan;

class PetaController extends Controller
{
    public function peta(){

        $results=Sawah::all();

        //return $results;

        return view('peta')->with('data', json_encode($results, true));

    }

    public function getSawah()
    {
        $results = Sawah::all();
        
        $features=[];
        foreach($results as $item){
            $geometry = $item->geom;
            unset($item->geom);
            $feature=['type'=>'Feature','geometry'=>$geometry,'properties'=>$item];
            array_push($features,$feature);
        }
        
        $featureCollections = [
            'type'=>'FeatureCollection',
            'features'=>$features
        ];
        
        return response()->json($featureCollections);
    }

    public function getJagung()
    {
        $results = Jagung::all();
        
        $features=[];
        foreach($results as $item){
            $geometry = $item->geom;
            unset($item->geom);
            $feature=['type'=>'Feature','geometry'=>$geometry,'properties'=>$item];
            array_push($features,$feature);
        }
        
        $featureCollections = [
            'type'=>'FeatureCollection',
            'features'=>$features
        ];
        
        return response()->json($featureCollections);
    }

    public function getPadiLadang()
    {
        $results = PadiLadang::all();
        
        $features=[];
        foreach($results as $item){
            $geometry = $item->geom;
            unset($item->geom);
            $feature=['type'=>'Feature','geometry'=>$geometry,'properties'=>$item];
            array_push($features,$feature);
        }
        
        $featureCollections = [
            'type'=>'FeatureCollection',
            'features'=>$features
        ];
        
        return response()->json($featureCollections);
    }

    public function getIntersection()
    {
        $results = Intersection::all();
        
        $features=[];
        foreach($results as $item){
            $geometry = $item->geom;
            unset($item->geom);
            $feature=['type'=>'Feature','geometry'=>$geometry,'properties'=>$item];
            array_push($features,$feature);
        }
        
        $featureCollections = [
            'type'=>'FeatureCollection',
            'features'=>$features
        ];
        
        return response()->json($featureCollections);
    }

    public function getBatasKelurahan()
    {
        $results = BatasKelurahan::all();
        
        $features=[];
        foreach($results as $item){
            $geometry = $item->geom;
            unset($item->geom);
            $feature=['type'=>'Feature','geometry'=>$geometry,'properties'=>$item];
            array_push($features,$feature);
        }
        
        $featureCollections = [
            'type'=>'FeatureCollection',
            'features'=>$features
        ];
        
        return response()->json($featureCollections);
    }
    
    
}		
