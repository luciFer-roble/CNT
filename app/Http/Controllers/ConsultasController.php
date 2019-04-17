<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile\PlanMovilPrepago;
use App\Models\Mobile\PlanMovilPospago;
use App\Models\Terminales\Terminal;
use App\Models\TelefoniaFija\TelefoniaFijaPlan;
use App\Models\InternetFijo\InternetFijo;
use App\Models\InternetFijo\TarifasInternetFijo;
use App\Models\Promociones\Promo;

class ConsultasController extends Controller
{
    public function getTerminales(){
    $terminales = Terminal::all();
        return response()->json($terminales);}

    public function getPlanesPrepago(){
    $planesPrepago = PlanMovilPrepago::all();
        return response()->json($planesPrepago);}

    public function getPlanesPospago(){
    $planesPospago = PlanMovilPospago::all();
        return response()->json($planesPospago);}

    public function getPromociones(){
    $promociones = Promo::all();
        return response()->json($promociones);}

    public function getTelefoniaFija(){
    $planesTelefoniaFija = TelefoniaFijaPlan::all();
        return response()->json($planesTelefoniaFija);}

     public function getInternetFijo(){
    $planesInternetFijo = InternetFijo::all();
        return response()->json($planesInternetFijo);}

     public function getTarifasInternetFijo(){
    $tarifasInternetFijo = TarifasInternetFijo::all();
        return response()->json($tarifasInternetFijo);}
}
