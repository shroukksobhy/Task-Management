@extends('app')
@section('content')
<div class="container">
    <div>
        <h4 class="text-start">Statistics TOP 10 users</h4>
        <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
        @foreach($topUsers as $user)
        <div class="row">
            <div class="col-sm">
                {{   $user->name}}
            </div>
            <div class="col-sm">
                {{   $user->task_counts}}
            </div>
        </div>
        <br>
        @endforeach
    </div>

</div>
@endsection