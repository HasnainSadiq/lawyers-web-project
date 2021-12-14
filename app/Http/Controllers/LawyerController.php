<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $lawyer = User::join('lawyers', 'users.id', '=',  'lawyers.user_id')
                    ->where('user_id', Auth::user()->id)->first();
       
        return view('lawyer.index', compact('lawyer'));
    }

    public function frontend()
    { 
        $lawyer = User::join('lawyers', 'users.id', '=',  'lawyers.user_id')
                   ->get();
       
        return view('frontend.index', compact('lawyer'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lawyer = User::find(Auth::user()->id);
        return view('lawyer.create', compact('lawyer'));
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
            'name' => "required|string|max:55",
            'email' => "required|email|max:100",
            'phone' => 'required|min:11|max:13',
            'qualification' => "required|string|max:55",
            'experience' => "required|string|max:55",
            'expertises' => "required|string|max:100",
            'address' => "required|string|max:255",
        ]);

        User::find(Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        $lawyer = new Lawyer();
        $lawyer->user_id = Auth::user()->id;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filextension = $file->getClientOriginalExtension();
            $filename = trim($request->name)."_". date('d-m-Y').".".$filextension;
            $file->move('uploads/lawyer/', $filename);
            $lawyer->image = $filename;
        }
        $lawyer->expertises = $request->expertises;
        $lawyer->qualification = $request->qualification;
        $lawyer->experience = $request->experience;
        $lawyer->phone = $request->phone;
        $lawyer->address = $request->address;
        $lawyer->save();
        return redirect()->route('lawyer.index')->with('status', 'Record stored successfully');
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
        $lawyer = User::join('lawyers', 'users.id', '=',  'lawyers.user_id')
                    ->where('user_id', Auth::user()->id)->first();
        return view('lawyer.edit', compact('lawyer'));
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
            'name' => "required|string|max:55",
            'email' => "required|email|max:100",
            'phone' => 'required|min:11|max:13',
            'qualification' => "required|string|max:55",
            'experience' => "required|string|max:55",
            'expertises' => "required|string|max:100",
            'address' => "required|string|max:255",
            
        ]);

        User::find(Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
       
        $lawyer = Lawyer::find($id);
        $lawyer->user_id = Auth::user()->id;
        $lawyer->expertises = $request->expertises;
        $lawyer->qualification = $request->qualification;
        $lawyer->experience = $request->experience;
        $lawyer->phone = $request->phone;
        $lawyer->address = $request->address;
        // need to install image handling packe "intervension"
        if ($image = $request->file('image')) {           
            if(file_exists('uploads/lawyer/' . $lawyer->image)){
                unlink('uploads/lawyer/'. $lawyer->image);
            }
            $image       = $request->file('image');
            $filextension    = $image->getClientOriginalExtension();
            $filename = trim($request->name).date('d-m-y')."_.".$filextension;
            $image->move('uploads/lawyer/', $filename);
            $lawyer['image'] = $filename;
        } 
            
        

        $lawyer->update();
       
        return redirect()->route('lawyer.index')->with('status', 'Record stored successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
