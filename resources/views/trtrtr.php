@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">




        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    




<h2>Slider Setting</h2>

<div class="container">
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

  <div class="row">
    <div class="col-25">
      <label for="fname">Slider text1</label>
    </div>
    <div class="col-75">
      <input type="text" id="slidertext1" name="slidertext1" value="{{$slide->slidetext1}}" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Slider text2</label>
    </div>
    <div class="col-75">
      <input type="text" id="slidertext2" name="slidertext2" value="{{$slide->slidetext2}}" placeholder="Your last name..">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="fname">Slide Button text</label>
    </div>

    <div class="col-75">
      <input type="text" id="sliderbtntext" name="sliderbtntext" value="{{$slide->slidebtnnam}}" placeholder="Your last name..">
    </div>
  </div>


    <div class="row">
    <div class="col-25">
      <label for="fname">Slider Url</label>
    </div>
    <div class="col-75">
      <input type="text" id="sliderbtnurl" name="sliderbtnurl" value="{{$slide->slidebtnurl}}" placeholder="Your last name..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">Slider text3</label>
    </div>
    <div class="col-75">
      <textarea id="slidertext3" name="slidertext3" placeholder="Write something.." style="height:200px"> {{$slide->slidetext3}}  </textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      
    </div>
    <div class="col-75">
      <img src="{{asset('images/'.$slide->slideimage)}}" height="200px" width="200px">
    </div>
  </div>


  <div class="row" >
    <div class="col-25">
      <label for="subject">Slider Image</label>
    </div>
    <div class="col-75" style="margin-top: 20px;" >
     <input type="file" class="w3-input w3-border" id="image" name="image" value="Image">
    </div>
  </div>





  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>


@endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
