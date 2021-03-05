@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 
<form method="POST" action="update">
  {{csrf_field() }}
  <fieldset>

    <legend>Personalia:</legend>
    <label for="fname">product name:</label><br>
    <input type="text" id="fname" value="{{$data->name}}" name="name" ><br>
    <label for="lname">qty:</label><br>
   <input type="text" id="fname"  value="{{$data->qty}}" name="qty" ><br>
    <label for="lname">description:</label><br>
   <input type="text" id="fname"  value="{{$data->description}}" name="description" ><br>
  


  <button type="submit">add</button>

  </fieldset>
</form>




  

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
