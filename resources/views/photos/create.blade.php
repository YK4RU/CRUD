<h1>Cadastro</h1>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('photos.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <p>
        <label for="UrldaImagem">Escolha uma imagem</label>
        <input type="file" name="UrldaImagem" id="UrldaImagem" accept="image/*">
    </p>
    <p>
        <label for="NomedaImagem">Digite o nome da imagem</label>
        <input type="text" name="NomedaImagem" id="NomedaImagem">
    </p>
    <p>
        <input type="submit" value="Entrar" id="botaoEntrar">
    </p>
</form>
