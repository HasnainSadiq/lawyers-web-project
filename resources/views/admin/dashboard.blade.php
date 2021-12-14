<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-center leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <div class="pt-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                <div class="col-12 py-12">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                 Lawyer
                                </div>
                                <div class="card-body">
                                  <p class="card-text">Manage Lawyer</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('admin.lawyer')}}" class="btn btn-primary col-12">Manage</a>
                                </div>
                              </div>    
                        </div> 
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                 Client
                                </div>
                                <div class="card-body">
                                  <p class="card-text">Manage Client</p>
                                  
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('admin.client')}}" class="btn btn-primary col-12">Manage</a>
                                </div>
                              </div>  
                        </div>                          
                    </div>
                </div>
            
        </div>
    </div>
</x-admin-layout>
