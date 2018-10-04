<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>VATUSA vOIS System</title>

  </head>
  <body>
    @include('partials.nav')

     <div class="row">
        <div class="col-md-12">
            <center>
                <br><br>
                <h3>National Programs</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>PROGRAM NAME</th>
                            <th>START</th>
                            <th>END</th>
                            <th>SCOPE</th>
                            <th>REASON</th>
                            <th>AVG</th>
                            <th>AAR</th>
                            <th>PR</th>
                            <th>Actions</th>
                        </tr>  
                    </thead> 
                    @foreach ($nas_r as $nas)
                    <tr>
                        <td>{{$nas->airport}}</td>
                        <td>{{$nas->start}}</td>
                        <td>{{$nas->end}}</td>
                        <td>{{$nas->scope}}</td>
                        <td>{{$nas->reasons->name}}</td>
                        <td>{{$nas->avg}}</td>
                        <td>{{$nas->aar}}</td>
                        <td>{{$nas->pr}}</td>
                        <td><a href="#"><span class="badge badge-success" data-toggle="modal" data-target="#exampleModal">Edit</span></a></td>
                    </tr>

                    <!-- NAS Edit Form MODAL -->

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit: National Airspace System</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Program Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$nas->airport}}">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Start Time</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$nas->start}}">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">End Time</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$nas->end}}">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Scope</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$nas->scope}}">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect2">Reason</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    @foreach ($reasons as $reason)
                                      <option>{{$reason->name}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Average</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$nas->avg}}">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Arrival Rate</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$nas->aar}}">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">PR</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$nas->pr}}">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    @endforeach
                </table>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <center>
                <br><br>
                <h3>Ground Stops</h3>
                <a href="#"><span class="badge badge-success" data-toggle="modal" data-target="#exampleModal">Edit</span></a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="6%">ARPT</th>
                            <th>UPDATE</th>
                            <th>SCOPE</th>
                            <th>REASON</th>
                            <th>Actions</th>
                        </tr>  
                    </thead> 
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </center>
        </div>
        <div class="col-md-6">
            <center>
                <br><br>
                <h3>Delay Info</h3>
                <a href="#"><span class="badge badge-success" data-toggle="modal" data-target="#exampleModal">Edit</span></a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ARPT</th>
                            <th>AD</th>
                            <th>DD</th>
                            <th>TIME</th>
                            <th>REASON</th>
                        </tr>  
                    </thead> 
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </center>
        </div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>