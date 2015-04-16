@extends('app')

@section('content')

<div class="row">
    <div class="jumbotron">
        <div class="col-md-6 col-md-offset-3">
            <h1>Taskrewarder</h1>
            <h3>Andra användare ger dig uppgifter och när du har slutfört dem får du utsatt belöning. Bra va?</h3>
            <h3></h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <div class="text-center">
       <a href="login" class="btn btn-lg btn-success">Logga in <i class="fa fa-sign-in fa-fw"></i></a>
       <a class="btn btn-lg btn-info">Registera dig <i class="fa fa-user-plus fa-fw"></i></a>
       </div>
    </div>
</div>


@endsection