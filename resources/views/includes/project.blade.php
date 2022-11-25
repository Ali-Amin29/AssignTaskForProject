{{--  show all project for admin dashBoard  --}}
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
                        <button type="button" class="btn btn-primary">Edit</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </td>
        @endforeach
      </tr>
    </tbody>
  </table>


