<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Laravel Crud</h2>

  @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Successfully Completed
                  </div>
@endif
            
  <table class="table table-striped">
    <thead>
      <tr>
      <th><center>Email</center></th>
        <th><center>Firstname</center></th>
        <th><center>Lastname</center></th>
        <th><center>Username</center></th>
        <th colspan="2"><center>Action</center></th>
      </tr>
    </thead>
    <tbody>
        @foreach($crud as $cruds)
      <tr>
      <td><center>{{$cruds->email}}</center></td>
        <td><center>{{$cruds->firstname}}</center></td>
        <td><center>{{$cruds->lastname}}</center></td>
        <td><center>{{$cruds->username}}</center></td>
        <td>{!! Form::open(['url' => URL::to('/crud/'.$cruds->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}</td>

    <td><a href="{{ URL::to('/crud/'.$cruds->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a></td>

      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
