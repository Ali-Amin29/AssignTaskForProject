
{{--  For All Tasks for Admin DashBoard  --}}
<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Customer Id</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Proj Id</th>
        <th scope="col">User Id</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $task->id }}</td>
        <td>{{ $task->name }}</td>
        <td>{{ $task->project_id }}</td>
        @if($task->user_id)
        <td>{{ $task->user_id }}</td>
        @else
        <td>Need To Assign</td>
        @endif
        <td>
            @if ($task->status == 'ready')
                <form method="POST" action={{ URL::route('task.destroy',$task->id) }}>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @elseif ($task->status == 'token')
                <div class="alert alert-info" role="alert">
                    A Task has been successfully Processing
                  </div>
                @elseif ($task->status == 'finished')
                <div class="alert alert-success" role="alert">
                    A Task has been successfully Finished
                </div>
            @endif
        </td>
        @endforeach
      </tr>
    </tbody>
  </table>





