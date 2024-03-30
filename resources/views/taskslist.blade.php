@extends('app')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Admin</th>
                <th scope="col">User</th>

            </tr>
        </thead>
        <tbody>
            @if(!$tasks->isEmpty())
            @foreach($tasks as $task)
            <tr>
                <th scope="row">{{$task->id}}</th>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td class="table-active">{{$task->admin->admin_name}}</td>
                <td class="table-active">{{$task->user->name}}</td>
            </tr>
            @endforeach
            @else
            <td class="table-active" colspan=5>Empty tasks</td>
            @endif
        </tbody>
    </table>
    {{ $tasks->links('pagination::bootstrap-4') }}


</div>
@endsection