<?php

namespace App\Http\Controllers\TelefoniaFija;

use App\Models\TelefoniaFija\TelefoniaFijaPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TelefoniaFijaPlanController extends Controller
{
    public function index()
    {
        $telefonia_fija_plans = TelefoniaFijaPlan::all();
        if(count($telefonia_fija_plans)){
            $lastupdate = TelefoniaFijaPlan::orderBy('updated_at', 'desc')->first();
             $last=$lastupdate->updated_at;
            return view('plan_telefonia_fija.indexback', compact('telefonia_fija_plans','last'));
        }
        else{
            
            return view('plan_telefonia_fija.indexback', compact('telefonia_fija_plans'));
        }
    }

    public function show($id)
    {
        $telefonia_fija_plan = TelefoniaFijaPlan::find($id);

        return view('plan_telefonia_fija.show', compact('telefonia_fija_plan'));
    }
    public function create()
    {
        return view('plan_telefonia_fija.create');
        
    }

    public function store(Request $request)
    {
         $rules = array(
            'name'       => 'required|min:10|max:30',
            'description'       => 'required|min:160|max:300'
        );
        $this->validate(request(), $rules);

        $file  =   $request->file('img');

        $name = $file->getClientOriginalName();
        
        TelefoniaFijaPlan::create([
            'id'       => request('id'),
            'name'       => request('name'),
            'description'       => request('description'),
            'img'       => $name,
            'copy'       => request('copy'),
            'note'       => request('note'),
            'benefits'       => request('benefits'),
            'state'       => request('state'),
            'type'       => request('type'),
            'conditions'       => request('conditions')
        ]);
        $path   =   "telefonia_fija_plan/";
        $file->storeAs($path, $name);
        // redirect
        return redirect('planes-telefonia-fija');
    }

     public function edit($id)
    {
        $telefonia_fija_plans = TelefoniaFijaPlan::where('id', $id)->first();
        return view('plan_telefonia_fija.edit')->with(compact('telefonia_fija_plans'));
    }
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'       => 'required|min:10|max:30',
            'description'       => 'required|min:160|max:300'
        );
        $this->validate(request(), $rules);

        if(!empty($request->file('img'))){
            $image  =   $request->file('img');            
            $name = $image->getClientOriginalExtension();

        
            TelefoniaFijaPlan::updateOrCreate(['id'  => $id], [
                 'name'       => request('name'),
                'description'       => request('description'),
                'img'       => $name,
                'copy'       => request('copy'),
                'note'       => request('note'),
                'benefits'       => request('benefits'),
                'state'       => request('state'),
                'type'       => request('type'),
                'conditions'       => request('conditions')
            ]);

        $path   =   "telefonia_fija_plan/";
        $file->storeAs($path, $name);


        }
        else{

            TelefoniaFijaPlan::updateOrCreate(['id'  => $id], [
                 'name'       => request('name'),
                'description'       => request('description'),
                'copy'       => request('copy'),
                'note'       => request('note'),
                'benefits'       => request('benefits'),
                'state'       => request('state'),
                'type'       => request('type'),
                'conditions'       => request('conditions')
            ]);
        }
        return redirect('planes-telefonia-fija');
    }
    public function destroy($id)
    {
       TelefoniaFijaPlan::find($id)
            ->delete();

        return response()->json('/planes-telefonia-fija');
    }

}
