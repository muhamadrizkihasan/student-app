@extends('templates.default');

@php
    $title = 'Data kelas';
    $preTitle = 'Semua Data';
@endphp

@push('page-action')
    <a href="{{ route('student-classes.create') }}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('content')
    <h1>Student Class</h1>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter table-bordered card-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Slug</th>
                        <th class="w-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $class)
                        <tr>
                            <td>
                                <a href="{{ route('student-classes.show', $class) }}">{{ $class->name }}</a>
                            </td>
                            <td>{{ $class->slug }}</td>
                            <td class="d-flex">
                                <a href="{{ route('student-classes.edit', $class->id) }}" class="btn btn-success mx-2">Edit</a>
                                <form action="{{ route('student-classes.destroy', $class->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Hapus" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection