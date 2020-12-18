<?php

namespace App\Http\Controllers;

use App\Cube;

use Illuminate\Http\Request;

class CubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cubes = Cube::latest()->paginate(5);
  
        return view('cubes.index',compact('cubes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cubes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              $request->validate([

            'cube_name' => 'required',
            'Length' => 'required',
            'Width' => 'required',
            'Depth' => 'required',
      
        ]);
      
           $data['cube_name']=$request->cube_name;
           $data['Length']=$request->Length;
           $data['Width']=$request->Width;
           
           $data['Depth']=$request->Depth;

           $data['volume'] = $data['Length']*$data['Width']*$data['Depth'];
           $data['surface_area'] = 2*$data['Length']*$data['Width'] + 2*$data['Width']*  
                             $data['Depth'] + 2* $data['Length']*$data['Depth'];
         
           Cube::create($data);
           return redirect()->route('cubes.index')
            ->with('success','Cube created successfully.');
      
}
}