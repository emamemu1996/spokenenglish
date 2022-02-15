

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
     
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Testimonial section :</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submittestimonial')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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
      <label for="title1">Name</label>
     <input type="text" class="form-control" id="name" name="name" value="" placeholder="Name"> 

  </div>


  <div class="form-group">
      <label for="title2">Designation</label>
     <input type="text" class="form-control" id="designation" name="designation" value="" placeholder="Designation"> 

  </div>

   <div class="form-group">
      <label for="des">Description</label>
 
      <textarea id="des" class="form-control" name="des" placeholder="Slide description" style="height:200px">  </textarea>
    </div>


 


 <div class="row" >
    <div class="col-25">
      <label for="subject">About Image</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="image" name="image" value="Image">
    </div>
  </div>



  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>
</div>



   


  
<div class="panel-body widget-shadow">
            <h4>Testimonial section :</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>serial</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php 
              $i=1;
              @endphp
                    @foreach($mytestimonial as $testimoni)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td><img src="{{asset('images/'.$testimoni->image)}}" height="150px" width="150px"></td>
                  <td>{{$testimoni->name}}</td>
                   <td>{{$testimoni->designation}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid={{$testimoni->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button></td>
                  
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
      <form action="{{route('deletetestimonial')}}" method="post">
       
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