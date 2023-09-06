<?php

namespace App\Http\Controllers;
use App\users;
use App\User;
use Auth;
use Illuminate\Http\Request;
//use App\Http\Controllers\Session; 
use Illuminate\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
//use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.create'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $request)
    {
        $this-> Validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
			'address' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
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
         'file' => 'mimes:jpeg,png,jpg,bmp,gif|max:2048|nullable',
       ]);
           $user_id =   $data['f_name'];
           $files = $data->file('file');
           $destinationPath = 'profile_pictures/'; // upload path
           $profile_picture =  $user_id.date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profile_picture);
           $insert['file'] = "$profile_picture";

            if($files)
            {
               
                $users = new users([
                'f_name' => $data['f_name'],
                'l_name' => $data['l_name'],
                'gender' => $data['gender'],
                'company_name' => $data['company_name'],
                'email' => $data['email'],
                'user_role' => "staff",
                'status' => "pending",
                'password' => Hash::make($data['password']),

                'file' =>$profile_picture,
                
                

            ]);
                
                $users ->save();
                return redirect()->back()->with('success','The user details were successfully added to the database!!');  

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
    public function edit( $id)
    {
        $users = DB::select('select * from users where id=?',[$id]);
        return view('users.edit', ['users'=>$users]);
    
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
        $name = $request->get('name');
        $user_role = $request->get('user_role');
        $email = $request->get('email');

        $users = DB::update('update users set name=?,user_role=?, email=? where id=?',[$name,$user_role,$email,$id]);

        if($users){
            $movePage = redirect('ManageUser.manageUser')->with('success','User has been updated');
        }else{
            $movePage = redirect('edit'.$id)->with('danger','Error update in updating, Please try again'); 
        }
            return $movePage;
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       //
    }
   }

