<x-client-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="row justify-content-center">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

                                <h3 class="text-center">Personal Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-4">
                                        <div class="col-lg-8 col-xl-12">
                                            <div class="card card-profile cover-image "
                                                data-image-src="../assets/images/media/gradient3.jpg"
                                                style="background: url(&quot;../assets/images/media/gradient3.jpg&quot;) center center;">
                                                <div class="card-body  text-center">
                                                    <img class="card-profile-img mx-auto rounded-circle"
                                                        src="{{ asset('uploads/client/' . $client->image) }}"
                                                        alt="{{ $client->name }} photo" height="100">

                                                    <a href="{{ route('client.edit', $client->id) }}"
                                                        class="btn btn-success btn-sm mt-2"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i> Edit
                                                        profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="table-responsive border ">
                                            <table class="table row table-borderless w-100 m-0 ">
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                    <tr>
                                                        <td><strong>Full Name :</strong> {{ $client->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Address :</strong> {{ $client->address }}</td>
                                                    </tr>
                                                </tbody>
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                    <tr>
                                                        <td><strong>Email :</strong> {{ $client->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Phone :</strong> {{ $client->phone }} </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</x-client-layout>
