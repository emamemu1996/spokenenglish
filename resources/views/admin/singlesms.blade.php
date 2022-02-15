

@include('adminlayouts.admin_css')




  <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">


  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      

          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Single message :</h4>
            </div>


        

             @foreach($contact as $con)

                 
                <div style="margin:20px;">
                 
                Name: {{$con->name}} <br>
                Sender Email: {{$con->sender}}<br>
                Subject: {{$con->subject}}<br>
                Website: {{$con->website}}<br><br>
                Message:<br> {{$con->message}}<br>
                  
                </div>
              

               
  <div class="form-body">


<form action="{{route('emailreply')}}" method="post" enctype="multipart/form-data" data-parsley-validate>

   {{ csrf_field()}}

 <input type="hidden" class="form-control" id="sender" name="sender" value="{{$con->sender}}" placeholder="Title 2"> 


 <input type="hidden" class="form-control" id="subject" name="subject" value="Noreply ! {{$con->subject}} Reply" placeholder="Title 2"> 

<div class="form-group">
      <label for="des">Reply Now</label>
 
      <textarea id="des" class="form-control" name="des" placeholder="Slide description" style="height:200px">  </textarea>
    </div>


  <div class="row">
    <input type="submit" name="submit" id="submit" value="Reply Now">
  </div>

</form>
  </div>

        @endforeach


      </div>
    </div>




   @include('adminlayouts.admin_js')