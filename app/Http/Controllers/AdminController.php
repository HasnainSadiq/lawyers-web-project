<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function lawyer()
    {
        $lawyer = Lawyer::join('users', 'users.id', '=', 'lawyers.user_id')->get();
        return view('admin.lawyerIndex', compact('lawyer'));
    }

    public function client()
    {
        $client = User::join('clients', 'clients.user_id', '=', 'users.id')->get();
        return view('admin.clientIndex', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }

    public function deleteLawyer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.lawyer')->with('status', 'Record Deleted succeffuly');
    }
    public function deleteClient($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.lawyer')->with('status', 'Record Deleted succeffuly');
    }
}
