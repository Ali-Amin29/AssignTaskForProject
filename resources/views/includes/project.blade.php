{{--  show all project for admin dashBoard  --}}
@if( Session::has('success') )
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@elseif(( Session::has('danger') ))
<div class="alert alert-danger" role="alert">
    {{ Session::get('danger') }}
</div>
@endif
<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Proj Id</th>
        <th scope="col">Proj Name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $project->id }}</td>
        <td>{{ $project->name }}</td>
        <td>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <form method="POST" action={{ URL::route('project.destroy', [$project->id]) }}>
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </td>
        @endforeach
      </tr>
    </tbody>
  </table>


