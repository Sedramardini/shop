@extends('admin.master')

@section('title')
   edit_category
@stop

@section('css')

@stop

@section('title_page')
    edit category
@endsection

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="card-body">
      
        <div class="bg-danger"></div>
     
        <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="name">name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$category->name}}" >
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               
            </div>

            <div class="row">
                <div class="col">
                    <label for="slug">slug</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control  @error('slug') is-invalid @enderror" name="slug" value="{{$category->slug}}">
                    </div>
                    @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="image">image</label>
                    <div class="input-group mb-3 col">
                        <input type="file" class="form-control " name="image">
                        <img width="50" src='{{asset("categoryImage/{$category->image}")}}'>
                    </div>
                  
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="description">description</label>
                    <div class="input-group mb-3">
                        <textarea name="description" rows="3" cols="3"
                                  class="form-control @error('description') is-invalid @enderror" >{{$category->description}}</textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              
            </div>

            <div class="row">
                <div class="col">
                    <label for="is_showing">is_showing</label>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="" id="is_showing" name="is_showing"  {{($category ->is_showing == 1) ? 'checked' : '' }}>
                    </div>

                </div>
                <div class="col">
                    <label for="is_popular">is_popular</label>
                    <div class="input-group mb-3 col">
                        <input type="checkbox" class="" id="is_popular" name="is_popular"  {{($category ->is_popular == 1) ?'checked' : '' }}>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_title">meta_title</label>
                    <div class="input-group mb-3">
                        <input type="text" name="meta_title"
                               class="form-control @error('meta_title') is-invalid @enderror" value="{{$category->meta_title}}">
                    </div>
                    @error('meta_title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_description">meta_description</label>
                    <div class="input-group mb-3">
                    <textarea name="meta_description" rows="3" cols="3"
                              class="form-control @error('meta_description') is-invalid @enderror" >{{$category->meta_description}} </textarea>
                    </div>
                    @error('meta_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
             
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_keywords">meta_keywords</label>
                    <div class="input-group mb-3">
                    <textarea name="meta_keywords" rows="3" cols="3"
                              class="form-control @error('meta_keywords') is-invalid @enderror"  >{{$category -> meta_keywords}}</textarea>
                    </div>
                    @error('meta_keywords')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">save</button>
        </form>
    </div>

@endsection

@section('js')

@endsection
