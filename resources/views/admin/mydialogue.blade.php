

@include('adminlayouts.admin_css')



@foreach($dialogdata as $dialog)
  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>{{$dialog->dialoguename}}</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submit_mydialogue')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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
      <label for="title1">Select Character</label>
     <select name="character" class="form-control">

      <option value="">Select Character</option>
      <option value="{{$dialog->characterone}}">{{$dialog->characterone}}</option>
      <option value="{{$dialog->charactertwo}}">{{$dialog->charactertwo}}</option>
       
     </select>

  </div>


  <div class="form-group">
      <label for="title2">Dialog English</label>
     <input type="text" class="form-control" id="dialogenglish" name="dialogenglish" value="" placeholder="dialog english"> 

      <input type="hidden" class="form-control" id="dialogid" name="dialogid" value="{{$dialog->id}}"> 

  </div> 



  <div class="form-group">
      <label for="title2">Dialog bangla</label>
     <input type="text" class="form-control" id="dialogbangla" name="dialogbangla" value="" placeholder="dialog bangla"> 

  </div>




   



  




  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>
</div>



   

@endforeach

<div class="panel-body widget-shadow">
            <h4>Order section:</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>serial</th>
                  <th>Character</th>
                  <th>dialogenglish</th>
                  <th>dialogbangla</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php 
              $i=1;
              @endphp
                    @foreach($mydialogdata as $mydialog)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$mydialog->character}}</td>
                  <td>{{$mydialog->dialogenglish}}</td>
                  <td>{{$mydialog->dialogbangla}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid='{{$mydialog->id}}'data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button> || <button type="button" class="btn btn-info" data-catid='{{$mydialog->id}}' data-character='{{$mydialog->character}}' data-dialogenglish='{{$mydialog->dialogenglish}}' data-dialogbangla='{{$mydialog->dialogbangla}}' data-toggle="modal" data-target="#edit"><i class="far fa-trash-alt"></i> Edit </button></td>
                  
                </tr>
              

                @endforeach


              </tbody>
            </table>
          </div>      




<!-- Modal -->
<div class="modal modal-danger fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('edit_mydialogue')}}" method="post">
       
           {{ csrf_field()}}
       


        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
        <input type="hidden" name="id" id="cat_id" value="">

      <div class="form-group">
      <label for="title1">Select Character</label>
     <select name="character" id="character" class="form-control">

      <option value="">Select Character</option>
      <option value="{{$dialog->characterone}}">{{$dialog->characterone}}</option>
      <option value="{{$dialog->charactertwo}}">{{$dialog->charactertwo}}</option>
       
       </select>

     </div>





   <div class="form-group">
      <label for="title2">Dialog English</label>
     <input type="text" class="form-control" id="dialogenglish" name="dialogenglish" value="" placeholder="dialog english"> 

  </div> 



  <div class="form-group">
      <label for="title2">Dialog bangla</label>
     <input type="text" class="form-control" id="dialogbangla" name="dialogbangla" value="" placeholder="dialog bangla"> 

  </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button type="submit" class="btn btn-warning">Yes, Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('delete_mydialogue')}}" method="post">
       
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
  
  $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('catid'); 
      var character = button.data('character'); 
      var dialogenglish = button.data('dialogenglish'); 
      var dialogbangla = button.data('dialogbangla'); 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
      modal.find('.modal-body #character').val(character);
      modal.find('.modal-body #dialogenglish').val(dialogenglish);
      modal.find('.modal-body #dialogbangla').val(dialogbangla);
})


</script>


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