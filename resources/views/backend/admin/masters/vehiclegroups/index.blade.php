@extends('layouts.admin-master')
@section('content')
<div class="card rounded-0 border-0 p-5">
    <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
        <h4>Categories - Vehicle Groups</h4>
        <div class="btn-group" role="group"><a href="{{route('vehiclegroups.manage')}}" class="btn btn-primary">Add Vehicle Group</a></div>
    </div>
    <div class="card-body px-0">
        @if($errors->any())
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
                        <th>Total Vehicles</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                       
                        <td>320</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item view-activity-logs" href="#"  data-bs-toggle="modal" 
                                            data-bs-target="#activity-log"  
                                            data-id="{{ $data->id }}"
                                            data-name="{{ $data->name }}"
                                            data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                            data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}">
                                            View Activity Logs
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Total Vehicles</th>
                        <th>Setting</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection


@section('extrajs')
<script>
    $(document).ready( function () {
    $('.datatable').DataTable({
        responsive: true
    });
    $(".dropdown-toggle").dropdown();

} );
</script>
@endsection