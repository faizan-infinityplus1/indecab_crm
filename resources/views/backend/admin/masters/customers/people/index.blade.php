@extends('layouts.admin-master')
@section('content')

    <style>
        .page-header-sticky {
            margin-top: 0;
            padding-top: 10px;
            position: sticky;
            top: 0px;
            z-index: 3;
        }
    </style>



    <div class="card rounded-0 border-0 p-5">
        <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">

            <h4>People</h4>

            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('customers.people.manage', 1) }}"
                        class="btn btn-primary">Add Person</a></div>
                <div class="dropdown">
                    <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Import</a></li>
                        <li><a class="dropdown-item" href="#">Export Drivers</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body px-0">
            @if ($errors->any())
                <div class="alert alert-danger ">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    @foreach ($errors->all() as $error)
                        <li>
                            <span class="text-white">{{ $error }}</span>
                        </li>
                    @endforeach
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Passenger</th>
                            <th>Booked By</th>
                            <th>Add. Contact</th>
                            <th width="100">setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customerPeople as $people)
                            <tr>
                                <td>{{ $people->name }}</td>
                                <td>{{ $people->phone_no }}</td>
                                <td>{{ $people->email }}</td>
                                <td>
                                    <div class="text-success">{!! $people->isPassenger ? '<span class="text-success">Yes</span>' : '<span class="text-danger">No</span>' !!}
                                    </div>
                                </td>
                                <td>
                                    {!! $people->isBookedBy ? '<span class="text-success">Yes</span>' : '<span class="text-danger">No</span>' !!}
                                </td>
                                <td>
                                    {!! $people->isAdditionalContact ? '<span class="text-success">Yes</span>' : '<span class="text-danger">No</span>' !!}
                                  </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-gear"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('customers.people.manage', [$customerId, $people->id]) }}">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Passenger</th>
                            <th>Booked By</th>
                            <th>Add. Contact</th>
                            <th>setting</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true,
                "order": [
                    ['id', "desc"]
                ]
            });
            $(".dropdown-toggle").dropdown();

        });
    </script>
@endsection
