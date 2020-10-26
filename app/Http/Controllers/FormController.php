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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            // Show the form list.
            $forms=Form::all();
            return view('layouts.form.applicationFormList', compact('forms'));
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
        return view('layouts.form.addApplicationForm');
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
            //Set rules for validation of fields.
            $rules = [                                             
                'name' => 'required|min:3|max:100',
                'email' => 'required|email|max:100',
                'phone' => 'required|digits:11',
            ];

             // Show error message(s) if validation fails.
            $validator = Validator::make($request->all(),$rules); 
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Create form.
            $form = Form::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            
            // Return the success or error message for saving form data.
            if($form !== 'null') return redirect()->route('create_applicationForm')->with('success', 'The application form has been submitted successfully!');
            else return redirect()->route('create_applicationForm')->with('error', 'The application form can not be added!');
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
