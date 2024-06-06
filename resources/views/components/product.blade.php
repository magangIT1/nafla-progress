@extends('layouts.app')
@section('body')
<div class="main main-app p-3 p-lg-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h4 class="main-title mb-0">
              {{$title}}
            </h4>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-12">
            <div class="card card-one">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">CategoryId</th>
                        <th scope="col">Description</th>
                        <th scope="col">Description Product Detail</th>
                        <th scope="col">Image</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($product as $data)
                    <tr>
                      <td>{{$data->name}}</td>
                      <td>{{$data->getCategory->name}}</td>
                      <td>{{$data->description}}</td>
                      <td>{{$data->getProductDetail->description}}</td>
                      <td>{{$data->getProductDetail->image}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div><!-- row -->
        </div><!-- card-body -->
    </div><!-- card -->

</div><!-- main -->
@endsection