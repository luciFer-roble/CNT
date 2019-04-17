<?php

namespace App\Http\Controllers\Promociones;

use App\Models\Promociones\Promo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;

class PromoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $promociones = Promo::all();
        if(count($promociones)){
	        $lastupdate = Promo::orderBy('updated_at', 'desc')->first();
	        $last=$lastupdate->updated_at;
	        return view('promociones.indexback', compact('promociones','last'));
        }
        else{
            
        return view('promociones.indexback', compact('promociones'));
        }
    }

     public function create()
    {        
        return view('promociones.create');
    }
     public function store(Request $request)
    {
         $rules = array(
            'name'       => 'required|min:10|max:70',
            'description'=> 'required|min:160|max:300',   
        );
        $this->validate(request(), $rules);


        $file  =   $request->file('img');

        $name = $file->getClientOriginalName();
        
        Promo::create([
            'id'       => request('id'),
            'name'       => request('name'),
            'description'=> request('description'),   
            'img'=> $name,
            'copy'=> request('copy'),
            'state'=> request('state'),
            'note'=> request('note'),
            'tariff_sin_imp'=> request('tariff_sin_imp'),
            'tariff_con_imp'=> request('tariff_con_imp'),           
            'conditions'=> request('conditions'),
        ]);

        Image::make($file)->resize(300,300)->save(public_path('/img/promociones/'.$name));
        // redirect
        return redirect('promociones');
    }
     public function show($id)
    {
        $promocion = Promo::find($id);

        return view('promocion.show');
    }
    public function edit($id)
    {
             
        $promocion = Promo::where('id', $id)->first();
        return view('promociones.edit')->with(compact('promocion'));
    
    }
    public function update(Request $request, $id)
    {
         $rules = array(
            'name'       => 'required|min:10|max:70',
            'description'=> 'required|min:160|max:300',   
        );
        $this->validate(request(), $rules);

       if($request->has('img')){
            $image  =   $request->file('img');            
            $name = $image->getClientOriginalExtension();
        
         Promo::updateOrCreate(['id'  => $id], [
            'name'       => request('name'),
            'description'=> request('description'),   
            'img'=> $name,
            'copy'=> request('copy'),
            'state'=> request('state'),
            'note'=> request('note'),
            'tariff_sin_imp'=> request('tariff_sin_imp'),
            'tariff_con_imp'=> request('tariff_con_imp'),
            'conditions'=> request('conditions'),
        ]);
        Image::make($file)->resize(300,300)->save(public_path('/img/promociones/'.$name));
     }
     else{
        Promo::updateOrCreate(['id'  => $id], [
            'name'       => request('name'),
            'description'=> request('description'),   
            'copy'=> request('copy'),
            'benefits'=> request('benefits'),
            'state'=> request('state'),
            'note'=> request('note'),
            'tariff_sin_imp'=> request('tariff_sin_imp'),
            'tariff_con_imp'=> request('tariff_con_imp'),
            'conditions'=> request('conditions'),
        ]);
     }

        // redirect
        return redirect('promociones');
    
    }
    public function destroy($id)
    {
         Promo::find($id)
            ->delete();

        return response()->json('/promociones');
    }

}
