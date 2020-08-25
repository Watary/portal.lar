<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsController extends Controller
{
    public function index(){
        return view('admin.permissions.list', [
            'permissions' => Permission::all(),
            'page' => [
                'title' => 'Permissions',
            ],
        ]);
    }

    public function show($id){
        return view('admin.permissions.show', [
            'permission' => Permission::all()->where('id', $id)->first(),
        ]);
    }

    public function create(){
        return view('admin.permissions.create', [

        ]);
    }

    public function store(){
        return response()->json([
            'status' => 'success',
        ]);
    }
}
