@extends('templates.default')

@php
    $title = 'Data Kelas';
    $preTitle = 'Tambah Data Kelas';
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('student-classes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" 
                    class="form-control
                        @error('name')
                            is-invalid
                        @enderror
                    "
                    placeholder="Tulis Namamu" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control
                        @error('slug')
                            is-invalid
                        @enderror
                    " 
                    placeholder="Slug" value="{{ old('slug') }}">
                    @error('slug')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="submit" value="Tambah" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection