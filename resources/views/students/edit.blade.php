@extends('templates.default')

@php
    $title = 'Data Siswa';
    $preTitle = 'Edit Data Siswa';
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" class="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control
                        @error('name')
                            is-invalid
                        @enderror
                    " name="example-text-input" placeholder="Tulis Namamu" value="{{ old('name') ?? $student->name }}">
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
                    " name="example-text-input" placeholder="Tulis Alamat lengkapmu" value="{{ old('address') ?? $student->address }}">
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
                    " name="example-text-input" placeholder="Tulis Nomer Telepon" value="{{ old('phone_number') ?? $student->phone_number }}">
                    @error('phone_number')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <select name="student_class_id" id="student_class_id" class="form-control">
                        <option disabled hidden selected>Pilih Kelas</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}" @selected($class->id == $student->student_class_id)>{{ $class->name }}</option>
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
                    placeholder="Masukan Fotomu" value="{{ old('photo') ?? $student->class }}">
                    @error('photo')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="submit" value="Edit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection