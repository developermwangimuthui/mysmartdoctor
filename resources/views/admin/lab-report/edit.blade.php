@extends('layouts.app',['pageTitle' => __(' Lab Report Edit')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Lab Report') }}
    @endslot
@endcomponent

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit  Lab Report') }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/lab-report') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="feather-16" data-feather="arrow-left"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" id="oneTimeSubmit" action="{{ url('/admin/lab-report/' . $labreport->id) }}" accept-charset="UTF-8" class="form-horizontal needs-validation" novalidate=""  enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.lab-report.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>

@endsection
