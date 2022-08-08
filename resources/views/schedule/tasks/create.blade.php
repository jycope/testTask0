@extends('layouts.app')

@section('content')

{{ Form::model($task, ['route' => ['schedule.tasks.store', $schedule], 'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 w-25 m-auto', 'enctype' => 'multipart/form-data']) }}
<div class="mb-1">
    <label for="staticEmail" class="col-sm-4 col-form-label">Создать задачу</label>
    <div class="input-form">
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Название']) }}
    </div>
    <div class="input-form mt-2">
        {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Описание']) }}
    </div>
</div>

{{ Form::submit('Создать', ['class' => 'form-control mb-4 btn btn-primary']) }}
{{ Form::close() }}

@endsection