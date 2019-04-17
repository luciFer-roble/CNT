<?php

namespace App\Http\Controllers\InternetFijo;

use App\Http\Controllers\Controller;
use App\Models\InternetFijo\TarifasInternetFijo;
use App\Models\InternetFijo\InternetFijo;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;

class TarifasInternetFijoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $internet_tariffs = TarifasInternetFijo::all();
        if(count($internet_tariffs)){
            $lastupdate = TarifasInternetFijo::orderBy('updated_at', 'desc')->first();
             $last=$lastupdate->updated_at;
            return view('tarifas_internet_fijo.indexback', compact('internet_tariffs','last'));
        }
        else{
            
            return view('tarifas_internet_fijo.indexback', compact('internet_tariffs'));
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $internet_plans=InternetFijo::all();
       
        return view('tarifas_internet_fijo.create')->with(compact('internet_plans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $rules = array(
            'name'       => 'required|min:10|max:30',
        );
        $this->validate(request(), $rules);

        TarifasInternetFijo::create([
            'id'       => request('id'),
            'name'       => request('name'),
            'internet_plan_id'       => request('internet_plan_id'),
            'type'       => request('type'),
            'technology'       => request('technology'),
            'iva'       => request('iva'),
            'ice'       => request('ice'),
            'cost'       =>request('cost'),
            'download'       => request('download'),
            'upload'       =>request('upload'),
            'instalation_cost'       => request('instalation_cost')
        ]);
        // redirect
        return redirect('internet_tariffs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $internet_tariff = TarifasInternetFijo::where('id', $id)->first();
         $internet_plans=InternetFijo::all();
        return view('tarifas_internet_fijo.edit')->with(compact('internet_tariff','internet_plans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $rules = array(
            'name'       => 'required|min:10|max:30',
        );
        $this->validate(request(), $rules);

            TarifasInternetFijo::updateOrCreate(['id'  => $id], [
                 'name'       => request('name'),
            'internet_plan_id'       => request('internet_plan_id'),
            'type'       => request('type'),
            'technology'       => request('technology'),
            'iva'       => request('iva'),
            'ice'       => request('ice'),
            'cost'       =>request('cost'),
            'download'       => request('download'),
            'upload'       =>request('upload'),
            'instalation_cost'       => request('instalation_cost')
            ]);
        
        return redirect('internet_tariffs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TarifasInternetFijo::find($id)
            ->delete();

         return response()->json('/internet_tariffs');
    }
}
