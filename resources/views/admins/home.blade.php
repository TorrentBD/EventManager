@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Candidate List</div>

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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view">
  View
</button>

<!-- Modal -->
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Candidate Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Name : {{$task->name}} &nbsp;<br>
        Roll : {{$task->roll}} &nbsp;<br>
        Father Name : {{$task->fname}} &nbsp;<br>
        Birth Date : {{$task->bdate}} &nbsp;<br>
        Email : {{$task->email}} &nbsp;<br>
        Phone : {{$task->phone}} &nbsp;<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         
      </div>
    </div>
  </div>
</div> &nbsp;

                                          
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
            </div>
        </div>
    </div>
</div>
@endsection
