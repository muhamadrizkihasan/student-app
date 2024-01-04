@extends('templates.default')

@php
    $title = 'Data Siswa';
    $preTitle = 'Tambah Data Siswa';
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control
                        @error('address')
                            is-invalid
                        @enderror
                    " 
                    placeholder="Tulis Alamatmu" value="{{ old('address') }}">
                    @error('address')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomer Telepon</label>
                    <input type="text" name="phone_number" class="form-control
                        @error('phone_number')
                            is-invalid
                        @enderror
                    " 
                    placeholder="Tulis Nomermu" value="{{ old('phone_number') }}">
                    @error('phone_number')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <select name="student_class_id" id="student_class_id" class="form-control">
                        <option disabled hidden selected>Pilih Kelas</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>
                    @error('class')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="photo" 
                    class="form-control
                        @error('photo')
                            is-invalid
                        @enderror
                    "
                    placeholder="Masukan Fotomu" value="{{ old('photo') }}">
                    @error('photo')
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