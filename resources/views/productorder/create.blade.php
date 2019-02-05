@extends('layouts.app')

@section('css')
<link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New productlead</div>
                    <div class="card-body">
                        <br />

                        {!! Form::open(['route' => 'productleads.store', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('productorder.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/select2.min.js')}}"></script>
@endsection

@section('javascript_end')
<script>
    $(document).ready(function() {
        $('#customer_address').select2({minimumResultsForSearch: Infinity});
    });

    $('input[name=date]').flatpickr({
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        defaultDate: ""
    });

    $('#customer_mobile').keyup(function(){ 
        let query = $(this).val();
        let url = "{{ route('customers.search',['query'=>'']) }}"+"/"+query;
        console.log(url);
        if(query.length > 10){
            console.log(query);
            $.ajax({
                url:url,
                method:"GET",
                data:
                {
                    query:query
                },
                success:function(data)
                {
                    var obj = jQuery.parseJSON(data);
                    $("#customer_name").val(obj.name); 
                    if ($('#customer_address').find("option[value='" + obj.address + "']").length) 
                    {
                        $('#customer_address').val(obj.address).trigger('change');
                    } 
                    else 
                    { 
                        // Create a DOM Option and pre-select by default
                        var newOption = new Option(obj.address, obj.address, true, true);
                        // Append it to the select
                        $('#customer_address').append(newOption).trigger('change');
                    } 
                    $("#customer_address_extension").val(obj.address_extension);
                },
                error: function (xhr) 
                {
                    console.log("error");
                }
            });
        }
    }); 

    $('#payment_method').change(function()
    {
        console.log('ok');
        let query = $(this).val();
        let url = "{{ route('paymentnumber.search',['query'=>'']) }}"+"/"+query;
        $.ajax({
            url:url,
            method:"GET",
            data:{query:query},
            success:function(data)
            {
                let items = jQuery.parseJSON(data);
                $('#payment_number').empty();
                $.each(items, function(index, obj)
                {
                    $('#payment_number').append('<option value="'+ obj.id +'">'+ obj.mobile +'</option>');
                })
            }
        });
    });

    
</script>
    
@endsection

