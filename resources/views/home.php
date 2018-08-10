<?php
include("includes/header.php");
?>

        <section class="inside-pages">

            
            <!-- Page Content -->
            <div class="block-content">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/" title="Home">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="reserva-itinerario.html" title="Seu itinerário">
                Seu itinerário            </a>
        </li>
        <li class="breadcrumb-item active">Veículo</li>
    </ol>

</div>

<section class="reserve car-choice">

    <div class="block-content" ng-controller="VeiculosController">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <h2>FECHAR RESERVA</h2>
                <div class="content-steps">
                    <a href="/reserva/itinerario" title="Seu itinerário">
                        <span class="step">1</span>
                        <span class="hidden-xs">Seu itinerário</span>
                    </a>
                    <span class="step active">2</span>
                    <span class="hidden-xs">Escolha seu veículo</span>
                    <span class="step">3</span>
                    <span class="hidden-xs">Proteções e itens</span>
                    <span class="step">4</span>
                    <span class="hidden-xs">Fechar reserva</span>
                </div>
                <div>
                    <h2>Escolha seu veículo</h2>
                </div>
                <form role="form" method="POST" action="/reserva/salvar-escolha">
                    
                    <input size="100" type="hidden" name="locadora" value="MOVIDA" />
                    <input size="100" type="hidden" name="local_retirada" value="CRJ" />
                    <input size="100" type="hidden" name="hora_retirada" value="2018-09-02T16:00:00" />
                    <input size="100" type="hidden" name="local_devolucao" value="CRJ" />
                    <input size="100" type="hidden" name="hora_devolucao" value="2018-09-04T16:00:00" />

                                <!--Looping para retornar os carros pelo angular-->

                                <div class="block-select col-lg-12 col-md-12 col-sm-12 col-xs-12" ng-repeat="veiculo in veiculos">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 title-group">
                                        	{{veiculo.Veiculo.Descricao}}
                                    		
                                    	</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
                                    </div>
                                    <div class="row group veiculoBox">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 center-vertical">
                                            <img src="{{veiculo.Veiculo.Imagem}}" class="img-responsive" />
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 center-vertical">
                                            <div class="ellipsis">
                                            	{{veiculo.Veiculo.Nome}}
                                            </div>
                                            <div class="mtm mbm">
                                            	<img src="{{produto.PictureURL}}" width="100" style="margin: 10px;" ng-repeat="produto in veiculo.Veiculo.Produtos">
                                                
                                            </div>
                                            <input type="hidden" class="selDetailsHidden" value="Econômico/1.0/4 Portas  - AC e DH/Vid. e Trav. Elét./CD ou USB/5 PAX - 2 Malas/Freios ABS/ Air Bag" />
                                            <div class="text-left mts mbs">
                                                <a href="#" class="details">{{veiculo.Veiculo.DescricaoGrupo}}</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right">
                                            <div class="selConteudoSelecao col-xs-8 col-sm-10 pull-right text-center">
                                                <div class="price semi-bold">
                                                    <span>R$</span>
                                                    {{veiculo.Veiculo.Totais.Resumo[0].Calculo.ValorUnitario}}                                                
                                                </div>
                                                <div class="tipoDiaria">DI&Aacute;RIA COM KM LIVRE</div>
 

                                                <div class="row">
                                                    <button type="button"  class="btn ro">PAGAR AGORA</button>
                                                </div>

                                                <div class="discountLabel">
                                                	Ganhe {{veiculo.Veiculo.Totais.PrePagamento.PercDesconto}} % de desconto
                                                </div>
                                            </div>
                                            <div class="selConteudoSelecao col-xs-8 col-sm-10 pull-right text-center">
                                                <div class="price semi-bold">
                                                    <span>R$</span>
                                                {{(veiculo.Veiculo.Totais.Resumo[0].Calculo.ValorUnitario * ((100 - veiculo.Veiculo.Totais.PrePagamento.PercDesconto) / 100)) | number: 2}}                                                  
                                            </div>
                                                <div class="tipoDiaria">DI&Aacute;RIA COM KM LIVRE</div>

                                                <div class="row">
                                                    <button type="button"  class="btn ro">PAGAR AGORA</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Looping para retornar os carros pelo angular-->

                    <input type='hidden' value="" name="PosPre" id="PosPre" />
                    <input type='hidden' value="" name="dataValor" id="dataValor" />
                    <input type='hidden' value="" name="dataIdx" id="dataIdx" />

                </form>
            </div>

            <div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12">
                <h2>SUA RESERVA</h2>
                <div class="reserve-block">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-xs-8 col-sm-8 mtxs bold">
                            <div>
                                <div>TOTAL DE</div>
                                DI&Aacute;RIAS
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 mts col-sm-4 col-xs-4 text-right">
                            <span class="color-orange price-value line-through">{{veiculos[0].Veiculo.Totais.Resumo[0].Calculo.Qtd}}</span>
                        </div>
                    </div>
                    <div class="row mts">
                        <div class="col-lg-7 col-md-7 col-xs-8 col-sm-8 bold">
                            <div>RETIRADA</div>
                            <div>{{data_retirada}}</div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-4 text-right">
                            <a data-gaclick='{"category": "Escolha Veículo", "action": "Alterar Retirada:Click"}' href="/reserva/itinerario">ALTERAR</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtm">
                            <span class="icon icon-icon-local-orange pull-left mrxs"></span>
                            {{cotacao.Informacoes.LojaRetirada.Endereco.Logradouro}}                        
                        </div>
                    </div>
                    <div class="row mtm">
                        <div class="col-lg-7 col-md-7 col-xs-8 col-sm-8 bold">
                            <div>DEVOLUÇÃO</div>
                            <div>{{data_devolucao}}</div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-4 text-right">
                            <a data-gaclick='{"category": "Escolha Veículo", "action": "Alterar Devolução:Click"}' href="/reserva/itinerario">ALTERAR</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtm">
                            <span class="icon icon-icon-local-orange pull-left mrxs"></span>
                            {{cotacao.Informacoes.LojaDevolucao.Endereco.Logradouro}}                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 pts">
                            <div class="border-top mtm ptm text-center">
                                <h3>VANTAGENS MOVIDA</h3>
                                <div>
                                    <div>3h de cortesia na diária de devolução</div>
                                    <div class="mts">melhor preço</div>
                                    <div class="mts">km livre</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
</section>

        </section>

    </main>

<?php 
include("includes/footer.php");
 ?>