

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
         
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>About Page setting</h4>
            </div>
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('adminaboutsubmit','1')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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

  @foreach($aboutpageset as $slide)

  
  <div class="form-group">
      <label for="slidertext1">Timeline title</label>
     <input type="text" class="form-control" id="title" name="title" value="{{$slide->title}}" placeholder="Timeline title"> 

  </div>


  <div class="form-group">
      <label for="des">Timeline Description</label>
  
     <textarea id="des" class="form-control" name="des" placeholder="Slide description" style="height:200px"> {{$slide->des}}  </textarea>

  </div>



   <div class="form-group">
      <label for="btnurl">Timeline button Url</label>
      <input type="text" class="form-control" id="btnurl" name="btnurl" value="{{$slide->btnurl}}" placeholder="Timeline button Url">
   
  </div>





   <div class="form-group">
      <label for="abouttitle1">Your Experience</label>
 
      <input type="text" class="form-control" id="abouttitle1" name="abouttitle1" value="{{$slide->abouttitle1}}" placeholder="Your Experience">
    </div>
 

  <div class="form-group">
      <label for="abouttitle2">Experience short description</label>
 
      <textarea id="abouttitle2" class="form-control" name="abouttitle2" placeholder="Slide description" style="height:200px"> {{$slide->abouttitle2}}  </textarea>
    </div>


  <img src="{{asset('images/'.$slide->image)}}" height="200px" width="200px">


  <div class="row" >
    <div class="col-25">
      <label for="subject">About Slide Image</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="image" name="image" value="Image">
    </div>
  </div>

<br>


  <img src="{{asset('images/'.$slide->aboutimage)}}" height="200px" width="200px">


  <div class="row" >
    <div class="col-25">
      <label for="subject">Experience Section Image</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="aboutimage" name="aboutimage" value="aboutimage">
    </div>
  </div>


  
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>


@endforeach

                 
            
          
      </div>
    </div>




   @include('adminlayouts.admin_js')