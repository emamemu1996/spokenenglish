

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Order section</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submitordersec')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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
      <label for="title1">Plan name</label>
     <input type="text" class="form-control" id="planname" name="planname" value="" placeholder="plan name"> 

  </div>


  <div class="form-group">
      <label for="title2">Plan price</label>
     <input type="text" class="form-control" id="planprice" name="planprice" value="" placeholder="Plan price"> 

  </div>


    <div class="form-group">
      <label for="title2">Plan service1</label>
     <input type="text" class="form-control" id="planservice1" name="planservice1" value="" placeholder="Plan service1"> 

  </div>


    <div class="form-group">
      <label for="title2">Plan service2</label>
     <input type="text" class="form-control" id="planservice2" name="planservice2" value="" placeholder="Plan service2"> 

  </div>


  <div class="form-group">
      <label for="title2">Plan service3</label>
     <input type="text" class="form-control" id="planservice3" name="planservice3" value="" placeholder="Plan service3"> 

  </div>


    <div class="form-group">
      <label for="title2">Plan service4</label>
     <input type="text" class="form-control" id="planservice4" name="planservice4" value="" placeholder="Plan service4"> 

  </div>

      <div class="form-group">
      <label for="title2">Plan service5</label>
     <input type="text" class="form-control" id="planservice5" name="planservice5" value="" placeholder="Plan service5"> 

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
                    @foreach($ordertable as $ordertab)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$ordertab->planname}}</td>
                  <td>{{$ordertab->planprice}}</td>
                  <td>{{$ordertab->planservice1}}</td>
                  <td>{{$ordertab->planservice2}}</td>
                  <td>{{$ordertab->planservice3}}</td>
                  <td>{{$ordertab->planservice4}}</td>
                  <td>{{$ordertab->planservice5}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid={{$ordertab->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button></td>
                  
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
      <form action="{{route('deleteordersec')}}" method="post">
       
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