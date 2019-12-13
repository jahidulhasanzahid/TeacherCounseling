<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Teacher Counseling</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/6ac9cf47bb.js"></script>

        <style type="text/css">
        @media print {
            #printbtn {
                display :  none;
            }
        }
        </style>

    </head>
    <body>
            <div class="cenetrdiv" id="printbtn">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <em>Do Login or Regirtration as a Teacher </em>
                        <a href="{{ route('login') }}">Login</a> |

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
            </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 shadow p-3 mb-5 bg-white rounded">
                
                <a id="printbtn" href="{{route('view.teacher.code')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a> <span id="printbtn">|</span>
                <button id="printbtn" onclick="myFunction()" style="border:none; background: transparent; text-align: right;"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
                <h2 class="heading">( {{ $id }} )Teacher Routine Result</h2>

                <div class="table-responsive">
                  <table class="table">
                    <thead style="background: linear-gradient(to right, #4CB8C4 0%, #F45C43 100%); color: white;">
                        <tr>
                          <th scope="col">Day</th>
                          <th scope="col">8:30-10:00</th>
                          <th scope="col">10:00-11:30</th>
                          <th scope="col">11:30:1:00</th>
                          <th scope="col">1:00-2:30</th>
                          <th scope="col">2:30-4:00</th>
                          <th scope="col">4:00-5:30</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($show as $view)
                        <tr>
                          <th>{{ $view->day }}</th>
                          <th>{{ $view->slotOne }}</th>
                          <th>{{ $view->slotTwo }}</th>
                          <th>{{ $view->slotThree }}</th>
                          <th>{{ $view->slotFour }}</th>
                          <th>{{ $view->slotFive }}</th>
                          <th>{{ $view->slotSix }}</th>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    function myFunction() {
      window.print();
    }
    </script>

    </body>
</html>
