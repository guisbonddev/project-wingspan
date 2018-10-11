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
            <h2>Create New Initiative</h2>
            <hr>
              <p>USAOIS allows for multiple different categories of records to be entered for a paticular program or airport. Consider the ones below, composed of NAS status, airport-specific ground stops and general delay information. Note, although accordian information should save, you can only create one record at a time.</p>
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Create - NAS Status Record
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Program Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Start Time</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">End Time</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Scope</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                          </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleFormControlSelect2">Reason</label>
                            <select  class="form-control" id="exampleFormControlSelect2">
                                @foreach ($reasons as $reason)
                                  <option>{{$reason->name}} ({{$reason->category}})</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Average</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Arrival Rate</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">PR</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Create - Ground Stop Program
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Airport</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Next Update Time</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Scope</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Reason</label>
                        <select  class="form-control" id="exampleFormControlSelect2">
                            @foreach ($reasons as $reason)
                              <option>{{$reason->name}} ({{$reason->category}})</option>
                            @endforeach
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Create - Delay Initiative Information
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                                        <form>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Airport</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">AD</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">DD</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Next Update Time</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Reason</label>
                        <select  class="form-control" id="exampleFormControlSelect2">
                            @foreach ($reasons as $reason)
                              <option>{{$reason->name}} ({{$reason->category}})</option>
                            @endforeach
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
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