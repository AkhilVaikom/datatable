<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Index') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link href="/css/form.css" rel="stylesheet" type="text/css">
    <title>Student Page</title>
</head>
<body> 
<div class="main-body">
<div class="div-center">
<h1>Add Student Details</h1>
<form action="{{ route('add-student') }}" method="post">

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name">
    @error('name')
    <div class="alert alert-danger" >{{ $message }}</div>
@enderror
  </div>
  <div class="mb-3">
      @csrf
    <label for="subject" class="form-label">Subject</label>
    <input type="text" name="subject" class="form-control" id="subject">
    @error('subject')
    <div class="alert alert-danger" >{{ $message }}</div>
@enderror
  </div>
  <div class="mb-3">
    <label for="mark" class="form-label">Mark</label>
    <input type="text" name="mark" class="form-control" id="mark">
    @error('mark')
    <div class="alert alert-danger" >{{ $message }}</div>
@enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   

<br><br>
</div>
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> --}}
</div>
</body>
</html> 
</div>
</div>
</div>
</div>
</x-app-layout>