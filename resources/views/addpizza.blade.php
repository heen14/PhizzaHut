@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <div class="card card-body">
            <h1 class="card-title">
                Add New Pizza
            </h1>
        <form method="POST" action="{{url('/addpizza')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="pizza_name" name="pizza_name">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" id="pizza_description" name="pizza_description">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" id="pizza_price" name="pizza_price">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" id="pizza_image" name="pizza_image">
                </div>
                <button class="btn btn-primary btn-block">Add Pizza</button>
            </form>
        </div>
    </div>
</body>
</html>
@endsection