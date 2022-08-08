@extends('layouts.app')

@section('content')

<h3>{{$schedule->name}}</h3>

<ul class="list-group list-group-flush">
    @foreach($schedule->tasks as $task)
    <div class="border rounded p-2 mb-2">
        <b>{{$task->title}}</b>
        <p>{{$task->description}}</p>
        <a href="{{ route('schedule.tasks.edit', [$schedule, $task]) }}" class="me-2">Редактировать</a>
        <a href="{{ route('schedule.tasks.destroy', [$schedule, $task]) }}" data-confirm="Are you sure?"
            data-method="delete">Удалить</a>
    </div>
    @endforeach
</ul>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="wrapper border col-6 p-2 rounded m-auto">
    {{ Form::model($task, ['url' => route('schedule.tasks.store', $schedule)], ['class' => 'd-flex justify-content-between flex-column gap-10 mt-1']) }}
    <div class="mb-1">
        <label for="staticEmail" class="col-sm-5 col-form-label">Название задачи</label>
        <div class="input-form">
            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Сходить в магазин...']) }}
        </div>
    </div>

    <div class="mb-1">
        <label for="staticEmail" class="col-sm-4 col-form-label">Описание</label>
        <div class="input-form">
            {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Огурцы, помидоры, молоко...']) }}
        </div>
    </div>

    {{ Form::submit('Создать', ['class' => 'form-control mb-4 btn btn-primary mt-2']) }}
    {{ Form::close() }}
</div>
@endsection