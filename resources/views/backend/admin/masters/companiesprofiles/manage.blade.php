@extends ('layouts.admin-master')
@section('content')
<style>
    .ql-editor {
        min-height: 92px;
    }
</style>
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
                    <h1 class="h3 pb-3">New Company Profile</h1>
                </div>
                <div class="col-md-6 text-end">
                    {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                </div>
            </div>
        </div>
        {{-- page heading end --}}
        <div>
            <form action="" method="post" id="">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control  border-bottom" id="">
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Bank Account</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="selectOne">[Select Bank Account]</option>
                        <option value="">750061101004397 - MUMBAI CAB SERVICE</option>
                        <option value="">021363400005509 - YES BANK</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="inv_term_cond" class="form-label">Email Signature</label>
                    <textarea id="summernote" name="inv_term_cond"></textarea>
                </div>

                <p class="text-black-50">
                    Note: Please keep email signature empty for standard email signature.
                </p>
                <div class="mb-3">
                    <label for="inv_term_cond" class="form-label">Invoice Terms & Conditions</label>
                    <textarea id="summernote2" name="inv_term_cond"></textarea>
                </div>
                
                
                <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                <a href="{{route('companiesprofiles.index')}}" class="btn btn-danger rounded-1">CANCEL</a>
            </form>
        </div>
    </div>
</div>
@endsection
@section('extrajs')

<script>
  
</script>
@endsection