<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MessageOutput;



class UserRoleController extends Controller
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
            'name' => 'required|string|max:255|unique:roles',
		]);		
        $role =  Role::create([
            'name' => $request['name'],
			'slug' => str_slug($request['name']),
        ]);
		$saved = $role->save();
		$MessageOutput = new MessageOutputController("Role", "created", $saved);
		echo $MessageOutput->toJSON();		
    }

    /**
     * Gets the role requested.
     *
     * @param  request $data
     * @return \App\Role
     */
    protected function read(request $data)
    {
		
		$role = Role::find($data['id']);
		return $role;
    }	
	
    /**
     * Update role.
     *
     * @param  request $data
     * @return message
     */
    protected function update(request $data)
    {    	
		$role = Role::find($data['id']);
		$save = false;
		if ($role!=null) {
			$role->name = $data['name'];
			$role->slug = str_slug($data['name']);
			$saved = $role->save();	
		}		
		$MessageOutput = new MessageOutputController("Role", "updated", $saved);
		echo $MessageOutput->toJSON();
	}

    /**
     * Soft delete role.
     *
     * @param  request $data
     * @return message
     */
    protected function delete(request $data)
    {    
		$role = Role::find($data['id']);
		$saved = false;
		if ($role!=null) {
			$saved = $role->delete();
		}
		$MessageOutput = new MessageOutputController("Role", "deleted", $saved);
		echo $MessageOutput->toJSON();		
	}	

    /**
     * Delete forever profile.
     *
     * @param  request $data
     * @return message
     */
    protected function deleteForever(request $data)
    {    
		$role = Role::find($data['id']);
		$saved = false;
		if ($role!=null) {
			$saved = $role->forceDelete();
		}
		$MessageOutput = new MessageOutputController("Role", "deleted permanently", $saved);
		echo $MessageOutput->toJSON();		
	}		
}
