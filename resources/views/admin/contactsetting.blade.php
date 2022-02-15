

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
     
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Contact page setting:</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submitcontactsetting')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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


 @foreach($contactset as $contact)
  
  <div class="form-group">
      <label for="title1">Mobile Number</label>
     <input type="text" class="form-control" id="mobile" name="mobile" value="{{$contact->mobile}}" placeholder="Mobile Number"> 

  </div>


  <div class="form-group">
      <label for="title2">Email Address</label>
     <input type="text" class="form-control" id="email" name="email" value="{{$contact->email}}" placeholder="Email Address"> 

  </div>

    <div class="form-group">
      <label for="title2">Location</label>
     <input type="text" class="form-control" id="location" name="location" value="{{$contact->location}}" placeholder="Location"> 

  </div>

  <div class="form-group">
      <label for="title2">Facebook Page Url</label>
     <input type="text" class="form-control" id="fbpagelink" name="fbpagelink" value="{{$contact->fbpagelink}}" placeholder="Facebook Page Url"> 

  </div>


    <div class="form-group">
      <label for="title2">Google map address</label>
     <input type="text" class="form-control" id="fbpagelink" name="maplocation" value="{{$contact->maplocation}}" placeholder="Google map address"> 

  </div>


     <div class="form-group">
      <label for="des">Description</label>
 
      <textarea id="des" class="form-control" name="des" placeholder="Slide description" style="height:200px">  {{$contact->des}}  </textarea>
    </div>



 @endforeach

  <div class="row">
    <input type="submit" name="submit" id="submit" value="Submit">
  </div>
  </form>
</div>



   









          
      </div>
    </div>




   @include('adminlayouts.admin_js')