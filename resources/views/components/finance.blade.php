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
                {{$paragraf}}
                {{$detail}}
                {{$judul}}
            </div><!-- row -->
        </div><!-- card-body -->
    </div><!-- card -->

</div><!-- main -->
@endsection