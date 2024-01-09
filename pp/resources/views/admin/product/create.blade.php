@extends('admin.master')

@section('title')
   create_product
@stop

@section('css')

@stop

@section('title_page')
   create_product
@endsection

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="card-body">
        @if(session('error_catch'))
            <div class="bg-danger">{{session('error_catch')}}</div>
        @endif

        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="row">
                <label for="name">category</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">please_select</option>
                    @foreach( $categories as $category )
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <label for="name">name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name_ar')}}">
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
                        <input type="text" class="form-control  @error('slug') is-invalid @enderror" name="slug" value="{{old('slug')}}">
                    </div>
                    @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="image">image</label>
                    <div class="input-group mb-3 col">
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" value="{{old('image')}}">
                    </div>
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="short_description">description</label>
                    <div class="input-group mb-3">
                        <textarea name="short_description" rows="3" cols="3"
                                  class="form-control @error('short_description') is-invalid @enderror">{{old('short_description')}}</textarea>
                    </div>
                    @error('short_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               
            </div>

            <div class="row">
                <div class="col">
                    <label for="description">description</label>
                    <div class="input-group mb-3">
                        <textarea name="description" rows="3" cols="3"
                                  class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              
            </div>

            <div class="row">
                <div class="col">
                    <label for="status">status</label>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="" id="status" name="status">
                    </div>

                </div>
                <div class="col">
                    <label for="trend">trend</label>
                    <div class="input-group mb-3 col">
                        <input type="checkbox" class="" id="trend" name="trend">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="price">price</label>
                    <div class="input-group mb-3">
                        <input type="number" name="price"
                               class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
                    </div>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="selling_price">selling_price</label>
                    <div class="input-group mb-3">
                        <input type="number" name="selling_price"
                               class="form-control @error('selling_price') is-invalid @enderror" value="{{old('selling_price')}}">
                    </div>
                    @error('selling_price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="qty">qty</label>
                    <div class="input-group mb-3">
                        <input type="number" name="qty"
                               class="form-control @error('qty') is-invalid @enderror" value="{{old('qty')}}">
                    </div>
                    @error('qty')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="tax">tax</label>
                    <div class="input-group mb-3">
                        <input type="number" name="tax"
                               class="form-control @error('tax') is-invalid @enderror" value="{{old('tax')}}">
                    </div>
                    @error('tax')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="meta_title">meta_title</label>
                    <div class="input-group mb-3">
                    <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" value="{{old('meta_title')}}">
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
                              class="form-control @error('meta_description_ar') is-invalid @enderror">{{old('meta_description')}}</textarea>
                    </div>
                    @error('meta_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
           
            </div>

            <div class="row">
                <div class="col">
                    <label for="meta_keywords">meta_keyword</label>
                       
                    <div class="input-group mb-3">
                    <textarea name="meta_keywords" rows="3" cols="3"
                              class="form-control @error('meta_keywords') is-invalid @enderror">{{old('meta_keywords')}}</textarea>
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
