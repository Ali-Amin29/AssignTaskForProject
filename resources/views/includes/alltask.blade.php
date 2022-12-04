
<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">Customers Available</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
            <form  method="GET" action={{ URL::route('task.create')}} >
                    <input type="hidden" name="user_id" value={{Auth::user()->id}} />
                    <select name="name" class="form-select" aria-label="Default select example">
                    @foreach ($tasks as $task )
                    @if($task->status == 'ready')
                    <option  value={{ $task->name }} > {{ $task->name }} </option>
                    @endif
                    @endforeach
                    </select>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </td>


      </tr>
    </tbody>
  </table>


