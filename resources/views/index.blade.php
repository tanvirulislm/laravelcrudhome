@extends('layout')

@section('content')

  
<div class="container-fluid py-2">
                <div class="row">
                    <div class="ms-3">
                        <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
                        <p class="mb-4">
                            This is student management system dashboard
                        </p>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-2 ps-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-sm mb-0 text-capitalize">
                                            Total Student
                                        </p>
                                        <h4 class="mb-0">{{ $totalUsers }}</h4>
                                    </div>
                                    <div
                                        class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg"
                                    >
                                        <i
                                            class="material-symbols-rounded opacity-10"
                                            >weekend</i
                                        >
                                    </div>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0" />
                            <div class="card-footer p-2 ps-3">
                                <p class="mb-0 text-sm">
                                    <span class="text-success font-weight-bolder">All </span> are present
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="row mb-4 mt-3">
                    <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-7">
                                        <h6>Students</h6>
                                        <p class="text-sm mb-0">
                                            <i
                                                class="fa fa-check text-info"
                                                aria-hidden="true"
                                            ></i>
                                            <span class="font-weight-bold ms-1"
                                                >{{$totalUsers}} are present in </span
                                            >
                                            this month
                                        </p>
                                    </div>              
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table
                                        class="table align-items-center mb-0"
                                    >
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Serial No</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Name</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                >
                                                    Email
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                >
                                                    Phone
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                >
                                                    Address
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                >
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $student)
                                            <tr>
                                            <td class="align-middle text-start ps-4">
                                                    <span class="text-xs font-weight-bold">
                                                        {{$student->id}}
                                                    </span>
                                            </td>
                                            <td class="align-middle ps-4">
                                                    <span class="text-xs font-weight-bold">
                                                       {{$student->name}}</span>
                                                </td>
                                                <td
                                                    class="align-middle ps-4"
                                                >
                                                    <span
                                                        class="text-xs font-weight-bold"
                                                    >
                                                         {{$student->email}}
                                                    </span>
                                                </td>                                          
                                                
                                                <td
                                                    class="align-middle ps-4"
                                                >
                                                    <span
                                                        class="text-xs font-weight-bold"
                                                    >
                                                        {{$student->phone}}
                                                    </span>
                                                </td>
                                                <td
                                                    class="align-middle ps-4"
                                                >
                                                    <span
                                                        class="text-xs font-weight-bold"
                                                    >
                                                        {{$student->address}}
                                                    </span>
                                                </td>
                                                <td class="align-middle ps-4">
                                                    <div class="button">
                                                        <a href="" class="btn btn-success">View</a>
                                                        <a href="{{route("edit", $student->id)}}" class="btn btn-info">Edit</a>
                                                        <a href="" class="btn btn-danger">Delete</a>
                                                    </div>
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

@endsection