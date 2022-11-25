@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Projects
                </div>
                <div class="card-body">
                    @include('includes.project')
                </div>
            </div>

        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 mt-2">
            <a href="{{ url('/home') }}">
                <button type="button" class="btn btn-outline-dark">Back</button>
            </a>
        </div>
        <div class="col-md-8 mt-2">
            <a href={{ URL::route('addproject') }}>
                <button type="button" class="btn btn-outline-dark">Add Project</button>
            </a>
        </div>
    </div>
</div>
@endsection
