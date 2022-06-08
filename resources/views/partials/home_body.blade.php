{{-- @php
    dump($comics)
@endphp --}}
{{-- <div class="index">
@foreach ($comics as $comic)
<div class="contenitore">
    <h3>Titolo: {{$comic->title}}</h3>
    <img src="{{$comic->thumb}}" alt="">
    <p>------------------</p>
</div>
    
@endforeach
</div> --}}
@if ( session('message') )
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<a href=" {{route("comics.create") }}" class="btn btn-primary">Create</a>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      
       <th scope="col">Price</th>
        <th scope="col">series</th>
         <th scope="col">Sales date</th>
          <th scope="col">Type</th>
          <th scope="col">Bottone</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($comics as $comic)
    <tr>
    <td><img src="{{$comic->thumb}}" alt="" style=" width: 60px; "></td>
    <td>{{$comic->title}}</td>
    <td>{{$comic->description}}</td>
    
    <td>{{$comic->price}}$</td>
    <td>{{$comic->series}}</td>
    <td>{{$comic->sale_date}}</td>
    <td>{{$comic->type}}</td>
    <td>
      <a href=" {{route("comics.show", $comic->id) }}" class="btn btn-primary">Scheda</a>
    <a href=" {{route("comics.edit", $comic->id) }}" class="btn btn-primary">EDIT</a>
    <form action="{{ route( 'comics.destroy', $comic->id ) }}"
                    method="POST"
                    class="delete-form"
                    data-name="{{ $comic->title }}"
                    >
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
  </td>
    </tr>
@endforeach
  </tbody>
</table>