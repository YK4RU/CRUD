<h1>Cadastro</h1>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('photos.update', ['photo' => $photo->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    
    <p>
        <input type="file" name="UrldaImagem" id="UrldaImagem" accept="image/*">
    </p>
    <p>
        <input type="text" name="NomedaImagem" id="NomedaImagem" value="{{ $photo->NomedaImagem }}">
    </p>
    <p>
        <input type="submit" value="Atualizar" id="botaoAtualizar">
    </p>
</form>
