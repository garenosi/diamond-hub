<?php

namespace App\Http\Controllers;

use App\assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Requests\UserRequest;
use Auth;
class AddAssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AddAssets.view');
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
        
        if($data->hasFile('file'))
        {

        request()->validate([
         'file' => 'mimes:pdf,jpeg,png,bmp,gif|max:2048|nullable',
       ]);
           $user_id =   $data['asset_tag'];
           $files = $data->file('file');
           $destinationPath = 'asset_recites/'; // upload path
           $recite_copy =  $user_id.date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $recite_copy);
           $insert['file'] = "$recite_copy";

            if($files)
            {
               
                $assets = new assets([
                
                'company_name' =>$data['company_name'],
                'asset_tag' =>$data['asset_tag'],
                'asset_name' =>$data['asset_name'],
                'serial_no' =>$data['serial_no'],

                'model' =>$data['model'],
                'status' =>$data['status'],
                'supplier' =>$data['supplier'],
                'location' =>$data['location'],
                'purchase_date' =>$data['purchase_date'],
                'purchase_cost' =>$data['purchase_cost'],
                'order_no' =>$data['order_no'],
                'warranty' =>$data['warranty'],

                'file' =>$recite_copy,
                
                

            ]);
                
                $assets ->save();
                return redirect()->back()->with('success','The asset details were successfully added to the database!!');  

            }
            else
                {
                    return redirect()->back()->with('danger','Error occured! Check the recite file format, allowed formarts are pdf,jpeg,png,bmp,gif!!');
                }
           
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
