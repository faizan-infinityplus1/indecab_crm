@extends ('layouts.admin-master')
@section('content')
    <div x-data="block">
        <div class="container-fluid p-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="row">
                    <div class="col-md-6 position-static" x-show="open">
                        <div class="position-absolute" style="top: 96px; left: 0px;">
                            <button type="button" class="btn" onclick="window.history.back()"><i
                                class="fa-solid fa-angle-left"></i></button>
                        </div>
                        <h1 class="h3 pb-3">New Label</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div> --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="{{ $data ? route('labels.update', $data->id) : route('labels.store') }}" method="post"
                    id="formLabels">
                    @csrf
                    <div class="mb-3">
                        <label for="label_name" class="form-label ">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control  border-bottom" id="label_name" name="label_name"
                        value="{{ old('label_name', $data->label_name ?? '') }}">
                    </div>
                    <div class="mb-3">
                        <label for="label_color" class="form-label ">Colours <span class="text-danger">*</span></label>
                        {{-- use value of options as a class in index page label --}}
                        <select class="form-select border-bottom" aria-label="Default select example" name="label_color"
                            id="label_color"  >
                            <option value="selectOne">Select an option</option>
                            <option value="bg-danger text-white"
                            {{ old('label_color', $data->label_color ?? '') == 'bg-danger text-white' ? 'selected' : '' }}>red</option>
                            <option value="bg-primary text-white"
                            {{ old('label_color', $data->label_color ?? '') == 'bg-primary text-white' ? 'selected' : '' }}>blue</option>
                            <option value="bg-success text-white"
                            {{ old('label_color', $data->label_color ?? '') == 'bg-success text-white' ? 'selected' : '' }}>green</option>
                            <option value="bg-info"
                            {{ old('label_color', $data->label_color ?? '') == 'bg-info' ? 'selected' : '' }}>sky-blue</option>
                            <option value="bg-warning"
                            {{ old('label_color', $data->label_color ?? '') == 'bg-warning' ? 'selected' : '' }}>yellow</option>
                            <option value="bg-secondary text-white"
                            {{ old('label_color', $data->label_color ?? '') == 'bg-secondary text-white' ? 'selected' : '' }}>gray</option>
                            <option value="bg-dark text-white"
                            {{ old('label_color', $data->label_color ?? '') == 'bg-dark text-white' ? 'selected' : '' }}>black</option>
                            <option value="bg-danger-subtle"
                            {{ old('label_color', $data->label_color ?? '') == 'bg-danger-subtle' ? 'selected' : '' }}>pink</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" 
                        type="checkbox"
                        id="not_display_in_duties"
                        name = "not_display_in_duties"
                        {{
                        old('not_display_in_duties', $data->not_display_in_duties ?? '') ? 'checked' : '' }}
                        value="1">
                        <label class="form-check-label" for="not_display_in_duties">
                            Do not display in duties listing?
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection

