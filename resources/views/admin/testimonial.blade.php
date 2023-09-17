@extends('admin.layouts.header')
@extends('admin.layouts.sidebar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow==" crossorigin="anonymous" referrerpolicy="no-referrer" /><style>
    .table-responsive th {
        min-width: 200px;
    }
    .max-length-admin {
  overflow: hidden;
  -webkit-line-clamp: 6;
  -webkit-box-orient: vertical;
}
</style>
<div class="layout-page">
    <div style="background-color:rgb(255, 255, 255);width:100%;height:80px;margin-bottom:20px; " class="main-nav">
        <h4 style="color:green;text-align:center;padding-top:30px;">welcome {{ auth()->user()->name }}</h4>
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y my-5">
                <div class="card">
                    @if (session()->has('message'))
                    <h3 class="alert-success">{{ session()->get('message') }}</h3>
                    @endif
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL.NO</th>
                                    <th>CLIENT NAME</th>
                                    <th>PROJECT AND POSITION</th>
                                    <th>COMMENTS</th>
                                    <th>RATING</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->client}}</td>
                                    <td>{{$data->project}}</td>
                                    <td class="max-length-admin">{{$data->comments}}</td>
                                    <td>
									@for($i=1;$i<=$data->rating;$i++)
									<i class="mdi mdi-star"></i>
								@endfor
								</ul>
                                    </td>
                                    <td style="display: flex;margin-top:10px;  padding:50px;">
                                        <a href="{{route('admin.testimonial.edit',$data->id)}}" style="background: green;color:white;margin-right:10px;" class="btn">EDIT</a> 
                                        <a href="{{route('admin.testimonial.destroy',$data->id)}}" style="background: #dc3545;color:white;" class="btn">DELETE</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{route('admin.testimonial.form')}}" title="Add New Products">
            <i style="font-size: 60px;float:right;position: fixed;bottom:30px;right:50px" class="fa fa-plus-circle fa-add-new" aria-hidden="true"></i>
        </a>
    </div>
</div>
{{-- @extends('admin.layouts.footer') --}}