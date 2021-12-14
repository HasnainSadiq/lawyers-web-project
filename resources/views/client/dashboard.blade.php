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
                            <div class="card">
                                <div class="card-header">
                                 CLIENT BIO DATA
                                </div>
                                <div class="card-body">
                                  <p class="card-text">MANAGE YOUR PROFILE HERE</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('client.home')}}" class="btn btn-primary col-12">Manage</a>
                                </div>
                              </div>    
                        </div> 
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                 APPOINTMENT
                                </div>
                                <div class="card-body">
                                  <p class="card-text">VIEW APPOINTMENT | SET APPOINTMENT</p>
                                  
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('appointment.home')}}" class="btn btn-primary col-12">Manage</a>
                                </div>
                              </div>  
                        </div>  

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-client-layout>
