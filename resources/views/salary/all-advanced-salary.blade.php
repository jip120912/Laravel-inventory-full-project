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
                    <li><a href="{{route('home')}}">Dashboard</a></li>
                    <li class="active">All Advanced Salary</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
               <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="panel-title">
                          All Advanced Salary 
                          <a class = " btn btn-sm btn-info pull-right" href="{{route('add-advanced-salary')}}">Add Advanced Salary</a>
                         </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                               <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<!-- <th>ID</th> -->
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Salary</th>
                                        <th>Advanced</th>
                                         <th>Month</th>
                                        <th>Year</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                      
                                    </tr>
                                </thead>

                             
                            <tbody>
                            @foreach($adsalary as $row)
                                <tr>
                                  <!--  <td>{{$row -> emp_id}}</td> -->
                                   <td>{{$row -> name}}</td>
                                   <td>{{$row -> phone}}</td>
                                   <td>{{$row -> salary}}</td>
                                   <td>{{$row -> advanced_salary}}</td>
                                   <td>{{$row -> month}}</td>
                                   <td>{{$row -> year}}</td>

                                   <td><img src = "{{URL :: to ($row->photo)}}" style ="height:80px;width:80px"/></td>
                                <td>
								<a href="{{ URL :: to ('edit-advanced-salary/'.$row -> id)}}" class = "btn btn-sm btn-primary">Edit</a>
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