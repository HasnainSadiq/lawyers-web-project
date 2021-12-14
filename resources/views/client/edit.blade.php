<x-client-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client Profile Update') }}
        </h2>
    </x-slot>

    <div class="pt-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <div class="col-md-10 py-2 mx-auto">
                        <div class="card m-b-20">
                            <div class="card-header py-2">
                                <span><a href="{{route('client.index')}}" class="btn btn-info float-left">Back</a>
                                <h2 class="card-title text-center py-2 font-bold">Horizontal form</h2></span>
                            </div>
                            <div class="card-body mb-0">
                                <form class="form-horizontal" action="{{route('client.update', $client->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label" >Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="name" value="{{$client->name}}">
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
                                                <input type="email" class="form-control" name="email" value="{{$client->email}}">
                                                 @if ($errors->has('email'))
                                                <span class="alert alert-danger">{{$errors->first('email')}}</span>
                                            @endif
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label" >Phone Number</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="Number" class="form-control" name="phone" value="{{$client->phone}}" placeholder="Phone number">
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
                                                <textarea class="form-control"  name="address" rows="2">{{$client->address}}</textarea>
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
                                                <input type="file" class="dropify" data-default-file="{{asset('uploads/client/'. $client->image)}}" data-height="150" name="image" value="{{asset('uploads/client/'. $client->image)}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 row justify-content-end">
                                        <div class="col-md-9 float-right">
                                            <button type="submit" class="btn btn-primary col-12 waves-effect waves-light">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-client-layout>
