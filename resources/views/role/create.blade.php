@extends('layouts.app')

@section('css')
<link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New role</div>
                    <div class="card-body">
                        <a href="{{ route('roles.index') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['route' => 'roles.store', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('role.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
<script src="{{ asset('assets/libs/select2/select2.min.js')}}"></script>
@endsection

@section('javascript_end')
<script>
    $(document).ready(function() {
        $('#permissions').select2();
    });
</script>
@endsection