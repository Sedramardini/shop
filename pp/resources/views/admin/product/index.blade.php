@extends('admin.master')
@section('title')
Product
@endsection

@section('css')
@endsection

@section('title_page')
Product
@endsection


@section('content')

Product

<div class="card-header">
<a href="{{route('products.create')}}" class="btn btn-outline-primary">Create </a>
</div>
<div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>name</th>
                  <th>image</th>
                  <th>showing</th>
                  <th>popular</th>
                  <th>Action</th>
                </tr>
        
                  </table>
            </div>
 
@endsection



@section('js')
@endsection