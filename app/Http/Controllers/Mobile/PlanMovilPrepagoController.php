<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Mobile\PlanMovilPrepago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;

class PlanMovilPrepagoController extends Controller
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

        $mobile_plans = PlanMovilPrepago::all();
        if(count($mobile_plans)){
        $lastupdate = PlanMovilPrepago::orderBy('updated_at', 'desc')->first();
        $last=$lastupdate->updated_at;
        $lastby=User::all()->where('id','=',$lastupdate->updated_by)->first()->name;
        return view('plan_movil_prepago.indexback', compact('mobile_plans','last','lastby'));
        }
        else{
            
        return view('plan_movil_prepago.indexback', compact('mobile_plans'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('plan_movil_prepago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;
         $rules = array(
            'name'       => 'required|min:10|max:70',
            'description'=> 'required|min:160|max:300',   
        );
        $this->validate(request(), $rules);


         $file1  =   $request->file('img');
         $file2  =   $request->file('pdf_conditions');

        $name1 = $file1->getClientOriginalName();
        $name2 = $file2->getClientOriginalName();
        
        PlanMovilPrepago::create([
            'id'       => request('id'),
            'name'       => request('name'),
            'description'       => request('description'),
            'price'       => request('price'),
            'iva'       => request('iva'),
            'ice'       => request('ice'),
            'img'       => $name1,
            'copy'       => request('copy'),
            'benefits'       => request('benefits'),
            'conditions'       => request('conditions'),
            'pdf_conditions'       => $name2,
            'updated_by'=>$user
        ]);

        Image::make($file1)->resize(300,300)->save(public_path('/img/plan_movil_prepago/'.$name1));

        $path   =   "plan_movil_prepago/";
        $file2->storeAs($path, $name2);
        // redirect
        return redirect('movil-prepago');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobile_plan = PlanMovilPrepago::find($id);

        return view('plan_movil_prepago.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
             
        $mobile_plan = PlanMovilPrepago::where('id', $id)->first();
        return view('plan_movil_prepago.edit')->with(compact('mobile_plan'));
    
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
        $user = Auth::user()->id;
         $rules = array(
            'name'       => 'required|min:10|max:70',
            'description'=> 'required|min:160|max:300',   
        );
        $this->validate(request(), $rules);

       if($request->has('img')){
            $file1  =   $request->file('img');
             $file2  =   $request->file('pdf_conditions');

            $name1 = $file1->getClientOriginalName();
            $name2 = $file2->getClientOriginalName();
        
         PlanMovilPrepago::updateOrCreate(['id'  => $id], [
            'name'       => request('name'),
            'description'       => request('description'),
            'price'       => request('price'),
            'iva'       => request('iva'),
            'ice'       => request('ice'),
            'img'       => $name1,
            'copy'       => request('copy'),
            'benefits'       => request('benefits'),
            'conditions'       => request('conditions'),
            'pdf_conditions'       => $name2,
            'updated_by'=>$user
        ]);
          Image::make($file1)->resize(300,300)->save(public_path('/img/plan_movil_prepago/'.$name1));

        $path   =   "plan_movil_prepago/";
        $file2->storeAs($path, $name2);
     }
     else{
        PlanMovilPrepago::updateOrCreate(['id'  => $id], [
           'name'       => request('name'),
            'description'       => request('description'),
            'price'       => request('price'),
            'iva'       => request('iva'),
            'ice'       => request('ice'),
            'copy'       => request('copy'),
            'benefits'       => request('benefits'),
            'conditions'       => request('conditions'),
            'updated_by'=>$user
        ]);
     }

        // redirect
        return redirect('movil-prepago');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         PlanMovilPrepago::find($id)
            ->delete();

        return response()->json('/movil-prepago');
    }
}
