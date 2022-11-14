<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[



           
            'firstname' => 'required|min:1',
            'lastname'=>'required|min:1',
            'email' => 'required|email|max:255|unique:users',
            'username'=>'required|min:1',


           
           

        ],
            
            
             [
               
                'firstname.required' => 'firstname is required ',
                'lastname.required'=>'lastname is required ',
                'email.required'=>'Provide appropiate email',
                'username.required'=>'username is required'
               
                

            ]



             );


        $crud=new Crud;
          
           $crud->firstname=$request->get('firstname');
       
             $crud->lastname=$request->get('lastname');
             
             $crud->username=$request->get('username');

           
             $crud->email=$request->get('email');

             $crud->save();

             return redirect('/crud_list')->with('success', true);
        
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
        $crud =Crud::find($id);
        return view('crud_edit',compact('crud','id'));
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


        $this->validate($request,[



           
            'firstname' => 'required|min:1',
            'lastname'=>'required|min:1',
            'email' => 'required|email|max:255|unique:users',
            'username'=>'required|min:1',


           
           

        ],
            
            
             [
               
                'firstname.required' => 'firstname is required ',
                'lastname.required'=>'lastname is required ',
                'email.required'=>'Provide appropiate email',
                'username.required'=>'username is required'
               
                

            ]



             );











        $form_data = array(
            
            'firstname'       =>   $request->firstname,
            'lastname'        =>  $request->lastname,
            'username'  =>  $request->username,
            'email'=>$request->email
           
        );

        Crud::whereId($id)->update($form_data);

        return redirect('/crud_list')->with('success', true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = \App\Models\Crud::find($id);
        $crud->delete();
        
        return redirect('/crud_list')->with('success', true);
    }
}
