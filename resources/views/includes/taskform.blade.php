<form action={{ URL::route('task.store') }} method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputName" class="form-label"><strong>Task Name</strong> <small>Required*</small></label>
      <input type="text" name="catch" class="form-control" id="exampleInputName" >
    </div>
    <div class="mb-3">
      <label for="exampleInputSelectProj" class="form-label"><strong>Projet</strong> <small>Required*</small></label>
        <select name="project_id" class="form-select" id="exampleInputSelectProj" aria-label="Default select example">
            @foreach ($projects as $project )
            <option  value={{ $project->id }} > {{ $project->name }} </option>
            @endforeach
            </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputSelectUser" class="form-label"><strong>Select User</strong> <small>Optional</small></label>
        <select name="user_id" class="form-select" id="exampleInputSelectUser" aria-label="Default select example">
            <option  value="" ></option>
            @foreach ($users as $user )
            <option  value={{ $user->id }} > {{ $user->name }} </option>
            @endforeach
            </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
