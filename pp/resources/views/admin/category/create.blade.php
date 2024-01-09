@extends('admin.master')

@section('title')
    create_category
@stop

@section('css')

@stop

@section('title_page')
    create a new category
@endsection

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="card-body">
      
        <div class="bg-danger"></div>
     
        <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="name">name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
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
                        <input type="text" class="form-control  @error('slug') is-invalid @enderror" name="slug">
                    </div>
                    @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="image">image</label>
                    <div class="input-group mb-3 col">
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
                    </div>
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="description">description</label>
                    <div class="input-group mb-3">
                        <textarea name="description" rows="3" cols="3"
                                  class="form-control @error('description') is-invalid @enderror"></textarea>
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
                        <input type="checkbox" class="" id="is_showing" name="is_showing">
                    </div>

                </div>
                <div class="col">
                    <label for="is_popular">is_popular</label>
                    <div class="input-group mb-3 col">
                        <input type="checkbox" class="" id="is_popular" name="is_popular">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_title">meta_title</label>
                    <div class="input-group mb-3">
                        <input type="text" name="meta_title"
                               class="form-control @error('meta_title') is-invalid @enderror">
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
                              class="form-control @error('meta_description') is-invalid @enderror"></textarea>
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
                              class="form-control @error('meta_keywords') is-invalid @enderror"></textarea>
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
