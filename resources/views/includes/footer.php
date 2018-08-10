    <footer class="no-print">

        <section class="links">

            <div class="content">

                <div class="row">

                    <div class="col-sm-12 border-bottom footer-title">
                        <div>
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click", "label":"Abrir"}' href="#" title="Mapa do site" class="mapsite">
                                MAPA DO SITE                                <span class="caret"></span>
                            </a>
                        </div>

                        <!--  <div class="dropdown border-bottom">
                            <a id="dLabel" role="button" data-toggle="dropdown" class="" data-target="#">MAPA DO SITE <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                <li><a href="#">Some action</a></li>
                                <li><a href="#">Some other action</a></li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Hover me for more options</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">Second level</a></li>
                                        <li><a href="#">Second level</a></li>
                                        <li><a href="#">Second level</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>-->
                    </div>

                    <div class="col-sm-12">
                        <div class="links-mapa" style="display: none">
                          <div class="col-sm-3 col-md-2">
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"Home"}' href="/" title="Home">
                                Home                            </a>
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"novidades"}' href="/relacao-imprensa/" title="novidades">
                                novidades                            </a>
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"A Movida"}' href="/institucional/" class="dropdown" title="a movida">
                                a movida
                            </a>
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"Contato"}' href="/contato/" class="dropdown" title="Contato">
                                Contato                            </a>
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"fale conosco"}' href="/contato/" title="Contato">
                                fale conosco                            </a>

                          </div>

                          <div class="col-sm-3 col-md-2">
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"Compre um Carro"}' href="http://www.movidaseminovos.com.br/" title="Movida semi novos">
                                Compre um Carro                            </a>
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"Lojas"}' href="/lojas/" title="Lojas">
                                Lojas                            </a>
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"Dicas de Viagem "}' href="/dicas-de-viagem-com-carro-alugado/" title="Dicas de Viagem " class="dropdown">
                                Dicas de Viagem                             </a>
                            
                          </div>


                          <div class="col-sm-5 col-md-4">
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"Parcerias"}' href="/parcerias/">
                                Parcerias                            </a>
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"grupos"}' href="/modelos-de-carro/">
                                grupos                            </a>
                            <a data-gaclick='{"category":"Geral", "action":"Mapa do Site:Click","label":"Política de privacidade."}' href="/politica-de-privacidade/">
                                Política de privacidade.                            </a>
                            
                          </div>

                            
                        </div>

                    </div>


                </div>

                <!--<div class="row mtm">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="links-mapa" style="display: none"></div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="border-bottom links-mapa" style="display: none"></div>
                    </div>
                </div>-->

            </div>
        </section>



        <div class="line-orange">
            <div class="content text-right">
                <div data-gaclick='{"category":"Geral", "action":"Banner Footer:Click"}' class="logo-movida">
                    <span class="icon icon-logo-movida"></span>
                </div>

            </div>
        </div>

        <div class="copyright">
            <div class="content">
                <p>
                    Movida /- Todos os direitos reservados                </p>
            </div>
        </div>









    </footer>
    <div id="maskLoading" style="display: none">

        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-text">Carregando</div>
        </div>
    </div>

    <!--[if lt IE 8]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
        <![endif]-->



    <script type="text/javascript">

        $(document).ready(function () {


            $('.selNac').click(function (event) {
                event.preventDefault();
                $('.selNac').addClass('active');
                $('.search-engine').hide();
                $('.form-control').removeClass('error');
                $('.selErrorDate').hide();

                funcaoLojas();


                $('.search-engine').fadeIn(300);
                $('#formSearchEngine').attr('action', '/' + 'reserva/info');
                $('.search-engine .options-sub-form.desktop.hidden-sm.hidden-xs').show();

            });


        });

        if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {


            $('.cd-dropdown-wrapper').focus(function () {


                $('.cd-dropdown-trigger').addClass('dropdown-is-active');


                $('.cd-dropdown').addClass('dropdown-is-active');




            });


        }


    </script>

    <!-- JQuery UI - para o autocomplete -->
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>


    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script type="text/javascript" src="https://www.movida.com.br/gulp/build/js/pikaday.js"></script>

    <script type="text/javascript">
    
    function ValorCupom(data) {
        $('#cupom').val(data.value);

        return true;
    }

    function funcaoLojas() {


        var availableTags = [
            { value:'RIO BRANCO AEROPORTO',
                     label:'RIO BRANCO AEROPORTO,RBR,Aeroporto',
                     label2:'RIO BRANCO AEROPORTO',
                     codigo:'RBR',
                     cidade:'Rio Branco',
                     lat:'-9.868889',
                     lng:'-67.898056',
                     cod:'"AEROPORTO"'},{ value:'MACEIO AEROPORTO',
                     label:'MACEIO AEROPORTO,MCZ,Aeroporto',
                     label2:'MACEIO AEROPORTO',
                     codigo:'MCZ',
                     cidade:'Maceió',
                     lat:'-9.509168',
                     lng:'-35.807596',
                     cod:'"AEROPORTO"'},{ value:'MACEIO CENTRO',
                     label:'MACEIO CENTRO,MAA,RUA',
                     label2:'MACEIO CENTRO',
                     codigo:'MAA',
                     cidade:'Maceió',
                     lat:'-9.6288192',
                     lng:'-35.7398251',
                     cod:'"cidade"'},{ value:'MACAPA AERO',
                     label:'MACAPA AERO,MCP,Aeroporto',
                     label2:'MACAPA AERO',
                     codigo:'MCP',
                     cidade:'Macapá',
                     lat:'0.0514153',
                     lng:'-51.0718326',
                     cod:'"AEROPORTO"'},{ value:'MANAUS AEROPORTO',
                     label:'MANAUS AEROPORTO,MAO,Aeroporto',
                     label2:'MANAUS AEROPORTO',
                     codigo:'MAO',
                     cidade:'Manaus',
                     lat:'-3.035847',
                     lng:'-60.046325',
                     cod:'"AEROPORTO"'},{ value:'MANAUS CENTRO',
                     label:'MANAUS CENTRO,MOVMAN,RUA',
                     label2:'MANAUS CENTRO',
                     codigo:'MOVMAN',
                     cidade:'Manaus',
                     lat:'-3.065401',
                     lng:'-60.024737',
                     cod:'"cidade"'},{ value:'CAMACARI',
                     label:'CAMACARI,MOVCMR,RUA',
                     label2:'CAMACARI',
                     codigo:'MOVCMR',
                     cidade:'Camaçari',
                     lat:'-12.6995407',
                     lng:'-38.3022301',
                     cod:'"cidade"'},{ value:'ILHEUS AEROPORTO',
                     label:'ILHEUS AEROPORTO,IOS,Aeroporto',
                     label2:'ILHEUS AEROPORTO',
                     codigo:'IOS',
                     cidade:'Ilhéus',
                     lat:'-14.814123',
                     lng:'-39.032257',
                     cod:'"AEROPORTO"'},{ value:'PORTO SEGURO',
                     label:'PORTO SEGURO,BPS,RUA',
                     label2:'PORTO SEGURO',
                     codigo:'BPS',
                     cidade:'Porto Seguro',
                     lat:'-16.4404757',
                     lng:'-39.0833242',
                     cod:'"cidade"'},{ value:'SALVADOR AEROPORTO',
                     label:'SALVADOR AEROPORTO,SSA,Aeroporto',
                     label2:'SALVADOR AEROPORTO',
                     codigo:'SSA',
                     cidade:'Salvador',
                     lat:'-12.9141607',
                     lng:'-38.3386477',
                     cod:'"AEROPORTO"'},{ value:'SALVADOR AMARALINA',
                     label:'SALVADOR AMARALINA,MOVSVD,RUA',
                     label2:'SALVADOR AMARALINA',
                     codigo:'MOVSVD',
                     cidade:'Salvador',
                     lat:'-13.007927',
                     lng:'-38.463736',
                     cod:'"cidade"'},{ value:'VITORIA DA CONQUISTA AEROPORTO',
                     label:'VITORIA DA CONQUISTA AEROPORTO,VDC,Aeroporto',
                     label2:'VITORIA DA CONQUISTA AEROPORTO',
                     codigo:'VDC',
                     cidade:'Vitória da Conquista',
                     lat:'-14.866312',
                     lng:'-40.863065',
                     cod:'"AEROPORTO"'},{ value:'FORTALEZA AEROPORTO',
                     label:'FORTALEZA AEROPORTO,FOR,Aeroporto',
                     label2:'FORTALEZA AEROPORTO',
                     codigo:'FOR',
                     cidade:'Fortaleza',
                     lat:'-3.776914',
                     lng:'-38.533097',
                     cod:'"AEROPORTO"'},{ value:'FORTALEZA CENTRO',
                     label:'FORTALEZA CENTRO,FORC,RUA',
                     label2:'FORTALEZA CENTRO',
                     codigo:'FORC',
                     cidade:'Fortaleza',
                     lat:'-3.7242107',
                     lng:'-38.5111216',
                     cod:'"cidade"'},{ value:'JUAZEIRO DO NORTE',
                     label:'JUAZEIRO DO NORTE,MOVJNZ,RUA',
                     label2:'JUAZEIRO DO NORTE',
                     codigo:'MOVJNZ',
                     cidade:'Juazeiro do Norte',
                     lat:'-7.213230',
                     lng:'-39.284453',
                     cod:'"cidade"'},{ value:'BRASILIA AEROPORTO',
                     label:'BRASILIA AEROPORTO,BSB,Aeroporto',
                     label2:'BRASILIA AEROPORTO',
                     codigo:'BSB',
                     cidade:'Brasília',
                     lat:'-15.869737',
                     lng:'-47.917235',
                     cod:'"AEROPORTO"'},{ value:'TAGUATINGA',
                     label:'TAGUATINGA,MOVTAG,RUA',
                     label2:'TAGUATINGA',
                     codigo:'MOVTAG',
                     cidade:'Brasília',
                     lat:'-15.8593061',
                     lng:'-48.0397411',
                     cod:'"cidade"'},{ value:'LINHARES',
                     label:'LINHARES,MOVLNR,Hotel',
                     label2:'LINHARES',
                     codigo:'MOVLNR',
                     cidade:'Linhares',
                     lat:'-19.396357',
                     lng:'-40.068750',
                     cod:'"cidade"'},{ value:'VITORIA AEROPORTO',
                     label:'VITORIA AEROPORTO,VIX,Aeroporto',
                     label2:'VITORIA AEROPORTO',
                     codigo:'VIX',
                     cidade:'Vitória',
                     lat:'-20.2630811',
                     lng:'-40.2951293',
                     cod:'"AEROPORTO"'},{ value:'ANAPOLIS',
                     label:'ANAPOLIS,MOVANP,RUA',
                     label2:'ANAPOLIS',
                     codigo:'MOVANP',
                     cidade:'Anápolis',
                     lat:'-16.333863',
                     lng:'-48.951827',
                     cod:'"cidade"'},{ value:'APARECIDA DE GOIANIA',
                     label:'APARECIDA DE GOIANIA,MOVAG,RUA',
                     label2:'APARECIDA DE GOIANIA',
                     codigo:'MOVAG',
                     cidade:'Aparecida de Goiânia',
                     lat:'-16.7449013',
                     lng:'-49.2729495',
                     cod:'"cidade"'},{ value:'GOIANIA AEROPORTO',
                     label:'GOIANIA AEROPORTO,GYN,Aeroporto',
                     label2:'GOIANIA AEROPORTO',
                     codigo:'GYN',
                     cidade:'Goiânia',
                     lat:'-16.632286',
                     lng:'-49.232040',
                     cod:'"AEROPORTO"'},{ value:'GOIANIA HOTEL CASTROS',
                     label:'GOIANIA HOTEL CASTROS,MOVHCG,Hotel',
                     label2:'GOIANIA HOTEL CASTROS',
                     codigo:'MOVHCG',
                     cidade:'Goiânia',
                     lat:'-16.679409',
                     lng:'-49.267423',
                     cod:'"cidade"'},{ value:'RIO VERDE',
                     label:'RIO VERDE,MOVRVD,RUA',
                     label2:'RIO VERDE',
                     codigo:'MOVRVD',
                     cidade:'Rio Verde',
                     lat:'-17.785626',
                     lng:'-50.909199',
                     cod:'"cidade"'},{ value:'IMPERATRIZ AEROPORTO',
                     label:'IMPERATRIZ AEROPORTO,IMP,Aeroporto',
                     label2:'IMPERATRIZ AEROPORTO',
                     codigo:'IMP',
                     cidade:'Imperatriz',
                     lat:'-5.531646',
                     lng:'-47.455961',
                     cod:'"AEROPORTO"'},{ value:'SAO LUIS AEROPORTO',
                     label:'SAO LUIS AEROPORTO,SLZ,Aeroporto',
                     label2:'SAO LUIS AEROPORTO',
                     codigo:'SLZ',
                     cidade:'São Luís',
                     lat:'-2.587142',
                     lng:'-44.236920',
                     cod:'"AEROPORTO"'},{ value:'CUIABA AEROPORTO',
                     label:'CUIABA AEROPORTO,CGB,Aeroporto',
                     label2:'CUIABA AEROPORTO',
                     codigo:'CGB',
                     cidade:'Várzea Grande',
                     lat:'-15.653079',
                     lng:'-56.117269',
                     cod:'"AEROPORTO"'},{ value:'CAMPO GRANDE AEROPORTO',
                     label:'CAMPO GRANDE AEROPORTO,CGR,Aeroporto',
                     label2:'CAMPO GRANDE AEROPORTO',
                     codigo:'CGR',
                     cidade:'Campo Grande',
                     lat:'-20.468418',
                     lng:'-54.674198',
                     cod:'"AEROPORTO"'},{ value:'CAMPO GRANDE CENTRO',
                     label:'CAMPO GRANDE CENTRO,MOVCGC,RUA',
                     label2:'CAMPO GRANDE CENTRO',
                     codigo:'MOVCGC',
                     cidade:'Campo Grande',
                     lat:'-20.4748049',
                     lng:'-54.5917328',
                     cod:'"cidade"'},{ value:'DOURADOS CENTRO',
                     label:'DOURADOS CENTRO,MOVDOC,RUA',
                     label2:'DOURADOS CENTRO',
                     codigo:'MOVDOC',
                     cidade:'Dourados',
                     lat:'-22.225364',
                     lng:'-54.788898',
                     cod:'"cidade"'},{ value:'BELO HORIZONTE BARAO HOMEM DE MELO',
                     label:'BELO HORIZONTE BARAO HOMEM DE MELO,MOVBHC,RUA',
                     label2:'BELO HORIZONTE BARAO HOMEM DE MELO',
                     codigo:'MOVBHC',
                     cidade:'Belo Horizonte',
                     lat:'-19.960637',
                     lng:'-43.966581',
                     cod:'"cidade"'},{ value:'BELO HORIZONTE CENTRO',
                     label:'BELO HORIZONTE CENTRO,MOVBHZ,RUA',
                     label2:'BELO HORIZONTE CENTRO',
                     codigo:'MOVBHZ',
                     cidade:'Belo Horizonte',
                     lat:'-19.929897',
                     lng:'-43.9455035',
                     cod:'"cidade"'},{ value:'BELO HORIZONTE PAMPULHA AERO EXTERNO',
                     label:'BELO HORIZONTE PAMPULHA AERO EXTERNO,PLU,Aeroporto',
                     label2:'BELO HORIZONTE PAMPULHA AERO EXTERNO',
                     codigo:'PLU',
                     cidade:'Belo Horizonte',
                     lat:'-19.849847',
                     lng:'-43.954890',
                     cod:'"AEROPORTO"'},{ value:'BELO HORIZONTE PAMPULHA CARLOS LUZ',
                     label:'BELO HORIZONTE PAMPULHA CARLOS LUZ,MOVBHCL,RUA',
                     label2:'BELO HORIZONTE PAMPULHA CARLOS LUZ',
                     codigo:'MOVBHCL',
                     cidade:'Belo Horizonte',
                     lat:'-19.9038208',
                     lng:'-43.9677371',
                     cod:'"cidade"'},{ value:'BELO HORIZONTE RAMADA',
                     label:'BELO HORIZONTE RAMADA,MOVBHR,Hotel',
                     label2:'BELO HORIZONTE RAMADA',
                     codigo:'MOVBHR',
                     cidade:'Belo Horizonte',
                     lat:'-19.877334',
                     lng:'-43.929172',
                     cod:'"cidade"'},{ value:'BETIM',
                     label:'BETIM,MOVBET,RUA',
                     label2:'BETIM',
                     codigo:'MOVBET',
                     cidade:'Betim',
                     lat:'-19.963963',
                     lng:'-44.190289',
                     cod:'"cidade"'},{ value:'BELO HORIZONTE AEROPORTO CONFINS',
                     label:'BELO HORIZONTE AEROPORTO CONFINS,CNF,Aeroporto',
                     label2:'BELO HORIZONTE AEROPORTO CONFINS',
                     codigo:'CNF',
                     cidade:'Confins',
                     lat:'-19.633811',
                     lng:'-43.965450',
                     cod:'"AEROPORTO"'},{ value:'CONTAGEM',
                     label:'CONTAGEM,MOVCTG,RUA',
                     label2:'CONTAGEM',
                     codigo:'MOVCTG',
                     cidade:'Contagem',
                     lat:'-19.942876',
                     lng:'-44.038026',
                     cod:'"cidade"'},{ value:'JUIZ DE FORA CENTRO',
                     label:'JUIZ DE FORA CENTRO,JDFC,RUA',
                     label2:'JUIZ DE FORA CENTRO',
                     codigo:'JDFC',
                     cidade:'Juiz de Fora',
                     lat:'-21.751494',
                     lng:'-43.3544585',
                     cod:'"cidade"'},{ value:'RIO NOVO AEROPORTO (JUIZ DE FORA)',
                     label:'RIO NOVO AEROPORTO (JUIZ DE FORA),IZA,Aeroporto',
                     label2:'RIO NOVO AEROPORTO (JUIZ DE FORA)',
                     codigo:'IZA',
                     cidade:'Juiz de Fora',
                     lat:'-21.513257',
                     lng:'-43.171390',
                     cod:'"AEROPORTO"'},{ value:'MONTES CLAROS AEROPORTO',
                     label:'MONTES CLAROS AEROPORTO,MOC,Aeroporto',
                     label2:'MONTES CLAROS AEROPORTO',
                     codigo:'MOC',
                     cidade:'Montes Claros',
                     lat:'-16.728641',
                     lng:'-43.858214',
                     cod:'"AEROPORTO"'},{ value:'POUSO ALEGRE',
                     label:'POUSO ALEGRE,MOVPAL,RUA',
                     label2:'POUSO ALEGRE',
                     codigo:'MOVPAL',
                     cidade:'Pouso Alegre',
                     lat:'-22.233083',
                     lng:'-45.926791',
                     cod:'"cidade"'},{ value:'UBERABA AEROPORTO',
                     label:'UBERABA AEROPORTO,UBA,Aeroporto',
                     label2:'UBERABA AEROPORTO',
                     codigo:'UBA',
                     cidade:'Uberaba',
                     lat:'-19.765015',
                     lng:'-47.961712',
                     cod:'"AEROPORTO"'},{ value:'UBERLANDIA AEROPORTO (EXTERNO)',
                     label:'UBERLANDIA AEROPORTO (EXTERNO),UDI,Aeroporto',
                     label2:'UBERLANDIA AEROPORTO (EXTERNO)',
                     codigo:'UDI',
                     cidade:'Uberlândia',
                     lat:'-18.8878455',
                     lng:'-48.2332034',
                     cod:'"AEROPORTO"'},{ value:'JOAO PESSOA AEROPORTO',
                     label:'JOAO PESSOA AEROPORTO,JPA,Aeroporto',
                     label2:'JOAO PESSOA AEROPORTO',
                     codigo:'JPA',
                     cidade:'Bayeux',
                     lat:'-7.145347',
                     lng:'-34.948403',
                     cod:'"AEROPORTO"'},{ value:'CAMPINA GRANDE AEROPORTO',
                     label:'CAMPINA GRANDE AEROPORTO,CPV,Aeroporto',
                     label2:'CAMPINA GRANDE AEROPORTO',
                     codigo:'CPV',
                     cidade:'Campina Grande',
                     lat:'-7.269912',
                     lng:'-35.897165',
                     cod:'"AEROPORTO"'},{ value:'CASCAVEL',
                     label:'CASCAVEL,MOVCCV,RUA',
                     label2:'CASCAVEL',
                     codigo:'MOVCCV',
                     cidade:'Cascavel',
                     lat:'-24.9654887',
                     lng:'-53.4853172',
                     cod:'"cidade"'},{ value:'CURITIBA CENTRO',
                     label:'CURITIBA CENTRO,MOVCWB,RUA',
                     label2:'CURITIBA CENTRO',
                     codigo:'MOVCWB',
                     cidade:'Curitiba',
                     lat:'-25.445767',
                     lng:'-49.268456',
                     cod:'"cidade"'},{ value:'FOZ DO IGUACU AEROPORTO',
                     label:'FOZ DO IGUACU AEROPORTO,IGU,Aeroporto',
                     label2:'FOZ DO IGUACU AEROPORTO',
                     codigo:'IGU',
                     cidade:'Foz do Iguaçu',
                     lat:'-25.594899',
                     lng:'-54.486629',
                     cod:'"AEROPORTO"'},{ value:'LONDRINA AEROPORTO',
                     label:'LONDRINA AEROPORTO,LDB,Aeroporto',
                     label2:'LONDRINA AEROPORTO',
                     codigo:'LDB',
                     cidade:'Londrina',
                     lat:'-23.328603',
                     lng:'-51.137792',
                     cod:'"AEROPORTO"'},{ value:'MARINGA AEROPORTO',
                     label:'MARINGA AEROPORTO,MGF,Aeroporto',
                     label2:'MARINGA AEROPORTO',
                     codigo:'MGF',
                     cidade:'Maringá',
                     lat:'-23.476686',
                     lng:'-52.012274',
                     cod:'"AEROPORTO"'},{ value:'PONTA GROSSA',
                     label:'PONTA GROSSA,MOVPTG,RUA',
                     label2:'PONTA GROSSA',
                     codigo:'MOVPTG',
                     cidade:'Ponta Grossa',
                     lat:'-25.1272963',
                     lng:'-50.1549644',
                     cod:'"cidade"'},{ value:'CURITIBA AEROPORTO',
                     label:'CURITIBA AEROPORTO,CWB,Aeroporto',
                     label2:'CURITIBA AEROPORTO',
                     codigo:'CWB',
                     cidade:'São José dos Pinhais',
                     lat:'-25.532713',
                     lng:'-49.172481',
                     cod:'"AEROPORTO"'},{ value:'BELEM AEROPORTO',
                     label:'BELEM AEROPORTO,BEL,Aeroporto',
                     label2:'BELEM AEROPORTO',
                     codigo:'BEL',
                     cidade:'Belém',
                     lat:'-1.382061',
                     lng:'-48.477523',
                     cod:'"AEROPORTO"'},{ value:'BELEM CENTRO',
                     label:'BELEM CENTRO,MOVBLC,RUA',
                     label2:'BELEM CENTRO',
                     codigo:'MOVBLC',
                     cidade:'Belém',
                     lat:'-1.4227608',
                     lng:'-48.4852041',
                     cod:'"cidade"'},{ value:'MARABA AEROPORTO EXTERNO',
                     label:'MARABA AEROPORTO EXTERNO,MAB,Aeroporto',
                     label2:'MARABA AEROPORTO EXTERNO',
                     codigo:'MAB',
                     cidade:'Marabá',
                     lat:'-5.369702',
                     lng:'-49.138222',
                     cod:'"AEROPORTO"'},{ value:'PARAUAPEBAS AEROPORTO',
                     label:'PARAUAPEBAS AEROPORTO,CRJ,Aeroporto',
                     label2:'PARAUAPEBAS AEROPORTO',
                     codigo:'CRJ',
                     cidade:'Parauapebas',
                     lat:'-6.114447',
                     lng:'-50.001018',
                     cod:'"AEROPORTO"'},{ value:'PARAUAPEBAS CENTRO',
                     label:'PARAUAPEBAS CENTRO,MOVCKS,RUA',
                     label2:'PARAUAPEBAS CENTRO',
                     codigo:'MOVCKS',
                     cidade:'Parauapebas',
                     lat:'-6.073205',
                     lng:'-49.895900',
                     cod:'"cidade"'},{ value:'PETROLINA AEROPORTO',
                     label:'PETROLINA AEROPORTO,PNZ,Aeroporto',
                     label2:'PETROLINA AEROPORTO',
                     codigo:'PNZ',
                     cidade:'Petrolina',
                     lat:'-9.364608',
                     lng:'-40.565202',
                     cod:'"AEROPORTO"'},{ value:'RECIFE AEROPORTO',
                     label:'RECIFE AEROPORTO,REC,Aeroporto',
                     label2:'RECIFE AEROPORTO',
                     codigo:'REC',
                     cidade:'Recife',
                     lat:'-8.0989302',
                     lng:'-34.9260123',
                     cod:'"AEROPORTO"'},{ value:'RECIFE CAXANGA',
                     label:'RECIFE CAXANGA,RECC02,RUA',
                     label2:'RECIFE CAXANGA',
                     codigo:'RECC02',
                     cidade:'Recife',
                     lat:'-8.042746',
                     lng:'-34.934102',
                     cod:'"cidade"'},{ value:'RECIFE RAMADA',
                     label:'RECIFE RAMADA,MOVRFR,Hotel',
                     label2:'RECIFE RAMADA',
                     codigo:'MOVRFR',
                     cidade:'Recife',
                     lat:'-8.1270091',
                     lng:'-34.9059267',
                     cod:'"cidade"'},{ value:'TERESINA AEROPORTO',
                     label:'TERESINA AEROPORTO,THE,Aeroporto',
                     label2:'TERESINA AEROPORTO',
                     codigo:'THE',
                     cidade:'Teresina',
                     lat:'-5.062808',
                     lng:'-42.822483',
                     cod:'"AEROPORTO"'},{ value:'CAMPOS DOS GOYTACAZES',
                     label:'CAMPOS DOS GOYTACAZES,MOVCPG,RUA',
                     label2:'CAMPOS DOS GOYTACAZES',
                     codigo:'MOVCPG',
                     cidade:'Campos dos Goytacazes',
                     lat:'-21.767297',
                     lng:'-41.322190',
                     cod:'"cidade"'},{ value:'MACAE',
                     label:'MACAE,MOVMCE,Shopping',
                     label2:'MACAE',
                     codigo:'MOVMCE',
                     cidade:'Macaé',
                     lat:'-22.378286',
                     lng:'-41.776738',
                     cod:'"cidade"'},{ value:'NITEROI',
                     label:'NITEROI,MOVNTR,RUA',
                     label2:'NITEROI',
                     codigo:'MOVNTR',
                     cidade:'Niterói',
                     lat:'-22.895075',
                     lng:'-43.116482',
                     cod:'"cidade"'},{ value:'SAO GONCALO',
                     label:'SAO GONCALO,MOVSGL,RUA',
                     label2:'SAO GONCALO',
                     codigo:'MOVSGL',
                     cidade:'Niterói',
                     lat:'-22.873266',
                     lng:'-43.1325564',
                     cod:'"cidade"'},{ value:'RESENDE',
                     label:'RESENDE,MOVQRZ,RUA',
                     label2:'RESENDE',
                     codigo:'MOVQRZ',
                     cidade:'Resende',
                     lat:'-22.473290',
                     lng:'-44.458532',
                     cod:'"cidade"'},{ value:'RIO DE JANEIRO - BARRA DA TIJUCA',
                     label:'RIO DE JANEIRO - BARRA DA TIJUCA,MOVRJB,RUA',
                     label2:'RIO DE JANEIRO - BARRA DA TIJUCA',
                     codigo:'MOVRJB',
                     cidade:'Rio de Janeiro',
                     lat:'-22.999644',
                     lng:'-43.340145',
                     cod:'"cidade"'},{ value:'RIO DE JANEIRO - COPACABANA',
                     label:'RIO DE JANEIRO - COPACABANA,MOVCOPA,RUA',
                     label2:'RIO DE JANEIRO - COPACABANA',
                     codigo:'MOVCOPA',
                     cidade:'Rio de Janeiro',
                     lat:'-22.961779',
                     lng:'-43.174976',
                     cod:'"cidade"'},{ value:'RIO DE JANEIRO - GALEAO AEROPORTO',
                     label:'RIO DE JANEIRO - GALEAO AEROPORTO,GIG,Aeroporto',
                     label2:'RIO DE JANEIRO - GALEAO AEROPORTO',
                     codigo:'GIG',
                     cidade:'Rio de Janeiro',
                     lat:'-22.813098',
                     lng:'-43.249541',
                     cod:'"AEROPORTO"'},{ value:'RIO DE JANEIRO - JACAREPAGUA',
                     label:'RIO DE JANEIRO - JACAREPAGUA,MOVJPG,Hotel',
                     label2:'RIO DE JANEIRO - JACAREPAGUA',
                     codigo:'MOVJPG',
                     cidade:'Rio de Janeiro',
                     lat:'-22.965658',
                     lng:'-43.397113',
                     cod:'"cidade"'},{ value:'RIO DE JANEIRO - MADUREIRA',
                     label:'RIO DE JANEIRO - MADUREIRA,MOVMDR,RUA',
                     label2:'RIO DE JANEIRO - MADUREIRA',
                     codigo:'MOVMDR',
                     cidade:'Rio de Janeiro',
                     lat:'-22.8830908',
                     lng:'-43.3482946',
                     cod:'"cidade"'},{ value:'RIO DE JANEIRO - RODOVIARIA NOVO RIO',
                     label:'RIO DE JANEIRO - RODOVIARIA NOVO RIO,MOVRNR,RUA',
                     label2:'RIO DE JANEIRO - RODOVIARIA NOVO RIO',
                     codigo:'MOVRNR',
                     cidade:'Rio de Janeiro',
                     lat:'-22.905830',
                     lng:'-43.209461',
                     cod:'"cidade"'},{ value:'RIO DE JANEIRO - SANTOS DUMONT AEROPORTO',
                     label:'RIO DE JANEIRO - SANTOS DUMONT AEROPORTO,SDU,Aeroporto',
                     label2:'RIO DE JANEIRO - SANTOS DUMONT AEROPORTO',
                     codigo:'SDU',
                     cidade:'Rio de Janeiro',
                     lat:'-22.910884',
                     lng:'-43.167142',
                     cod:'"AEROPORTO"'},{ value:'RIO DE JANEIRO - SHOPPING BOULEVARD',
                     label:'RIO DE JANEIRO - SHOPPING BOULEVARD,MOVSHH,RUA',
                     label2:'RIO DE JANEIRO - SHOPPING BOULEVARD',
                     codigo:'MOVSHH',
                     cidade:'Rio de Janeiro',
                     lat:'-22.9193969',
                     lng:'-43.2526434',
                     cod:'"cidade"'},{ value:'MOSSORO',
                     label:'MOSSORO,MOVMSR,RUA',
                     label2:'MOSSORO',
                     codigo:'MOVMSR',
                     cidade:'Mossoró',
                     lat:'-5.197558',
                     lng:'-37.340584',
                     cod:'"cidade"'},{ value:'NATAL PONTA NEGRA',
                     label:'NATAL PONTA NEGRA,MOVNTC,RUA',
                     label2:'NATAL PONTA NEGRA',
                     codigo:'MOVNTC',
                     cidade:'Natal',
                     lat:'-5.8798226',
                     lng:'-35.1763472',
                     cod:'"cidade"'},{ value:'NATAL AEROPORTO',
                     label:'NATAL AEROPORTO,NAT,Aeroporto',
                     label2:'NATAL AEROPORTO',
                     codigo:'NAT',
                     cidade:'São Gonçalo do Amarante',
                     lat:'-5.7646857',
                     lng:'-35.3752897',
                     cod:'"AEROPORTO"'},{ value:'CANOAS',
                     label:'CANOAS,MOVCNS,RUA',
                     label2:'CANOAS',
                     codigo:'MOVCNS',
                     cidade:'Canoas',
                     lat:'-29.895758',
                     lng:'-51.176651',
                     cod:'"cidade"'},{ value:'CAXIAS DO SUL',
                     label:'CAXIAS DO SUL,MOVCXS,RUA',
                     label2:'CAXIAS DO SUL',
                     codigo:'MOVCXS',
                     cidade:'Caxias do Sul',
                     lat:'-29.194596',
                     lng:'-51.186568',
                     cod:'"cidade"'},{ value:'CAXIAS DO SUL AEROPORTO',
                     label:'CAXIAS DO SUL AEROPORTO,CXJ,Aeroporto',
                     label2:'CAXIAS DO SUL AEROPORTO',
                     codigo:'CXJ',
                     cidade:'Caxias do Sul',
                     lat:'-29.194558',
                     lng:'-51.186558',
                     cod:'"AEROPORTO"'},{ value:'NOVO HAMBURGO',
                     label:'NOVO HAMBURGO,MOVNHG,RUA',
                     label2:'NOVO HAMBURGO',
                     codigo:'MOVNHG',
                     cidade:'Novo Hamburgo',
                     lat:'-29.690865',
                     lng:'-51.132812',
                     cod:'"cidade"'},{ value:'PELOTAS',
                     label:'PELOTAS,MOVPLT,RUA',
                     label2:'PELOTAS',
                     codigo:'MOVPLT',
                     cidade:'Pelotas',
                     lat:'-31.7598025',
                     lng:'-52.3420761',
                     cod:'"cidade"'},{ value:'PORTO ALEGRE AEROPORTO',
                     label:'PORTO ALEGRE AEROPORTO,POA,Aeroporto',
                     label2:'PORTO ALEGRE AEROPORTO',
                     codigo:'POA',
                     cidade:'Porto Alegre',
                     lat:'-29.993227',
                     lng:'-51.175349',
                     cod:'"AEROPORTO"'},{ value:'PORTO ALEGRE CENTRO',
                     label:'PORTO ALEGRE CENTRO,MOVPOAC,RUA',
                     label2:'PORTO ALEGRE CENTRO',
                     codigo:'MOVPOAC',
                     cidade:'Porto Alegre',
                     lat:'-30.035042',
                     lng:'-51.177242',
                     cod:'"cidade"'},{ value:'PORTO ALEGRE SERTORIO',
                     label:'PORTO ALEGRE SERTORIO,PAS,RUA',
                     label2:'PORTO ALEGRE SERTORIO',
                     codigo:'PAS',
                     cidade:'Porto Alegre',
                     lat:'-29.989573',
                     lng:'-51.136678',
                     cod:'"cidade"'},{ value:'PORTO VELHO AEROPORTO',
                     label:'PORTO VELHO AEROPORTO,PVH,Aeroporto',
                     label2:'PORTO VELHO AEROPORTO',
                     codigo:'PVH',
                     cidade:'Porto Velho',
                     lat:'-8.714808',
                     lng:'-63.90115',
                     cod:'"AEROPORTO"'},{ value:'BOA VISTA AEROPORTO',
                     label:'BOA VISTA AEROPORTO,BVB,Aeroporto',
                     label2:'BOA VISTA AEROPORTO',
                     codigo:'BVB',
                     cidade:'Boa Vista',
                     lat:'2.840249',
                     lng:'-60.706912',
                     cod:'"AEROPORTO"'},{ value:'BLUMENAU',
                     label:'BLUMENAU,MOVBLM,RUA',
                     label2:'BLUMENAU',
                     codigo:'MOVBLM',
                     cidade:'Blumenau',
                     lat:'-26.916932',
                     lng:'-49.063059',
                     cod:'"cidade"'},{ value:'FLORIANOPOLIS AEROPORTO (EXTERNO)',
                     label:'FLORIANOPOLIS AEROPORTO (EXTERNO),FLN,Aeroporto',
                     label2:'FLORIANOPOLIS AEROPORTO (EXTERNO)',
                     codigo:'FLN',
                     cidade:'Florianópolis',
                     lat:'-27.663220',
                     lng:'-48.544041',
                     cod:'"AEROPORTO"'},{ value:'JOINVILLE AEROPORTO',
                     label:'JOINVILLE AEROPORTO,JOI,Aeroporto',
                     label2:'JOINVILLE AEROPORTO',
                     codigo:'JOI',
                     cidade:'Joinville',
                     lat:'-26.223305',
                     lng:'-48.801027',
                     cod:'"AEROPORTO"'},{ value:'JOINVILLE CENTRO',
                     label:'JOINVILLE CENTRO,MOVJOI,RUA',
                     label2:'JOINVILLE CENTRO',
                     codigo:'MOVJOI',
                     cidade:'Joinville',
                     lat:'-26.288347',
                     lng:'-48.849818',
                     cod:'"cidade"'},{ value:'NAVEGANTES AEROPORTO (EXTERNO)',
                     label:'NAVEGANTES AEROPORTO (EXTERNO),NVT,Aeroporto',
                     label2:'NAVEGANTES AEROPORTO (EXTERNO)',
                     codigo:'NVT',
                     cidade:'Navegantes',
                     lat:'-26.884332',
                     lng:'-48.653208',
                     cod:'"AEROPORTO"'},{ value:'AMERICANA',
                     label:'AMERICANA,MOVAME,RUA',
                     label2:'AMERICANA',
                     codigo:'MOVAME',
                     cidade:'Americana',
                     lat:'-22.751116',
                     lng:'-47.334245',
                     cod:'"cidade"'},{ value:'ARACATUBA',
                     label:'ARACATUBA,MOVARB,RUA',
                     label2:'ARACATUBA',
                     codigo:'MOVARB',
                     cidade:'Araçatuba',
                     lat:'-21.216082',
                     lng:'-50.436436',
                     cod:'"cidade"'},{ value:'BARUERI ALPHAVILLE',
                     label:'BARUERI ALPHAVILLE,MOVAPH,RUA',
                     label2:'BARUERI ALPHAVILLE',
                     codigo:'MOVAPH',
                     cidade:'Barueri',
                     lat:'-23.503380',
                     lng:'-46.847501',
                     cod:'"cidade"'},{ value:'BAURU',
                     label:'BAURU,MOVBAU,RUA',
                     label2:'BAURU',
                     codigo:'MOVBAU',
                     cidade:'Bauru',
                     lat:'-22.322265',
                     lng:'-49.063618',
                     cod:'"cidade"'},{ value:'CAMPINAS AEROPORTO',
                     label:'CAMPINAS AEROPORTO,VCP,Aeroporto',
                     label2:'CAMPINAS AEROPORTO',
                     codigo:'VCP',
                     cidade:'Campinas',
                     lat:'-23.009627',
                     lng:'-47.141130',
                     cod:'"AEROPORTO"'},{ value:'CAMPINAS CENTRO',
                     label:'CAMPINAS CENTRO,MOVCPQC,RUA',
                     label2:'CAMPINAS CENTRO',
                     codigo:'MOVCPQC',
                     cidade:'Campinas',
                     lat:'-22.906124',
                     lng:'-47.044427',
                     cod:'"cidade"'},{ value:'COTIA GRANJA VIANNA SHOPPING',
                     label:'COTIA GRANJA VIANNA SHOPPING,MOVGRV,Shopping',
                     label2:'COTIA GRANJA VIANNA SHOPPING',
                     codigo:'MOVGRV',
                     cidade:'Cotia',
                     lat:'-23.592541',
                     lng:'-46.833788',
                     cod:'"cidade"'},{ value:'FRANCA',
                     label:'FRANCA,MOVFRA,RUA',
                     label2:'FRANCA',
                     codigo:'MOVFRA',
                     cidade:'Franca',
                     lat:'-20.547762',
                     lng:'-47.398671',
                     cod:'"cidade"'},{ value:'GUARATINGUETA',
                     label:'GUARATINGUETA,GUJ,RUA',
                     label2:'GUARATINGUETA',
                     codigo:'GUJ',
                     cidade:'Guaratinguetá',
                     lat:'-22.814068',
                     lng:'-45.202059',
                     cod:'"cidade"'},{ value:'SAO PAULO - GUARULHOS AEROPORTO',
                     label:'SAO PAULO - GUARULHOS AEROPORTO,GRU,Aeroporto',
                     label2:'SAO PAULO - GUARULHOS AEROPORTO',
                     codigo:'GRU',
                     cidade:'Guarulhos',
                     lat:'-23.434548',
                     lng:'-46.4803147',
                     cod:'"AEROPORTO"'},{ value:'SAO PAULO - GUARULHOS ORIGINAL',
                     label:'SAO PAULO - GUARULHOS ORIGINAL,MOVGRUO,Concessionário',
                     label2:'SAO PAULO - GUARULHOS ORIGINAL',
                     codigo:'MOVGRUO',
                     cidade:'Guarulhos',
                     lat:'-23.463930',
                     lng:'-46.528110',
                     cod:'"cidade"'},{ value:'INDAIATUBA',
                     label:'INDAIATUBA,MOVIND,RUA',
                     label2:'INDAIATUBA',
                     codigo:'MOVIND',
                     cidade:'Indaiatuba',
                     lat:'-23.119282',
                     lng:'-47.220089',
                     cod:'"cidade"'},{ value:'ITAQUAQUECETUBA SHOPPING',
                     label:'ITAQUAQUECETUBA SHOPPING,MOVITA,Shopping',
                     label2:'ITAQUAQUECETUBA SHOPPING',
                     codigo:'MOVITA',
                     cidade:'Itaquaquecetuba',
                     lat:'-23.474852',
                     lng:'-46.326715',
                     cod:'"cidade"'},{ value:'JUNDIAI RODOVIARIA',
                     label:'JUNDIAI RODOVIARIA,MOVJND,RUA',
                     label2:'JUNDIAI RODOVIARIA',
                     codigo:'MOVJND',
                     cidade:'Jundiaí',
                     lat:'-23.206235',
                     lng:'-46.895287',
                     cod:'"cidade"'},{ value:'MARILIA',
                     label:'MARILIA,MOVMRL,RUA',
                     label2:'MARILIA',
                     codigo:'MOVMRL',
                     cidade:'Marília',
                     lat:'-22.1781',
                     lng:'-49.9288',
                     cod:'"cidade"'},{ value:'MOGI DAS CRUZES ORIGINAL',
                     label:'MOGI DAS CRUZES ORIGINAL,MOVMGC,Concessionário',
                     label2:'MOGI DAS CRUZES ORIGINAL',
                     codigo:'MOVMGC',
                     cidade:'Mogi das Cruzes',
                     lat:'-23.528509',
                     lng:'-46.205686',
                     cod:'"cidade"'},{ value:'OSASCO',
                     label:'OSASCO,MOVOSC,RUA',
                     label2:'OSASCO',
                     codigo:'MOVOSC',
                     cidade:'Osasco',
                     lat:'-23.538565',
                     lng:'-46.774936',
                     cod:'"cidade"'},{ value:'PIRACICABA',
                     label:'PIRACICABA,MOVPRC,RUA',
                     label2:'PIRACICABA',
                     codigo:'MOVPRC',
                     cidade:'Piracicaba',
                     lat:'-22.728367',
                     lng:'-47.618342',
                     cod:'"cidade"'},{ value:'PRESIDENTE PRUDENTE',
                     label:'PRESIDENTE PRUDENTE,MOVPRP,RUA',
                     label2:'PRESIDENTE PRUDENTE',
                     codigo:'MOVPRP',
                     cidade:'Presidente Prudente',
                     lat:'-22.1191615',
                     lng:'-51.4040676',
                     cod:'"cidade"'},{ value:'RIBEIRAO PRETO',
                     label:'RIBEIRAO PRETO,MOVRPT,RUA',
                     label2:'RIBEIRAO PRETO',
                     codigo:'MOVRPT',
                     cidade:'Ribeirão Preto',
                     lat:'-21.199476',
                     lng:'-47.768553',
                     cod:'"cidade"'},{ value:'RIBEIRAO PRETO AEROPORTO',
                     label:'RIBEIRAO PRETO AEROPORTO,RAO,Aeroporto',
                     label2:'RIBEIRAO PRETO AEROPORTO',
                     codigo:'RAO',
                     cidade:'Ribeirão Preto',
                     lat:'-21.143538',
                     lng:'-47.779208',
                     cod:'"AEROPORTO"'},{ value:'SANTO ANDRE',
                     label:'SANTO ANDRE,MOVSTA,RUA',
                     label2:'SANTO ANDRE',
                     codigo:'MOVSTA',
                     cidade:'Santo André',
                     lat:'-23.639962',
                     lng:'-46.541198',
                     cod:'"cidade"'},{ value:'SANTOS',
                     label:'SANTOS,MOVLSSZ,RUA',
                     label2:'SANTOS',
                     codigo:'MOVLSSZ',
                     cidade:'Santos',
                     lat:'-23.945162',
                     lng:'-46.325294',
                     cod:'"cidade"'},{ value:'SAO BERNARDO EXTRA ANCHIETA',
                     label:'SAO BERNARDO EXTRA ANCHIETA,MOVSBCK,RUA',
                     label2:'SAO BERNARDO EXTRA ANCHIETA',
                     codigo:'MOVSBCK',
                     cidade:'São Bernardo do Campo',
                     lat:'-23.684298',
                     lng:'-46.558626',
                     cod:'"cidade"'},{ value:'SAO BERNARDO FARIA LIMA',
                     label:'SAO BERNARDO FARIA LIMA,MOVSBF,RUA',
                     label2:'SAO BERNARDO FARIA LIMA',
                     codigo:'MOVSBF',
                     cidade:'São Bernardo do Campo',
                     lat:'-23.706593',
                     lng:'-46.552870',
                     cod:'"cidade"'},{ value:'SAO CAETANO DO SUL',
                     label:'SAO CAETANO DO SUL,MOVSCS,RUA',
                     label2:'SAO CAETANO DO SUL',
                     codigo:'MOVSCS',
                     cidade:'São Caetano do Sul',
                     lat:'-23.615075',
                     lng:'-46.5769112',
                     cod:'"cidade"'},{ value:'SAO CARLOS',
                     label:'SAO CARLOS,MOVSCL,RUA',
                     label2:'SAO CARLOS',
                     codigo:'MOVSCL',
                     cidade:'São Carlos',
                     lat:'-22.005505',
                     lng:'-47.891116',
                     cod:'"cidade"'},{ value:'SAO JOSE DO RIO PRETO',
                     label:'SAO JOSE DO RIO PRETO,MOVSJP,RUA',
                     label2:'SAO JOSE DO RIO PRETO',
                     codigo:'MOVSJP',
                     cidade:'São José do Rio Preto',
                     lat:'-20.842185',
                     lng:'-49.401946',
                     cod:'"cidade"'},{ value:'SAO JOSE DO RIO PRETO AEROPORTO',
                     label:'SAO JOSE DO RIO PRETO AEROPORTO,SJP,RUA',
                     label2:'SAO JOSE DO RIO PRETO AEROPORTO',
                     codigo:'SJP',
                     cidade:'São José do Rio Preto',
                     lat:'-20.8106244',
                     lng:'-49.4023908',
                     cod:'"cidade"'},{ value:'SAO JOSE DOS CAMPOS',
                     label:'SAO JOSE DOS CAMPOS,MOVSJC,RUA',
                     label2:'SAO JOSE DOS CAMPOS',
                     codigo:'MOVSJC',
                     cidade:'São José dos Campos',
                     lat:'-23.204109',
                     lng:'-45.905026',
                     cod:'"cidade"'},{ value:'ITAIM PAULISTA',
                     label:'ITAIM PAULISTA,SAOC25,RUA',
                     label2:'ITAIM PAULISTA',
                     codigo:'SAOC25',
                     cidade:'São Paulo',
                     lat:'-23.494711',
                     lng:'-46.405654',
                     cod:'"cidade"'},{ value:'SAO PAULO - BARRA FUNDA',
                     label:'SAO PAULO - BARRA FUNDA,MOVPBF,RUA',
                     label2:'SAO PAULO - BARRA FUNDA',
                     codigo:'MOVPBF',
                     cidade:'São Paulo',
                     lat:'-23.5214121',
                     lng:'-46.6625429',
                     cod:'"cidade"'},{ value:'SAO PAULO - BRAS',
                     label:'SAO PAULO - BRAS,MOVBRA,RUA',
                     label2:'SAO PAULO - BRAS',
                     codigo:'MOVBRA',
                     cidade:'São Paulo',
                     lat:'-23.5499519',
                     lng:'-46.6198855',
                     cod:'"cidade"'},{ value:'SAO PAULO - CENTRO EMPRESARIAL (CENESP)',
                     label:'SAO PAULO - CENTRO EMPRESARIAL (CENESP),MOVCNP,RUA',
                     label2:'SAO PAULO - CENTRO EMPRESARIAL (CENESP)',
                     codigo:'MOVCNP',
                     cidade:'São Paulo',
                     lat:'-23.648361',
                     lng:'-46.731646',
                     cod:'"cidade"'},{ value:'SAO PAULO - CONGONHAS AEROPORTO',
                     label:'SAO PAULO - CONGONHAS AEROPORTO,CGH,Aeroporto',
                     label2:'SAO PAULO - CONGONHAS AEROPORTO',
                     codigo:'CGH',
                     cidade:'São Paulo',
                     lat:'-23.627531',
                     lng:'-46.658859',
                     cod:'"AEROPORTO"'},{ value:'SAO PAULO - CONSOLACAO',
                     label:'SAO PAULO - CONSOLACAO,MOVCSL,RUA',
                     label2:'SAO PAULO - CONSOLACAO',
                     codigo:'MOVCSL',
                     cidade:'São Paulo',
                     lat:'-23.547800',
                     lng:'-46.644177',
                     cod:'"cidade"'},{ value:'SAO PAULO - FREGUESIA DO O',
                     label:'SAO PAULO - FREGUESIA DO O,MOVFRO,RUA',
                     label2:'SAO PAULO - FREGUESIA DO O',
                     codigo:'MOVFRO',
                     cidade:'São Paulo',
                     lat:'-23.504026',
                     lng:'-46.693840',
                     cod:'"cidade"'},{ value:'SAO PAULO - JUSCELINO KUBITSCHEK',
                     label:'SAO PAULO - JUSCELINO KUBITSCHEK,MOVJKK,RUA',
                     label2:'SAO PAULO - JUSCELINO KUBITSCHEK',
                     codigo:'MOVJKK',
                     cidade:'São Paulo',
                     lat:'-23.5876641',
                     lng:'-46.6722933',
                     cod:'"cidade"'},{ value:'SAO PAULO - MOEMA',
                     label:'SAO PAULO - MOEMA,MOVMOM,RUA',
                     label2:'SAO PAULO - MOEMA',
                     codigo:'MOVMOM',
                     cidade:'São Paulo',
                     lat:'-23.6056079',
                     lng:'-46.6573158',
                     cod:'"cidade"'},{ value:'SAO PAULO - PENHA',
                     label:'SAO PAULO - PENHA,MOVPEN,RUA',
                     label2:'SAO PAULO - PENHA',
                     codigo:'MOVPEN',
                     cidade:'São Paulo',
                     lat:'-23.513958',
                     lng:'-46.522404',
                     cod:'"cidade"'},{ value:'SAO PAULO - RODOVIARIA TIETE',
                     label:'SAO PAULO - RODOVIARIA TIETE,MOVRDT,RUA',
                     label2:'SAO PAULO - RODOVIARIA TIETE',
                     codigo:'MOVRDT',
                     cidade:'São Paulo',
                     lat:'-23.515986',
                     lng:'-46.624665',
                     cod:'"cidade"'},{ value:'SAO PAULO - SAUDE',
                     label:'SAO PAULO - SAUDE,MOVSAU,RUA',
                     label2:'SAO PAULO - SAUDE',
                     codigo:'MOVSAU',
                     cidade:'São Paulo',
                     lat:'-23.624569',
                     lng:'-46.628942',
                     cod:'"cidade"'},{ value:'SAO PAULO - SHOPPING ARICANDUVA',
                     label:'SAO PAULO - SHOPPING ARICANDUVA,SHA,Shopping',
                     label2:'SAO PAULO - SHOPPING ARICANDUVA',
                     codigo:'SHA',
                     cidade:'São Paulo',
                     lat:'-23.5628155',
                     lng:'-46.504075',
                     cod:'"cidade"'},{ value:'SAO PAULO - SHOPPING BUTANTA',
                     label:'SAO PAULO - SHOPPING BUTANTA,MOVBUT,Shopping',
                     label2:'SAO PAULO - SHOPPING BUTANTA',
                     codigo:'MOVBUT',
                     cidade:'São Paulo',
                     lat:'-23.5846072',
                     lng:'-46.7252478',
                     cod:'"cidade"'},{ value:'SAO PAULO - SHOPPING CENTER NORTE',
                     label:'SAO PAULO - SHOPPING CENTER NORTE,MOVSCN,Shopping',
                     label2:'SAO PAULO - SHOPPING CENTER NORTE',
                     codigo:'MOVSCN',
                     cidade:'São Paulo',
                     lat:'-23.5153006',
                     lng:'-46.6169785',
                     cod:'"cidade"'},{ value:'SAO PAULO - SHOPPING SANTA CRUZ',
                     label:'SAO PAULO - SHOPPING SANTA CRUZ,MOVSSC,Shopping',
                     label2:'SAO PAULO - SHOPPING SANTA CRUZ',
                     codigo:'MOVSSC',
                     cidade:'São Paulo',
                     lat:'-23.599076',
                     lng:'-46.637189',
                     cod:'"cidade"'},{ value:'SAO PAULO - TATUAPE',
                     label:'SAO PAULO - TATUAPE,MOVTTP,RUA',
                     label2:'SAO PAULO - TATUAPE',
                     codigo:'MOVTTP',
                     cidade:'São Paulo',
                     lat:'-23.549052',
                     lng:'-46.565481',
                     cod:'"cidade"'},{ value:'SAO PAULO - TATUAPE II',
                     label:'SAO PAULO - TATUAPE II,MOVTAT,RUA',
                     label2:'SAO PAULO - TATUAPE II',
                     codigo:'MOVTAT',
                     cidade:'São Paulo',
                     lat:'-23.5356303',
                     lng:'-46.5759271',
                     cod:'"cidade"'},{ value:'SAO PAULO - VILA PRUDENTE',
                     label:'SAO PAULO - VILA PRUDENTE,MOVVLP,RUA',
                     label2:'SAO PAULO - VILA PRUDENTE',
                     codigo:'MOVVLP',
                     cidade:'São Paulo',
                     lat:'-23.581739',
                     lng:'-46.558144',
                     cod:'"cidade"'},{ value:'SOROCABA',
                     label:'SOROCABA,MOVSRB,RUA',
                     label2:'SOROCABA',
                     codigo:'MOVSRB',
                     cidade:'Sorocaba',
                     lat:'-23.527869',
                     lng:'-47.465462',
                     cod:'"cidade"'},{ value:'SUZANO',
                     label:'SUZANO,MOVSUZ,Concessionário',
                     label2:'SUZANO',
                     codigo:'MOVSUZ',
                     cidade:'Suzano',
                     lat:'-23.548889',
                     lng:'-46.307030',
                     cod:'"cidade"'},{ value:'TABOAO DA SERRA EXTRA',
                     label:'TABOAO DA SERRA EXTRA,MOVTBS,RUA',
                     label2:'TABOAO DA SERRA EXTRA',
                     codigo:'MOVTBS',
                     cidade:'Taboão da Serra',
                     lat:'-23.608186',
                     lng:'-46.752951',
                     cod:'"cidade"'},{ value:'TAUBATE',
                     label:'TAUBATE,MOVTBT,RUA',
                     label2:'TAUBATE',
                     codigo:'MOVTBT',
                     cidade:'Taubaté',
                     lat:'-23.034434',
                     lng:'-45.579528',
                     cod:'"cidade"'},{ value:'ARACAJU AEROPORTO',
                     label:'ARACAJU AEROPORTO,AJU,Aeroporto',
                     label2:'ARACAJU AEROPORTO',
                     codigo:'AJU',
                     cidade:'Aracaju',
                     lat:'-10.984643',
                     lng:'-37.070678',
                     cod:'"AEROPORTO"'},{ value:'ARACAJU CENTRO',
                     label:'ARACAJU CENTRO,AAR,RUA',
                     label2:'ARACAJU CENTRO',
                     codigo:'AAR',
                     cidade:'Aracaju',
                     lat:'-10.9499075',
                     lng:'-37.0468085',
                     cod:'"cidade"'},{ value:'PALMAS AEROPORTO',
                     label:'PALMAS AEROPORTO,PMW,Aeroporto',
                     label2:'PALMAS AEROPORTO',
                     codigo:'PMW',
                     cidade:'Palmas',
                     lat:'-10.292689',
                     lng:'-48.356560',
                     cod:'"AEROPORTO"'},{ value:'PALMAS CENTRO',
                     label:'PALMAS CENTRO,MOVPLM,RUA',
                     label2:'PALMAS CENTRO',
                     codigo:'MOVPLM',
                     cidade:'Palmas',
                     lat:'-10.189489',
                     lng:'-48.339770',
                     cod:'"cidade"'},        ];

        $.each(availableTags, function(i, o){
            o.label_clean = slug(o.label);
        })
        test = availableTags;

        $(".local").autocomplete({
            appendTo: "#searchLojas",
            //source: availableTags,
            source: function( request, response ) {
                var term = slug(removerAcentos(request.term.toLocaleLowerCase()));

                lastResultSearch = $.grep(availableTags, function(item){
                    return slug(removerAcentos(item.label_clean)).indexOf(term) > -1 || term == slug(removerAcentos(item.cidade));
                });

                lastResultSearch = lastResultSearch.sort(function(a, b) {
                    return b.codigo == term ? 1 : 0;
                });

                lastResultSearch = lastResultSearch.sort(sort_by('cod', false, function(a) {
                    return a.toLowerCase().replace('"', '');
                }));

                response(lastResultSearch);
              },
            minLength: 3,
            change: function (event, ui) {
                // $("input[name=loja]").val(ui.item.codigo);
                if (!ui.item) {
                    return;
                }

                $("input[name=loja_iata]").val(ui.item.codigo);
                $("input[name=cordx]").val(ui.item.lat);
                $("input[name=cordy]").val(ui.item.lng);
            },
            search: function (event, ui) {
                // $(".local").val(removerAcentos($(".local").val()));
            }
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            return $("<li class=" + item.cod + "></li>")
                .data("item.autocomplete", item)
                .append("<a class='none'>" + item.label2 +  "</a>")
                .appendTo(ul);
        };
    };

        $(document).ready(function () {
            
            $('.search-engine .panel-title').click(function(event) {
                $(this).toggleClass('collapsed');
                $('.search-engine #formSearchEngine, .search-engine .text-title, .search-engine > .row').toggleClass('hidden-xs');
            });
            

                                                $("#hora_retirada").val('16:00');
                
                                    $("#hora_devolucao").val('16:00');
                            
            $('.mapsite').click(function (event) {

                event.preventDefault();

                $('.links-mapa').slideToggle();

                if ($(this).parents('.row').hasClass('border-bottom')) {
                    $(this).parents('.row').removeClass('border-bottom');
                } else {
                    $(this).parents('.row').addClass('border-bottom');
                }
            });

            //$("#formSearchEngine .btn").click(function () {
            //    debugger;
            //    if (($('.search-engine .promo-code.mobile').val() == '') || ($('.search-engine .promo-code.mobile').val() == null) || ($('.search-engine promo-code.mobile').val() == undefined)) {
            //        $('#cupom').val($('.search-engine .promo-code.desktop').val());
            //    }
            //    else {
            //        $('#cupom').val($('.search-engine .promo-code.mobile').val());
            //    }

            //    return true;
            //});

            //$('.search-engine button.btn').click(function () {
            //    if (($('.search-engine .promo-code.mobile').val() == '') || ($('.search-engine .promo-code.mobile').val() == null) || ($('.search-engine promo-code.mobile').val() == undefined)) {
            //        $('#cupom').val($('.search-engine .promo-code.desktop').val());
            //    }
            //    else {
            //        $('#cupom').val($('.search-engine .promo-code.mobile').val());
            //    }
            //});

            horaRetiradaDevolucao();
            var updateDataDev = false;

            $('input[name=data_retirada]').change(function () {
                if (updateDataDev) {
                    var from = $("#data_retirada").val().split("/");
                    var dataEscolhida = new Date(from[2], from[1] - 1, from[0]);

                    var dataEscolhidaDois = new Date(dataEscolhida.setTime(dataEscolhida.getTime() + 86400000));

                    var day = dataEscolhidaDois.getDate();

                    var month = dataEscolhidaDois.getMonth() + 1;

                    if (day < 10) {
                        day = "0" + day;
                    }
                    if (month < 10) {
                        month = "0" + month;
                    }

                    var dataDeamanhaHidden = month + '/' + day + '/' + dataEscolhidaDois.getFullYear();
                    var dataDeamanha = day + '/' + month + '/' + dataEscolhidaDois.getFullYear();

                    $('input[name=data_devolucao]').val(dataDeamanha);
                    $('input[name=devolucao2]').val(dataDeamanhaHidden);
                }
                updateDataDev = true;
            });

            removeInlinecssFontFamily();

            dateTimePicker();

            $('#check_loja').change(function () {
                if ($(this).is(':checked')) {
                    $('#hidden_loja').val('SIM');
                } else {
                    $('#hidden_loja').val('nao');
                }
            });


            var map = { "?": "a", "?": "A", "?": "a", "?": "A", "?": "a", "?": "A", "?": "a", "?": "A", "?": "e", "?": "E", "?": "e", "?": "E", "?": "e", "?": "E", "?": "i", "?": "I", "?": "i", "?": "I", "?": "i", "?": "I", "?": "o", "?": "O", "?": "o", "?": "O", "?": "o", "?": "O", "?": "o", "?": "O", "?": "u", "?": "U", "?": "u", "?": "U", "?": "u", "?": "U", "?": "u", "?": "U", "?": "c", "?": "C" };

            function removerAcentos(s) { return s.replace(/[\W\[\] ]/g, function (a) { return map[a] || a }) };



            if ($(".local").length) {

                funcaoLojas();
            }

            //validacao
            $('.content-btn-search button.btn').click(function () {

                if ($('.selInt').hasClass('active')) {

                    var lat = '';
                    var lng = '';
                    var address = $('input[name=loja]').val();
                    geocoder.geocode({ 'address': address }, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            lat = results[0].geometry.location.lat();
                            lng = results[0].geometry.location.lng();

                            //  alert('Latitude: ' + lat + ' Logitude: ' + lng);

                            // init_map(lat, lng)
                            $("input[name=cordx]").val(lat);
                            $("input[name=cordy]").val(lng);

                        }
                    });


                }



                var dNow = new Date();

                var day = dNow.getDate();
                var hour = dNow.getHours();
                var minute = dNow.getMinutes();
                var month = dNow.getMonth() + 1;

                if (day < 10) {
                    day = "0" + day;
                }
                if (month < 10) {
                    month = "0" + month;
                }

                var dataDeHoje = day + '/' + month + '/' + dNow.getFullYear();
                var horaDeHoje = hour + ":" + minute;

                /*
               *
               * FORM BUSCAR
               *
               *
              */

                // VALIDAR FORM

                // var PickUpLocation = $("input[name=loja]").val().toLowerCase();
                var PickUpDateTime = $("input[name=data_retirada]").val();
                var ReturnDateTime = $("input[name=data_devolucao]").val();


                var map = { "?": "a", "?": "A", "?": "a", "?": "A", "?": "a", "?": "A", "?": "a", "?": "A", "?": "e", "?": "E", "?": "e", "?": "E", "?": "e", "?": "E", "?": "i", "?": "I", "?": "i", "?": "I", "?": "i", "?": "I", "?": "o", "?": "O", "?": "o", "?": "O", "?": "o", "?": "O", "?": "o", "?": "O", "?": "u", "?": "U", "?": "u", "?": "U", "?": "u", "?": "U", "?": "u", "?": "U", "?": "c", "?": "C" };

                function removerAcentos(s) { return s.replace(/[\W\[\] ]/g, function (a) { return map[a] || a }) };

                var PickUpLocationName = $("input[name=loja_iata]").val();
                // PickUpLocationName = PickUpLocationName.replace('(', '');
                // PickUpLocationName = PickUpLocationName.replace(')', '').toLowerCase();

                PickUpLocationName = removerAcentos(PickUpLocationName)


                $('.form-control').removeClass('error');

                if (($('.search-engine .promo-code.mobile').val() == '') || ($('.search-engine .promo-code.mobile').val() == null) || ($('.search-engine promo-code.mobile').val() == undefined)) {
                    $('#cupom').val($('.search-engine .promo-code.desktop').val());
                }
                else {
                    $('#cupom').val($('.search-engine .promo-code.mobile').val());
                }

                var ok = true;

                if ((PickUpLocationName == "") || (PickUpLocationName == null)) {
                    $('input[name=loja]').addClass("error");
                    ok = false
                }


                if ((PickUpDateTime == "") || (PickUpDateTime == null)) {
                    $("input[name=data_retirada]").addClass("error");
                    ok = false
                }


                if (PickUpDateTime == ReturnDateTime) {

                    $("input[name=data_retirada]").addClass("error");
                    $("input[name=data_devolucao]").addClass("error");

                    ok = false
                }


                if ($('#hora_retirada').hasClass('error')) {

                    ok = false

                }



                if (ReturnDateTime == "") {
                    $("input[name=data_devolucao]").addClass("error");
                    ok = false
                }

                var msgErro = $('.search-engine').find('.selErrorDate');

                if ((PickUpDateTime != '') && (PickUpDateTime != null) && (ReturnDateTime != '') && (ReturnDateTime != null)) {

                    //Datas
                    dtUm = PickUpDateTime;
                    //Formato dd/mm/aaaa
                    dtDois = ReturnDateTime;
                    //Formato dd/mm/aaaa
                    //Convertendo em novas datas
                    var dtUmComp = new Date(dtUm.replace(/(\d{2})\/(\d{2})\/(\d{4})/, '$2/$1/$3'));
                    var dtDoisComp = new Date(dtDois.replace(/(\d{2})\/(\d{2})\/(\d{4})/, '$2/$1/$3'));
                    //Exemplo de comparaÃƒÂ§ÃƒÂ£o de datas
                    if (dtUmComp > dtDoisComp) {

                        $("input[name=data_retirada]").addClass('error');
                        $("input[name=data_devolucao]").addClass('error');
                        msgErro.html("Data de devoluÃƒÂ§ÃƒÂ£o nÃƒÂ£o pode ser inferior a data de retirada");
                        msgErro.fadeIn('fast');

                        ok = false;

                    }

                    else {
                        if ((PickUpDateTime == dataDeHoje) && (ReturnDateTime != "") && (ReturnDateTime != null) && (ReturnDateTime != PickUpDateTime)) {

                            if ($('#hora_retirada').val().substring(0, 2) < hour) {

                                $('.selErrorTime').fadeIn('fast');
                                $('.selErrorTime').html('Hora inferior a data atual');
                                $('#hora_retirada').addClass('error');

                                ok = false;
                            }

                            else if ($('#hora_retirada').val().substring(0, 2) == hour) {

                                if ($('#hora_retirada').val().substring(3, 5) < minute) {

                                    $('.selErrorTime').fadeIn('fast');
                                    $('.selErrorTime').html('Hora inferior a data atual');
                                    $('#hora_retirada').addClass('error');

                                    ok = false;

                                }
                            }
                        }


                    }

                }




                //changeDateTime($('#aluguelCarros').find('.selDate1'))



                return ok;



            });



        });

        </script>
    <!-- End Google Tag Manager -->
</body>

</html>
