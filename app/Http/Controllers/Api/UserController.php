<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\apiUserData;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = apiUserData::all();
        if(count($users) > 0)
        {
            //user exists
            $response = [
                'message' => count($users) .' users found',
                'status' => 1,
                'data' => $users
            ];
        }else{
            //user dosent exist
            $response = [
                'message' => 'No users found',
                'status' => 0
            ];
        }
        return response()->json($response , 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required','min:3', 'confirmed']
        ]);

        if($validator->fails())
        {
            return response()->json($validator->messages());
        }
        else{
            $db_data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password ,
            ];

            DB::beginTransaction();
            try{
                $user = apiUserData::create($db_data);
                DB::commit();
            }catch(\Exception $e){
                $user = null;
                p($e->getMessage());
            }
            
            if($user != null)
            {
                //okay
                return response()->json([
                    'message' => 'User Registered Succesfully'
                ], 200);
            }else{
                //no ok
                DB::rollBack();
                return response()->json([
                    'message' => 'Internal Server Error'
                ], 500);
            }
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
