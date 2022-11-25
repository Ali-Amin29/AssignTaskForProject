@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Add Task
                </div>
                <div class="card-body">
                    @include('includes.taskform')
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <a href="{{ url('/home') }}">
                <button type="button" class="btn btn-outline-dark">Back</button>
            </a>
        </div>
    </div>
</div>
@endsection
