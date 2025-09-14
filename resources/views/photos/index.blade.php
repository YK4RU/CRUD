<h1>Imagens legais</h1>

<a href="{{ route('photos.create')}}">Coloque uma imagem legal Ü</a>

<ul>
    @foreach ($photos as $photo)
        <li>{{ $photo->NomedaImagem }}</li>
    @endforeach
</ul>
