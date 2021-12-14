<x-lawyer-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lawyer Bio Data Form') }}
        </h2>
    </x-slot>
    <div class="pt-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container col-sm-12 col-md-10 col-lg-8 h-400">
                <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('lawyer.home')}}" class="btn btn-info float-left">Back</a>
                            <h3 class="text-center">Lawyer Personal Information</h3>

                        </div>
                        <div class="card-body mb-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <form action="{{ route('lawyer.update', $lawyer->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ $lawyer->name }}" placeholder=" Enter Your Full Name">
                                                    @if ($errors->has('name'))
                                                        <p
                                                            class="alert alert-danger" style="font-size:9pt">{{ $errors->first('name') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" id="email"
                                                    value="{{ $lawyer->email }}" name="email"
                                                    placeholder="Enter your Email">
                                                @if ($errors->has('email'))
                                                    <p
                                                        class="alert alert-danger" style="font-size:9pt">{{ $errors->first('email') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="form-group">
                                                    <input type="text" value="{{$lawyer->experience}}" class="form-control" id="experience"
                                                        name="experience" placeholder="Enter Your Experience">
                                                    @if ($errors->has('experience'))
                                                        <p
                                                            class="alert alert-danger">{{ $errors->first('experience') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="form-group">
                                                    <input type="text" value="{{$lawyer->phone}}" class="form-control" id="phone" name="phone"
                                                        placeholder="Enter Your Phone Number">
                                                    @if ($errors->has('phone'))
                                                        <p
                                                            class="alert alert-danger ">{{ $errors->first('phone') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <select id="qualification" value="{{$lawyer->qualification}}" class="form-control" name="qualification"
                                                    data-select2-id="qualification" tabindex="-1" aria-hidden="true">
                                                    <option value="{{$lawyer->qualification}}">{{$lawyer->qualification}}</option>
                                                    <option value="PLT">PLT</option>
                                                    <option value="LLB">LLB</option>
                                                </select>
                                                @if ($errors->has('qualification'))
                                                    <p class="alert alert-danger " style="font-size:9pt">{{ $errors->first('qualification') }}</p>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <select id="experties" class="form-control" name="expertises"
                                                    data-select2-id="expertises" tabindex="-1" aria-hidden="true">
                                                    <option  value="{{$lawyer->expertises}}">{{$lawyer->expertises}}</option>
                                                    <option  value="Family Matter">Family Matter</option>
                                                    <option  value="Criminal Matter">Criminal Matter</option>
                                                    <option  value="Criminal Matter">Criminal Matter</option>
                                                    <option  value="Tax Filling">Tax Filling</option>
                                                    
                                                </select>
                                                @if ($errors->has('expertises'))
                                                    <p class="alert alert-danger " style="font-size:9pt">{{ $errors->first('expertises') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">

                                                <textarea class="form-control"  name="address" rows="6.5"
                                                    placeholder="Address.."> {{$lawyer->address}}</textarea>
                                                    @if ($errors->has('address'))
                                                    <p
                                                        class="alert alert-danger " style="font-size:9pt">{{ $errors->first('address') }}</p>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-7">
                                               
                                                <input type="file" class="dropify"
                                                    data-default-file="{{asset('uploads/lawyer/'. $lawyer->image)}}"
                                                    data-height="150" name="image" data-value="{{asset('uploads/lawyer/'. $lawyer->image)}}">
                                                    @if ($errors->has('image'))
                                                    <p
                                                        class="alert alert-danger " style="font-size:9pt">{{ $errors->first('image') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</x-lawyer-layout>
