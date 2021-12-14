<x-lawyer-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Lawyer Profile') }}
		</h2>
	</x-slot>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<div class="card">
					<div class="card-header ">
						<div class="text-center float-left col-10">
							<h3>Your Profile</h3>
						</div>
						<div class="float-right col-1">
							<a href="{{route('lawyer.edit', Auth::user()->id)}}" class="btn btn-sm btn-danger">Edit</a>
						</div>
					</div>
					<div class="card-body">
						<div class="container col-md-12 ">
							<div class="row">
								<div class="main-body col-md-12">
									<div class="row gutters-sm">
										<div class="col-md-4 mb-3">
											<div class="card">
												<div class="card-body">
													<div class="d-flex flex-column align-items-center text-center">
														<img src="{{ asset('uploads/lawyer/' . $lawyer->image) }}"
															alt="Lawyer" class="rounded-circle" width="450" max-height="250">				
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-8">
											<div class="card">
												<div class="card-body ">
													<div class=" align-items-center w-100 p-3">
														<div class="row py-1">
															<div class="col-sm-3">
																<h6 class="mb-0">Full Name</h6>
															</div>
															<div class="col-sm-9 text-secondary">
																{{ $lawyer->name }}
															</div>
														</div>
														<hr>
														<div class="row py-1">
															<div class="col-sm-3">
																<h6 class="mb-0">Email</h6>
															</div>
															<div class="col-sm-9 text-secondary">
																{{ $lawyer->email }}
															</div>
														</div>
														<hr>
														<div class="row py-1">
															<div class="col-sm-3">
																<h6 class="mb-0">Phone</h6>
															</div>
															<div class="col-sm-9 text-secondary">
																{{ $lawyer->phone }}
															</div>
														</div>
														<hr>
														<div class="row py-1">
															<div class="col-sm-3">
																<h6 class="mb-0">Qulaification</h6>
															</div>
															<div class="col-sm-9 text-secondary">
																{{ $lawyer->qualification }}
															</div>
														</div>
														<hr>
														<div class="row py-1">
															<div class="col-sm-3">
																<h6 class="mb-0">Expertises</h6>
															</div>
															<div class="col-sm-9 text-secondary">
																{{ $lawyer->expertises }}
															</div>
														</div>
														<hr>
														<div class="row py-1">
															<div class="col-sm-3">
																<h6 class="mb-0">Address</h6>
															</div>
															<hr>
															<div class="col-sm-9 text-secondary">
																{{ $lawyer->address }}
															</div>
														</div>
														<hr>
													</div>
												</div>
											</div>
										</div>
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
