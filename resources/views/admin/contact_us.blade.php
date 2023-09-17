@extends('admin.layouts.header')
@extends('admin.layouts.sidebar')
<div class="layout-page">
    <div style="background-color:rgb(255, 255, 255);width:100%;height:80px;margin-bottom:20px; " class="main-nav">
        <h4 style="color:green;text-align:center;padding-top:30px;">welcome {{ auth()->user()->name }}</h4>
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y my-5">
                <div class="card">

                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            
                            <thead>

                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->subject}}</td>
                                    <td>{{$data->message}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @extends('admin.layouts.footer') --}}