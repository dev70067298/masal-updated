<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;

class ApiappController extends Controller
{
    //
    public function login(Request $request)
    {
        $email=$request->email;
        $password=$request->password;

        $checkemail=DB::select('select * from users where email = ?', [$email]);
        
        $password12 = $checkemail[0]->password;
     if($checkemail){
        
                if(Hash::check($password,$password12)) {
                        return response()->json([
                            "status"=>$checkemail[0]->id,
                        ]);

                    }else{
                        return response()->json([
                            "status"=>"null",
                        ]);
                    }
        }
        else{
            return response()->json([
                "status"=>"null",
                "message"=>"user not exist"
            ], 200);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    { 
        return response()->json([
            "status"=>true,
            "message"=>"logout successfully"
           
        
        ], 200);

    }
    public function sourcing(Request $request)
    {
        //echo $request;
        //die();
        $user_id=$request->user_id;
        $title=$request->title;
        $description=$request->description;
        $image=$request->image;
        $source=$request->source;


           $insert=DB::insert('insert into sourcing (user_id,title,description,image,source,status) values(?,?,?,?,?,?) ',[$user_id,$title,$description,$image,$source,0] ); 
            if($insert){
                return response()->json([
                    "status"=>true,
                    "message"=>"sourcing form submitted"
                ], 200);
            }else{
                return response()->json([
                    "status"=>false,
                    "message"=>"sourcing form not submitted"
                ], 200);
            }

    }
    
        public function sourcelist(Request $request)
    {
        
        $user_id = $request->user_id;
        $showuni=DB::select('select id,user_id,title,description,image,source,status from sourcing where user_id=? ', [$user_id]);
            if($showuni){
                return response()->json(
                    $showuni
                );
            }else{
                return response()->json([
                   
                ]);
            }
    }
}
