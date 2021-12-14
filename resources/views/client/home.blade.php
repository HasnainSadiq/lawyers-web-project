<x-client-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client Bio Data Dashboard') }}
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
                                 Create Profile
                                </div>
                                <div class="card-body">
                                  <p class="card-text">Complete your profile</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('client.create')}}" class="btn btn-primary col-12">Create</a>
                                </div>
                              </div>    
                        </div> 
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                 Update Profile
                                </div>
                                <div class="card-body">
                                  <p class="card-text">Update Your Profile</p>
                                  
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('client.edit', Auth::user()->id)}}" class="btn btn-primary col-12">Edit</a>
                                </div>
                              </div>  
                        </div>  

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-client-layout>
