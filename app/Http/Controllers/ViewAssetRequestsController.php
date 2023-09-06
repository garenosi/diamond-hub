<?php

namespace App\Http\Controllers;

use App\asset_requests;
use App\assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewAssetRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$logged_user=Auth::user()->email;
        $asset_requests = DB::select('select * FROM asset_requests ORDER BY id DESC');
        
        return view('ViewAssetRequests.view',compact(array('asset_requests')));
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
       // dd($data['serial_no']);
        if ($data['approve_status'] == "approved") {
             DB::table('asset_requests')
            ->where('serial_no', $data['serial_no'])  
            ->update(array(
                'status' => "approved",
                ));
                return redirect()->back()->with('success','The asset request was successfully approved!');
        }
        if ($data['deny_status'] == "denied") {
             DB::table('asset_requests')
            ->where('serial_no', $data['serial_no'])  
            ->update(array(
                'status' => "denied",
                ));
                return redirect()->back()->with('success','The asset request was successfully denied!');
        }
          
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
