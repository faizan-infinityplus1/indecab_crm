<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Custom Css --}}
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

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
    <nav class="navbar fixed-top bg-dark text-white px-3 py-0 d-flex justify-content-between align-items-center">
        <div class="left_nav_menu d-flex align-items-center">
            <div class="logo_container bg-light py-2 my-2">
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none text-white">
                    {{-- <img src="" alt=""> --}}
                    {{-- Mumbai Cab Service --}}
                    <img src="{{asset('/admin/images/company_logo.jpeg')}}" alt="">
                </a>
            </div>
            <div class="nav_menu_container">
                <ul class="nav_menu d-flex align-items-center m-0">
                    <li class="nav_menu_item dropdown">
                        <a href="#" class="nav_menu_link nav_parent_link text-decoration-none text-white p-3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-car"></i>
                            Duties
                        </a>
                        <ul class="dropdown-menu mt-2">
                          <li><a class="dropdown-item" href="#">Add Booking</a></li>
                          <li><a class="dropdown-item" href="#">Incoming</a></li>
                          <li><a class="dropdown-item" href="#">Needs Attention</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Upcoming</a></li>
                          <li><a class="dropdown-item" href="#">Booked</a></li>
                          <li><a class="dropdown-item" href="#">Allotted</a></li>
                          <li><a class="dropdown-item" href="#">Dispatched</a></li>
                          <li><a class="dropdown-item" href="#">Completed</a></li>
                          <li><a class="dropdown-item" href="#">Billed</a></li>
                          <li><a class="dropdown-item" href="#">Cancelled</a></li>
                          <li><a class="dropdown-item" href="#">All</a></li>
                        </ul>
                    </li>
                    <li class="nav_menu_item dropdown">
                        <a href="#" class="nav_menu_link nav_parent_link text-decoration-none text-white p-3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                            Operations
                        </a>
                        <ul class="dropdown-menu mt-2">
                          <li><a class="dropdown-item" href="#">Availability</a></li>
                          <li><a class="dropdown-item" href="#">Bookings</a></li>
                          <li><a class="dropdown-item" href="#">Billing</a></li>
                          <li><a class="dropdown-item" href="#">Receipts</a></li>
                          <li><a class="dropdown-item" href="#">Payment Gateway</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Purchase - Duties</a></li>
                          <li><a class="dropdown-item" href="#">Purchase - Invoices</a></li>
                          <li><a class="dropdown-item" href="#">Purchase - Payments</a></li>
                          <li><hr class="dropdown-divider"></li>
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
                        <a href="#" class="nav_menu_link nav_parent_link text-decoration-none text-white p-3">
                            <i class="fa-solid fa-chart-line"></i>
                            Reports
                        </a>
                    </li>
                    <li class="nav_menu_item dropdown">
                        <a href="#" class="nav_menu_link nav_parent_link text-decoration-none text-white p-3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-database"></i>
                            Masters
                        </a>
                        <ul class="dropdown-menu mt-2">
                          <li><a class="dropdown-item" href="{{route('dutytype.index')}}">Duty Types</a></li>
                          <li><a class="dropdown-item" href="{{route('vehiclegroups.index')}}">Categories - Vehicle Groups</a></li>
                          <li><a class="dropdown-item" href="{{route('taxes.index')}}">Taxes</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="{{route('customers.index')}}">Customers</a></li>
                          <li><a class="dropdown-item" href="{{route('showSuppliers')}}">Suppliers</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="{{route('showDrivers')}}">My Drivers</a></li>
                          <li><a class="dropdown-item" href="{{route('showVehicles')}}">My Vehicles</a></li>
                          <li><a class="dropdown-item" href="{{route('dutysupporters.index')}}">Duty Supporters</a></li>
                          <li><a class="dropdown-item" href="{{route('labels.index')}}">Labels</a></li>
                          <li><a class="dropdown-item" href="{{route('feedbackforms.index')}}">Feedback Forms</a></li>
                          <li><a class="dropdown-item" href="{{route('employees.index')}}">Employees</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="{{route('billingitems.index')}}">Billing Items</a></li>
                          <li><a class="dropdown-item" href="#">Pricing</a></li>
                          <li><a class="dropdown-item" href="{{route('branches.index')}}">Dispatch Center/Branches</a></li>
                          <li><a class="dropdown-item" href="{{route('bankaccounts.index')}}">Bank Accounts</a></li>
                          <li><a class="dropdown-item" href="#">My Companies</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right_nav_menu d-flex align-items-center gap-3">
             <div class="dropdown">
                <a href="#" class="nav_menu_link nav_parent_link text-decoration-none text-white p-3 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Me
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-building"></i> Your Account</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-sliders"></i> Business Settings</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-export"></i> Export to Tally</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fa-regular fa-credit-card"></i> Payment Gateway Settings</a></li>
                  <li><hr class="dropdown-divider"></li>
                  {{-- <li><a class="dropdown-item" href="#"><i class="fa-solid fa-keyboard"></i> Keyboard Shortcuts</a></li> --}}
                  {{-- <li><a class="dropdown-item" href="#">What's New at Indecab?</a></li> --}}
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                </ul>
              </div>
              <a href="#" class="text-white"> Help</a> 
        </div>
    </nav>
    <div style="margin-top: 75px;">
        @yield('content')
    </div>

    {{-- Jquery Js --}}
    <script src="{{asset('admin/js/jquery/jquery.3.7.1.js')}}"></script>

    <script src="{{asset('admin/js/script.js')}}"></script>
    {{-- Alpine Js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
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
    {{-- <script src="{{asset('admin/js/datatables.2.2.1.js')}}"></script> --}}

    {{-- Custom Js --}}
    @yield('extrajs')
</body>

</html>