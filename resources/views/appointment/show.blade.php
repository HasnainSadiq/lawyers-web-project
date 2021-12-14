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
                            <form method="GET" action="#" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" name="search"
                                    placeholder="Search by name or category">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                           
                               <div class="table table-respinsive table-stripe">
                                   <thead>
                                       <th>No</th>
                                       <th>Subject</th>
                                       <tr>Description</tr>
                                       <tr>Appointment</tr>
                                       <tr colspan="2" >Action</tr>
                                   </thead>
                                   <tbody>
                                    @foreach ($appointments as $app)
                                       <tr>
                                           <td>{{$i++}}</td>
                                           <td>{{$app->subject}}</td>
                                           <td>{{$app->description}}</td>
                                           <td>{{$app->appointmentTiming}}</td>
                                           <td><a href="">Edit</a></td>
                                           <td><a href="">Delete</a></td>
                                       </tr>
                                    @endforeach
                                   </tbody>
                               </div>
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
