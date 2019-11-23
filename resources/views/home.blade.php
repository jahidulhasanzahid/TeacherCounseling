@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user())
                    
                    @if(Auth::user()->status == 'pending')
                    <div>Your Account is now Pending.</div>
                    @else(Auth::user()->status == 'Active')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Information View</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Information Add</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Information Update</a>
                      </li>
                    </ul>

                    <br>
                    <br>

                    <div class="tab-content">
                      <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3>Information Details</h3>
                          <table class="table table-striped">
                          <thead style="background: linear-gradient(to right, #EB3349 0%, #F45C43 100%); color: white;">
                            <tr>
                              <th scope="col">Day</th>
                              <th scope="col">8:30-10:00</th>
                              <th scope="col">10:00-11:30</th>
                              <th scope="col">11:30:1:00</th>
                              <th scope="col">1:00-2:30</th>
                              <th scope="col">2:30-4:00</th>
                              <th scope="col">4:00-5:30</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($information as $info)
                            <tr>
                              <th>{{ $info->day }}</th>
                              <td>{{ $info->slotOne }}</td>
                              <td>{{ $info->slotTwo }}</td>
                              <td>{{ $info->slotThree }}</td>
                              <td>{{ $info->slotFour }}</td>
                              <td>{{ $info->slotFive }}</td>
                              <td>{{ $info->slotSix }}</td>
                              <td>
                              <form class="form-inline" action="{{ route('information.delete', $info->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="cart_id" />
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3>Information Add</h3>
                        <form action="{{ route('information.store') }}" method="post">
                            @csrf
                          <div class="form-group">
                            <label for="inputAddress">Your Teacher Code</label>
                              <input type="text" class="form-control" id="inputAddress" name="teacher_code" value="{{Auth::User()->teacher_code}}" required readonly>
                          </div>

                          <div class="form-group">
                            <label for="inputAddress">Day</label>
                              <select id="inputState" class="form-control" name="day" required>
                                <option selected>Choose Day...</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                              </select>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputSlotOne">Slot One</label>
                              <input type="text" class="form-control" id="inputSlotTwo" placeholder="ex: Class,Counseling,Off Day" name="slotOne" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputSlotTwo">Slot Two</label>
                              <input type="text" class="form-control" id="inputSlotTwo" placeholder="ex: Class,Counseling,Off Day" name="slotTwo" required>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputSlotThree">Slot Three</label>
                              <input type="text" class="form-control" id="inputSlotThree" placeholder="ex: Class,Counseling,Off Day" name="slotThree" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputSlotFour">Slot Four</label>
                              <input type="text" class="form-control" id="inputSlotFour" placeholder="ex: Class,Counseling,Off Day" name="slotFour" required>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputSlotFive">Slot Five</label>
                              <input type="text" class="form-control" id="inputSlotFive" placeholder="ex: Class,Counseling,Off Day" name="slotFive" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputSlotSix">Slot Six</label>
                              <input type="text" class="form-control" id="inputSlotSix" placeholder="ex: Class,Counseling,Off Day" name="slotSix" required>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary" name="submit">Save Add</button>
                        </form>
                      </div>
                      <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                        @foreach($information as $infos)
                          <h3>{{ $infos->day }} Information Update</h3>
                        <form action="{{ route('information.update',$infos->day)}}" method="post" style="border-bottom: 1px solid green; margin-bottom: 10px;">
                          @csrf
                          <div class="form-group">
                            <label for="inputAddress">Your Teacher Code</label>
                              <input type="text" class="form-control" id="inputAddress" name="teacher_code" value="{{Auth::User()->teacher_code}}" required readonly>
                          </div>

                          <div class="form-group">
                            <label for="inputAddress">Day</label>
                              <select id="inputState" class="form-control" name="day" required readonly>
                                <option value="{{ $infos->day }}" selected>{{ $infos->day }}</option>
                              </select>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputSlotOne">Slot One</label>
                              <input type="text" class="form-control" id="inputSlotTwo" placeholder="Slot One" name="slotOne" value="{{ $infos->slotOne }}" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputSlotTwo">Slot Two</label>
                              <input type="text" class="form-control" id="inputSlotTwo" placeholder="Slot Two" name="slotTwo" value="{{ $infos->slotTwo }}" required>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputSlotThree">Slot Three</label>
                              <input type="text" class="form-control" id="inputSlotThree" placeholder="Slot Three" name="slotThree" value="{{ $infos->slotThree }}" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputSlotFour">Slot Four</label>
                              <input type="text" class="form-control" id="inputSlotFour" placeholder="Slot Four" name="slotFour" value="{{ $infos->slotFour }}" required>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputSlotFive">Slot Five</label>
                              <input type="text" class="form-control" id="inputSlotFive" placeholder="Slot Five" name="slotFive" value="{{ $infos->slotFive }}" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputSlotSix">Slot Six</label>
                              <input type="text" class="form-control" id="inputSlotSix" placeholder="Slot Six" name="slotSix" value="{{ $infos->slotSix }}" required>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary" name="submit">Save Update</button> <br> <br>
                        </form>

                        @endforeach
                      </div>
                    </div>

                    <script>
                      $(function () {
                        $('#myTab li:last-child a').tab('show')
                      })
                    </script>

                @endif
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
