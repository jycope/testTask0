@extends('layouts.app')

@section('content')

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{ Form::model($schedule, ['route' => 'schedule.store', 'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 w-25 m-auto', 'enctype' => 'multipart/form-data']) }}
<div class="mb-1">
    <label for="staticEmail" class="col-sm-2 col-form-label">Название</label>
    <div class="input-form">
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="mb-1">
    <label for="staticEmail" class="col-form-label">Фото</label>
    {{csrf_field()}}
    <div class="input-form">
        {{ Form::file('photo', null, ['class' => 'form-control']) }}
    </div>
</div>

{{ Form::submit('Создать', ['class' => 'form-control mb-4 btn btn-primary']) }}
{{ Form::close() }}

@endsection