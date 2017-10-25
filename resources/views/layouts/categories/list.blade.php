@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>NOME</td>
                            </tr>
                            </thead>
                            @foreach($categories as $iten)
                                <tr>
                                    <td>{{$iten->id}}</td>
                                    <td>{{$iten->name}}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
