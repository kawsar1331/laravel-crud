@extends ('backend.master')

@section('main-content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="row">
        <div class="col-lg-8 offset-2">
            <form action="{{Route('updateproduct', $product->pro_id)}}" method="post">
                @csrf
                <legend class="my-4">Product Details</legend>
    
                <div class="form-group">
                    <label for="p_name">Product Name</label>
                    <input type="text" name="p_name" class="form-control" placeholder="Enter Product Name" value="{{$product->pro_name;}}">
                    @error('p_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="p_des">Product Description</label>
                    <textarea type="text" name="p_des" rows="3" class="form-control"
                    placeholder="Enter Product Description">{{$product->pro_des;}}</textarea>
                    @error('p_des')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="p_qty">Product Quantity</label>
                            <input type="text" name="p_qty" class="form-control" value="{{$product->pro_qty;}}" placeholder="Enter Product Quantity">
                            @error('p_qty')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="p_price">Product Price</label>
                            <input type="text" name="p_price" class="form-control" value="{{$product->pro_price;}}" placeholder="Enter Product Price">
                            @error('p_price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="p_status">Product Status</label>
                    <select name="p_status" class="form-control">
                        <option value="">--------- SELECT ----------</option>
                        <option @if ($product->pro_status == 1) selected @endif value="1">Available</option>
                        <option @if ($product->pro_status == 0) selected @endif value="0">Unavailable</option>
                    </select> </div>
                    @error('p_status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                <div class="form-group my-5">
                    <button type="submit" class="btn btn-lg btn-primary px-5 d-block mx-auto">Update Product</button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection
