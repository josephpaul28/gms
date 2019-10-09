@extends('layouts.master')
@section('content')
    <div class="container">
        @include('layouts.errors')
        <form method="POST" action="/subject-strands/store">
            @csrf
          <div class="form-group">
            <label for="title">Subject</label>
            <!--<input type="text" class="form-control" name='subject_id' aria-describedby="emailHelp" placeholder="Subject ID">
            <label for="sel1">Subject</label> -->
            <select class="form-control" id="sel1" name='subject_id'>
              @foreach ($subjects as $subject)
              <option value='{{ $subject->id }}'>{{ $subject->name }}</option>
              @endforeach
            </select>
            <!--<label for="title">Strand</label>
            <input type="text" class="form-control" name='strand_id' aria-describedby="emailHelp" placeholder="Strand ID">
             -->
            <label for="title">Strand</label>
            <select class="form-control" id="sel1" name='strand_id'>
              @foreach ($strand as $strand)
              <option value="{{ $strand->id }}">{{ $strand->name }}</option>
              @endforeach
             
            </select>
            <label for="title">Semester</label>
            <input type="text" class="form-control" name='semester' aria-describedby="emailHelp" placeholder="Semester">
            <label for="title">Grade Level</label>
            <input type="text" class="form-control" name='grade_level' aria-describedby="emailHelp" placeholder="Grade Level">
          </div>
           
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection