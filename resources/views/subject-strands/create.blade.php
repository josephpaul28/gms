@extends('layouts.master')
@section('content')
    <div class="container">
        @include('layouts.errors')
        <form method="POST" action="/subject-strands/store">
            @csrf
          <div class="form-group">
            <div class="form-group">
                <label for="sel1">Subjetcs</label>
              <select class="form-control" id="sel1" name="subject_id">
                <option value = "Section A">Subject A</option>
                <option value = "Section B">Subject B</option>
                <option value = "Section C">Subject C</option>
                <option value = "Section D">Subject D</option>
              </select>
            </div>
      
            <div>
            <label for="sel1">Strands</label>
              <select class="form-control" id="sel1" name="strand_id">
                <option value = "Section A">CITCS </option>
                <option value = "Section B">CTE </option>
                <option value = "Section C">NURSING </option>
                <option value = "Section D">CRIM </option>
              </select>
            </div>
            <label for="title">Semester</label>
            <input type="text" class="form-control" name='semester' aria-describedby="emailHelp" placeholder="Semester">
            <label for="title">Grade Level</label>
            <input type="text" class="form-control" name='grade_level' aria-describedby="emailHelp" placeholder="Grade Level">
          </div>
           
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection