<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>document</title>
    @notifyCss

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Custom Css --}}
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    {{-- font-awesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css" />

    {{-- Summernote --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">

    {{-- datatables css --}}

    <link
        href="https://cdn.datatables.net/v/bs5/dt-2.2.1/b-3.2.1/date-1.5.5/fh-4.0.1/r-3.0.3/rr-1.5.0/sc-2.4.3/sb-1.8.1/sp-2.3.3/datatables.min.css"
        rel="stylesheet">

    {{--
    <link rel="stylesheet" href="admin/css/datatables.2.2.1.css"> --}}

</head>

<body>
    @if (!request()->query('hide_menu'))
        <nav class="navbar fixed-top bg-dark text-white px-3 py-0 d-flex justify-content-between align-items-center">
            <div class="left_nav_menu d-flex align-items-center">
                <div class="logo_container bg-light py-2 my-2">
                    <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-white">
                        {{-- <img src="" alt=""> --}}
                        {{-- Mumbai Cab Service --}}
                        <img src="{{ asset('/admin/images/company_logo.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="nav_menu_container">
                    <ul class="nav_menu d-flex align-items-center m-0">
                        <li class="nav_menu_item dropdown">
                            <a href="#" class="nav_menu_link nav_parent_link text-decoration-none text-white p-3"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-car"></i>
                                Duties
                            </a>
                            <ul class="dropdown-menu mt-2">
                                <li><a class="dropdown-item" href="{{ route('booking.create') }}">Add Booking</a></li>
                                <li><a class="dropdown-item" href="{{ route('duties.incoming') }}">Incoming</a></li>
                                <li><a class="dropdown-item" href="{{ route('duties.needsattention') }}">Needs
                                        Attention</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('duties.upcoming') }}">Upcoming</a></li>
                                <li><a class="dropdown-item" href="{{ route('duties.booked') }}">Booked</a></li>
                                <li><a class="dropdown-item" href="{{ route('duties.allotted') }}">Allotted</a></li>
                                <li><a class="dropdown-item" href="{{ route('duties.dispatched') }}">Dispatched</a></li>
                                <li><a class="dropdown-item" href="{{ route('duties.completed') }}">Completed</a></li>
                                <li><a class="dropdown-item" href="{{ route('duties.billed') }}">Billed</a></li>
                                <li><a class="dropdown-item" href="{{ route('duties.cancelled') }}">Cancelled</a></li>
                                <li><a class="dropdown-item" href="{{ route('duties.all') }}">All</a></li>
                            </ul>
                        </li>
                        <li class="nav_menu_item dropdown">
                            <a href="#" class="nav_menu_link nav_parent_link text-decoration-none text-white p-3"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                                Operations
                            </a>
                            <ul class="dropdown-menu mt-2">
                                <li><a class="dropdown-item" href="#">Availability</a></li>
                                <li><a class="dropdown-item" href="{{ route('bookings.all') }}">Bookings</a></li>
                                <li><a class="dropdown-item" href="{{ route('billing') }}">Billing</a></li>
                                <li><a class="dropdown-item" href="{{ route('receipts') }}">Receipts</a></li>
                                <li><a class="dropdown-item" href="#">Payment Gateway</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Purchase - Duties</a></li>
                                <li><a class="dropdown-item" href="#">Purchase - Invoices</a></li>
                                <li><a class="dropdown-item" href="#">Purchase - Payments</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Credit/Debit Notes</a></li>
                                <li><a class="dropdown-item" href="#">Driver Payroll</a></li>
                                <li><a class="dropdown-item" href="#">Petty Cash</a></li>
                                <li><a class="dropdown-item" href="#">Vehicle Expenses</a></li>
                                <li><a class="dropdown-item" href="#">Vehicle Fuel</a></li>
                                <li><a class="dropdown-item" href="#">SMS Details</a></li>
                                <li><a class="dropdown-item" href="#">Whatsapp Messages</a></li>
                                <li><a class="dropdown-item" href="#">Export History</a></li>
                            </ul>
                        </li>
                        <li class="nav_menu_item dropdown">
                            <a href="{{ route('reports.index') }}"
                                class="nav_menu_link nav_parent_link text-decoration-none text-white p-3">
                                <i class="fa-solid fa-chart-line"></i>
                                Reports
                            </a>
                        </li>
                        <li class="nav_menu_item dropdown">
                            <a href="#"
                                class="nav_menu_link nav_parent_link text-decoration-none text-white p-3"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-database"></i>
                                Masters
                            </a>
                            <ul class="dropdown-menu mt-2">
                                <li><a class="dropdown-item" href="{{ route('dutytype.index') }}">Duty Types</a></li>
                                <li><a class="dropdown-item" href="{{ route('vehiclegroups.index') }}">Categories -
                                        Vehicle Groups</a></li>
                                <li><a class="dropdown-item" href="{{ route('taxes.index') }}">Taxes</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('customers.index') }}">Customers</a></li>
                                <li><a class="dropdown-item" href="{{ route('suppliers.index') }}">Suppliers</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('mydrivers.index') }}">My Drivers</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('vehicles.index') }}">My Vehicles</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('dutysupporters.index') }}">Duty
                                        Supporters</a></li>
                                <li><a class="dropdown-item" href="{{ route('labels.index') }}">Labels</a></li>
                                <li><a class="dropdown-item" href="{{ route('feedbackforms.index') }}">Feedback
                                        Forms</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('employees.index') }}">Employees</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('billingitems.index') }}">Billing
                                        Items</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('customerpricing.index') }}">Pricing</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('branches.index') }}">Dispatch
                                        Center/Branches</a></li>
                                <li><a class="dropdown-item" href="{{ route('bankaccounts.index') }}">Bank
                                        Accounts</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('companies.index') }}">My Companies</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right_nav_menu d-flex align-items-center gap-3">
                <div class="dropdown">
                    <a href="#"
                        class="nav_menu_link nav_parent_link text-decoration-none text-white p-3 dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Me
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-building"></i> Your
                                Account</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('businessSetting.index') }}"><i
                                    class="fa-solid fa-sliders"></i> Business
                                Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-export"></i> Export to
                                Tally</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-credit-card"></i> Payment
                                Gateway Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        {{-- <li><a class="dropdown-item" href="#"><i class="fa-solid fa-keyboard"></i> Keyboard Shortcuts</a></li> --}}
                        {{-- <li><a class="dropdown-item" href="#">What's New at Indecab?</a></li> --}}
                        {{-- <li><hr class="dropdown-divider"></li> --}}
                        <li><a class="dropdown-item" href="#"><i
                                    class="fa-solid fa-arrow-right-from-bracket"></i>
                                Logout</a></li>
                    </ul>
                </div>
                <a href="#" class="text-white"> Help</a>
            </div>
        </nav>
    @endif
    <div style="{{ request()->query('hide_menu') ? '' : 'margin-top: 50px;' }}">
        @yield('content')
    </div>
    {{-- Modal start here --}}
    {{-- activity-log --}}
    <div class="modal fade" id="activity-log" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Activity logs</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer justify-content-start">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- activity-log --}}

    {{-- modal end here --}}

    {{-- Jquery Js --}}
    <script src="{{ asset('admin/js/jquery/jquery.3.7.1.js') }}"></script>

    <script src="{{ asset('admin/js/script.js') }}"></script>
    {{-- Alpine Js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Jquery Validation Js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>

    {{-- Font Awesome Js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/fontawesome.min.js"></script>

    {{-- Quill Js --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    {{-- Select 2 Js --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Datatables Js --}}
    <script
        src="https://cdn.datatables.net/v/bs5/dt-2.2.1/b-3.2.1/date-1.5.5/fh-4.0.1/r-3.0.3/rr-1.5.0/sc-2.4.3/sb-1.8.1/sp-2.3.3/datatables.min.js">
    </script>
    {{-- SweetAlert Js --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jQuery UI for Datepicker -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        function showAlert(type, message) {
            Swal.fire({
                text: message,
                icon: type, // 'success' or 'error'
                toast: true,
                position: 'bottom-end', // Bottom-right position
                showConfirmButton: false,
                timer: 3000,
                background: type === 'success' ? '#28a745' : '#d9534f', // Green for success, Red for error
                color: '#fff', // White text
                customClass: {
                    popup: 'swal-toast'
                }
            });
        }
        $(document).ready(function() {
            const summernote1 = document.getElementById('summernote');
            if (summernote1) {
                $(summernote1).summernote({
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        // ['color', ['color']],
                        ['media', ['picture', 'link', ]]
                    ],
                    placeholder: 'Type your text...',
                    tabsize: 2,
                    height: 80
                });
            }
            const summernote2 = document.getElementById('summernote2');
            if (summernote2) {
                $(summernote2).summernote({
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        // ['color', ['color']],
                        ['media', ['picture', 'link', ]]
                    ],
                    placeholder: 'Type your text...',
                    tabsize: 2,
                    height: 80
                });

            }


        });
    </script>

    {{-- js for modals --}}
    <script>
        document.querySelectorAll('.view-activity-logs').forEach(item => {
            item.addEventListener('click', function(event) {

                const id = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                const created = this.getAttribute('data-created');
                const updates = this.getAttribute('data-updates');

                const createdDate = new Date(created);
                const updatedDate = new Date(updates);


                const modalBody = document.querySelector('#activity-log .modal-body');
                const modalTitle = document.querySelector('#activity-log #exampleModalLabel');

                const formatDate = (date) => {
                    const hours = String(date.getHours()).padStart(2, '0');
                    const minutes = String(date.getMinutes()).padStart(2, '0');
                    const day = String(date.getDate()).padStart(2, '0');
                    const month = String(date.getMonth() + 1).padStart(2, '0');
                    const year = date.getFullYear();
                    return `${hours}:${minutes} on ${day}-${month}-${year}`;
                };

                modalTitle.innerHTML = `
                    Activity logs <span class="text-black-50"> for ${name}</span>
                `;

                if (created && updates) {

                    if (created === updates) {
                        modalBody.innerHTML = `
                            <div>
                                <p>
                                    You created Duty type at  ${formatDate(createdDate)}.
                                </p>
                            </div>
                        `;
                    } else {

                        modalBody.innerHTML = `
                            <div>
                                <p>
                                    You created Duty type at  ${formatDate(createdDate)}.
                                </p>
                            </div>
                            <div class="bg-light p-3">
                                <p class="text-center m-0">
                                    Last updated at  ${formatDate(updatedDate)}.
                                </p>
                            </div>
                        `;
                    }
                } else {

                    modalBody.innerHTML = `
                        <div class="bg-light p-3">
                            <p class="text-center m-0">
                                No log records found.
                            </p>
                        </div>
                    `;
                }
            });
        });
    </script>
    {{-- js for modals --}}
    {{-- Custom Js --}}
    <x-notify::notify />
    @notifyJs
    @yield('extrajs')
    {{-- @yield('extrajs')
    @include('notify::messages')
    @notifyJs --}}
</body>

</html>
