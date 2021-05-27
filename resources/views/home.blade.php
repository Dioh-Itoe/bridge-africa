@extends('layouts.app')
@section('head')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Bridge-Africa') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li>
                    <div class="input-group first-men md-form form-sm form-1">
                        <input type="text" class="form-control my-0 py-1" placeholder="Search bridge africa" aria-label="Search">
                        <div class="input-group-prepend" >
                            <span class="input-group-text purple lighten-3" id="basic-text1">
                                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="test">
                    <div class="input-group first-menu">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                    </div>
                </li>
                <li class="test">
                    <div class="input-group first-menu">
                        <a href="#"><i class="fa fa-building"></i> Marketplace</a>
                    </div>
                </li>
                <li class="test">
                    <div class="input-group first-menu">
                        <span>
                            <a href="#"><i class="fa fa-comment"></i> </a>
                            <a href="#"><i class="fa fa-bell"></i> </a>
                        </span>
                    </div>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{-- <img src="{{ asset('/assets/images/blogpic.jpg') }}" alt="Profile Pic" height="40px" width="40px" class="rounded-circle"> --}}
                            <i class="fa fa-user fa-lg"></i>
                            <span>{{ Auth::user()->name }}</span> 
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="second-menu pull-left" >
                    <ul class="nav nav-tabs pull-left" id="mytab" role="tablist" >
                        <li class="active nav-link " data-toggle="tab" role="tab" aria-controls="business" aria-selected="true"><a href="#" class="btn btn-default">Business</a></li>
                        <li class="nav-link " data-toggle="tab" role="tab" aria-controls="inbox" aria-selected="true"><a href="#" class="btn btn-default">Inbox</a></li>
                        <li class="nav-link " data-toggle="tab" role="tab" aria-controls="notification" aria-selected="true"><a href="#" class="btn btn-default">Notification</a></li>
                        <li class="nav-link " data-toggle="tab" role="tab" aria-controls="pending" aria-selected="true"><a href="#" class="btn btn-default">Pending Post</a></li>
                        <li class="nav-link  " data-toggle="tab" role="tab" aria-controls="insight" aria-selected="true"><a href="#" class="btn btn-default">Insight</a></li>
                    </ul>
                </div>
                <div class="settings pull-right">
                    <a href="#">Settings</a>
                </div>
            </div>
        </div>
    </div>
    <hr style="margin-top: 0px">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="img-container">
                    <img class="mt-2" src="{{ asset('/assets/images/blogpic.jpg') }}" alt="Person" srcset="">
                    <img class="mt-2" src="{{ asset('/assets/images/mainblogpic.jpg') }}" alt="Nature" srcset="">
                    <img class="mt-2" src="{{ asset('/assets/images/mainblogpic.jpg') }}" alt="Nature" srcset="">
                    <img class="mt-2" src="{{ asset('/assets/images/mainblogpic.jpg') }}" alt="Nature" srcset="">
                {{--<img src="{{ asset('/assets/images/mainblogpic.jpg') }}" alt="Nature" srcset=""> --}}
                <div class="bottom-right">
                    <a href="#"> <i class="fa fa-plus"></i> <span>Add Photos</span></a>
                    <a href="#"> See All </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- <div class="col-md-12"> --}}
            {{-- <div class="profile"> --}}
                <div class="profile col-md-12">
                    <div class="side-pic pull-left">
                        <img src="{{ asset('/assets/images/blogpic.jpg') }}" alt="Profile Pic" height="70px" width="70px" class="rounded-circle">
                        <div>
                            <p>Dioh Itoe Ngoe</p>
                            <p><em>@diohitoe</em></p>
                        </div>
                    </div>
                    <div class="profile-links justify-content-between pull-right">
                        <a href="#" class="btn btn-success">Promotes</a>
                        <a href="#" class="btn btn-primary">Contact</a>
                        <a href="#" class="btn btn-danger">Website</a>
                    </div>
                </div>
            {{-- </div> --}}

        {{-- </div> --}}
    </div>
    <div class="product-links">
        <ul class="nav" id="mytab" role="tablist">
            <li class="nav-link " data-toggle="tab" role="tab" aria-controls="inbox" aria-selected="true"><a href="#" class="btn btn-default">Home</a></li>
            <li class="active nav-link" data-toggle="tab" role="tab" aria-controls="about" aria-selected="true"><a href="#" class="btn btn-default">About</a></li>
            <li class="nav-link" data-toggle="tab" role="tab" aria-controls="media" aria-selected="true"><a href="#" class="btn btn-default">Media</a></li>
            <li class="nav-link" data-toggle="tab" role="tab" aria-controls="marketplace" aria-selected="true" ><a href="#" class="btn btn-default">Market Place</a></li>
            <li class="nav-link" data-toggle="tab" role="tab" aria-controls="networks" aria-selected="true"><a href="#" class="btn btn-default">Networks</a></li>
            <li class="nav-link" data-toggle="tab" role="tab" aria-controls="followers" aria-selected="true"><a href="#" class="btn btn-default">Followers</a></li>
        </ul>
    </div>

    <div class="py-2">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    <div class="product-row">
        <div class="row">
            <div class="col-md-4">
                <a href="#add" data-toggle="modal" class="virtual-link"></a>
                <div class="product-modal d-flex align-items-center justify-content-center">
                    <div>
                        <i class="fa fa-plus d-flex align-items-center justify-content-center"></i>
                        <p>Add product / Services</p>
                    </div>
                </div>
            </div>



            {{-- ===== ADD PRODUCT MODAL===== --}}
            <div id="add" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-2">
                        <div class="modal-header">
                            <h2>Add Product</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('save-product') }}" method="post" enctype = "multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="product name">Product Name</label>
                                        <input type="text" name="product_name" @error('product_name') is-invalid @enderror value="{{ old('product_name') }}" placeholder="Product name" class="form-control name" autocomplete="off" >
                                        @error('product_name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" id="" placeholder="Product description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="product image">Post Image</label>
                                        <input type="file" name="product_image" id="input-file-now" class="dropify"/>
                                    </div>
                                </div>
                            </div>
                
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="price">Price (FCFA)</label>
                                    <input type="number" name="price" @error('price') is-invalid @enderror value="{{ old('price') }}" placeholder="Product Price" class="form-control" autocomplete="off" >
                                        @error('price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="discount" class="pull-left">This item is on discount: </label>
                                    <input type="checkbox" name="on_discount" @error('on_discount') is-invalid @enderror value="1" class="pull-right" checked>
                                    @error('on_discount')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-row"> --}}
                                <div class="form-group">
                                    <label for="product name">Condition</label>
                                    <input type="text" name="condition" @error('condition') is-invalid @enderror value="{{ old('condition') }}" placeholder="Product condition" class="form-control" autocomplete="off" >
                                    @error('condition')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                
                            {{-- </div> --}}
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="service" class="pull-left">This item is a service <span><i class="fa fa-question-circle"></i></span> : </label>
                                    <input type="checkbox" name="is_service" @error('is_service') is-invalid @enderror value="0" class="pull-right">
                                    @error('is_service')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="service" class="pull-left">In Stock <span><i class="fa fa-question-circle"></i></span> : </label>
                                    <input type="checkbox" name="in_stock" @error('in_stock') is-invalid @enderror value="1" class="pull-right" checked>
                                    @error('in_stock')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="publish" class="pull-left">Published <span><i class="fa fa-question-circle"></i></span> : </label>
                                    <input type="checkbox" name="published" @error('published') is-invalid @enderror value="1" class="pull-right" checked>
                                    @error('published')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @foreach ($products as $product)
            @if (Auth::user()->id == $product->author_id)
                
            <div class="col-md-4">
                <div class="products">
                    <div>
                        <img src="{{  json_decode($product->imageable['product_image'])[0] ?? 'https://p.kindpng.com/picc/s/197-1971165_blog-icon-iso-blogging-icon-hd-png-download.png'  }}" alt="Product Image" height="35" width="30">
                    </div>
                    <div class="dots3 dropleft"> 
                        <a href="#" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a> 
                        {{-- <p id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i> </p> --}}
                        <div class="dropdown-menu" aria-labelledby="dLabel">
                            <ul>
                                <li><a href="#edit{{ $product->id }}" data-toggle="modal"> <i class="fa fa-pencil"></i><span> Edit</span></a></li>
                                <li><a href="#delete{{ $product->id }}" data-toggle="modal"> <i class="fa fa-trash"></i><span> Delete</span></a></li>
                            </ul>
                        </div>
                    </div>

                    {{-- ======EDIT PRODUCT MODAL===== --}}
                    <div id="edit{{ $product->id }}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content p-2">
                                <div class="modal-header">
                                    <h2>Edit Product</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('update-product', $product->id) }}" method="post" enctype = "multipart/form-data" class="mt-5">
                                    {{-- <h2>Edit Product/Service</h2> --}}
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="product name">Product Name</label>
                                                <input type="text" name="product_name" @error('product_name') is-invalid @enderror value="{{ $product->product_name }}"  class="form-control name" autocomplete="off" >
                                                @error('product_name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control" id="">{{ $product->description }}</textarea>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="product image">Current Image</label>
                                                <img src="{{  json_decode($product->imageable['product_image'])[0] ?? 'https://p.kindpng.com/picc/s/197-1971165_blog-icon-iso-blogging-icon-hd-png-download.png'  }}" alt="" style="height:150px">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <label for="product image">Update Image</label>
                                                <input type="file" name="product_image" id="input-file-now" class="dropify"/>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="price">Price (FCFA)</label>
                                            <input type="number" name="price" @error('price') is-invalid @enderror value="{{ $product->price }}" class="form-control" autocomplete="off" >
                                                @error('price')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label for="discount" class="pull-left">This item is on discount: </label>
                                            <input type="checkbox" name="on_discount" {{ $product->on_discount == '1' ? 'checked' : '' }} @error('on_discount') is-invalid @enderror class="pull-right">
                                            @error('on_discount')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="form-row"> --}}
                                    <div class="form-group">
                                        <label for="product name">Condition</label>
                                        <input type="text" name="condition" @error('condition') is-invalid @enderror value="{{ $product->condition }}" class="form-control name" autocomplete="off" >
                                        @error('condition')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                            
                                    {{-- </div> --}}
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label for="service" class="pull-left">This item is a service <span><i class="fa fa-question-circle"></i></span> : </label>
                                            <input type="checkbox" name="is_service" {{ $product->is_service == '1' ? 'checked' : '' }} @error('is_service') is-invalid @enderror class="pull-right">
                                            @error('is_service')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label for="service" class="pull-left">In Stock <span><i class="fa fa-question-circle"></i></span> : </label>
                                            <input type="checkbox" name="in_stock" {{ $product->in_stock == '1' ? 'checked' : '' }} @error('in_stock') is-invalid @enderror class="pull-right">
                                            @error('in_stock')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <label for="publish" class="pull-left">Published <span><i class="fa fa-question-circle"></i></span> : </label>
                                                <input type="checkbox" name="published" {{ $product->published == '1' ? 'checked' : '' }} @error('published') is-invalid @enderror class="pull-right">
                                                @error('published')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


        

                    {{-- ===== DELETE PRODUCT MODAL ===== --}}
                    <div id="delete{{ $product->id }}" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete <strong>{{ $product->name }} ?</strong></p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <a href="{{ route('delete-product', $product->id) }}" type="submit" class="btn btn-primary">Yes</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-3">
                        <h6>{{ $product->product_name }}</h6>
                        <p class="pull-left">{{ $product->is_service == 1 ? 'service' : 'product' }}</p>
                        <p class="pull-right"> <i class='{{ $product->published == 1 ? "mdi mdi-check-circle text-primary" : "mdi mdi-close-box text-danger" }}'></i> </p>                      
                        <a href="#view-product" class="virtual"></a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach  
        </div>
    </div>
</div>
@endsection
