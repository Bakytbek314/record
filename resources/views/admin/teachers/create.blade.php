@extends('layouts.adminLayout')

@section('document_title', 'Добавить преподавателя')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Добавить преподавателя</h1>

    <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data" class="card p-4">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Должность</label>
            <input type="text" class="form-control" name="position">
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Описание</label>
            <textarea type="text" class="form-control" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Фотография (jpg, png, webp)</label>
            <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png,.webp">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="{{ route('admin.teachers.index') }}" class="btn btn-secondary">Назад</a>
    </form>
</div>
@endsection
