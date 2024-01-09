@extends('admin.master')
@section('title')
Category
@endsection

@section('css')
@endsection

@section('title_page')

Category
 
@endsection
@section('content')

<div class="card-header">
<a href="{{route('categories.create')}}" class="btn btn-outline-primary">Create</a>
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
                </thead>
                <tbody>
                
                  @foreach($categories as $key=>$category)
                <tr>
                  <td>{{$key}}</td>
                  <td>{{$category->name}}</td>
                 
                  <td>
                      <img width="50" src='{{asset("categoryImage/{$category->image}")}}'>
                  </td>
                  <td> 
                    @if ($category->is_showing == 1)
                          <span class="badge badge-success">showing</span>
                    @else
                         <span class="badge badge-danger">hidden</span>
                    @endif
                  </td>

                  <td> 
                    @if ($category->is_popular == 1)
                          <span class="badge badge-success">popular</span>
                    @else
                         <span class="badge badge-danger">not popular</span>
                    @endif
                    </td>

                
                  <td>
                      <a href="{{route('categories.show',$category->id)}}" class="btn btn-sm btn-outline-success">show</a>
                      <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-outline-warning">edit</a>
                  </td>
                  <td>
                      <form method="post" action="{{route('categories.destroy',$category->id)}}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger">delete</button>
                      </form>
                  </td>
                  </td>
                </tr>
                @endforeach
                </tbody>
                  </table>
            </div>
 
@endsection



@section('js')

@endsection