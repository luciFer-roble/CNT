<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Mobile\PlanMovilPospago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;

class PlanMovilPospagoController extends Controller
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
        $mobile_plans = PlanMovilPospago::all();
        if(count($mobile_plans)){
            $lastupdate = PlanMovilPospago::orderBy('updated_at', 'desc')->first();
            $last=$lastupdate->updated_at;
             $lastby=User::all()->where('id','=',$lastupdate->updated_by)->first()->name;
            return view('plan_movil_pospago.indexback', compact('mobile_plans','last','lastby'));
            }

        else{
                
            return view('plan_movil_pospago.indexback', compact('mobile_plans'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plan_movil_pospago.create');
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
            'description' => 'required|min:160|max:300'
        );
        $this->validate(request(), $rules);

         $file1  =   $request->file('img');
         $file2  =   $request->file('pdf_conditions');

        $name1 = $file1->getClientOriginalName();
        $name2 = $file2->getClientOriginalName();
        
        PlanMovilPospago::create([
            'id'       => request('id'),
            'name'       => request('name'),
            'description'       => request('description'),
            'img'       => $name1,
            'copy'       => request('copy'),
            'benefits'       => request('benefits'),
            'conditions'       => request('conditions'),
            'pdf_conditions'       => $name2,
            'updated_by'=>$user
        ]);
        Image::make($file1)->resize(300,300)->save(public_path('/img/plan_movil_pospago/'.$name1));

        $path   =   "plan_movil_pospago/";
        $file2->storeAs($path, $name2);

        // redirect
        return redirect('movil-pospago');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobile_plan = PlanMovilPospago::find($id);

        return view('plan_movil_pospago.show', compact('mobile_plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $mobile_plan = PlanMovilPospago::where('id', $id)->first();
        return view('plan_movil_pospago.edit')->with(compact('mobile_plan'));
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
            'description' => 'required|min:160|max:300'
        );
        $this->validate(request(), $rules);

        if($request->has('img')){
            $file1  =   $request->file('img');
             $file2  =   $request->file('pdf_conditions');

            $name1 = $file1->getClientOriginalName();
            $name2 = $file2->getClientOriginalName();
        
            PlanMovilPospago::updateOrCreate(['id'  => $id], [
            'name'       => request('name'),
            'description'       => request('description'),
            'img'       => $name1,
            'copy'       => request('copy'),
            'benefits'       => request('benefits'),
            'conditions'       => request('conditions'),
            'pdf_conditions'       => $name2,
            'updated_by'=>$user
            ]);
          Image::make($file1)->resize(300,300)->save(public_path('/img/plan_movil_pospago/'.$name1));

            $path   =   "plan_movil_pospago/";
            $file2->storeAs($path, $name2);

         }
         else{

            PlanMovilPospago::updateOrCreate(['id'  => $id], [
                'name'       => request('name'),
                'description'       => request('description'),
                'copy'       => request('copy'),
                'benefits'       => request('benefits'),
                'conditions'       => request('conditions'),
                'updated_by'=>$user
            ]);

         }

        //Flash::success('Ingresado Correctamente');

        // redirect
        return redirect('movil-pospago');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PlanMovilPospago::find($id)
            ->delete();

        return response()->json('/movil-pospago');
    }
}
