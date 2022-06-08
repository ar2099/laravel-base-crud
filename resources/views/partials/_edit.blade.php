<h1>Modifica personaggio</h1>

@if ( $errors->any() )
        {{-- Se sono presenti errori backend --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all()  as $error)
                     <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route("comics.update", $comic->id)}}" method="POST" novalidate>
    @method("PUT")
 @csrf
    <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$comic->title}}">
  <input type="text" name="description" class="form-control" id="description" placeholder="description" required value="{{$comic->description}}">
  <input type="text" name="thumb" class="form-control" id="thumb" placeholder="link immagine" required value="{{$comic->thumb}}">
  <input type="number" name="price" class="form-control" id="price" placeholder="price" required value="{{$comic->price}}"> 
  <input type="text" name="series" class="form-control" id="series" placeholder="series" required value="{{$comic->series}}">
  <input type="date" name="sale_date" class="form-control" id="sale_date" placeholder="sale date" required value="{{$comic->sale_date}}">
  <input type="text" name="type" class="form-control" id="type" placeholder="type" required value="{{$comic->type}}">
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>