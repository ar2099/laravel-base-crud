<h1>Creare personaggio</h1>
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
<form action="{{ route("comics.store")}}" method="POST" novalidate>
 @csrf
    <input type="text" name="title" class="form-control" id="title" placeholder="title" >
  <input type="text" name="description" class="form-control" id="description" placeholder="description" required>
  <input type="text" name="thumb" class="form-control" id="thumb" placeholder="link immagine" required>
  <input type="number" name="price" class="form-control" id="price" placeholder="price" required>
  <input type="text" name="series" class="form-control" id="series" placeholder="series" required>
  <input type="date" name="sale_date" class="form-control" id="sale_date" placeholder="sale date" required>
  <input type="text" name="type" class="form-control" id="type" placeholder="type" required>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>