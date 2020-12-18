@extends('cubes.layout')
 
@section('content')
<body style="background-color:#D6DBDF">
    <div class="row">
        <div class="col-lg-6 ">
            <div class="pull-left">
                <h2 style="color:#2B1431;">CUBE </h2><br><br>
            </div>
            <div class="pull-right"><br><br>
                <a class="btn btn-success"  href="{{ route('cubes.create') }}"> New Calculation</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table" style="float:center; border:1px solid black;" width="250px">
        <tr class="danger">
            <th style="color:#DC8AF4; font-family:courier; font-size:150%; text-align:center; border:1px solid black;">No</th>
            <th style="color:#DC8AF4; font-family:courier; font-size:150%;text-align:center; border:1px solid black;">CubeName</th>
            <th style="color:#DC8AF4; font-family:courier; font-size:150%; text-align:center; border:1px solid black;">Length</th>
            <th style="color:#DC8AF4; font-family:courier; font-size:150%; text-align:center;border:1px solid black;">Width</th>
            <th style="color:#DC8AF4; font-family:courier; font-size:150%; text-align:center;border:1px solid black;">Depth</th>
            <th style="color:#DC8AF4; font-family:courier; font-size:150%; text-align:center;border:1px solid black;">Voulme</th>
             <th style="color:#DC8AF4;font-family:courier; font-size:150%; text-align:center;border:1px solid black;">Surface Area</th>
            
        </tr>
        @foreach ($cubes as $cube)
        <tr class="danger">
            <td style="text-align:center; font-family:verdana;border:1px solid black;">{{ ++$i }}</td>
            <td style="text-align:center; font-family:verdana;border:1px solid black;">{{ $cube->cube_name }}</td>
            <td style="text-align:center; font-family:verdana;border:1px solid black;">{{ $cube->Length }}</td>
            <td style="text-align:center; font-family:verdana;border:1px solid black;">{{ $cube->Width }}</td>
            <td style="text-align:center; font-family:verdana;border:1px solid black;">{{ $cube->Depth }}</td>
            <td style="text-align:center; font-family:verdana;border:1px solid black;">{{ $cube->surface_area }}</td>
            <td style="text-align:center; font-family:verdana;border:1px solid black;">{{ $cube->volume }}</td>  
 
                    @csrf
                 
                </form>
                  </tr>
        @endforeach
    </table>
  </body>
    {!! $cubes->links() !!}
      
@endsection