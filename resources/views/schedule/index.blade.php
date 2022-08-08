@extends('layouts.app')

@section('content')
<h3 class="mb-3">Списки</h3>
<a href="{{route('schedule.create')}}" class="btn btn-primary mb-4">Создать список</a>
<div class="staff">
    @foreach ($schedules as $schedule)
    <div class="border border-secondary p-2 rounded-3 staff__item mt-2">
        <div class="d-flex">
            Название списка: <b>{{ $schedule->name }}</b>
        </div>
        <a class="btn btn-primary me-2" href="{{ route('schedule.show', $schedule) }}">Посмотреть</a>
    </div>
    @endforeach
</div>
@endsection