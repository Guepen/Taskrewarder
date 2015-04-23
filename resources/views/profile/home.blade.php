@extends('app')

@section('content')
    <div id="" class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Dina profil</h3>
                        </div>

                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Användarnamn: </strong>{{ Auth::user()->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>E-mail</strong> {{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Slutförda uppgifter:</strong> {{$completedTasks}}</p>
                        </div>
                        <div class="col-md-6 ">
                            <p class=""><strong>Ranking: </strong>{{ $rank }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
