@extends('layout')

@section('content')

  
<div class="container-fluid py-2">
                <div class="row">
                    <div class="ms-3">
                        <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
                        <p class="mb-4">
                            Check the sales, value and bounce rate by country.
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
                                        <h4 class="mb-0">$53k</h4>
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
                                    <span
                                        class="text-success font-weight-bolder"
                                        >+55% </span
                                    >than last week
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
                                        <h6>Projects</h6>
                                        <p class="text-sm mb-0">
                                            <i
                                                class="fa fa-check text-info"
                                                aria-hidden="true"
                                            ></i>
                                            <span class="font-weight-bold ms-1"
                                                >30 done</span
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
                                            <tr>
                                            <td
                                                    class="align-middle text-start ps-4"
                                                >
                                                    <span
                                                        class="text-xs font-weight-bold"
                                                    >
                                                       01
                                                    </span>
                                                </td>
                                                <td
                                                    class="align-middle ps-4"
                                                >
                                                    <span
                                                        class="text-xs font-weight-bold"
                                                    >
                                                       Tanvrin Toma
                                                    </span>
                                                </td>
                                                <td
                                                    class="align-middle ps-4"
                                                >
                                                    <span
                                                        class="text-xs font-weight-bold"
                                                    >
                                                       hello@gafa.com
                                                    </span>
                                                </td>                                          
                                                
                                                <td
                                                    class="align-middle ps-4"
                                                >
                                                    <span
                                                        class="text-xs font-weight-bold"
                                                    >
                                                       0123456789
                                                    </span>
                                                </td>
                                                <td
                                                    class="align-middle ps-4"
                                                >
                                                    <span
                                                        class="text-xs font-weight-bold"
                                                    >
                                                       Dhaka, Bangladesh
                                                    </span>
                                                </td>
                                                <td class="align-middle ps-4">
                                                    <div class="button">
                                                        <button class="btn btn-success">View</button>
                                                        <button class="btn btn-info">Edit</button>
                                                        <button class="btn btn-danger">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection