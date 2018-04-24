@extends('layouts.app')
@section('content')
<!-- Basic Information section start -->
    <div class="basic-info-section">
        <div class="container">
            @include('shared.flash')
            <h3>Basic Information</h3>
            <div class="basic-info-form">
                {!! Former::open()->route('submit_form')->method('POST') !!}
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <label>Name</label>
                        {!! Former::input('name')->label(false)->class('form-control') !!}
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <label>Phone</label>
                        {!! Former::input('phone')->label(false)->class('form-control') !!}
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <label>E-mail</label>
                        {!! Former::input('email')->label(false)->class('form-control') !!}
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <div class="submit-btn">
                                <div class="submit-icon"></div>
                                {!! Former::submit('Apply')->class('submit') !!}
                            </div>
                        </div>
                    </div>
                </div>
                {!! Former::close() !!}
            </div>
        </div>
    </div>
    <!-- Basic Information section end -->
@endsection