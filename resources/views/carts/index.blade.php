<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{URL::asset('assets/css/global.css')}}>
    <link rel="stylesheet" href={{URL::asset('assets/css/index.css')}}>
    <title>Cart</title>
</head>

<body>
    <header>
        <nav>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#e8eaed">
                    <path
                        d="M160-720v-80h640v80H160Zm0 560v-240h-40v-80l40-200h640l40 200v80h-40v240h-80v-240H560v240H160Zm80-80h240v-160H240v160Zm-38-240h556-556Zm0 0h556l-24-120H226l-24 120Z" />
                </svg>
            </a>
        </nav>
    </header>
    <main>
        <table class="cartTable">
            <thead>
                <th>Produto</th>
                <th>Preço</th>
                <th>Data de Solicitação</th>
            </thead>
            <tbody>
                @foreach ()
                
                @endforeach
            </tbody>
        </table>
    </main>
</body>

</html>