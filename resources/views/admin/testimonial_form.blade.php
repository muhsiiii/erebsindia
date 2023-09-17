<body>
    <div class="layout-wrapper layout-content-navbar  ">
      <div class="layout-container">
        @extends('admin.layouts.header')
        > @extends('admin.layouts.sidebar')
        <div class="layout-page">
          <div style="background-color:rgb(255, 255, 255);width:100%;height:80px;margin-bottom:20px; " class="main-nav">
            <h4 style="color:green;text-align:center;padding-top:30px;">welcome {{auth()->user()->name}}</h4>
          </div>
          
          <form action="{{route('admin.testimonial.save')}}" method="post" enctype="multipart/form-data">
            @csrf
  
            <div class="container my-5">
              @if(session()->has('message')) <h3 class="alert-success">{{session()->get('message')}}</h3> @endif
            
              <label for="suject" class="form-label">CLIENT NAME</label>
              <div class="dropdown show">
                <input type="text" class="form-control" name="client" placeholder="enter client name..">
                @error('client') <p class="alert-danger">{{$message}}</p> @enderror
              </div><br>

              <label for="suject" class="form-label">PROJECT NAME AND CLIENT POSITION</label>
              <div class="dropdown show">
                <input type="text" class="form-control" name="project" placeholder="enter project name and client name..">
                @error('project') <p class="alert-danger">{{$message}}</p> @enderror
              </div><br>
  
              <label for="formFile" class="form-label">COMMENTS</label>
              <div class="dropdown show">
                <textarea name="comments" id="" cols="30" rows="10" class="form-control" placeholder="your comments.."></textarea>
                @error('comments') <p class="alert-danger">{{$message}}</p> @enderror
              </div><br>

              <label for="formFile" class="form-label">RATING</label>
                        <div class="dropdown show">
                            <select name="rating" id="" class="form-control dropdown-toggle" data-toggle="dropdown">
                                <option disabled selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            @error('rating') <p class="alert-danger">{{$message}}</p> @enderror
                        </div><br>
  
              <button type="submit" class="btn btn-primary">Upload</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </body>
  @extends('admin.layouts.footer')
  </html>