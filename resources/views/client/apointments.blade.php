<x-client-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
      </h2>
    </x-slot>
    <style type="text/css">
      .rounded {
        border-radius: 1rem
      }
  
      .nav-pills .nav-link {
        color: #555
      }
  
      .nav-pills .nav-link.active {
        color: white
      }
  
      input[type="radio"] {
        margin-right: 5px
      }
    </style>
    <script type="text/javascript">
      $(function() {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    <div class="py-12">
        @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
         @endif
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="card">
                <div class="card-header">
                  <h3 class="text-center">Your Appointments</h3>
                </div>
                <div class="card-body">
                  <div class="container col-12">
                    <table class="table table-hover text-center">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Lawyer Name</th>
                          <th scope="col">Case Title</th>
                          <th scope="col">Fees</th>
                          <th scope="col">Time</th>
                          <th scope="col">status</th>
                          <th colspan="3">Action</th>
                        </tr>
                      </thead>
                      <tbody class="text-center"> <?php
                                              $i = 0;
                                              
                                              ?> @foreach ($appointments as $app) <tr>
                          <td>{{ ++$i }}</td>
                          <td>{{ $app->name }}</td>
                          <td>{{ $app->subject }}</td>
                          <td>{{ $app->Fee }}</td>
                          <td>{{ $app->appintment_timing }}</td>
                          <td>{{ $app->status }}</td> @if ($app->status == 'Pending' && $app->appintment_timing == '') <td>
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#edit{{ $app->id }}">Edit</button>
                            <a href="" class="btn btn-outline-danger">Delete</a>
                          </td> @elseif ($app->status == 'Approved') <td class="badge badge-success vertical-align-center">Completed </td> @else <td>
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#pay{{ $app->id }}">Pay</button>
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#edit{{ $app->id }}">Edit</button>
                            <a href="" class="btn btn-outline-danger">Delete</a>
                          </td> @endif
                        </tr>
                        <!-- Modal for seting appointment -->
                        <div class="modal fade" id="edit{{ $app->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> Set Appointment </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ route('appointment.change', $app->id) }}" method="POST"> @csrf <div class="row">
                                    <div class="form-group col-sm-5">
                                      <input type="text" hidden name="lawyer_id" value="{{ $app->Lawyer_id }}">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="form-group col-sm-5">
                                      <input type="text" class="form-control" name="phone" value="{{ $app->phone }}" placeholder="ENter Phone Number">
                                    </div>
                                    <div class="form-group col-sm-7">
                                      <input type="text" class="form-control" name="subject" value="{{ $app->subject }}" placeholder="subject">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <textarea type="text" name="description" class="form-control" placeholder="Enter deatils of Appointment">{{ $app->description }}</textarea>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Submit</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- payment method for lawyer fees --}}
                        <div class="modal fade" id="pay{{ $app->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> Appointment Fees Payment </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ route('appointment.payment', $app->id) }}" method="POST"> @csrf <div class="row">
                                    <div class="form-group col-sm-5">
                                      <input type="text" hidden name="lawyer_id" value="{{ $app->Lawyer_id }}">
                                    </div>
                                  </div>
                                  {{-- payment --}}
                                  <div class="pt-0">
                                    <!-- For demo purpose -->
                                    <div class="row">
                                      <div class="col-md-12 mx-auto"></div>
                                    </div>
                                    <!-- End -->
                                    <div class="row pt-2">
                                      <div class="col-md-12 mx-auto">
                                        <div class="card ">
                                          <div class="card-header">
                                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                              <img class="img-fluid mx-auto" src="{{ asset('images/easypisa.png') }}" alt="">
                                            </div>
                                            <!-- End -->
                                            <!-- Credit card form content -->
                                            <div class="tab-content">
                                              <!-- credit card info-->
                                              <div id="credit-card" class="tab-pane fade show active pt-3">
                                               
                                                  <div class="form-group">
                                                    <label for="Recevier Name">
                                                      <h6>Recevier Name </h6>
                                                    </label>
                                                    <input type="text" name="name" disabled value="{{ $app->name }}" class="form-control ">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="cardNumber">
                                                      <h6>Receiver Account No </h6>
                                                    </label>
                                                    <div class="input-group">
                                                      <input type="text" name="number" class="form-control " disabled value="{{$app->phone}}">                                                      
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="cardNumber">
                                                      <h6>Appointment Fee </h6>
                                                    </label>
                                                    <div class="input-group">
                                                      <input type="text" name="Fee" class="form-control " value="{{$app->Fee}}">                                                      
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                        <div class="col-sm-5">                                                                                                           
                                                            <div class="form-group">
                                                                <label for=""> Enter 5 digit PIN code</label>
                                                                <input type="password" placeholder="*****" name="pin" class="form-control" required>                                                          
                                                            </div>
                                                            <div class="form-group">
                                                                <label for=""> Re-enter 5 digit PIN code</label>
                                                            <input type="password" placeholder="*****" name="pin" class="form-control" required>                                                          
                                                            </div>
                                                      </div>
                                                      <div class="col-7">
                                                          <img src="" alt="">
                                                      </div>
                                                  </div>
                                                    
                                                  </div>
                                                  
                                            </div>
                                            <!-- End -->
                                        
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    {{-- payment --}}
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="subscribe btn btn-primary btn-block shadow-sm">Confirm Payment</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div> @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  <h3></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-client-layout>