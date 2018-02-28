@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
              
                <div class="panel-heading"><a href="{{url('/cfqa')}}" class="btn btn-success">Add New FQA</a></div>
             

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
                                    <th>Event ID</th>
                                    <th>Title</th>
                                    <th>FQA</th>
                                    <th>User ID </th>           
                                    <th>Action </th>
                                  </tr>
                                </thead>

                                <tbody>
                                @if (count($tasks) > 0)
                                    @foreach ($tasks as $task)
                                        <tr>
                                          <td>{{$task->id}}</td>
                                          <td>{{$task->event}}</td>
                                          <td>{{$task->fqa}}</td>
                                          <td>{{$task->user_id}}</td>
                                          <td>
                                             <!-- Button trigger modal -->
                                            <button class="show-modal btn btn-success" data-id="{{$task->id}}" data-title="{{$task->title}}" data-fqa="{{$task->fqa}}" data-user="{{$task->u_id}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                            &nbsp;
                                          
                                            <a href=" {{ url('delete',$task->id ) }} " onclick="return confirm('Are you sure ?')"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button></a>&nbsp;
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
                                        <label class="control-label col-sm-2" for="name">Event ID:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="id_show" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="roll">Title:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title_show" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="fname">FQA:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="fqa_show" disabled>
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
         
        // view
        $(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Show');
            $('#id_show').val($(this).data('id'));
            $('#title_show').val($(this).data('title'));
            $('#fqa_show').val($(this).data('fqa'));
            $('#showModal').modal('show');
        });
  </script>
@endsection

 