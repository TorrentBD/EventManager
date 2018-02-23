@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Candidate List </div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- start-->
                    <div class="table-responsive">
                              <table class="table table-striped table-hover table-bordered ">
                                <thead>
                                  <tr>                       
                                    <th>Candidate Name</th>
                                    <th>Roll</th>
                                    <th>Father Name</th>
                                    <th>Email </th>
                                    <th>Contact No# </th>                   
                                    <th>Action </th>
                                  </tr>
                                </thead>

                                <tbody>
                                @if (count($tasks) > 0)
                                    @foreach ($tasks as $task)
                                        <tr>
                                          <td>{{$task->name}}</td>
                                          <td>{{$task->roll}}</td>
                                          <td>{{$task->fname}}</td>
                                          <td>{{$task->email}}</td>
                                          <td>{{$task->phone}}</td>
                                          <td>
                                             <!-- Button trigger modal -->
                                            <button class="show-modal btn btn-success" data-name="{{$task->name}}" data-fname="{{$task->fname}}" data-roll="{{$task->roll}}" data-email="{{$task->email}}" data-aca="{{$task->aca}}" data-phone="{{$task->phone}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                            &nbsp;
                                          
                                            <a href=" {{ url('delete',$task->id ) }} " onclick="return confirm('Are you sure?')"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button></a>&nbsp;
                                          </td>


                                        </tr>
                                    @endforeach
                                
                                @endif
                     <!---->   
                                </tbody>
                              </table>

                              
                               @if(count($tasks)==0)                  
                                  <div class="col-lg-12 center">
                                     Empty List
                                  </div>                                
                                @endif

                            <div class="col-lg-12 center">
                              <ul class="pagination pagination-sm">
                               
                                {{ $tasks->links() }}              
                                     
                              </ul>
                            </div>

                            </div>

                    <!-- end-->
                </div>

                <!-- Modal form to show a post -->
                <div id="showModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="name">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name_show" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="roll">Roll:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="roll_show" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="fname">Father Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="fname_show" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="email_show" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Phone:</label>
                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="phone_show" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="aca">Academic:</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="aca_show" cols="40" rows="5" disabled></textarea>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                                        <span class='glyphicon glyphicon-remove'></span> Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection

@section('scripts')
  <script type="text/javascript">
  // Show a post
        $(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Show');
            $('#name_show').val($(this).data('name'));
            $('#roll_show').val($(this).data('roll'));
            $('#fname_show').val($(this).data('fname'));
            $('#email_show').val($(this).data('email'));
            $('#phone_show').val($(this).data('phone'));
            $('#aca_show').val($(this).data('aca'));
            $('#showModal').modal('show');
        });
  </script>
@endsection

 