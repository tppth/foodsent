@extends('backendtemplate')

@section('content') 
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard : Food Confirmation</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Category Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Chicken Rice</td>
            <td>1,000 Ks</td>
            <td>500 Ks</td>
            <td>Lunch</td>
            <td>
              <a href="#" class="btn btn-success">
                Post
              </a>
              <a href="#" class="btn btn-danger">
                Discard
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection