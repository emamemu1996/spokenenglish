

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
   
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Slide section :</h4>
            </div>
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submitslider','1')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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

  @foreach($slidesetting as $slide)

  
  <div class="form-group">
      <label for="slidertext1">Slider Text1</label>
     <input type="text" class="form-control" id="slidertext1" name="slidertext1" value="{{$slide->slidetext1}}" placeholder="slider text1"> 

  </div>


  <div class="form-group">
      <label for="slidertext2">Slider Text2</label>
     <input type="text" class="form-control" id="slidertext2" name="slidertext2" value="{{$slide->slidetext2}}" placeholder="slider text2"> 

  </div>



   <div class="form-group">
      <label for="lname">Slide Button text</label>
      <input type="text" class="form-control" id="sliderbtntext" name="sliderbtntext" value="{{$slide->slidebtnnam}}" placeholder="slide btn name">
   
  </div>





   <div class="form-group">
      <label for="fname">Slider Url</label>
 
      <input type="text" class="form-control" id="sliderbtnurl" name="sliderbtnurl" value="{{$slide->slidebtnurl}}" placeholder="Slide url">
    </div>
 

  <div class="form-group">
      <label for="subject">Slider text3</label>
 
      <textarea id="slidertext3" class="form-control" name="slidertext3" placeholder="Slide description" style="height:200px"> {{$slide->slidetext3}}  </textarea>
    </div>



  <img src="{{asset('images/'.$slide->logo)}}" height="200px" width="200px">


  <div class="row" >
    <div class="col-25">
      <label for="subject">Logo</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="logo" name="logo" value="Image">
    </div>
  </div>


  
      <img src="{{asset('images/'.$slide->slideimage)}}" height="200px" width="200px">


  <div class="row" >
    <div class="col-25">
      <label for="subject">Slider Image</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="image" name="image" value="Image">
    </div>
  </div>


   <img src="{{asset('images/'.$slide->paylogo1)}}" height="200px" width="200px">


  <div class="row" >
    <div class="col-25">
      <label for="subject">Payment Logo1</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="paylogo1" name="paylogo1" value="Image">
    </div>
  </div>
<img src="{{asset('images/'.$slide->paylogo2)}}" height="200px" width="200px">

  <div class="row" >
    <div class="col-25">
      <label for="subject">Payment Logo2</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="paylogo2" name="paylogo2" value="Image">
    </div>
  </div>

<img src="{{asset('images/'.$slide->paylogo3)}}" height="200px" width="200px">
  <div class="row" >
    <div class="col-25">
      <label for="subject">Payment Logo3</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="paylogo3" name="paylogo3" value="Image">
    </div>
  </div>

<img src="{{asset('images/'.$slide->paylogo4)}}" height="200px" width="200px">

  <div class="row" >
    <div class="col-25">
      <label for="subject">Payment Logo4</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="paylogo4" name="paylogo4" value="Image">
    </div>
  </div>

<img src="{{asset('images/'.$slide->paylogo5)}}" height="200px" width="200px">
 <div class="row" >
    <div class="col-25">
      <label for="subject">Payment Logo5</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="paylogo5" name="paylogo5" value="Image">
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