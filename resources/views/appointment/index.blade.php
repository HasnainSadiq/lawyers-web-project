<x-client-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="messtion">
            @if(session('status'))
                <div class="alert alert-success">
                    <h3 >{{session('status')}}</h3>
                </div>
            @endif
        </div>
        <div class="max-w-7xl">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">Search Your Lawyer</div>
                        <div class="float-right">
                            <form  action="{{route('search.lawyer')}}" method="GET" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" value="{{$search}}" type="text" name="search"
                                    placeholder="Search by name or category" class="">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            @foreach ($lawyers as $lawyer)
                            <div class=" col-sm-10 col-md-4 py-2 px-2 ">
                                <div class="card card-profile cover-image "
                                    data-image-src="../assets/images/media/gradient3.jpg"
                                    style="background: url(&quot;../assets/images/media/gradient3.jpg&quot;) center center;">
                                    <div class="card-body  text-center">
                                        <img class="card-profile-img mx-auto rounded-circle"
                                            src="{{ asset('uploads/lawyer/' . $lawyer->image) }}"
                                            alt="{{$lawyer->name}} photo" height="100" style="border-bottom:  1px solid black; border-radius: 2px">
                                            <h3 class="mb-1 text-black">{{ $lawyer->name }}</h3>
                                            <p class="mb-2 text-black">{{$lawyer->experience}} experience in {{ $lawyer->expertises }}</p>
                                            <a class="btn btn-primary text-white btn-sm mt-2" data-toggle="modal"
                                            data-target="#lawyerProfile{{ $lawyer->id }}">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                            <a href="{{ route('client.appointLawyer', $lawyer->id) }}"
                                                class="btn btn-success btn-sm mt-2" data-toggle="modal"
                                                data-target="#setAppointment{{ $lawyer->id }}"><i
                                                    class="fa fa-calendar" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal for seting appointment -->
                                <div class="modal fade" id="setAppointment{{ $lawyer->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Set Appointment
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                             <form action="{{ route('appointment.store') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group col-sm-5">
                                                            <input type="text" hidden name="lawyer_id" value="{{ $lawyer->id }}">
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Enter Full Name" value="{{$client->name}}">
                                                        </div>
                                                        <div class="form-group col-sm-7">
                                                            <input type="text" hidden name="lawyer_id" value="{{ $lawyer->id }}">
                                                            <input type="text" class="form-control" name="Email"
                                                                placeholder="Enter Full Name" value="{{$client->email}}">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                    <div class="form-group col-sm-5">
                                                        <input type="text" class="form-control" name="phone"
                                                            placeholder="ENter Phone Number">
                                                    </div>
                                                    <div class="form-group col-sm-7">
                                                        <input type="text" class="form-control" name="subject" placeholder="subject">
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                        <textarea type="text" name="description" class="form-control"
                                                            placeholder="Enter deatils of Appointment"></textarea>
                                                    </div>
                                                    
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary ">Submit</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                 
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card-profile-img {
            max-width: 10rem;
            margin-bottom: 1rem;
            border: 3px solid #fff;
            border-radius: 100%;
            box-sizing: border-box;
            content: fixed;
            box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
        }

    </style>

</x-client-layout>
