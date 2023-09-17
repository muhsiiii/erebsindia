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
                <form action="{{route('admin.career.update')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="container my-5">
                        @if(session()->has('message')) <h3 class="alert-success">{{session()->get('message')}}</h3> @endif       
                        <div class="mb-3 row">
                            <label for="formFile" class="form-label">IMAGE</label>
                            <div class="col-11">

                                <input class="form-control" type="file" name="image"><br>
                                <img src="{{asset('/careers_images/'.$data->image)}}" alt="null" height="250px" width="250px">
                                @error('image') <p class="alert-danger">{{$message}}</p> @enderror
                            </div>

                            <div class=" col-1">
                                <button style="    padding: 11px 1.25rem;" type="button" class="btn btn-secondary btn-tooltip float-left" data-toggle="tooltip" data-placement="top" title="Product in Aspect Ratio of 4:5 Required. ie Image with Resolution 200 x 250px, 300 x 375px etc.">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </button>
                            </div>

                        </div>
                        <label for="suject" class="form-label">POST NAME</label>
                        <div class="dropdown show">
                            <input type="text" class="form-control" name="post_name" value="{{$data->post_name}}">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            @error('subject') <p class="alert-danger">{{$message}}</p> @enderror
                        </div><br>

                        <label for="suject" class="form-label">NO.OF.VACANCIES</label>
                        <div class="dropdown show">
                            <input type="number" class="form-control" name="vacancies" value="{{$data->no_vacancies}}">
                            @error('subject') <p class="alert-danger">{{$message}}</p> @enderror
                        </div><br>

                        <label for="suject" class="form-label">EXPERIENCE</label>
                        <div class="dropdown show">
                            <input type="text" class="form-control" name="experience" value="{{$data->experience}}">
                            @error('subject') <p class="alert-danger">{{$message}}</p> @enderror
                        </div><br>
                        

                        <label for="formFile" class="form-label">WORK TYPE</label>
                        <div class="dropdown show">
                            <select name="worktype" id="" class="form-control dropdown-toggle" data-toggle="dropdown">
                                <option  selected value="{{$data->work_type}}">{{$data->work_type}}</option>
                                <option value="part time">Part time</option>
                                <option value="full time">Full time</option>
                                <option value="internship">Intership</option>
                               

                            </select>
                            @error('type') <p class="alert-danger">{{$message}}</p> @enderror
                        </div><br>

                        <label for="suject" class="form-label">URL</label>
                        <div>
                            <input type="url" class="form-control" name="url" value="{{$data->url}}">
                        </div><br>

                       

                        <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>