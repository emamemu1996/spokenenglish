

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <h3 class="title1">Forms</h3>
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Work details section  :</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submitworkdetails')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


  {{ csrf_field()}}



  
  <div class="form-group">
      <label for="title1">Work title</label>
     <input type="text" class="form-control" id="title" name="title" value="" placeholder="Work title"> 

  </div>


  <div class="form-group">
      <label for="title2">Work Count</label>
     <input type="text" class="form-control" id="workcount" name="workcount" value="" placeholder="Work Count"> 

  </div>


  <div class="form-group">
      <label for="des">Work Description</label>
 
      <textarea id="des" class="form-control" name="des" placeholder="Work description" style="height:200px">   </textarea>
    </div>

  

  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>
</div>



   



<div class="panel-body widget-shadow">
            <h4>work details sec:</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>serial</th>
                  <th>Title</th>
                  <th>Work count</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php 
              $i=1;
              @endphp
                    @foreach($aboutworkdata as $abwork)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$abwork->title}}</td>
                  <td>{{$abwork->workcount}}</td>
                  <td>{{$abwork->des}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid={{$abwork->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button></td>
                  
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
      <form action="{{route('deleteworkdetails')}}" method="post">
       
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