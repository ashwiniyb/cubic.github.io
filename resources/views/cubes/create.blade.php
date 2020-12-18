@extends('cubes.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-center">
         
        </div>
        <div class="pull-right"><br><br>
            <a class="btn btn-primary" href="{{ route('cubes.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('cubes.store') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-xs-3 col-sm-3 col-md-3 text-center">
            <div class="form-group-row">
                <strong>CubeName:</strong>
                <input type="alphanumeric" name="cube_name" class="form-control" placeholder="CubeName" >
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 text-center">
            <div class="form-group-row">
                <strong>Length:</strong>
                <input type="float_number" name="Length" class="form-control" placeholder="Length">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 text-center">
            <div class="form-group-row">
                <strong>Width:</strong>
                <input type="float_number" name="Width" class="form-control" placeholder="Width">
            
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 text-center">
            <div class="form-group-row">
                <strong>Depth:</strong>
                <input type="float_number" name="Depth" class="form-control" placeholder="Depth">
                </br>
            </div>
        </div>
       <br/>
       <br/>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                </br></br>
        </div>
    </div>
   
</form>
@endsection
