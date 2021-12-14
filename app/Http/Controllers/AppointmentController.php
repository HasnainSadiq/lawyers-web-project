<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = '';
        $lawyers = User::join('lawyers', 'users.id', '=', 'lawyers.user_id')->get(); 
        $client = User::where('id', Auth::user()->id)->first();
        return view('appointment.index', compact('lawyers', 'search', 'client'));

    }
    public function appointment()
    {
        $appointments = DB::table('users')->join('appointments', 'appointments.user_id', '=', 'users.id')                                        
                                        ->where('appointments.Lawyer_id', Auth::user()->id)   
                                        ->get();
        // dd($appointments);
        
        foreach($appointments as $app){
            $client = Client::where('user_id', $app->user_id)->first();
        }
        // dd($client);

        // dd($appointments);
        return view('lawyer.appointment', compact('appointments', 'client'));
    }

    public function payment(Request $request, $id)
    {
        $appointment = Appointment::find($id);
        // dd($appointment);
        $appointment->update([
            'payment' => (int)$request->Fee,
            
        ]);
        
        return redirect()->route('appointment.show')->with('status', 'Payment send succeffuly.');
       
    }

    public function searchLawyer(Request $request, Lawyer $lawyer)
    {
        $search = $request->search; 
        $client = User::where('id', Auth::user()->id)->first();
        if($search != '')
        {
            $lawyers = DB::table('users')
                    ->join('lawyers', 'users.id', '=', 'lawyers.user_id')
                    ->select('users.name', 'users.email', 'lawyers.*')
                        ->where('name', $search)
                        ->orWhere('expertises', $search)
                        ->orWhere('address', $search)               
                        ->paginate();
            
            return view('appointment.index', compact('lawyers', 'search', 'client'))->with('status','Search Result!');

        }else{
           
            return redirect()->route('appointment.index');
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $setAppoint = Appointment::insert([
            'user_id' => Auth::user()->id,
            'lawyer_id' => $request->lawyer_id,
            'subject'  => $request->subject,
            'appintment_timing' => $request->appTime,
            'description' => $request->description,
        ]);
        
        return redirect()->route('appointment.show')->with('status', 'Appointment request send succeffuly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        $appointments = DB::table('lawyers')->join('users', 'users.id', '=', 'lawyers.user_id')
                                       ->join('appointments', 'appointments.Lawyer_id', '=', 'lawyers.id')
                                        ->get();
           
        // dd($appointments);
        return view('client.apointments', compact('appointments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function clinetUpdateAppointment(Request $request, $id)
    {
        // dd($request->all());
        
        $appointment = Appointment::find($id);
        // dd($appointment);
        $appointment->update([
            'subject' => $request->subject,
            'phone' => $request->phone,
            'description' => $request->description,
        ]);
        return redirect()->route('appointment.show')->with('status', 'Appointment request send succeffuly.');
    }
    public function update(Request $request, $id)
    {
        $appointment = Appointment::where('id', $id);
        $appointment->update([
            'status' => $request->status,
            'Fee' => $request->Fee,
            'appintment_timing' => $request->appintment_timing,
        ]);
        return redirect()->route('lawyer.appointment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
