@extends('layouts.app')
@section('content')


<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Welcome !</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('home')}}">All  Attendance </a></li>
                    <li class="active">All Attendance</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
               <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="panel-title">
                          All Attendance
                          <a class = " btn btn-sm btn-info pull-right" href="{{route('add-attendence')}}">Add Attendance</a>
                         </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                               <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th>Serial No</th>
                                        <th>Date </th>
                                        <th>Action</th>
                                      
                                    </tr>
                                </thead>

                            <tbody>
                              @php
                               $SL = 1;
                              @endphp
                            @foreach($all_att as $row)
                                <tr>
                                   <td>{{$SL++}}</td>
                                   <td>{{$row -> att_date}}</td>
                                <td>
								<a href="{{ URL :: to ('edit-attendence/'. $row -> att_date)}}" class = "btn btn-sm btn-primary">Edit</a>
								<a href="{{ URL :: to ('delete-attendence/'.$row ->att_date)}}" id = "delete" class = "btn btn-sm btn-danger">Delete</a>
                  <a href="{{ URL :: to ('view-attendence/'.$row ->att_date)}}"  class = "btn btn-sm btn-success">View</a>
								</td>
                                </tr>
                               @endforeach()
                            </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



      </div>
   </div>
</div>

@endsection