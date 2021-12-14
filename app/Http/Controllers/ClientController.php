<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
         $client = User::join('clients', 'clients.user_id', '=', 'users.id' )
                        ->where('user_id', $id)
                        ->first();

        
        return view('client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $data = Auth::user();
        return view('client.create', compact('data'));
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'phone' => 'required|min:11|max:13',
            'address' => 'required|string|max:110',
            'image' => 'required',
        ]);
        User::find(Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        $client = new Client();
        $client->user_id = Auth::user()->id;
        $client->phone = $request->phone;
        $client->address = $request->address;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filextension = $file->getClientOriginalExtension();
            $filename = trim($request->name)."_". date('d-m-Y').".".$filextension;
            $file->move('uploads/client/', $filename);
            $client->image = $filename;
        }
        $client->save();
        return redirect()->route('client.index')->with('status', 'Record Enterd successfully');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Auth::user()->id;
        $user = DB::table('clients')
                    ->join('users', 'user_id' , '=',  'users.id')
                    ->where('user_id', $id)
                    ->select('users.name', 'users.email', 'clients.phone', 'clients.image', 'clients.address', 'clients.id')->get();
        
        
        return view('client.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $id = Auth::user()->id;

        $client = User::join('clients', 'clients.user_id', '=', 'users.id' )
        ->where('user_id', $id)
        ->first();
        
        return view('client.edit', compact('client'));
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
        
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'phone' => 'required|min:11|max:13',
            'address' => 'required|string|max:110',
        ]);
        $user = User::find(Auth::User()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        
        $client = Client::find($id);
       ;
        $client->user_id = Auth::User()->id;
        $client->phone = $request->phone;
        $client->address = $request->address;
        if($request->hasFile('image'))
        {
            if(file_exists('uploads/client/' . $client->image)){
                unlink('uploads/client/'. $client->image);
            }
            $file = $request->file('image');
            $filextension = $file->getClientOriginalExtension();
            $filename = trim($request->name)."_". date('d-m-Y').".".$filextension;
            $file->move('uploads/client/', $filename);
            $client->image = $filename;
        }
        $client->update();
        return redirect()->route('client.index')->with('status', 'Record Updated successfully');
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
        return view('client.home');
    }
}
