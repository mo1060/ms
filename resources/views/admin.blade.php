

@extends('layouts.app')
@section('admin')
            <div class="container" align="center">
                <h1>ALL TEST SUBJECTS</h1>
                <p>Diese Page soll nur von einem ADMIN geöffnet werden können</p>
                <table class="table table-striped table-responsive-xl">
                <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">GENDER</th>
                <th scope="col">AGE</th>
                <th scope="col">Grill</th>

                </tr>
                </thead>
                <tbody>
                @foreach($probanden ?? '' as $proband)
                <tr>
                <th scope="row">{{$proband->id}}</th>
                <td>{{$proband->gender}}</td>
                <td>{{$proband->age}}</td>
                <td>
                {{gettype($proband->grill) }}
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
@endsection