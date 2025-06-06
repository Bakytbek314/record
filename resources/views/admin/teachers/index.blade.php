@extends('layouts.adminLayout')

@section('document_title', 'Преподаватели')

@section('content')
    <div class="container py-4">
        <h1 class="mb-4">Преподаватели</h1>

        <a href="{{ route('admin.teachers.create') }}" class="btn btn-success mb-3">Добавить преподавателя</a>

        <div class="row">
            @foreach($teachers as $teacher)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($teacher->image)
                            <img src="{{ asset('storage/' . $teacher->image) }}" class="card-img-top" alt="{{ $teacher->name }}">
                        @else
                            <img src="https://via.placeholder.com/300x200?text=Нет+изображения" class="card-img-top"
                                alt="Нет изображения">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $teacher->name }}</h5>
                            <p class="card-text">{{ $teacher->position }}</p>
                        </div>

                        {{-- <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('admin.teachers.edit', $teacher) }}"
                                class="btn btn-sm btn-warning">Редактировать</a>
                            <form action="{{ route('admin.teachers.destroy', $teacher) }}" method="POST"
                                onsubmit="return confirm('Удалить преподавателя?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Удалить</button>
                            </form>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection