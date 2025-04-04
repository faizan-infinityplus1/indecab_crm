@extends('layouts.admin-master')
@section('content')




    <div class="card rounded-0 border-0 p-5">
        <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
            <h4>Reports</h4>
            <div class="btn-group" role="group"><a href="{{ route('reports.manage') }}" class="btn btn-primary">Generate New
                    Report</a></div>
        </div>
        <div class="d-flex align-items-center">
            <a href="{{ route('reports.index') }}"
                class="d-block text-decoration-none p-3 border-bottom border-primary border-2">Favourites</a>
            <a href="{{ route('reports.recent') }}"
                class="d-block text-decoration-none p-3 border-bottom text-secondary border-2 hover-link">Recent</a>
        </div>
        <div class="card-body px-0">
            @if ($errors->any())
                <div class="alert alert-danger ">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    @foreach ($errors->all() as $error)
                        <li>
                            <span class="text-white"py-1 px-3 rounded-5>{{ $error }}</span>
                        </li>
                    @endforeach
                </div>
            @endif
            <div class="bg-light mb-3 p-3 text-center">
                Nothing here
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th width="100">setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <p class="mb-0">Invoices-10-04-2023-1644</p>
                                    <p class="text-black-50 mb-0"><span>Custom</span><span>(03/04/2023 - 10/04/2023)</span>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <b class="text-danger">
                                    Expired
                                </b>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#activity-log" data-id="1" data-name="asdqwe"
                                                data-created="asd" data-updates="asd" {{-- data-id="{{ $data->id }}"
                                        data-name="{{ $data->duty_name }}"
                                        data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                        data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}" --}}>View Activity
                                                Logs</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <p class="mb-0">Invoices-10-04-2023-1644</p>
                                    <p class="text-black-50 mb-0"><span>Custom</span><span>(03/04/2023 - 10/04/2023)</span>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <b class="text-danger">
                                    Expired
                                </b>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#activity-log" data-id="1" data-name="asdqwe"
                                                data-created="asd" data-updates="asd" {{-- data-id="{{ $data->id }}"
                                        data-name="{{ $data->duty_name }}"
                                        data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                        data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}" --}}>View Activity
                                                Logs</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <p class="mb-0">Invoices-10-04-2023-1644</p>
                                    <p class="text-black-50 mb-0"><span>Custom</span><span>(03/04/2023 - 10/04/2023)</span>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <b class="text-danger">
                                    Expired
                                </b>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#activity-log" data-id="1" data-name="asdqwe"
                                                data-created="asd" data-updates="asd" {{-- data-id="{{ $data->id }}"
                                        data-name="{{ $data->duty_name }}"
                                        data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                        data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}" --}}>View Activity
                                                Logs</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <p class="mb-0">Invoices-10-04-2023-1644</p>
                                    <p class="text-black-50 mb-0"><span>Custom</span><span>(03/04/2023 - 10/04/2023)</span>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <b class="text-danger">
                                    Expired
                                </b>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#activity-log" data-id="1" data-name="asdqwe"
                                                data-created="asd" data-updates="asd" {{-- data-id="{{ $data->id }}"
                                        data-name="{{ $data->duty_name }}"
                                        data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                        data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}" --}}>View Activity
                                                Logs</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <p class="mb-0">Invoices-10-04-2023-1644</p>
                                    <p class="text-black-50 mb-0"><span>Custom</span><span>(03/04/2023 - 10/04/2023)</span>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <b class="text-danger">
                                    Expired
                                </b>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#activity-log" data-id="1" data-name="asdqwe"
                                                data-created="asd" data-updates="asd" {{-- data-id="{{ $data->id }}"
                                        data-name="{{ $data->duty_name }}"
                                        data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                        data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}" --}}>View Activity
                                                Logs</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>setting</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    {{-- <div class="modal fade" id="activity-log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
      <div class="modal-content rounded-0 border-0">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Activity logs</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <p>
                    you have created Duty type at 14:06 on 04-07-2024
                </p>
            </div>
            <div class="bg-light p-3">
                <p class="text-center m-0">
                    No log records found.
                </p>
            </div>
        </div>
        <div class="modal-footer justify-content-start">
          <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div> --}}

@endsection


@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });
            $(".dropdown-toggle").dropdown();

        });
    </script>
@endsection
