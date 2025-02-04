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
        <h4 >Duty Types</h4>
        <div class="btn-group" role="group"><a href="{{route('dutytype.manage')}}" class="btn btn-primary">Add Duty Type</a></div>
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
                        <th>Type</th>
                        <th>Max. Kilometers</th>
                        <th>Max. Hours</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>{{ $data->duty_name }}</td>
                        <td>{{ $data->duty_type }}</td>
                        <td>{{ $data->max_km ?? $data->max_kmper_day ?? 0}}</td>
                        <td>{{ $data->max_hours ?? 0}}</td>
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
                                            data-name="{{ $data->duty_name }}"
                                            data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                            data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}">
                                            View Activity Logs
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('dutytype.manage', $data->id) }}">Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="{{ route('dutytype.delete', $data->id) }}">Delete</a>
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
                        <th>Type</th>
                        <th>Max. Kilometers</th>
                        <th>Max. Hours</th>
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
    $(document).ready( function () {
    $('.datatable').DataTable({
        responsive: true
    });
    $(".dropdown-toggle").dropdown();

} );
</script>
@endsection