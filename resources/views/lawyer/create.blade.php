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
                            <a href="{{route('lawyer.dashboard')}}" class="btn btn-info float-left">Back</a>
                            <h3 class="text-center">Lawyer Personal Information</h3>

                        </div>
                        <div class="card-body mb-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <form action="{{ route('lawyer.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ $lawyer->name }}" placeholder=" Enter Your Full Name">
                                                    @if ($errors->has('name'))
                                                        <span
                                                            class="alert alert-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" id="email"
                                                    value="{{ $lawyer->email }}" name="email"
                                                    placeholder="Enter your Email">
                                                @if ($errors->has('email'))
                                                    <span
                                                        class="alert alert-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="experience"
                                                        name="experience" placeholder="Enter Your Experience">
                                                    @if ($errors->has('experience'))
                                                        <span
                                                            class="alert alert-danger">{{ $errors->first('experience') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="phone" name="phone"
                                                        placeholder="Enter Your Phone Number">
                                                    @if ($errors->has('phone'))
                                                        <span
                                                            class="alert alert-danger">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <select id="qualification" class="form-control" name="qualification"
                                                    data-select2-id="qualification" tabindex="-1" aria-hidden="true">
                                                    <option value=""> Qualification</option>
                                                    <option value="PLT">PLT</option>
                                                    <option value="LLB">LLB</option>
                                                </select>
                                                @if ($errors->has('qualification'))
                                                    <span class="alert alert-danger">{{ $errors->first('qualification') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <select id="expertises" class="form-control" name="expertises"
                                                    data-select2-id="expertises" tabindex="-1" aria-hidden="true">
                                                    <option  value="">Expertise</option>
                                                    <option  value="Family Matter">Family Matter</option>
                                                    <option  value="Criminal Matter">Criminal Matter</option>
                                                    <option  value="Criminal Matter">Criminal Matter</option>
                                                    <option  value="Tax Filling">Tax Filling</option>
                                                </select>
                                                @if ($errors->has('expertises'))
                                                    <span class="alert alert-danger">{{ $errors->first('expertises') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">

                                                <textarea class="form-control" name="address" rows="6.5"
                                                    placeholder="Address.."></textarea>
                                                    @if ($errors->has('address'))
                                                    <span
                                                        class="alert alert-danger">{{ $errors->first('address') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-7">
                                                @if ($errors->has('image'))
                                                    <span
                                                        class="alert alert-danger">{{ $errors->first('image') }}</span>
                                                @endif
                                                <input type="file" class="dropify"
                                                    data-default-file="../assets/images/media/media1.jpg"
                                                    data-height="150" name="image">
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
