<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- font-awesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css" />

    {{-- Quill css --}}
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

    {{-- datatables css --}}
    
    <link
        href="https://cdn.datatables.net/v/bs5/dt-2.2.1/b-3.2.1/date-1.5.5/fh-4.0.1/r-3.0.3/rr-1.5.0/sc-2.4.3/sb-1.8.1/sp-2.3.3/datatables.min.css"
        rel="stylesheet">
    {{--
    <link rel="stylesheet" href="admin/css/datatables.2.2.1.css"> --}}
</head>

<body>
    @yield('content')

    {{-- Jquery Js --}}
    <script src="{{asset('admin/js/jquery/jquery.3.7.1.js')}}"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

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