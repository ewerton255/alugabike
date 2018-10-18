<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>AlugaBike - Sistema de Aluguel de Bicicletas</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/autenticacao.css">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <!--CABEÇALHO-->

    <header class="cabecalho">
        <div class="logo">
            <img src="assets/logo_icon2.png" alt="logo">
        </div>
        <nav class="menu">
            <ul>
                <li>
                    <a class="link" href="{{route('index')}}">Início</a>
                </li>
                <li>
                    <a class="link" href="{{route('sobre')}}">Sobre</a>
                </li>
                <li>
                    <a class="link" href="{{route('contato')}}">Contato</a>
                </li>
                <li>
                    <a class="link" href="{{route('galeria')}}">Galeria</a>
                </li>
            </ul>
        </nav>
        <aside class="autenticacao">
            <form>
                <a href="{{route('entrar')}}" class="botao link">Entrar</a>
                <a href="{{route('registrar')}}" class="botao destaque link">Registrar-se</a>
            </form>
        </aside>
    </header>

    <section id="conteudo" class="secao">
        
        @yield('conteudo')
        
    </section>

    <aside class="aside-left">
        <div>
            <p class="titulo-anuncio">BICICLETA FAZ BEM PARA O CORPO E TAMBÉM PARA O MEIO AMBIENTE</p>
        </div>
        <div>
            <img src="assets/bicicleta-faz-bem.jpg" alt="logo_noticia">
        </div>
        <div>
            <p>
                Além de ser uma alternativa sustentável e melhorar a qualidade de vida, andar de bicicleta é também uma excelente opção para
                a saúde e a forma física...
            </p>
        </div>
        <div>
            <a href="https://www.vix.com/pt/bdm/corpo/bicicleta-faz-bem-para-o-corpo-e-tambem-para-o-meio-ambiente" target="_blank">Ler
                mais
            </a>
        </div>
    </aside>

    <aside class="aside-right">
        <div>
            <p class="titulo-anuncio">10 BENEFÍCIOS DA BIKE PARA O MEIO AMBIENTE</p>
        </div>
        <div>
            <img src="assets/beneficios-da-bike-2.jpeg" alt="logo_noticia">
        </div>
        <div>
            <p>
                Os transportes conscientes estão ganhando cada vez mais espaço e força nas grandes cidades. A bicicleta deixou de ser apenas
                lazer e esporte para voltar a ser meio de transporte e, dessa forma, se mostra uma excelente alternativa
                de locomoção...
            </p>
        </div>
        <div>
            <a href="https://www.positiva.eco.br/10-beneficios-da-bike/" target="_blank">Ler mais</a>
        </div>
    </aside>

    <footer class="rodape">
        <div>Sistema desenvolvido por <span> Ewerton Dougllas</span>, Aluno do 5º período do curso Sistema de Informação
            - CESMAC, 2018</div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>