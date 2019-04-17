<?php

namespace App\Http\Controllers;

use App\Models\Terminales\Terminal;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
 use Illuminate\Support\Facades\Auth;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;

class TerminalController extends Controller
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
        $terminales = Terminal::all();
        if(count($terminales)){
            $lastupdate = Terminal::orderBy('updated_at', 'desc')->first();
             $last=$lastupdate->updated_at;
             $lastby=User::all()->where('id','=',$lastupdate->updated_by)->first()->name;
            return view('terminales.indexback', compact('terminales','last','lastby'));
        }
        else{
            
            return view('terminales.indexback', compact('terminales'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terminales.create');
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
         $request->validate([
            'name'      => 'required|min:10|max:70',
            'brand'     => 'required|min:10|max:70',
            'description'     => 'required|max:300'
        ]);
         
        $file1  =   $request->file('img');

        $name1 = $file1->getClientOriginalName();


        $file2  =   $request->file('home_img');

        $name2 = $file2->getClientOriginalName();
        
        Terminal::create([
            'name'       => request('name'),
            'brand'       => request('brand'),
            'description'       => request('description'),
            'img'       => $name1,
            'home_img'       => $name2,
            'copy'       => request('copy'),
            'benefits'       => request('benefits'),
            'state'       => request('state'),
            'cash_price'       => request('cash_price'),
            'from_price'       => request('from_price'),
            'screen_size'       => request('screen_size'),
            'front_cam'       => request('front_cam'),
            'back_cam'       => request('back_cam'),
            'os'       => request('os'),
            'memory'       => request('memory'),
            'extensible_memory'       => request('extensible_memory'),
            'height'       => request('height'),
            'width'       => request('width'),
            'depth'       => request('depth'),
            'battery'       => request('battery'),
            'colors'       => request('colors'),
            'go_home'       => request('go_home'),
            'updated_by'      =>$user,
        ]); 
        Image::make($file1)->resize(300,300)->save(public_path('/img/equipos/'.$name1));
        Image::make($file2)->resize(300,300)->save(public_path('/img/equipos/'.$name2));
        //$path   =   "public/terminales/";
       // $file1->storeAs($path, $name1);
        //$file2->storeAs($path, $name2);

        //flash('Ingresado Correctamente');

        // redirect
        return redirect('terminales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $terminal = Terminal::find($id);

        return view('terminales.show', compact('terminal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $terminal = Terminal::where('id', $id)->first();
        return view('terminales.edit')->with(compact('terminal'));
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
          $request->validate([
            'name'      => 'required|min:10|max:70',
            'brand'     => 'required|min:10|max:70',
            'description'     => 'required|max:300'
        ]);

        
        if($request->has('img')){
            
            $file1  =   $request->file('img');


            $name1 = $file1->getClientOriginalName();
                        

            $file2  =   $request->file('home_img');

            $name2 = $file2->getClientOriginalName();
        
                    Terminal::updateOrCreate(['id'  => $id], [
                        'name'       => request('name'),
                        'brand'       => request('brand'),
                        'description'       => request('description'),
                        'img'       => $name1,
                        'home_img'   =>$name2,
                        'go_home'       =>request('go_home'),
                        'copy'       => request('copy'),
                        'benefits'       => request('benefits'),
                        'state'       => request('state'),
                        'cash_price'       => request('cash_price'),
                        'from_price'       => request('from_price'),
                        'screen_size'       => request('screen_size'),
                        'front_cam'       => request('front_cam'),
                        'back_cam'       => request('back_cam'),
                        'os'       => request('os'),
                        'memory'       => request('memory'),
                        'extensible_memory'       => request('extensible_memory'),
                        'height'       => request('height'),
                        'width'       => request('width'),
                        'depth'       => request('depth'),
                        'battery'       => request('battery'),
                        'colors'       => request('colors'),
                        'go_home'       => request('go_home'),
                        'updted_by'       => $user,
                    ]);


            $path   =   "public/terminales/";
            $file1->storeAs($path, $name1);
            $file2->storeAs($path, $name2);

            }
            else{
                Terminal::updateOrCreate(['id'  => $id], [
                        'name'       => request('name'),
                        'brand'       => request('brand'),
                        'description'       => request('description'),
                        'go_home'       =>request('go_home'),
                        'copy'       => request('copy'),
                        'benefits'       => request('benefits'),
                        'state'       => request('state'),
                        'cash_price'       => request('cash_price'),
                        'from_price'       => request('from_price'),
                        'screen_size'       => request('screen_size'),
                        'front_cam'       => request('front_cam'),
                        'back_cam'       => request('back_cam'),
                        'os'       => request('os'),
                        'memory'       => request('memory'),
                        'extensible_memory'       => request('extensible_memory'),
                        'height'       => request('height'),
                        'width'       => request('width'),
                        'depth'       => request('depth'),
                        'battery'       => request('battery'),
                        'colors'       => request('colors'),                        
                        'go_home'       => request('go_home'),
                        'updated_by'       => $user,
                    ]);

            }

        //flash('Ingresado Correctamente');

        // redirect
        return redirect('terminales');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
       Terminal::find($id)
            ->delete();

        return response()->json('/terminales');
    }


}
