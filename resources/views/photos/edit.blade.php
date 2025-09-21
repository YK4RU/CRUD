<h1>EDIT</h1>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('photos.update', ['photo' => $photos->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <p>
        <input type="file" name="UrldaImagem" id="UrldaImagem" accept="image/*">
    </p>
    <p>
        <input type="text" name="NomedaImagem" id="NomedaImagem" value="{{ $photos->NomedaImagem }}">
    </p>
    <p>
        <input type="submit" value="Atualizar" id="botaoAtualizar">
    </p>
</form>
