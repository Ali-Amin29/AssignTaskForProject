
{{--  For All Tasks for this User Login  --}}
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
        <td>{{ $task->user_id }}</td>
        <td>
            {{--  this button to Submit on Task and Covert it Status to finished   --}}
            <div class="container text-center">
                <div class="row">
                    @if($task->status == 'token')
                    <form method="POST" action={{ URL::route('task.update',[$task->id]) }}>
                        @csrf
                        @method('PUT')
                        <div class="col">
                            <span> Write: { (call, visit or follow up) } </span>
                            <div class="form-floating">
                                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                              </div>
                        </div>
                        <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    @elseif($task->status == 'finished')
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                        The task has finished
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </td>
        @endforeach
      </tr>
    </tbody>
  </table>
  {{--  this button to show all Available Tasks it status Ready   --}}
  <div class="container">
    <form method="GET" action={{ URL::route('task.index')}}>
        <button type="submit" class="btn btn-dark">All Task</button>
    </form>
  </div>





