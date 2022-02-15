

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <h3 class="title1">Experience section</h3>
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
            
            </div>



 



<div class="form-body">

  <h4>Experience common setting</h4>
  <br>

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

<form action="{{route('updateexperiencedu','1')}}" method="post" enctype="multipart/form-data" data-parsley-validate>

 {{ csrf_field()}}
 <div class="form-group">
      <label for="icon">Experince Duration</label>
       @foreach($homesettingexduration as $exdura)   

     <input type="text" class="form-control" id="exduration" name="exduration" value="{{$exdura->exduration}}" placeholder="Experince Duration"> 
     

  </div>

<div class="form-group">
      <label for="icon">Experince Title</label>
        

     <input type="text" class="form-control" id="extitle" name="extitle" value="{{$exdura->extitle}}" placeholder="Experince title"> 

  </div>



  @endforeach
  <input type="submit" name="submit" id="submit" value="update">

</form>

</div>














            <div class="form-body">
            <h4>Add Experience card</h4>
            <br>


     <form action="{{route('submitexperience')}}" method="post" enctype="multipart/form-data" data-parsley-validate>





  {{ csrf_field()}}




  
  <div class="form-group">
      <label for="icon">Experince Icon(Go to fontawesome and copy icon code and paste here)</label>
     <input type="text" class="form-control" id="icon" name="icon" value="" placeholder="icon"> 

  </div>


  <div class="form-group">
      <label for="exname">Experience Name</label>
     <input type="text" class="form-control" id="exname" name="exname" value="" placeholder="Experience Name"> 

  </div>


  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>
</div>







                 
    <div class="panel-body widget-shadow">
            <h4>Experience:</h4>
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
                    @foreach($experiencesetting as $experience)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$experience->icon}}</td>
                  <td>{{$experience->exname}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid={{$experience->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button></td>
                  
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
      <form action="{{route('deleteexperience')}}" method="post">
       
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