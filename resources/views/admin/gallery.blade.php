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
                <form action="{{route('admin.gallery.save')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="container my-5">
                        @if(session()->has('message')) <h3 class="alert-success">{{session()->get('message')}}</h3> @endif
                        <div class="mb-3">
                            <label for="formFile" class="form-label">IMAGE</label>
                            <input class="form-control" type="file" name="image">
                            <p style="color: red;">image dimension needed 640 * 640 px</p>
                            @error('image') <p class="alert-danger">{{$message}}</p> @enderror

                        </div>
                        <label for="formFile" class="form-label">TYPE</label>
                        <div class="dropdown show">
                            <select name="type" id="" class="form-control dropdown-toggle" data-toggle="dropdown">
                                <option disabled selected>Choose...</option>
                                <option value="All">All</option>
                                <option value="Branding">Branding</option>
                                <option value="Special Days">Special Days</option>
                                <option value="Spark Of ERE">Spark Of ERE</option>
                                <option value="Hiring">Hiring</option>
                                <option value="Our Teams">Our Teams</option>

                            </select>
                            @error('type') <p class="alert-danger">{{$message}}</p> @enderror
                        </div><br>

                        <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>