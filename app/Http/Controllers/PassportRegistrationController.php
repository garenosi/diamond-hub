<?php

namespace App\Http\Controllers;

use App\passports;
use App\users;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassportRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PassportRegistration.view');
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
		
        if($data->hasFile('omang_copy'))
        {

        request()->validate([
         'file' => 'mimes:pdf,jpeg,png,bmp,gif|max:2048|nullable',
       ]);
           $user_id =   Auth::user()->name;
           $files = $data->file('omang_copy');
           $destinationPath = 'passport_items/'; // upload path
           $omang_copy =  $user_id.date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $omang_copy);
           $insert['file'] = "$omang_copy";
		  
		   
		   $pp = $data->file('passport_photo');
           $destinationPath = 'passport_items/'; // upload path
           $passport_photo =  $user_id.date('YmdHis') . "." . $pp->getClientOriginalExtension();
           $pp->move($destinationPath, $passport_photo);
           $insert['file'] = "$passport_photo";
		   
		   $fp = $data->file('finger_print');
           $destinationPath = 'passport_items/'; // upload path
           $finger_print =  $user_id.date('YmdHis') . "." . $fp->getClientOriginalExtension();
           $fp->move($destinationPath, $finger_print);
           $insert['file'] = "$finger_print";

		   $bcc = $data->file('birth_certificate_copy');
           $destinationPath = 'passport_items/'; // upload path
           $birth_certificate_copy =  $user_id.date('YmdHis') . "." . $fp->getClientOriginalExtension();
           $bcc->move($destinationPath, $birth_certificate_copy);
           $insert['file'] = "$birth_certificate_copy";

            if($files)
            {
                
                $passports = new passports([
                
                'name' => Auth::user()->name,
				'email' => Auth::user()->email,
				'gender' => Auth::user()->gender,
				'omang_copy' =>$omang_copy,
				'passport_photo' =>$passport_photo,
				'omang' =>$data['omang'],
				'date_of_birth' =>$data['date_of_birth'],
				'place_of_birth' =>$data['place_of_birth'],
				'residential_address' =>$data['residential_address'],
                'finger_print' =>$finger_print,
                'birth_certificate_copy' => $birth_certificate_copy,
                

            ]);
                
                $passports ->save();
                return redirect()->back()->with('success','The passport details were successfully updated!!');  

            }
            else
                {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Detail upload failed... Try again or contact Admin</div>';
                }
            //}
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
