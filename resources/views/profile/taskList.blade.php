@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Ej slutförda uppgifter</div>

                <div class="panel-body">
                    <ul>
                        @foreach($tasks as $task )

                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="row-picture">
                                        <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                                    </div>
                                    <div class="row-content">
                                        <a href="task/{{$task->id}}">
                                            <h4 class="list-group-item-heading">{{$task->name}}</h4>
                                        </a>
                                        <p class="list-group-item-text"><strong>Belöning:</strong> {{$task->reward}}</p>
                                    </div>
                                </div>
                                <div class="list-group-separator"></div>
                            </div>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
