@extends('layout.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Create Class</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="division">Division</label>
                            <input type="text" name="division" id="division" class="form-control @error('division') is-invalid @enderror" value="{{ old('division') }}">
                            @error('division')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="year">Year</label>
                            <select name="year" id="year" class="form-control @error('year') is-invalid @enderror">
                                <option value="" selected disabled>Select Year</option> <!-- Add this line -->
                                @foreach($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                            @error('year')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="dept_name">Department</label>
                            <select name="dept_name" id="dept_name" class="form-control @error('dept_name') is-invalid @enderror">
                                <option value="" selected disabled>Select Department</option> <!-- Add this line -->
                                @foreach($departments as $department)
                                    <option value="{{ $department }}">{{ $department }}</option>
                                @endforeach
                            </select>
                            @error('dept_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        

                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
