@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(Auth::user()->is_admin == 1)
                    Dash Board
                    @else
                    Tasks
                    @endif
                </div>
                <div class="card-body">

                    @if(Auth::user()->is_admin == 1)
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="{{ URL::route('project.index') }}">
                                    <button type="button" class="btn btn-secondary">Show All Projects</button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ URL::route('user.index') }}">
                                    <button type="button" class="btn btn-secondary">Show All Users</button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ URL::route('task.index') }}">
                                    <button type="button" class="btn btn-secondary">Show All Tasks</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @else
                    @include('includes.tasks')
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
