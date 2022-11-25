@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tasks
                </div>
                <div class="card-body">
                    @include('includes.taskadmin')
                </div>
            </div>

        </div>
        <div class="col-md-6 mt-2">
            <a href="{{ url('/home') }}">
                <button type="button" class="btn btn-outline-dark">Back</button>
            </a>
        </div>
        <div class="col-md-6 mt-2">
            <a href={{ URL::route('addtask') }}>
                <button type="button" class="btn btn-outline-dark">Add Task</button>
            </a>
        </div>


    </div>
</div>
@endsection
