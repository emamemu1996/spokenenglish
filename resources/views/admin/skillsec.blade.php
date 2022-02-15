

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
     
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Skill section:</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submitskill')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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
      <label for="title1">Skill name</label>
     <input type="text" class="form-control" id="skillname" name="skillname" value="" placeholder="Skill name"> 

  </div>


  <div class="form-group">
      <label for="title2">Percentage</label>
     <input type="text" class="form-control" id="parcen" name="parcen" value="" placeholder="Percentage"> 

  </div>

  



  <div class="form-group">
      <label for="title2">Color</label>
     <select name="color" class="form-control">
        <option value="gradient-1">Color-1</option>
        <option value="gradient-2">Color-2</option>
        <option value="gradient-3">Color-3</option>
        <option value="gradient-4">Color-4</option>
     </select> 

  </div>


    <div class="form-group">
      <label for="title2">section</label>
     <select name="section" class="form-control">
        <option value="section1">section-1</option>
        <option value="section2">section-2</option>
       
     </select> 

  </div>


  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>
</div>



   



<div class="panel-body widget-shadow">
            <h4>Skill section:</h4>
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
                    @foreach($myskill as $skill)
                     
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$skill->skillname}}</td>
                  <td>{{$skill->parcen}}</td>
                  <td>{{$skill->color}}</td>
                  <td>{{$skill->section}}</td>
                  <td><button type="button" class="btn btn-danger" data-catid={{$skill->id}} data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i> DELETE</button></td>
                  
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
      <form action="{{route('deleteskill')}}" method="post">
       
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