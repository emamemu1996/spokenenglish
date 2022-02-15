

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Sentence</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submit_dialogue')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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
      <label for="title1">Dialogue Name</label>
     <input type="text" class="form-control" id="dialoguename" name="dialoguename" value="" placeholder="dialogue name"> 

     <input type="hidden" class="form-control" id="type" name="type" value="quiz" placeholder="dialogue name"> 

  </div>



     <input type="hidden" class="form-control" id="characterone" name="characterone" value="no" placeholder="Character One"> 

  



     <input type="hidden" class="form-control" id="charactertwo" name="charactertwo" value="no" placeholder="Character Two"> 




<div class="form-group">
      <label for="title2">priority</label>
     <input type="number" class="form-control" id="priority" name="priority" value="" placeholder="priority"> 

  </div>


   



  




  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>
</div>



   



<div class="panel-body widget-shadow">
            <h4>Order section:</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>serial</th>
                  <th>Dialogue Name</th>
                  <th>priority</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php 
              $i=1;
              @endphp
                    @foreach($dialogdata as $dialog)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$dialog->dialoguename}}</td>
                  <td>{{$dialog->priority}}</td>
                    <td><?php 
                      if($dialog->status=="1"){
                        echo " <span style='color:green;'> Approved <span>";
                      }else{
                          echo " <span style='color:red;'> Pending <span>";
                      }

                   ?></td> 
                  <td><a href="{{route('single_quiz',$dialog->id)}}" class="btn btn-success">View</a> <button type="button" class="btn btn-danger" data-catid='{{$dialog->id}}'data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button> || <button type="button" class="btn btn-info" data-catid='{{$dialog->id}}' data-dialoguename='{{$dialog->dialoguename}}' data-characterone='{{$dialog->characterone}}' data-charactertwo='{{$dialog->charactertwo}}'  data-status='{{$dialog->status}}'  data-priority='{{$dialog->priority}}' data-toggle="modal" data-target="#edit"> edit</button>  </td>
                  
                </tr>
              

                @endforeach


              </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {!! $dialogdata->appends(['sort' => 'science-stream'])->links() !!}
            </div> 


          </div>      




<!-- Modal -->
<div class="modal modal-danger fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('update_dialogue')}}" method="post">
       
           {{ csrf_field()}}
       
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="id" id="cat_id" value="">

      <div class="form-group">
      <label for="title1">Dialogue Name</label>
     <input type="text" class="form-control" id="dialoguename" name="dialoguename" value="" placeholder="dialogue name"> 

     </div>


 
     <input type="hidden" class="form-control" id="characterone" name="characterone" value="" placeholder="Character One"> 





     <input type="hidden" class="form-control" id="charactertwo" name="charactertwo" value="" placeholder="Character Two"> 




   <div class="form-group">
      <label for="title2">priority</label>
     <input type="number" class="form-control" id="priority" name="priority" value="" placeholder="priority"> 

  </div>


     <div class="form-group">
      <label for="title1">Status</label>
     <select name="status" id="status" class="form-control">

      <option value="">Select Character</option>
      <option value="1">Approved</option>
      <option value="0">Pending</option>
       
       </select>

     </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button type="submit" class="btn btn-info">Yes, Edit</button>
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
      <form action="{{route('delete_dialogue')}}" method="post">
       
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
      var dialoguename = button.data('dialoguename'); 
      var characterone = button.data('characterone'); 
      var charactertwo = button.data('charactertwo'); 
      var priority = button.data('priority'); 
      var status = button.data('status'); 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
      modal.find('.modal-body #dialoguename').val(dialoguename);
      modal.find('.modal-body #characterone').val(characterone);
      modal.find('.modal-body #charactertwo').val(charactertwo);
      modal.find('.modal-body #priority').val(priority);
      modal.find('.modal-body #status').val(status);
})

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