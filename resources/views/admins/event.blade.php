@extends('layouts.app')

@section('content')
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('event_m') }}
                    </div>
                @endif

            <div class="panel panel-default">
              
                <div class="panel-heading"><a href="{{url('admin/addevent')}}" class="btn btn-success">Add New Event</a></div>
             

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
                                    <th>Description</th>
                                    <th>Start Date </th>
                                    <th>End Date </th>
                                    <th>User ID </th>           
                                    <th>Action </th>
                                  </tr>
                                </thead>

                                <tbody>
                                @if (count($tasks) > 0)
                                    @foreach ($tasks as $task)
                                        <tr>
                                          <td>{{$task->id}}</td>
                                          <td>{{$task->title}}</td>
                                          <td>{{$task->content}}</td>
                                          <td>{{$task->sdate}}</td>
                                          <td>{{$task->edate}}</td>
                                          <td>{{$task->user_id}}</td>
                                          <td>
                                             <!-- Button trigger modal -->
                                            <button class="show-modal btn btn-success" data-id="{{$task->id}}" data-title="{{$task->title}}" data-content="{{$task->content}}"
                                            data-sdate="{{$task->sdate}}"
                                             data-edate="{{$task->edate}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                            &nbsp;

                                            <a href=" {{ url('admin/edit',$task->id) }} "><button class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>&nbsp;
                                          
                                            <a href=" {{ url('admin/delete',$task->id ) }} " onclick="return confirm('Are you sure ?')"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button></a>&nbsp;
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
                                        <label class="control-label col-sm-2" for="fname">Description:</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="content_show" disabled></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Start Date:</label>
                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="sdate_show" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">End Date:</label>
                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="edate_show" disabled>
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
            $('#content_show').val($(this).data('content')); 
            $('#sdate_show').val($(this).data('sdate'));
            $('#edate_show').val($(this).data('edate'));
            $('#showModal').modal('show');
        });
  </script>
@endsection

 