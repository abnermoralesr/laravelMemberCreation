<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MessageOutput;



class ProfileController extends Controller
{

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  request $request
     * @return message
     */
    protected function create(request $request)
    {
		$this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
			'role' => 'required|integer|min:1',
		]);		
        $user =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
			'role' => $request['role'],
        ]);
		$saved = $user->save();
		$MessageOutput = new MessageOutputController("User", "created", $saved);
		echo $MessageOutput->toJSON();		
    }	
	
    /**
     * Read a single user.
     *
     * @param  request $data
     * @return \App\User
     */
    protected function read(request $request)
    {
		echo $user = User::find($request['id'])->toJson();
    }		
	
    /**
     * Update profile.
     *
     * @param  request $data
     * @return message
     */
    protected function update(request $data)
    {    
		$this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
			'role' => 'required|integer|min:1',
		]);			
		$user = User::find($data['id']);
		$saved = false;
		if (!$user->isEmpty()) {
			$user->name = $data['name'];
			$user->email = $data['email'];
			$user->password = $data['password'];
			$user->role = $data['role'];
			$saved = $user->save();	
		}
		$MessageOutput = new MessageOutputController("User", "updated", $saved);
		echo $MessageOutput->toJSON();
	}

    /**
     * Delete profile.
     *
     * @param  request $data
     * @return message
     */
    protected function delete(request $data)
    {   
 
		$user = User::find($data['id']);
		$saved = false;
		if ($user!=null) {
			$user->deleted = 1;
			$saved = $user->delete();
		}
		$MessageOutput = new MessageOutputController("User", "deleted", $saved);
		echo $MessageOutput->toJSON();
	}	

    /**
     * Delete profile.
     *
     * @param  request $data
     * @return message
     */
    protected function deleteForever(request $data)
    {    
		$user = User::find($data['id']);
		$saved = false;
		if ($user!=null) {
			$user->forceDelete();
		}
		$MessageOutput = new MessageOutputController("User", "deleted permanently", $saved);
		echo $MessageOutput->toJSON();
	}		
}
