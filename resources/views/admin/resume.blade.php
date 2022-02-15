

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">

          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Resume section :</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submitresume')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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
      <label for="title1">Experience name</label>
     <input type="text" class="form-control" id="exname" name="exname" value="" placeholder="Experience name"> 

  </div>


  <div class="form-group">
      <label for="title2">Institute</label>
     <input type="text" class="form-control" id="institute" name="institute" value="" placeholder="Institute"> 

  </div>

   <div class="form-group">
      <label for="title2">Duration</label>
     <input type="text" class="form-control" id="duration" name="duration" value="" placeholder="Duration"> 

  </div>



  <div class="form-group">
      <label for="title2">Type</label>
     <select name="type" class="form-control">
        <option value="Education">Education</option>
        <option value="Experience">Experience</option>
     </select> 

  </div>



  
  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>
</div>



   



<div class="panel-body widget-shadow">
            <h4>Resume:</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>serial</th>
                  <th>Qualification</th>
                  <th>Institute</th>
                  <th>Duration</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php 
              $i=1;
              @endphp
                    @foreach($myresume as $resum)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$resum->exname}}</td>
                  <td>{{$resum->institute}}</td>
                  <td>{{$resum->duration}}</td>
                  <td>{{$resum->type}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid={{$resum->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button></td>
                  
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
      <form action="{{route('deleteresume')}}" method="post">
       
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