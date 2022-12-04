{{--  show all user and assign for him task not already token   --}}
<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User Id</th>
        <th scope="col">User Name</th>
        <th scope="col">Assign Customer For User</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        {{--  if condition for reteaive all user except admin or superVisior  --}}
        @if($user->is_admin == 0)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>
                <form  method="GET" action={{ URL::route('task.create')}} >
                        <input type="hidden" name="user_id" value={{ $user->id }}>
                        <select name="name" class="form-select" aria-label="Default select example">
                        @foreach ($tasks as $task )
                        @if($task->status == 'ready')
                        <option  value={{ $task->name }} > {{ $task->name }} </option>
                        @endif
                        @endforeach
                        </select>
                        {{--  this buuton for submit task for employee  --}}
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </td>
            @endif
        @endforeach
      </tr>
    </tbody>
  </table>


