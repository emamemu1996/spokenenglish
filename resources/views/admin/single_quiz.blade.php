

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


 <input type="hidden" class="form-control" id="dialogid" name="dialogid" value="{{$dialog->id}}"> 
  


  <div class="form-group">
      <label for="title2">Question</label>
     <input type="text" class="form-control" id="character" name="character" value="" placeholder="Question"> 

     

  </div> 

  <div class="form-group">
      <label for="title2">Option 1</label>
     <input type="text" class="form-control" id="dialogenglish" name="dialogenglish" value="" placeholder="Option 1"> 

     

  </div> 



  <div class="form-group">
      <label for="title2">Option 2</label>
     <input type="text" class="form-control" id="dialogbangla" name="dialogbangla" value="" placeholder="Option 2"> 

  </div>



  <div class="form-group">
      <label for="title2">Option 3</label>
     <input type="text" class="form-control" id="type" name="type" value="" placeholder="Option 3"> 

  </div>


  <div class="form-group">
      <label for="title1">Select Answer</label>
     <select name="status" id="status" class="form-control">

      <option value="">Select Answer</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
       
     </select>

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
                  <th>Option1</th>
                  <th>Option2</th>
                  <th>Option3</th>
                  <th>Answer</th>
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
                  <td>{{$mydialog->type}}</td>
                  <td>{{$mydialog->status}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid='{{$mydialog->id}}'data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button> || <button type="button" class="btn btn-info" data-catid='{{$mydialog->id}}' data-character='{{$mydialog->character}}' data-dialogenglish='{{$mydialog->dialogenglish}}' data-dialogbangla='{{$mydialog->dialogbangla}}' data-type='{{$mydialog->type}}' data-status='{{$mydialog->status}}' data-toggle="modal" data-target="#edit"><i class="far fa-trash-alt"></i> Edit </button></td>
                  
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
      <label for="title2">Question</label>
     <input type="text" class="form-control" id="character" name="character" value="" placeholder="Question"> 

     

  </div> 

  <div class="form-group">
      <label for="title2">Option 1</label>
     <input type="text" class="form-control" id="dialogenglish" name="dialogenglish" value="" placeholder="Option 1"> 

     

  </div> 



  <div class="form-group">
      <label for="title2">Option 2</label>
     <input type="text" class="form-control" id="dialogbangla" name="dialogbangla" value="" placeholder="Option 2"> 

  </div>



  <div class="form-group">
      <label for="title2">Option 3</label>
     <input type="text" class="form-control" id="type" name="type" value="" placeholder="Option 3"> 

  </div>


  <div class="form-group">
      <label for="title1">Select Answer</label>
     <select name="status" id="status" class="form-control">

      <option value="">Select Answer</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
       
     </select>

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
      var type = button.data('type'); 
      var status = button.data('status'); 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
      modal.find('.modal-body #character').val(character);
      modal.find('.modal-body #dialogenglish').val(dialogenglish);
      modal.find('.modal-body #dialogbangla').val(dialogbangla);
      modal.find('.modal-body #type').val(type);
      modal.find('.modal-body #status').val(status);
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