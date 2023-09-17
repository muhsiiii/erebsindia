<body>
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      @extends('admin.layouts.header')
      > @extends('admin.layouts.sidebar')
      <div class="layout-page">
        <div style="background-color:rgb(255, 255, 255);width:100%;height:80px;margin-bottom:20px; " class="main-nav">
          <h4 style="color:green;text-align:center;padding-top:30px;">welcome {{auth()->user()->name}}</h4>
        </div>
        @extends('admin.layouts.footer')

        <form action="{{route('admin.portfolio.update')}}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="container my-5">


            <div class="mb-3 row">
              <label for="formFile" class="form-label">IMAGE</label>
              <div class="col-11">

                <input class="form-control" type="file" name="image"><br>
                <img src="{{ asset('/portfolio_images/' . $data->image) }}" alt="Null" height="250px" width="250px">
              </div>

              <div class=" col-1">
                <button style="    padding: 11px 1.25rem;" type="button" class="btn btn-secondary btn-tooltip float-left" data-toggle="tooltip" data-placement="top" title="Product in Aspect Ratio of 4:5 Required. ie Image with Resolution 200 x 250px, 300 x 375px etc.">
                  <i class="fa fa-info" aria-hidden="true"></i>
                </button>
              </div>
              {{-- @error('image') <p class="alert-danger">{{$message}}</p> @enderror --}}

            </div>
            <label for="suject" class="form-label">PROJECT NAME</label>
            <div class="dropdown show">
              <input type="text" class="form-control" name="project_name" placeholder="enter project name" value="{{$data->project_name}}">
              <input type="hidden" name="id" value="{{$data->id}}">
              {{-- @error('project_name') <p class="alert-danger">{{$message}}</p> @enderror --}}
            </div><br>

            <label for="suject" class="form-label">CAMPANY NAME</label>
            <div class="dropdown show">
              <input type="text" class="form-control" name="campany_name" placeholder="name campany name" value="{{$data->campany_name}}">
              {{-- @error('campany_name') <p class="alert-danger">{{$message}}</p> @enderror --}}
            </div><br>

            <label for="formFile" class="form-label">DESCRIPTION</label>
            <div class="dropdown show">
              <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="description">{{$data->description}}</textarea>
              {{-- @error('description') <p class="alert-danger">{{$message}}</p> @enderror --}}
            </div><br>

            <label for="suject" class="form-label">CAMPANY URL</label>
            <div class="dropdown show">
              <input type="text" class="form-control" name="campany_url" placeholder="name campany url" value="{{$data->campany_url}}">
              {{-- @error('campany_url') <p class="alert-danger">{{$message}}</p> @enderror --}}
            </div><br>

            <div class="mb-3 row">
              <label for="formFile" class="form-label">CAMPANY LOGO</label>
              <div class="col-11">

                <input class="form-control" type="file" name="logo"><br>
                <img src="{{ asset('/portfolio_images/' . $data->logo) }}" alt="" height="250px" width="250px">
              </div>

              <div class=" col-1">
                <button style="    padding: 11px 1.25rem;" type="button" class="btn btn-secondary btn-tooltip float-left" data-toggle="tooltip" data-placement="top" title="Product in Aspect Ratio of 4:5 Required. ie Image with Resolution 200 x 250px, 300 x 375px etc.">
                  <i class="fa fa-info" aria-hidden="true"></i>
                </button>
              </div>
              {{-- @error('logo') <p class="alert-danger">{{$message}}</p> @enderror --}}

            </div>



            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>

      </div>
    </div>
  </div>
  </div>
</body>

</html>