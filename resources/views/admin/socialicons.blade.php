

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
       
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Social icon section :</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submitsocialicons')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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
      <label for="title1">Icon Code</label>
     <input type="text" class="form-control" id="iconcode" name="iconcode" value="" placeholder="Icon Code"> 

  </div>


  <div class="form-group">
      <label for="title2">Icon Url</label>
     <input type="text" class="form-control" id="iconurl" name="iconurl" value="" placeholder="Icon Url"> 

  </div>


  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>
</div>



   

<div class="panel-body widget-shadow">
            <h4>Social Icon:</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>serial</th>
                  <th>Icon code</th>
                  <th>Icon Url</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php 
              $i=1;
              @endphp
                    @foreach($mysocial as $socialicon)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$socialicon->iconcode}}</td>
                  <td>{{$socialicon->iconurl}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid={{$socialicon->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button></td>
                  
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
      <form action="{{route('deletesocialicons')}}" method="post">
       
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