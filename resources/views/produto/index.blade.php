<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\main.css">
    <link rel="shortcut icon" href="img\" type="image/x-icon">
    <script async src="js\script.js"></script>
    <title>Alpha - Hardware</title>
</head>
    <body>

        <nav class="nav">
            <img src="img\logo\logo-alpha-dark.svg" alt="logo" class="nav-logo ">
            <ul class="nav-item text-md">
                <li><a href="">Home</a></li>
                <li><a href="">Categorias</a>
                    <ul>
                        @foreach($produtos as $produto)
                        <li><a href="#">{{ $produto->Categoria->CATEGORIA_NOME }}</a></li>
                        @endforeach 
                    </ul>
                </li>
                <li><a href="">Promoções</a></li>
                <li><a href="">Sobre</a></li>
            </ul>
            <div class="nav-pesquisa">
                <input type="text" placeholder="Buscar produto">
                <button class="btn btn-pesquisa">Buscar</button>
            </div>
            <div class="nav-login text-sm">
                <p>Faça <a href="#">Login</a> ou <a href="#">Registre</a></p>
                <img src="img\icon\homem.png" alt="usuario" class="nav-img-user">
            </div>
        </nav>

        <section class="banner">
            <div class="banner-img">
                <img src="img\banner\teste.webp" alt="banner" class="banner-img-teste">
            </div>
        </section>

        <section class="container">
            <div class="categoria">
                    <div>
                        <img src="img\categoria\placa-mae3.png" alt="Placa Mãe">
                        <p class="badge badge-categoria">Placa Mãe</p>
                    </div>
                    <div>
                        <img src="img\categoria\placa de video3.png" alt="Placa de Vídeo">
                        <p class="badge badge-categoria">Placa de Video</p>
                    </div>
                    <div>
                        <img src="img\categoria\memoria3.png" alt="Memória RAM">
                        <p class="badge badge-categoria">Memória RAM</p>
                    </div>
                    <div>
                        <img src="img\categoria\placa-rede3.png" alt="Placa de Rede">
                        <p class="badge badge-categoria">Placa de Rede</p>
                    </div>
                    <div>
                        <img src="img\categoria\processador3.png" alt="Processador">
                        <p class="badge badge-categoria">Processador</p>
                    </div>
                    <div>
                        <img src="img\categoria\acessorios3.png" alt="Acessórios">
                        <p class="badge badge-categoria">Acessórios</p>
                    </div>
                    <div class="categoria-nome">
                        <img src="img\categoria\ssd3.png" alt="Armazenamento">
                        <p class="badge badge-categoria">Armazenamento</p>
                    </div>
            </div>
            <div class="cards">
                @foreach($produtos as $produto)
                <div class="card">
                    <div>
                        <img src="https://fastly.picsum.photos/id/877/300/300.jpg?hmac=uJHO3bgLZAfdAOBmDOE-V7vqPsOBtYgAxRYpNtIIDmw" alt="">
                    </div>
                    <p class="badge {{ $produto->PRODUTO_DESCONTO > 0 ? 'badge-promocao' : 'badge-semPromocao' }}">
                        {{ $produto->PRODUTO_DESCONTO > 0 ? 'Promoção' : 'Sem Desconto' }}
                    <p class="text-sm">{{$produto->Categoria->CATEGORIA_NOME}}</p>
                    <h2 class="text-md">{{ $produto->PRODUTO_NOME}}</h3>
                    <p class="text-preco-desconto">R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}</p>
                    <p class="text-preco">R$ {{ number_format($produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO, 2, ',', '.') }}</p>
                    <div class="card-btn">
                        <button class="btn btn-carrinho">carrinho</button>
                        <button class="btn btn-comprar">comprar</button>
                    </div>
                </div>
                @endforeach
            </div>
        </section>


        <footer class="footer">
            <div class="footer-logo">
                <img src="img\logo\logo-alpha-dark.svg" alt="logo" class="footer-logo-img">
            </div>
            <div class="footer-info">
                <p>Alpha - Hardware</p>
                <p>Endereço: Rua teste, 123</p>
                <p>Telefone: (11) 1234-5678</p>
                <p>Email: teste@teste.com</p>
            </div>
            <div class="footer-redes">
                <img src="img\icon\preenchidos\facebook-filled.png" alt="facebook" class="footer-redes-img">
                <img src="img\icon\preenchidos\instagram-filled.png" alt="instagram" class="footer-redes-img">
            </div>
        
    </body>
</html>


