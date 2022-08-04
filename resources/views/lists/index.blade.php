@extends('layouts.app')

@section('content')
<h3 class="mb-3">Список сотрудников</h3>
<a href="{{route('lists.create')}}" class="btn btn-primary mb-4">Создать запись</a>
<div class="staff">
    @foreach ($lists as $list)
    <div class="border border-secondary p-2 rounded-3 staff__item mt-2">
        <div class="d-flex">
            Название: <b>{{ $list->name }}</b>
        </div>
    </div>
    @endforeach
</div>
@endsection