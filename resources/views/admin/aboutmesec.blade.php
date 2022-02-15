

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <h3 class="title1">Homepage</h3>
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>About Section:</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('aboutmesubmit','1')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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


@foreach($aboutsetting as $about)
  
  <div class="form-group">
      <label for="title1">Title 1</label>
     <input type="text" class="form-control" id="title1" name="title1" value="{{$about->title1}}" placeholder="title1"> 

  </div>


  <div class="form-group">
      <label for="title2">Title2</label>
     <input type="text" class="form-control" id="title2" name="title2" value="{{$about->title2}}" placeholder="Title 2"> 

  </div>

   <div class="form-group">
      <label for="downloadcv">Downliad cv link</label>
     <input type="text" class="form-control" id="downloadcv" name="downloadcv" value="{{$about->downloadcv}}" placeholder="Downliad cv link"> 

  </div>


    <div class="form-group">
      <label for="des">Description</label>
 
      <textarea id="des" class="form-control" name="des" placeholder="Slide description" style="height:200px"> {{$about->des}}  </textarea>
    </div>


  <img src="{{asset('images/'.$about->image)}}" height="200px" width="200px">


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


@endforeach

   



<div class="form-body">
              
<h3 class="title1">About Address</h3>
          

 <form action="{{route('aboutmeintro')}}" method="post" enctype="multipart/form-data" data-parsley-validate>

    



  {{ csrf_field()}}



  
  <div class="form-group">
      <label for="title1">Option</label>
     <input type="text" class="form-control" id="title1" name="title1" value="" placeholder="Option"> 

  </div>


  <div class="form-group">
      <label for="title2">Value</label>
     <input type="text" class="form-control" id="title2" name="title2" value="" placeholder="Value"> 

  </div>

 




  <br>
  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>

</div>



<div class="panel-body widget-shadow">
            <h4>About:</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>serial</th>
                  <th>Experience icon code</th>
                  <th>Experience icon Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php 
              $i=1;
              @endphp
                    @foreach($aboutall as $about)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$about->title1}}</td>
                  <td>{{$about->title2}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid={{$about->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button></td>
                  
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
      <form action="{{route('aboutmeintrodelete')}}" method="post">
       
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