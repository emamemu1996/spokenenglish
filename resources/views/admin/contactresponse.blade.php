

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <h3 class="title1">Contact Response</h3>
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
            
            </div>



 


 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif








                 
    <div class="panel-body widget-shadow">
            <h4>Experience:</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>serial</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>subject</th>
                  <th>website</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php 
              $i=1;
              @endphp
                    @foreach($contact as $con)

                 
                <tr id="setcolor" @if($con->status=='no') style="background:#9a95f3;"  @endif>
                  <td>{{$i++}}</td>
                  <td>{{$con->name}}</td>
                  <td>{{$con->sender}}</td>
                  <td>{{$con->subject}}</td>
                  <td>{{$con->website}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid={{$con->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button> || <a type="button" class="btn btn-info" href="{{route('singlesms',$con->id)}}"><i class="far fa-trash-alt"></i> View</a></td>
                  
                </tr>
              

                @endforeach


              </tbody>
            </table>
          </div>       









<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('delcontactresponse')}}" method="post">
       
           {{ csrf_field()}}
       
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="id" id="cat_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button type="submit" class="btn btn-warning">Yes, Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>



<script type="text/javascript">
  
  $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
})


</script>




          
      </div>
    </div>




   @include('adminlayouts.admin_js')