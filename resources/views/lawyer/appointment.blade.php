<x-lawyer-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Appointment') }}
      </h2>
    </x-slot>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="container col-sm-4 my-5"> @foreach ($appointments as $appointment) <div class="card rounded-lg" style="width: 12rem;">
              <img class="card-img-top img-fluid" src="{{ asset('uploads/client/' . $client->image) }}" style="width: 12rem; height: 150px !important;" alt="Card image cap">
              <div class="card-body">
                <strong>
                  <span>Client Name: </span>
                </strong>
                <a>{{ $client->name }}</a>
                <br>
                <strong>
                  <span>Fees:</span>
                </strong>
                <span>{{ $appointment->Fee }}</span>
              </div>
              <div class="card-footer text-center">
                <a class="btn btn-primary" data-toggle="modal" data-target="#clientAppointment{{ $appointment->user_id }}">
                  <span class="fa fa-eye">View More</span>
                </a>
              </div>
            </div>
            {{-- modal for case details --}}
            <div class="modal fade" id="clientAppointment{{ $appointment->user_id }}" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Set Appointment </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <strong>
                      <h4 class="m-b-0 m-t-20">Case Title</h4>
                    </strong>
                    <div class="border mb-3">
                      <p>{{ $appointment->subject }}</p>
                    </div>
                    <strong>
                      <h4 class="m-b-0 m-t-20">Case Description</h4>
                    </strong>
                    <div class="border">
                      <p>{{ $appointment->description }}</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a class="btn btn-success" href="" data-toggle="modal" data-target="#confrim{{ $appointment->id }}">Confrim</a>
                    {{-- start model section for confrim appointment --}}
                    <div class="modal fade" id="confrim{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Appointment With Changes </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="{{ route('appointment.update', $appointment->id) }}" method="POST"> @csrf <div class="row">
                                <div class="form-group col-sm-5">
                                  <label >Change Fees!</label>
                                  <input type="text" class="form-control" name="Fee" placeholder="Enter Your Fees" value="{{ $appointment->Fee }}">
                                </div>
                                <div class="form-group col-sm-7">
                                  <label for="">Change Status!</label>
                                  <select name="status" class="form-control" >
                                    <option value="{{ $appointment->status }}">
                                      {{ $appointment->status }}
                                    </option>
                                    <option value="Approved">Approved</option>
                                    <option value="Approved">Pending</option>                                    
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Set Appointment Time</label>
                                <input type="datetime-local" name="appintment_timing" class="form-control" placeholder="Enter deatils of Appointment">
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
                    {{-- end model section for confrim appointment --}}
                    <a class="btn btn-danger" href="#" role="button"> Reject</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div> @endforeach
          </div>
        </div>
      </div>
    </div>
  </x-lawyer-layout>