<body>
    <div class="layout-wrapper layout-content-navbar  ">
      <div class="layout-container">
        @extends('admin.layouts.header')
        > @extends('admin.layouts.sidebar')
        <div class="layout-page">
          <div style="background-color:rgb(255, 255, 255);width:100%;height:80px;margin-bottom:20px; " class="main-nav">
            <h4 style="color:green;text-align:center;padding-top:30px;">welcome {{auth()->user()->name}}</h4>
          </div>
         
          <form action="{{route('admin.work.save')}}" method="post" enctype="multipart/form-data">
            @csrf
  
            <div class="container my-5">
              @if(session()->has('message')) <h3 class="alert-success">{{session()->get('message')}}</h3> @endif
              <div class="mb-3 row">
                <label for="formFile" class="form-label">IMAGE</label>
                <div class="col-11">
  
                  <input class="form-control" type="file" name="image">
                </div>
  
                <div class=" col-1">
                  <button style="    padding: 11px 1.25rem;" type="button" class="btn btn-secondary btn-tooltip float-left" data-toggle="tooltip" data-placement="top" title="Product in Aspect Ratio of 4:5 Required. ie Image with Resolution 200 x 250px, 300 x 375px etc.">
                    <i class="fa fa-info" aria-hidden="true"></i>
                  </button>
                </div>
                @error('image') <p class="alert-danger">{{$message}}</p> @enderror
  
              </div>
              <label for="suject" class="form-label">PROJECT NAME</label>
              <div class="dropdown show">
                <input type="text" class="form-control" name="project_name" placeholder="enter project name">
                @error('project_name') <p class="alert-danger">{{$message}}</p> @enderror
              </div><br>
  
              <label for="formFile" class="form-label">DESCRIPTION</label>
              <div class="dropdown show">
                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="description"></textarea>
                @error('description') <p class="alert-danger">{{$message}}</p> @enderror
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