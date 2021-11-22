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
    <link href="/css/form.css" rel="stylesheet" type="text/css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <title>Student Data</title>
{{-- <style>
    h1{
        background-color:gray
    }
    </style> --}}
</head>
<body>
  
<div class="div-left"></div>
<div class="div-center">
<h1 class="bg-success p-2 text-dark bg-opacity-50">Student Details</h1>
<table class="table" class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Mark</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>


    
  @if(isset($students))
    @foreach($students as $student)
    <tr class="table-secondary">
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->subject}}</td>
    <td>{{$student->mark}}</td>
    <td><a class="btn btn-danger btn-sm" href="{{url('/deleteitem/'.$student->id)}}" role="button" >Delete</a></td>
    <td><a class="btn btn-primary btn-sm" href="{{url('/edit/'.$student->id)}}" role="button">Edit</a></td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
{{$students->links()}}
<br>  
<a class="btn btn-primary btn-lg" href="{{url('/add')}}" role="button">Add New Student</a>
</button>
</div>
<div class="div-right"></div>


{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> --}}

</body>
</html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
