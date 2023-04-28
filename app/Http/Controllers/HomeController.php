<?php

namespace App\Http\Controllers;

use App\Models\Advisory;
use App\Models\Interruption;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

      // $advisories = Advisory::get();
        // $interruptions = Interruption::get();

        // return view('site', [

        //     'advisories'               => $advisories,
        //     'interruptions'              => $interruptions,

        // ]);

        // Role::create(['name'=>'user']);
        // Permission::create(['name'=>'admin']);
        // $role = Role::findById(1);
        // $permission = Permission::findById(1);

        // // auth()->user()->givePermissionTo('admin');
        // // auth()->user()->assignRole('admin');
        // auth()->user()->assignRole('admin');
}
