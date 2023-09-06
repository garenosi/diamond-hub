<?php

namespace App\Http\Controllers;

use App\asset_requests;
use App\assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestAssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$logged_user=Auth::user()->email;
        $assets = DB::select('select * FROM assets ORDER BY id DESC');
        
        return view('RequestAssets.view',compact(array('assets')));
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
    public function store(Request $data)
    {
         $asset_requests = new asset_requests([
                
                'company_name' =>$data['company_name'],
                //'asset_tag' =>$data['asset_tag'],
                'asset_name' =>$data['asset_name'],
                'serial_no' =>$data['serial_no'],

                'manager_first_name' =>$data['manager_first_name'],
                'manager_last_name' =>$data['manager_last_name'],
                'status' => "pending",
                'manager_email' =>$data['manager_email'],
          

            ]);
         //dd($data['asset_tag']);
                
                $asset_requests ->save();
                return redirect()->back()->with('success','The asset request was successfully sent for review!');  
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
