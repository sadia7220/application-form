<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Validator;
use Exception;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $forms=Form::all();
            return response()->json($forms,200);
        }
        catch (Exception $ex) {
            $exception = $ex->getMessage();
            Log::error($exception); 
        }
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
        try{
            $rules = [                                             
                'name' => 'required|min:3|max:100',
                'email' => 'required|email|max:100',
                'phone' => 'required|digits:11',
            ];
            $validator = Validator::make($request->all(),$rules); 
            if($validator->fails()){
                return response()->json($validator->errors(),400); 
                //return redirect()->back()->withErrors($validator);
            }
            $form = Form::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            return response()->json(["success" => "The application form has been submitted successfully!","form"=>$form],201);
        }
        catch (Exception $ex) {
            $exception = $ex->getMessage();
            Log::error($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
