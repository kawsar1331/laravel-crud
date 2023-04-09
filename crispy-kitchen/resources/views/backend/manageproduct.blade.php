@extends ('backend.master')

@section('main-content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Products</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @php
                                    $count=0;
                                @endphp
                                @if(count($products)>0) 
                                    @foreach($products as $product) 
                                        <tr>
                                            <td>{{ ++$count; }}</td> 
                                            <td>{{ $product->pro_name }}</td> 
                                            <td>{{ $product->pro_des }}</td> 
                                            <td>{{ $product->pro_qty }}</td> 
                                            <td>{{ $product->pro_price }}</td> 
                                            <td>
                                                @if($product->pro_status == '1')
                                                    <a href="{{Route('inactive', $product->pro_id)}}" class="btn btn-success btn-circle">
                                                        <i class="fas fa-check"></i> 
                                                    </a> 
                                                @else
                                                    <a href="{{Route('active', $product->pro_id)}}" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-times"></i> 
                                                    </a>
                                                @endif
                                            </td> 
                                            <td>
                                                <a href="{{Route('edit', $product->pro_id)}}" class="btn btn-primary btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{Route('delete', $product->pro_id)}}" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td> 
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection
