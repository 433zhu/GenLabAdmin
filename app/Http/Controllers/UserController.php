<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;


class UserController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "User Index";
        if(Auth::user()->isAdmin){
            $searchWord = \Request::get('search');
            $users = \App\User::where('Name','like','%'.$searchWord.'%')->orWhere('Email','like','%'.$searchWord.'%')->orWhere('id_no','like','%'.$searchWord.'%')->orderBy('Name')->paginate(5)->appends(Input::except('page'));
            return view('users.index', compact('title','users','searchWord'));
        }
        else{
            return redirect ('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new \App\User();

        $user->email = $request->email;
        $user->name = $request->name;
        $user->id_no = $request->id_no;
        $user->password = Hash::make($request->password);
        if($request->isAdmin == 'on')
            $user->isAdmin = 1;
        else
            $user->isAdmin = 0;
        if ($request->isActivated == 'on')
            $user->isActivated = 1;
        else
            $user->isActivated = 0;
        $user->save();

        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::findOrfail($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = \App\User::findOrfail($request->user_id);

        $user->email = $request->email;
        $user->name = $request->name;
        $user->id_no = $request->id_no;
        $user->password = Hash::make($request->password);
        if($request->isAdmin == 'on')
            $user->isAdmin = 1;
        else
            $user->isAdmin = 0;
        if ($request->isActivated == 'on')
            $user->isActivated = 1;
        else
            $user->isActivated = 0;
        $user->save();

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::findOrfail($id);

        $user->delete();

        return redirect('users');
    }

    public function showUnactivated(){
        $title = 'Unactivated Users';
        if(Auth::user()->isAdmin){
            $searchWord = \Request::get('search');
            //$users = \App\User::where('isActivated',0)->where('Name','like','%'.$searchWord.'%')->orWhere('Email','like','%'.$searchWord.'%')->orWhere('id_no','like','%'.$searchWord.'%')->orderBy('Name')->paginate(5)->appends(Input::except('page'));
            $users = \App\User::where('isActivated',0)->paginate(5);

            return view('users.index', compact('title','users','searchWord'));
        }
        else{
            return redirect ('home');
        }
    }

    public function showAdmins(){
        $title = 'Admin Users';
        if(Auth::user()->isAdmin){
            $searchWord = \Request::get('search');
            $users = \App\User::where('isAdmin',1)->paginate(5);
            //->where('Name','like','%'.$searchWord.'%')->orWhere('Email','like','%'.$searchWord.'%')->orWhere('id_no','like','%'.$searchWord.'%')->orderBy('Name')->paginate(5)->appends(Input::except('page'));
            return view('users.index', compact('title', 'users','searchWord'));
        }
        else{
            return redirect ('home');
        }
    }    
}