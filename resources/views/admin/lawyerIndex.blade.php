<x-lawyer-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Lawyer Management') }}
		</h2>
	</x-slot>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

				<div class="messtion">
					@if(session('status'))
						<div class="alert alert-success">
							<h3 >{{session('status')}}</h3>
						</div>
					@endif
				</div>
				<div class="card">
					<div class="card-header ">
						<div class="text-center float-left col-10">
							<h3>Lawyer Management</h3>
						</div>
						<div class="float-right col-1">
						
						</div>
					</div>
					<div class="card-body">
                        <div class="row justify-content-center">                           
							<table class="table table-hover">
								<thead>
								  <tr>
										<th>No</th>
										<th>Photo</th>
										<th>Name</th>								   
										<th colspan="1" >Action</th>
								  </tr>
								</thead>
								<tbody>
									<?php $i=1;?>
                                    @foreach ($lawyer as $lawyer)
                                       <tr>
                                           <td>{{$i++}}</td>
                                           <td><img src="{{asset('uploads/lawyer/'. $lawyer->image)}}" width="75" alt=""></td>
                                           <td>{{$lawyer->name}}</td>                                          
                                           <td><a href="{{route('admin.lawyer.delete', $lawyer->user_id)}}" class="btn btn-danger">Delete</a></td>
                                       </tr>
                                    @endforeach
								</tbody>
							  </table>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</x-lawyer-layout>
