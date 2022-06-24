<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.userManagement', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:12'],
                'role_id' => ['required', 'between:0,1'],
            ]
        );

        $dataArray = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        );

        $user = User::create($dataArray);

        if(!is_null($user)) {
            return redirect(route('admin.userManagement.index'));
        }

        else {
            return false;
        }
//        return redirect(route('admin.userManagement.index'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $user = User::find($id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->role_id = $request->role_id;
         $user->password = Hash::make($request->password);
         $user->update();

        return redirect(route('admin.userManagement.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('admin.userManagement.index'));
    }

    public function validateUser($request)
    {
        return $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'role_id' => ['required', 'between:0,1'],
        ]);
    }
}
