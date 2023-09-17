@extends('admin.layouts.header')
@extends('admin.layouts.sidebar')
<style>
    .table-responsive th {
        min-width: 200px;
    }
</style>
<div class="layout-page">
    <div style="background-color:rgb(255, 255, 255);width:100%;height:80px;margin-bottom:20px; " class="main-nav">
        <h4 style="color:green;text-align:center;padding-top:30px;">welcome {{ auth()->user()->name }}</h4>
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y my-5">
                <div class="card">
                    @if (session()->has('message'))<h3 class="alert-success">{{ session()->get('message') }}</h3>@endif
                    <div class="table-responsive text-nowrap"><br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>IMAGE</th>
                                    <th>NAME</th>
                                    <th>PROFESSION</th>
                                    <th>DESCRIPTION</th>
                                    <th>LINKEDIN URL</th>
                                    <th>FACEBOOK URL</th>
                                    <th>TWITTER URL</th>
                                    <th>INSTAGRAM URL</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td><img src="{{asset('/aboutus_images/'.$data->image)}}" alt="null" height="200px" width="200px"></td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->profession }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td>{{ $data->linkedin }}</td>
                                        <td>{{ $data->facebook }}</td>
                                        <td>{{ $data->twitter }}</td>
                                        <td>{{ $data->instagram }}</td>

                                        <td style="display: flex;margin-top:50px;">
                                            <a href="{{ route('admin.aboutus.edit', $data->id) }}"
                                                style="background: green;color:white;margin-right:10px;"
                                                class="btn">EDIT</a>
                                            <a href="{{ route('admin.aboutus.delete', $data->id) }}"
                                                style="background: #dc3545;color:white;" class="btn">DELETE</a>

                                        </td>


                                    </tr>
                                @endforeach

                            </tbody>

                        </table>



                    </div>
                </div>

            </div>

        </div>

    </div>

    <a href="{{ route('admin.aboutus') }}" title="Add New Products">
        <i style="font-size: 60px;float:right;position: fixed;bottom:30px;right:50px"
            class="fa fa-plus-circle fa-add-new" aria-hidden="true"></i>
    </a>

</div>

</div>
