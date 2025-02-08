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
                <form>
                    <div class="mb-3">
                        <label for="" class="form-label ">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control  border-bottom" id="" >
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label ">Colours <span class="text-danger">*</span></label>
                        {{-- use value of options as a class in index page label --}}
                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                            id=""  >
                            <option value="selectOne">Select an option</option>
                            <option value="bg-danger text-white">red</option>
                            <option value="bg-primary text-white">blue</option>
                            <option value="bg-success text-white">green</option>
                            <option value="bg-info">sky-blue</option>
                            <option value="bg-warning">yellow</option>
                            <option value="bg-secondary text-white">gray</option>
                            <option value="bg-dark text-white">black</option>
                            <option value="bg-danger-subtle">pink</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                            Do not display in duties listing?
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection

