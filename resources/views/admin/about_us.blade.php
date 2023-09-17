<body>
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            @extends('admin.layouts.header')
            > @extends('admin.layouts.sidebar')
            <div class="layout-page">
                <div style="background-color:rgb(255, 255, 255);width:100%;height:80px;margin-bottom:20px; " class="main-nav">
                    <h4 style="color:green;text-align:center;padding-top:30px;">welcome {{auth()->user()->name}}</h4>
                </div>
                <form action="{{route('admin.aboutus.save')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="container my-5">
                        @if(session()->has('message')) <h3 class="alert-success">{{session()->get('message')}}</h3> @endif
                        <div class="mb-3 row">
                            <label for="formFile" class="form-label">IMAGE</label>
                            <div class="col-11">

                                <input class="form-control" type="file" name="image">
                                @error('image') <p class="alert-danger">{{$message}}</p> @enderror
                            </div>

                            <div class=" col-1">
                                <button style="    padding: 11px 1.25rem;" type="button" class="btn btn-secondary btn-tooltip float-left" data-toggle="tooltip" data-placement="top" title="Product in Aspect Ratio of 4:5 Required. ie Image with Resolution 200 x 250px, 300 x 375px etc.">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </button>
                            </div>

                        </div>
                        <label for="suject" class="form-label">NAME</label>
                        <div class="dropdown show">
                            <input type="text" class="form-control" name="name" placeholder="enter name">
                            @error('subject') <p class="alert-danger">{{$message}}</p> @enderror
                        </div><br>

                        <label for="suject" class="form-label">PROFESSION</label>
                        <div class="dropdown show">
                            <input type="text" class="form-control" name="profession" placeholder="enter profession">
                            @error('subject') <p class="alert-danger">{{$message}}</p> @enderror
                        </div><br>

                        <label for="formFile" class="form-label">DESCRIPTION</label>
                        <div class="dropdown show">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="description"></textarea>
                            @error('description') <p class="alert-danger">{{$message}}</p> @enderror
                        </div><br>
                        <p>SOCIAL MEDIA</p>
                        <hr>

                        <label for="suject" class="form-label">LINKED IN</label>
                        <div class="dropdown show">
                            <input type="url" class="form-control" name="linkedin" placeholder="enter linkedin web address">
                        </div><br>

                        <label for="suject" class="form-label">FACE BOOK</label>
                        <div class="dropdown show">
                            <input type="text" class="form-control" name="facebook" placeholder="enter facebook web address">
                        </div><br>

                        <label for="suject" class="form-label">TWITTER</label>
                        <div class="dropdown show">
                            <input type="text" class="form-control" name="twitter" placeholder="enter twitter web address">
                        </div><br>

                        <label for="suject" class="form-label">INSTAGRAM</label>
                        <div class="dropdown show">
                            <input type="text" class="form-control" name="instagram" placeholder="enter instagram web address">
                        </div><br>

                        <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                <!-- @extends('admin.layouts.footer') -->
            </div>
        </div>
    </div>
    </div>
</body>
</html>