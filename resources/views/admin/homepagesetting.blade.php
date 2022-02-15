

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
 
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Homepage setting :</h4>
            </div>


            
            <div class="form-body">
              

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <form action="{{route('submithomepagesetting','1')}}" method="post" enctype="multipart/form-data" data-parsley-validate>


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


@foreach($homesetting as $homeset)
  
  <div class="form-group">
      <label for="title1">Website title</label>
     <input type="text" class="form-control" id="webtitle" name="webtitle" value="{{$homeset->webtitle}}" placeholder="Website title"> 

  </div>


    <div class="form-group">
      <label for="des">Website keyword (example: android,php,java,laravel)</label>
 
      <textarea id="des" class="form-control" name="keyword" placeholder="Website keyword" style="height:200px"> {{$homeset->keyword}} </textarea>
    </div>


      <div class="form-group">
      <label for="des"> Website Description</label>
 
      <textarea id="des" class="form-control" name="des" placeholder="Website description" style="height:200px"> {{$homeset->des}} </textarea>
    </div>


      <div class="form-group">
      <label for="des">Footer Description</label>
 
      <textarea id="des" class="form-control" name="footerdes" placeholder="Footer description" style="height:200px"> {{$homeset->footerdes}}  </textarea>
    </div>



  <img src="{{asset('images/'.$homeset->image)}}" height="200px" width="200px">

 <div class="row" >
    <div class="col-25">
      <label for="subject">Website icon</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="image" name="image" value="Image">
    </div>
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