@extends('layouts.app')

@section('content')

    
        

    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pack Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Avabile Location</th>
                    <th scope="col">Person</th>
                    <th scope="col">Usable by</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($travels as $travel)
                
                    <tr>
                        
                            <th scope="row">{{ $travel->id }}</th>
                            <td>{{ $travel->name }}</td>
                            <td>{{ $travel->price}}</td>
                            <td>{{ $travel->number_of_location }}</td>
                            <td>{{ $travel->how_many_people }}</td>
                            <td>{{ $travel->end_validity }}</td>
                            <td>{{ $travel->description }}</td>
                            <td><a href="{{route('admin.travel.show', $travel)}}"><button>Apri</button></a></td>
                        
                        
                        
                    </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
    



@endsection