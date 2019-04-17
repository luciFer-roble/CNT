<?php

namespace App\Http\Controllers\InternetFijo;

use App\Http\Controllers\Controller;
use App\Models\InternetFijo\InternetFijo;
 use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;

class InternetFijoController extends Controller
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
        $internet_plans = InternetFijo::all();
        if(count($internet_plans)){
            $lastupdate = InternetFijo::orderBy('updated_at', 'desc')->first();
             $last=$lastupdate->updated_at;
             $lastby=User::all()->where('id','=',$lastupdate->updated_by)->first()->name;
            return view('internet_fijo.indexback', compact('internet_plans','last','lastby'));
        }
        else{
            
            return view('internet_fijo.indexback', compact('internet_plans'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('internet_fijo.create');
        
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
            'name'       => 'required|min:10|max:30',
            'description'       => 'required|min:160|max:300'
        );
        $this->validate(request(), $rules);

        $file1  =   $request->file('img');

        $file2  =   $request->file('pdf_conditions');

        $name1 = $file1->getClientOriginalName();
        $name2 = $file2->getClientOriginalName();
        InternetFijo::create([
            'id'       => request('id'),
            'name'       => request('name'),
            'description'       => request('description'),
            'img'       => $name1,
            'copy'       => request('copy'),
            'benefits'       => request('benefits'),
            'conditions'       => request('conditions'),
            'pdf_conditions'       =>$name2,
            'updated_by'       => $user
        ]);
        Image::make($file1)->resize(300,300)->save(public_path('/img/internet_fijo/'.$name1));

        $path   =   "internet_fijo_plan/";
        $file2->storeAs($path, $name2);
        // redirect
        return redirect('internet_plans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $internet_plan = InternetFijo::where('id', $id)->first();
        return view('internet_fijo.show')->with('internet_plan', $internet_plan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $internet_plan = InternetFijo::where('id', $id)->first();
        return view('internet_fijo.edit')->with(compact('internet_plan'));
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
            'name'       => 'required|min:10|max:30',
            'description'       => 'required|min:160|max:300'
        );
        $this->validate(request(), $rules);

        if($request->has('img')){
            $file1  =   $request->file('img');

            $file2  =   $request->file('pdf_conditions');

            $name1 = $file1->getClientOriginalName();
            $name2 = $file2->getClientOriginalName();

        
            InternetFijo::updateOrCreate(['id'  => $id], [
                 'name'       => request('name'),
                'description'       => request('description'),
                'img'       => $name,
                'copy'       => request('copy'),
                'benefits'       => request('benefits'),
                'conditions'       => request('conditions'),
                'pdf_conditions'       => $name2,
                'updated_by'       => $user
            ]);

        Image::make($file1)->resize(300,300)->save(public_path('/img/internet_fijo/'.$name1));

        $path   =   "internet_fijo_plan/";
        $file2->storeAs($path, $name2);


        }
        else{

            InternetFijo::updateOrCreate(['id'  => $id], [
                 'name'       => request('name'),
                'description'       => request('description'),
                'copy'       => request('copy'),
                'benefits'       => request('benefits'),
                'conditions'       => request('conditions'),
                'updated_by'       => $user
            ]);
        }
        return redirect('internet_plans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       InternetFijo::find($id)
            ->delete();

         return response()->json('/internet_plans');
    }
}
