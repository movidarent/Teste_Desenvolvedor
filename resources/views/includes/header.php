<!doctype html>

<html lang="pt-br" ng-app="movida">

  <head>    

    <base href="/">
    <script type="text/javascript" src="https://www.movida.com.br/gulp/build/js/scripts-site.min.js?v=20180619"></script>
    <script>var BASE_URL = "/";</script>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Movida</title>
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="css/style.min.css?v=20170829">
    <link rel="stylesheet" type="text/css" href="https://www.movida.com.br/gulp/build/sprites/sprite.css">


    <!--Meus Scripts JS-->
	<script src="/js/angular.min.js"></script>

    <script src="/js/aplicacao/aplicacao.js"></script>

    <script src="/js/aplicacao/controllers/veiculos-controller.js"></script>
    <!--Meus Scripts JS -->

</head>

<body style="display: none">
    
    <script>
        if (self == top) {
            var theBody = document.getElementsByTagName('body')[0]
            theBody.style.display = "block"
        } else {
            top.location = self.location
        }
    </script>
    <main>
        <header class="no-print">

            <div class="content">

                <div class="container-fluid">
                    <div class="row hidden-sm hidden-xs">
                        <div class="col-md-4 col-lg-4 text-left logo-row">
                            <div class="logo-container">
                                <div class="logos-group">
                                    <a target="_blank" href="https://www.movidapremium.com.br/"><img class="logo-responsive" src="https://www.movida.com.br/gulp/build/images/10015151-premium.png" alt="" /></a>
                                    <img class="logos-separator" src="https://www.movida.com.br/gulp/build/images/10015151-separador.png" alt="" />
                                    <a target="_blank" href="https://www.movida.com.br/terceirize-sua-frota/"><img src="https://www.movida.com.br/gulp/build/images/10015151-frotas.png" alt="" /></a>
                                    <img class="logos-separator" src="https://www.movida.com.br/gulp/build/images/10015151-separador.png" alt="" />
                                    <a target="_blank" href="https://www.movidaseminovos.com.br/" ><img class="logo-responsive" src="https://www.movida.com.br/gulp/build/images/10015151-seminovos.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">&nbsp;</div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right flags-header">
                                                    <a data-gaclick='{"category":"Geral", "action":"Login:Click"}' class="btn dropdown-toggle hidden-sm hidden-xs" href="/usuario/login">
                              <span class="icon icon-login mrxs icon-negative"></span>LOGIN
                          </a>
                                                    
                      </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 text-left">


                            <div class="cd-dropdown-wrapper">
                                <a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Abrir"}' class="cd-dropdown-trigger" href="#0">
                                    <span class="navbar-toggle pull-left">

                                        <i class="icon-bar"></i>
                                        <i class="icon-bar"></i>
                                        <i class="icon-bar"></i>

                                    </span>

                                    <span class="pull-left hidden-xs">Menu</span>

                                </a>




                                <nav class="cd-dropdown">
                                    <h2>Menu</h2>
                                    <a href="#0" class="cd-close">Close</a>
                                    <ul class="cd-dropdown-content">
                                        <li class="login hidden-md hidden-lg">
                                                                                        <a class="btn dropdown-toggle" href="/usuario/login">
                                                <span class="icon icon-login mrxs icon-negative"></span>LOGIN                                            </a>
                                                                                    </li>
                                        <li class="hidden-xs"><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Home"}' href="/" title="HOME">Home</a></li>
                                        <li class="has-children">
                                            <a href="#" title="A Movida">A Movida</a>

                                            <ul class="cd-secondary-dropdown is-hidden">
                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Institucional"}' href="/institucional/" title="Institucional">Institucional</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:PromoÃ§Ãµes"}' href="/promocoes/" title="PromoÃƒÂ§ÃƒÂµes">Promoções</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Requisitos e CondiÃ§Ãµes de locaÃ§Ã£o"}' href="/requisitos-condicoes/" title="Requisitos e CondiÃ§Ãµes de locaÃ§Ã£o">Requisitos e Condições de locação</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Modelos de Carros"}' href="/modelos-de-carro/" title="Modelos de Carros">Modelos de Carros</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Modelos:TarifÃ¡rio"}' href="/tarifario/" title="Tarif?rio">Tarifário</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Modelos:Produtos"}' href="/produtos/" title="Produtos">Produtos</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Modelos:RelaÃ§Ã£o com a Imprensa"}' href="/relacao-imprensa/" title="RelaÃ§Ã£o com a Imprensa">Relação com a Imprensa</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Modelos:Parcerias"}' href="/parcerias/" title="Parcerias">Parcerias</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Modelos:RelaÃ§Ã£o com a Investidores"}' href="http://ri.movida.com.br/default_pt.asp?idioma=0&conta=28" target="_blank" title="RelaÃ§Ã£o com a Investidores">Relação com Investidores</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Modelos:Dicas de Viagem com Carro Alugado"}' href="/dicas-de-viagem-com-carro-alugado/" title="Dicas de Viagem com Carro Alugado">Dicas de Viagem </a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"A Movida:Radio Movida"}' href="/radio-movida/" title="Radio Movida">Rádio Movida</a></li>
                                            </ul>
                                            <!-- .cd-secondary-dropdown -->
                                        </li>
                                        <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Lojas"}' href="/lojas" title="loja">Lojas</a></li>
                                        <li class="has-children">
                                            <a href="http://ri.movida.com.br/default_pt.asp?idioma=0&conta=28" target="_blank" title="RELACIONAMENTO">Relacionamento</a>

                                            <ul class="cd-secondary-dropdown is-hidden">
                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Relacionamento:Perguntas Frequentes"}' href="/perguntas-frequentes/" title="Perguntas Frequentes">Perguntas Frequentes</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Relacionamento:Trabalhe Conosco"}' href="/trabalhe-conosco/" title="Trabalhe Conosco">Trabalhe Conosco</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Relacionamento:Incentiva"}' href="/incentiva-movida/" title="Incentiva">Incentiva Movida</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Relacionamento:Agencias"}' href="/agencias/" title="Agencias">Agências</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Relacionamento:Portal"}' href="https://vetor.movida.com.br/movida/portal/b2b/login.php" target="_blank" title="Portal">Portal Movida B2B</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Relacionamento:Colaborador"}' href="https://colaborador.jsl.com.br:8005/irj/portal" target="_blank" title="Colaborador">Portal do Colaborador</a></li>
                                                <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Relacionamento:Contato"}' href="/contato/" title="Contato">Contato</a></li>
                                            </ul>
                                            <!-- .cd-secondary-dropdown -->
                                        </li>
                                        <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Terceirize"}' href="/terceirize-sua-frota/" title="terceirize">Terceirize Sua Frota</a></li>
                                        <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Compre um Carro"}' href="http://www.movidaseminovos.com.br/" target="_blank" title="Compre um Carro">Compre um Carro</a></li>
                                        <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Fidelidade"}' href="http://www.movidamovevoce.com.br/" target="_blank" title="Fidelidade">Fidelidade Movida</a></li>
                                        <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Movida Mensal Flex"}' href="http://www.movidamensalflex.com.br" title="Movida Mensal Flex" target="_blank">Movida Mensal Flex</a></li>
                                        <li><a data-gaclick='{"category":"Geral", "action":"Menu:Click", "label":"Blog"}' href="/blog/" title="blog">Blog</a></li>
                                                                            </ul>
                                    <!-- .cd-dropdown-content -->
                                </nav>
                                <!-- .cd-dropdown -->
                            </div>
                            <!-- .cd-dropdown-wrapper -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 text-center">
                            <a data-gaclick='{"category":"Geral", "action":"Logo:Click"}' href="/">
                                <img src="https://www.movida.com.br/gulp/build/images/logo.png" class="img-responsive center-block logo" />
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right flags-header">
                          <div class="top-contato">
                              <table style="table-layout: fixed;" width="100%" border="0">
                                  <tbody>
                                  <tr>
                                      <td width="75%">Central de Reservas 24h <span class="semi-bold mrs">0800 606 8686</span></td>
                                      <td><a href="/contato/" class="btn botao-contato">CONTATO</a> </td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>                          
                          <div class="bandeirinhas">
                                                                                          <a data-gaclick='{"category":"Geral", "action":"Bandeiras:Click", "label":"English"}' href="/trocar_idioma/2" title="english">
                                  <img class="pull-right mrxs" src="https://www.movida.com.br/gulp/build/images/United-States-Flag-icon.png"></a>
                                                            <a data-gaclick='{"category":"Geral", "action":"Bandeiras:Click", "label":"Espanol"}' href="/trocar_idioma/3" title="espanol">
                                  <img class="pull-right mrxs" src="https://www.movida.com.br/gulp/build/images/Spain-Flag-icon.png"></a>
                                                        </div>
                        </div>
                        <!-- if -->
                                                <!-- endif -->
                    </div>

                </div>

            </div>

        </header>