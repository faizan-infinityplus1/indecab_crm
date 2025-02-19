@extends('layouts.admin-master')
@section('content')
    <div class="card rounded-0 border-0 p-5">
        <div class="d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
            <h4>Payment Gateway</h4>
        </div>

        <div class="well mt-3">
            <p>
                If you would like to use a payment gateway to receive payments into your bank account contact
                <a href="#" style="text-decoration: none">support@indecab.com</a>
                to learn how to enable this.
            </p>
        </div>
    </div>
@endsection



@section('extrajs')
    <script>
        $(document).ready(function() {
            $("#formTaxes").validate({
                rules: {
                    name: {
                        required: true
                    },
                    percentage: {
                        required: true
                    }
                },
                messages: {

                    name: {
                        required: "Please Enter Tax Name"
                    },

                    percentage: {
                        required: "Please Enter Tax Percentage"
                    }
                },
                submitHandler: function(form) {
                    $('.btnSubmit').attr('disabled', 'disabled');
                    $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    form.submit();
                }
            });

        });
    </script>
@endsection
