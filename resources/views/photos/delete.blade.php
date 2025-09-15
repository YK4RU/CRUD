<h1>Imagem - {{ $photo->NomedaImagem }}</h1>

<form action="{{ route('photos.destroy', ['photo' => $photo->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Deletar" id="botaoDeletar">
</form>