@extends('admin.layout.layout')

@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Design <small>different form elements</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form id="demo-form2" action="{{route('product.update',$product->id)}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
        	@csrf
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            	<select name="category_id" class="form-control col-md-7 col-xs-12" required="">
            		<option value="">Category Name</option>
            		@foreach($categories as $categorie)
            			<option value="{{$categorie->id}}" @if($product->category_id==$categorie->id) selected @endif>{{$categorie->name}}</option>
            		@endforeach
            	</select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="name" value="{{$product->name}}" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Price<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" name="price" value="{{$product->price}}" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="file" name="image" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <img style="height:80px;width:80px;" src="{{asset('uploads/'.$product->image)}}">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

@endsection