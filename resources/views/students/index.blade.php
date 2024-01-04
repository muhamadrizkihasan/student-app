@extends('templates.default');

@php
    $title = 'Data Siswa';
    $preTitle = 'Semua Data';
@endphp

@push('page-action')
    <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('content')
    <h1>Student</h1>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter table-bordered card-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Class</th>
                        <th class="w-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $student->photo) }}" width="100" height="100" alt="">
                            </td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td>{{ $student->studentClass->name }}</td>
                            <td class="d-flex">
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-success mx-2">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="post">
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