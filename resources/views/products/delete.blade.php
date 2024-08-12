<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{URL::asset('assets/css/global.css')}}>
    <link rel="stylesheet" href={{URL::asset('assets/css/delete.css')}}>
    <title>Update</title>
</head>

<body>
    <header>
        <nav>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                <path
                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h580l110-200h546Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80h580q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h580-280Z" />
            </svg>
        </nav>
    </header>
    <main>
        <form action="{{route('products.delete',$product->id)}}" method="post">
            @csrf
            @method('DELETE')
            <h3>Confirma apagar este produto permanentemente da base?</h3>
            <br>
            <h5>Nome:</h5><p> {{$product->name}}</p>
            <h5>Preço:</h5><p> {{$product->price}}</p>
            <h5>Descrição:</h5><p> {{$product->description}}</p>
            <br>
            <a href="{{route('products.index')}}" class="btnChoose">Cancelar</a>           
            <input type="submit" value="Deletar" class="btnChoose"> 
        </form>
    </main>
</body>

</html>