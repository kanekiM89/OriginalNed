@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">User</h5>
                            <div class="table-responsive text-nowrap">
                              <table class="table">
                                <thead class="table-dark">
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                  <tr>
                                  <td>1</td>
                                  <td>{{ Auth::user()->name }}</td>
                                  <td>จ.นนทบุรี</td>
                                  <td>{{ Auth::user()->email }}</td>
                                  <td>{{ Auth::user()->phone }}</td>
                                  <td>admin</td>
                                  <td>
                                    <a href="#"><i class='bx bxs-edit'></i></a>
                                    <a href="#"><i class='bx bx-trash'></i></a>
                                  </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                     
                    </div>

@endsection