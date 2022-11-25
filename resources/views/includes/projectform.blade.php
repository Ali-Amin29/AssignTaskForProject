<form action={{ URL::route('project.create') }} method="GET">
    @csrf
    <div class="mb-3">
      <label for="exampleInputName" class="form-label"><strong>Project Name</strong> <small>Required*</small></label>
      <input type="text" name="name" class="form-control" id="exampleInputName" >
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
