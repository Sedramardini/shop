@extends('admin.master')

@section('title')
   show_category
@stop

@section('css')

@stop

@section('title_page')
    show category
@endsection

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="card-body">
      
        <div class="bg-danger"></div>
     
        <form >
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="name">name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control " name="name" value="{{$category->name}}" readonly >
                    </div>
                   
                </div>
               
            </div>

            <div class="row">
                <div class="col">
                    <label for="slug">slug</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control " name="slug" value="{{$category->slug}}" readonly>
                    </div>
                   
                </div>
                <div class="col">
                    <label for="image">image</label>
                    <div class="input-group mb-3 col">
                        <!-- <input type="file" class="form-control " name="image" > -->
                        <img width="200" src='{{asset("categoryImage/{$category->image}")}}'>
                    </div>
                  
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="description">description</label>
                    <div class="input-group mb-3">
                        <textarea name="description" rows="3" cols="3"
                                  class="form-control" readonly >{{$category->description}}</textarea>
                    </div>
                   
                </div>
              
            </div>

            <div class="row">
               <div class="col">
                    <label for="is_showing">is_showing</label>
                    <div class="input-group mb-3">
                        @if($category->is_showing == 1)
                            <span class="badge badge-success">showing</span>
                        @else
                            <span class="badge badge-danger">hidden</span>
                        @endif
                </div>
                </div>
                <div class="col">
                    <label for="is_showing">is_popular</label>
                    <div class="input-group mb-3">
                        @if($category->is_popular == 1)
                            <span class="badge badge-success">popular</span>
                        @else
                            <span class="badge badge-danger">hidden</span>
                        @endif
                    </div>
                
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_title">meta_title</label>
                    <div class="input-group mb-3">
                        <input type="text" name="meta_title"
                               class="form-control " value="{{$category->meta_title}}" readonly>
                    </div>
                 
                </div>
              
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_description">meta_description</label>
                    <div class="input-group mb-3">
                    <textarea name="meta_description" rows="3" cols="3"
                              class="form-control" readonly>{{$category->meta_description}} </textarea>
                    </div>
                    
                </div>
             
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_keywords">meta_keywords</label>
                    <div class="input-group mb-3">
                    <textarea name="meta_keywords" rows="3" cols="3"
                              class="form-control " readonly >{{$category -> meta_keywords}}</textarea>
                    </div>
                   
                </div>
            </div>
            
        </form>
    </div>

@endsection

@section('js')

@endsection
