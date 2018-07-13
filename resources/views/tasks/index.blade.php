@extends('layouts.app')

@section('content')

    @if (Auth::check())
    <h1>タスク一覧</h1>
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                @if (count($tasks) > 0)
                    @include('tasks.tasks', ['tasks' => $tasks])
                @endif
            </div>
        </div>
    @endif

@endsection
