<x-client-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client Bio Data Form') }}
        </h2>
    </x-slot>
    <div class="pt-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container col-sm-12 col-md-10 col-lg-8 h-400">
                <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-header">
                           <a href="{{ route('client.home') }}" class="btn btn-info float-left">Back</a>
                               
                            
                        </div>
                        <div class="card-body mb-0">
                            <form class="form-horizontal" action="{{route('client.store')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $data->name }}" >
                                            @if ($errors->has('name'))
                                                <span class="alert alert-danger">{{$errors->first('name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Email</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $data->email }}">
                                                @if ($errors->has('email'))
                                                <span class="alert alert-danger">{{$errors->first('email')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Phone Number</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="Number" class="form-control" name="phone"
                                                placeholder="Phone number">
                                                @if ($errors->has('phone'))
                                                <span class="alert alert-danger">{{$errors->first('phone')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="address" rows="2"></textarea>
                                            @if ($errors->has('address'))
                                                <span class="alert alert-danger">{{$errors->first('address')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Photo</label>
                                        </div>
                                        <div class="col-md-9">
                                            @if ($errors->has('image'))
                                                <span class="alert alert-danger">{{$errors->first('image')}}</span>
                                            @endif
                                            <input type="file" class="dropify"
                                                data-default-file="../assets/images/media/media1.jpg" data-height="150"
                                                name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 row justify-content-end">
                                    <div class="col-md-9 float-right">
                                        <button type="submit"
                                            class="btn btn-primary col-12 waves-effect waves-light">Submit </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-client-layout>
