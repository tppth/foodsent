@extends('backendtemplate')

@section('content') 
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard : Shop Confirmation</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Working hours</th>
            <th>City</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>KFC</td>
            <td>kfc@gmail.com</td>
            <td>+959768874756</td>
            <td>MICT Park</td>
            <td>24 hrs</td>
            <td>Hlaing</td>
            <td>
              <a href="#" class="btn btn-success">
                Approve
              </a>
              <a href="#" class="btn btn-danger">
                Cancel
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection