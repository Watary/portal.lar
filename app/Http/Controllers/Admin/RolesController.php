<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index(){
        return view('admin.roles.list', [
            'roles' => Role::all(),
        ]);
    }
}
