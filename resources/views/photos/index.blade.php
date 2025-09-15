<h1>Imagens legais</h1>

<a href="{{ route('photos.create')}}">Coloque uma imagem legal Ü</a>

<ul>
    @foreach ($photos as $photo)
        <li>{{ $photo->NomedaImagem }} | <a href="{{ route('photos.edit', ['photo' => $photo->id]) }}">Edit</a> | <a href="{{ route('photos.show', ['photo' => $photo->id]) }}">Delete</a></li>
    @endforeach
</ul>
