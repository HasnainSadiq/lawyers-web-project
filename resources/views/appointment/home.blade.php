<x-client-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="pt-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}
                <div class="col-12 py-12">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-4">
                            <div class="card" style="height: 200px">
                                <div class="card-header">
                                 Set Apointment
                                </div>
                                <div class="card-body">
                                  <p class="card-text">Set appointment with the most experience Lawyer accroding to your need.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('appointment.index')}}" class="btn btn-primary col-12">SET</a>
                                </div>
                              </div>    
                        </div> 
                        <div class="col-sm-12 col-md-4">
                            <div class="card " style="height: 200px">
                                <div class="card-header">
                                 VIEW APPOINTMENT
                                </div>
                                <div class="card-body">
                                  <p class="card-text">View | Manage Your Appointment</p>
                                  
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('appointment.show')}}" class="btn btn-primary col-12">VIEW</a>
                                </div>
                              </div>  
                        </div>  

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-client-layout>
