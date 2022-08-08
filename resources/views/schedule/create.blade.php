@extends('layouts.app')

@section('content')

{{ Form::model($schedule, ['route' => 'schedule.store', 'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 w-25 m-auto', 'enctype' => 'multipart/form-data']) }}
<div class="mb-1">
    <label for="staticEmail" class="col-sm-2 col-form-label">Название</label>
    <div class="input-form">
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
</div>

{{ Form::submit('Создать', ['class' => 'form-control mb-4 btn btn-primary']) }}
{{ Form::close() }}

@endsection