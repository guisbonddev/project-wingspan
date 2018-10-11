<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>VATUSA vOIS System - Administration</title>

  </head>
  <body>
    @include('partials.nav')
      <br><br>

    <div class="row">
      @include('admin.nav')
      <div class="col-md-10">
        <div class="card">
          <div class="card-body">
            <h2>Reasons</h2>
            <hr>
              <p>This OIS system is based off of a set number of conjunctive reasons that belong to different categories within the system. This is designed in an effort to maintain realism across all records and allow for customization. Manage reason categories below.</p>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Reason</th>
                  <th>Category</th>
                  <th>Actions</th>
                </tr>
              </thead>
              @foreach ($reasons as $reason)
              <tr>
                <td>{{$reason->id}}</td>
                <td>{{$reason->name}}</td>
                <td>{{$reason->category}}</td>
                <td><a href="#"><span class="badge badge-success" data-toggle="modal" data-target="#nas_modal">Edit</span></td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>