@extends('layouts.admin-master')
@section('content')
    <div>
        <div class="container-fluid p-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="row">
                    <div class="col-md-6 position-static">
                        <div class="position-absolute" style="top: 96px; left: 0px;">
                            <button type="button" class="btn" onclick="window.history.back()"><i
                                    class="fa-solid fa-angle-left"></i></button>
                        </div>
                        <h1 class="h3 pb-3">New Receipt</h1>
                    </div>
                    <div class="col-md-6 text-end">
                    </div>
                </div>
            </div>

            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6 col-12">
                    </div>
                    <div class="col-md-6 col-12">
                        <p class="text-md-end text-center">
                            Create a receipt for <b><span id="company_name">Mumbai Cab Service</span></b>. <button
                                href="" data-bs-toggle="modal" data-bs-target="#sister-companies">Change</button>
                            <span class="help-block"></span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="" class="control-label">Customer Group</label>
                                <select class="form-select border-bottom" name="">
                                    <option value="" selected disabled>Select customer group</option>
                                    <option value="">customer group 1</option>
                                    <option value="">customer group 2</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="control-label">Customer</label>
                                <select class="form-select border-bottom" name="">
                                    <option value=""></option>
                                    <option value="">customer 1</option>
                                    <option value="">customer 2</option>
                                    <option value="">customer 3</option>
                                    <option value="">customer 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2">
                            <b>Receipt Number:</b> <span class="text-muted">To be assigned</span>
                        </p>
                        <p>
                            <b>Receipt Date:</b> <span>25-06-2025</span>
                        </p>
                    </div>
                </div>
                {{-- checkbox group --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="onAccount"
                                onclick="toggleCheckboxes(this, 'isAdvance')">
                            <label class="form-check-label" for="onAccount">
                                On Account
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="isAdvance"
                                onclick="toggleCheckboxes(this, 'onAccount')">
                            <label class="form-check-label" for="isAdvance">
                                Is Advance?
                            </label>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        {{-- Pannel Heading --}}
                        <div class="panel border rounded mb-3" id="invoicePanel">
                            <div class="panel-heading bg-light p-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        Invoices - <span class="text-muted">0 selected</span>
                                    </div>
                                    <div class="col-md-4 text-end">
                                    </div>
                                </div>
                            </div>


                            <div class="panel-body p-3 bg-body rounded">
                                <div class="bg-light p-3 mb-3">
                                    Please select customer.
                                </div>

                                <form action="">
                                    <div class="row mt-3">
                                        <div class="col-md-7 mb-3">
                                            <div class="position-relative">
                                                <label for="" class="form-label position-absolute mb-1 bottom-0"><i
                                                        class="fa-solid fa-magnifying-glass"></i></label>
                                                <input type="text" name="" value=""
                                                    class="form-control  border-bottom ps-4" id=""
                                                    placeholder="Type here to filter by customer name, customer group or receipt number">
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <div class="row">
                                                <div class="col-md-8 d-flex align-items-end justify-content-around ">
                                                    <div>
                                                        <i class="fa-solid fa-angle-right"></i>
                                                    </div>
                                                    <input type="date" name="" id="">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                    <input type="date" name="" id="">

                                                    <div>
                                                        <i class="fa-solid fa-angle-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="reset" class="btn btn-light border w-100">Clear
                                                        Filters</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <table class="w-100">
                            <thead>
                                <tr class="border-bottom">
                                    <th>
                                        Description
                                    </th>
                                    <th class="text-end">
                                        Amount (in Rs.)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td>
                                        Payment Received
                                    </td>
                                    <td>
                                        <input type="number" class="form-control text-end" min="0"
                                            name="" id="" placeholder="Enter amount">
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        TDS Deducted
                                    </td>
                                    <td>
                                        <input type="number" class="form-control text-end" min="0"
                                            name="" id="" placeholder="Enter amount">
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        Adjustments
                                    </td>
                                    <td>
                                        <input type="number" class="form-control text-end" min="0"
                                            name="" id="" placeholder="Enter amount">
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        Bank Charges
                                    </td>
                                    <td>
                                        <input type="number" class="form-control text-end" min="0"
                                            name="" id="" placeholder="Enter amount">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="">
                                    Payment mode <span class="text-danger">*</span>
                                </label>
                                <div class="form-check" id="paymentModeTab" role="tablist">
                                    {{-- <label class="form-check-label me-4" for="cash-tab">
                                        <input class="form-check-input" type="radio" name="paymentMode" value="Cash"
                                            id="cash-tab">
                                        Cash
                                    </label> --}}
                                    <label class="me-4" for="cash-tab">
                                        <input type="radio" name="paymentMode" id="cash-tab" autocomplete="off"
                                            data-bs-toggle="tab" data-bs-target="#cash" value="Cash">
                                        Cash
                                    </label>
                                    {{-- <label class="form-check-label me-4" for="">
                                        <input class="form-check-input" type="radio" name="paymentMode" value="Cheque"
                                            id="cheque-tab" data-bs-toggle="tab" data-bs-target="#cheque"
                                            role="tab">
                                        Cheque
                                    </label> --}}
                                    <label class="me-4" for="cheque-tab">
                                        <input type="radio" name="paymentMode" id="cheque-tab" autocomplete="off"
                                            data-bs-toggle="tab" data-bs-target="#cheque" value="Cheque">
                                        Cheque
                                    </label>
                                    
                                    <label class="me-4" for="neft-tab">
                                        <input type="radio" name="paymentMode" id="neft-tab" autocomplete="off"
                                            data-bs-toggle="tab" data-bs-target="#neft" value="NEFT">
                                        NEFT
                                    </label>
                                    <label class="me-4" for="credit-card-tab">
                                        <input type="radio" name="paymentMode" id="credit-card-tab" autocomplete="off"
                                            data-bs-toggle="tab" data-bs-target="#credit-card" value="Credit Card">
                                        Credit Card
                                    </label>
                                    <label class="me-4" for="other-tab">
                                        <input type="radio" name="paymentMode" id="other-tab" autocomplete="off"
                                            data-bs-toggle="tab" data-bs-target="#other" value="Other">
                                        Other
                                    </label>
                                    {{-- <label class="form-check-label me-4" for="">
                                        <input class="form-check-input" type="radio" name="paymentMode"
                                            value="Credit Card" id="">
                                        Credit Card
                                    </label>
                                    <label class="form-check-label me-4" for="">
                                        <input class="form-check-input" type="radio" name="paymentMode" value="Other"
                                            id="">
                                        Other
                                    </label> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="paymentModeTabContent">
                            {{-- for Cash --}}
                            <div class="tab-pane fade" id="cash" role="tabpanel"></div>
                            {{-- for Cheque --}}
                            <div class="tab-pane fade" id="cheque" role="tabpanel">
                                <div class="row">
                                    <div class="col-12 bg-light mb-3 p-3">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Cheque Number
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name=""
                                                        id="" required>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Cheque Date <span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control  border-bottom"
                                                        name="" required>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Bank Name
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name=""
                                                        id="" required>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- for NEFT --}}
                            <div class="tab-pane fade" id="neft" role="tabpanel">
                                <div class="row">
                                    <div class="col-12 bg-light mb-3 p-3">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Transaction Number
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name=""
                                                        id="" required>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Bank Name
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name=""
                                                        id="" required>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- for Credit Card --}}
                            <div class="tab-pane fade" id="credit-card" role="tabpanel"></div>
                            {{-- for Other --}}
                            <div class="tab-pane fade" id="other" role="tabpanel"></div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="" class="control-label">Received in Bank</label>
                                <select class="form-select border-bottom" name="">
                                    <option value="" selected disabled>[Select Bank Account]</option>
                                    <option value="">Bank Account 1</option>
                                    <option value="">Bank Account 2</option>
                                    <option value="">Bank Account 3</option>
                                    <option value="">Bank Account 4</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Bank Credit Date <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control  border-bottom" name="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="fileUpload" class="text-primary">Upload attachment</label>
                        <input type="file" class="d-none" id="fileUpload" name="attachments[]"
                            accept="jpg,jpeg,png">

                        <!-- Display list of selected files -->
                        <ul id="fileList" class="file-list"></ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="" class="control-label">Comment</label>
                        <textarea class="form-control" name="" id="" rows="4"></textarea>
                        <span class="help-block"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Sister Companies Modal Start-->
    <div class="modal fade" id="sister-companies" tabindex="-1" aria-labelledby="sister-companiesLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="sister-companiesLabel">Sister Companies</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <p>
                            Showing list of active sister companies.
                        </p>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover datatable" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mstMyCompany as $company)
                                    <tr onclick="selectCompany({{ $company->id }}, '{{ $company->name }}')"
                                        data-bs-dismiss="modal">
                                        <td>
                                            {{ $company->name }}
                                        </td>
                                        <td>
                                            {{ $company->code }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div>
                        <i class="text-black-50">
                            Please click on the company name to select.
                        </i>
                    </div>
                </div>

                <div class="modal-footer justify-content-start position-sticky bottom-0  bg-white">
                    <div>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    </div>
                    {{-- <button type="button" class="btn btn-light border border-secondary-subtle rounded-1" data-bs-dismiss="modal">Download Import Format</button> --}}
                </div>

            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script>
        console.log("create receipt form page loaded");

        // hide invoicePanel and disable checkbox function
        function toggleCheckboxes(checkbox, otherId) {
            const otherCheckbox = document.getElementById(otherId);
            const invoicePanel = document.getElementById("invoicePanel");
            if (checkbox.checked) {
                otherCheckbox.disabled = true;
                invoicePanel.classList.add("d-none");
            } else {
                otherCheckbox.disabled = false;
                invoicePanel.classList.remove("d-none");
            }
        }

        const fileUpload = document.getElementById('fileUpload');
        const fileList = document.getElementById('fileList');

        let selectedFiles = [];

        // Listen for changes in the file input
        fileUpload.addEventListener('change', (e) => {
            // Convert the FileList to an array
            const newFiles = Array.from(e.target.files);

            // Merge newly selected files with previously selected files
            // selectedFiles = selectedFiles.concat(newFiles);
            selectedFiles = newFiles.slice(0, 1);

            // Render the file list in the UI
            renderFileList();
        });

        // Display file names and a "Remove" button for each
        function renderFileList() {
            fileList.innerHTML = '';

            selectedFiles.forEach((file, index) => {
                const li = document.createElement('li');
                li.textContent = file.name;

                // Remove button
                const removeBtn = document.createElement('span');
                removeBtn.textContent = 'X';
                // removeBtn.classList.add('remove-file text-white bg-danger rounded-circle ms-2 p-1');
                removeBtn.classList.add('remove-file', 'text-white', 'bg-danger', 'ms-2', 'p-1');
                removeBtn.addEventListener('click', () => removeFile(index));

                li.appendChild(removeBtn);
                fileList.appendChild(li);
            });
        }

        // Remove file from the array and re-render
        function removeFile(index) {
            selectedFiles.splice(index, 1);
            renderFileList();
            rebuildFileInput();
        }

        // Rebuild the underlying FileList in the <input> after removing files
        function rebuildFileInput() {
            // Create a new DataTransfer to build the updated FileList
            const dataTransfer = new DataTransfer();
            selectedFiles.forEach(file => {
                dataTransfer.items.add(file);
            });
            fileUpload.files = dataTransfer.files;
        }
    </script>
@endsection
