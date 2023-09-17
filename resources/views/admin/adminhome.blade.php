
    @extends('admin.layouts.header')
    @extends('admin.layouts.sidebar')
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <div class="layout-page">
                <div style="background-color:rgb(255, 255, 255);width:100%;height:80px;margin-bottom:20px; " class="main-nav">
                    <h4 style="color:green;text-align:center;padding-top:30px;">welcome {{auth()->user()->name}}</h4>
                </div>
                <div class="container" style="text-align: center;">
                    <img src="/assets/images/ERE_LOGO_GREEN 2.svg" alt="null" height="500px" width="400px">
                </div>
                @extends('admin.layouts.footer')
                <div class="content-wrapper container mt-5">
                    </div> 
            </div>
        </div>
    </div>

