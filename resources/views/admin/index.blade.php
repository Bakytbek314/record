@extends('layouts.adminLayout')

@section('document_title', 'Заявки')

@section('content')
    <h1 class="mb-4">Заявки</h1>

    @foreach ($requests as $request)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title mb-3">Имя: {{ $request->name }}</h5>
                <p class="card-text mb-2"><strong>Телефон:</strong> {{ $request->phone }}</p>
                <p class="card-text"><strong>Статус:</strong> 
                    <span class="badge {{ $request->is_handled ? 'bg-success' : 'bg-warning text-dark' }}">
                        {{ $request->is_handled ? 'Обработано' : 'Новая' }}
                    </span>
                </p>

                <div class="d-flex gap-2">
                    @if(!$request->is_handled)
                        <form action="{{ route('admin.requests.markDone', $request->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-success btn-sm">Отметить как обработанную</button>
                        </form>
                    @endif

                    <form action="{{ route('admin.requests.destroy', $request->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
