@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-heading">Dina uppgifter</div>

                <div class="panel-body">
                    <ul>
                        @foreach($tasks as $task )
                            <li>{{$task->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
