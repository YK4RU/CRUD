<h1>Imagens legais</h1>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<p>
    <a href="{{ route('photos.create')}}">Coloque uma imagem legal Ü</a>
</p>

<ul>
    @foreach ($photos as $photo)
        <li>{{ $photo->NomedaImagem }} | <a href="{{ route('photos.edit', ['photo' => $photo->id]) }}">Edit</a> | 
        <form action="{{ route('photos.destroy', ['photo' => $photo->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
</ul>
