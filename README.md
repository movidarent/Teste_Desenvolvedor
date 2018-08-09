[![](https://vetor.movida.com.br/movida/imagens/movida_lg.png)](https://www.movida.com.br "Movida Aluguel de carros") 
## Teste para desenvolvedor, inicio do processo seletivo do T.I. Movida.

> Esse teste é público. Candidatos para vagas na Movida devem realizar este teste como parte do processo seletivo.
> Para realizar esse desafio você deve fazer um fork e na finalização submeter um pullrequest com a solução. Após submeter você deve enviar um email informando a finalização para o contato que te passou o link do desafio. **a não realização do procedimento correto será desclassificado**

# Preparado?
> Para esse teste é necessario ter conhecimentos em PHP, JS, CSS, todo e qualquer framework utilizado será levado em consideração, sugestões?
>* Jquery, AngularJS
>* PHP: Fligth, Lumen, CodeIgniter
>* Bootstrap

## 1° Crie um endpoit que retorne o seguinte json 

```javascript
{
    "success": true,
    "Cotacao": {
        "Informacoes": {
            "DataRetirada": "2018-09-02T16:00:00",
            "DataDevolucao": "2018-09-04T16:00:00",
            "LojaRetirada": {
                "Aeroporto": "true",
                "Sigla": "CRJ",
                "Name": "PARAUAPEBAS AEROPORTO",
                "Endereco": {
                    "Logradouro": "Raimundo Mascarenhas, Km 15, 0 - Parauapebas - Pará",
                    "Cidade": "Parauapebas",
                    "CEP": "68516-000",
                    "Estado": {
                        "Descricao": "Pará",
                        "Sigla": "PA"
                    },
                    "GeoLocalizacao": {
                        "Longitude": "-50.001018",
                        "Latitude": "-6.114447"
                    }
                },
                "Telefone": {
                    "DDD": "94",
                    "Numero": "33460068"
                },
                "InformacoesAdicionais": {
                    "HorarioFuncionamento": {
                        "Inicio": "11:00:00",
                        "Fim": "17:00:00",
                        "Dias": {
                            "Segunda": "true",
                            "Terca": "true",
                            "Quarta": "true",
                            "Quinta": "true",
                            "Sexta": "true",
                            "Sabado": "true",
                            "Dominfo": "true"
                        }
                    }
                }
            },
            "LojaDevolucao": {
                "Aeroporto": "true",
                "Sigla": "CRJ",
                "Name": "PARAUAPEBAS AEROPORTO",
                "Endereco": {
                    "Logradouro": "Raimundo Mascarenhas, Km 15, 0 - Parauapebas - Pará",
                    "Cidade": "Parauapebas",
                    "CEP": "68516-000",
                    "Estado": {
                        "Descricao": "Pará",
                        "Sigla": "PA"
                    },
                    "GeoLocalizacao": {
                        "Longitude": "-50.001018",
                        "Latitude": "-6.114447"
                    }
                },
                "Telefone": {
                    "DDD": "94",
                    "Numero": "33460068"
                },
                "InformacoesAdicionais": {
                    "HorarioFuncionamento": {
                        "Inicio": "11:00:00",
                        "Fim": "17:00:00",
                        "Dias": {
                            "Segunda": "true",
                            "Terca": "true",
                            "Quarta": "true",
                            "Quinta": "true",
                            "Sexta": "true",
                            "Sabado": "true",
                            "Dominfo": "true"
                        }
                    }
                }
            }
        },
        "VeiculosDisponiveis": [
            {
                "Veiculo": {
                    "Status": "Available",
                    "DescricaoGrupo": "Econômico/1.0/4 Portas  - AC e DH/Vid. e Trav. Elét./CD ou USB/5 PAX - 2 Malas/Freios ABS/ Air Bag",
                    "Descricao": "GRUPO AX - MOVIDA ON",
                    "Arcondicionado": "true",
                    "Sigla": "ECMM",
                    "QtdLugares": "5",
                    "QtdMala": "2",
                    "Cambio": "Manual",
                    "QtdPortas": "4",
                    "Nome": "Mobi Like\r\nou similar",
                    "Imagem": "https://prdmovida.blob.core.windows.net/public/imagens/cars/t3_grupo_AX.jpg",
                    "Totais": {
                        "Tarifa": "Teste001",
                        "TotalGeral": "181.78",
                        "TotalProtecoes": 56,
                        "TotalAdicionais": 0,
                        "TotalComTaxa": "181.78",
                        "Moeda": "BRL",
                        "ValorCaucao": "700.00",
                        "TaxaAdmFilial": "12",
                        "QuantidadeParcelamento": 10,
                        "ValorCaucaoSemProtecao": {
                            "Valor": "12000.00",
                            "Descricao": "Em caso de não contratação da proteção do veiculo a pré-autorização será de R$ 12000.00."
                        },
                        "PrePagamento": {
                            "TotalComDesconto": "172.69",
                            "PercDesconto": 5
                        },
                        "Resumo": [
                            {
                                "Code": "1",
                                "Sigla": "DI",
                                "Descricao": "Diária",
                                "Total": "125.78",
                                "Moeda": "BRL",
                                "Calculo": {
                                    "ValorUnitario": "62.89",
                                    "Recorencia": "Diaria",
                                    "Qtd": 2,
                                    "PercentualDesconto": 0,
                                    "DescontoTotal": 0
                                }
                            },
                            {
                                "Code": "83",
                                "Sigla": "TAD",
                                "Descricao": "TAXA ADMINISTRATIVA",
                                "Total": "0.00",
                                "Moeda": "BRL",
                                "TaxInclusive": false,
                                "PercTaxa": 12,
                                "Incluso": false,
                                "Calculo": {
                                    "ValorUnitario": "0.00",
                                    "Recorencia": "RentalPeriod"
                                }
                            }
                        ]
                    },
                    "Produtos": [
                        {
                            "Code": "6",
                            "Sigla": "GPS",
                            "Descricao": "GPS",
                            "Detalhes": "Está à sua disposição o serviço de navegação por GPS, proporcionando comodidade e economia em suas viagens de negócios ou a lazer. Basta informar o endereço desejado que o navegador GPS irá traçar o melhor caminho para você chegar ao seu destino.",
                            "PictureURL": "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t1_GPS.jpg",
                            "Valores": {
                                "Total": "20.00",
                                "Moeda": "BRL",
                                "Desconto": 0,
                                "Incluso": "false",
                                "Calculo": {
                                    "ValorUnitario": "20.00",
                                    "Recorencia": "Diaria",
                                    "Qtd": "1",
                                    "TaxTotal": "20.00"
                                }
                            }
                        },
                        {
                            "Code": "9",
                            "Sigla": "CSS",
                            "Descricao": "Cadeira de Bebê",
                            "Detalhes": "Caso você precise transportar uma criança de até sete anos e meio de idade, é obrigatório o uso de dispositivo de retenção. Pensando nisso, a Movida possui cadeirinhas de bebê em suas locações.",
                            "PictureURL": "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t1_CSS.jpg",
                            "Valores": {
                                "Total": "20.00",
                                "Moeda": "BRL",
                                "Desconto": 0,
                                "Incluso": "false",
                                "Calculo": {
                                    "ValorUnitario": "20.00",
                                    "Recorencia": "Diaria",
                                    "Qtd": "1",
                                    "TaxTotal": "20.00"
                                }
                            }
                        },
                        {
                            "Code": "10",
                            "Sigla": "CBS",
                            "Descricao": "Booster - Assento p/  crianças",
                            "Detalhes": "Caso você precise transportar uma criança de quatro a dez anos de idade, é obrigatório o uso de dispositivo de retenção. Pensando nisso, a Movida disponibiliza o Booster para sua comodidade e tranquilidade.",
                            "PictureURL": "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t1_CBS.jpg",
                            "Valores": {
                                "Total": "20.00",
                                "Moeda": "BRL",
                                "Desconto": 0,
                                "Incluso": "false",
                                "Calculo": {
                                    "ValorUnitario": "20.00",
                                    "Recorencia": "Diaria",
                                    "Qtd": "1",
                                    "TaxTotal": "20.00"
                                }
                            }
                        },
                        {
                            "Code": "61",
                            "Sigla": "WIFI",
                            "Descricao": "Movida WiFi",
                            "Detalhes": "Com o Movida Wi-fi, um produto exclusivo da Movida, você contará com a comodidade do wi-fi 4G para até cinco aparelhos, além de acesso  ao Waze (GPS) e aplicativo da Movida. Conforto e mobilidade para você.",
                            "PictureURL": "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t1_WIFI.jpg",
                            "Valores": {
                                "Total": "20.00",
                                "Moeda": "BRL",
                                "Desconto": 0,
                                "Incluso": "false",
                                "Calculo": {
                                    "ValorUnitario": "20.00",
                                    "Recorencia": "Diaria",
                                    "Qtd": "1",
                                    "TaxTotal": "20.00"
                                }
                            }
                        },
                        {
                            "Code": "63",
                            "Sigla": "CSI",
                            "Descricao": "Bebê Conforto",
                            "Detalhes": "A Movida oferece o serviço de bebê-conforto, necessário para bebês recém-nascidos com até 9 kg em carros. Lembrando que crianças com menos de um ano de idade devem estar em um bebê conforto voltado para trás! Para ter a garantia deste serviço, é necessário que a solicitação seja feita no ato da reserva.",
                            "PictureURL": "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t1_CSI.jpg",
                            "Valores": {
                                "Total": "20.00",
                                "Moeda": "BRL",
                                "Desconto": 0,
                                "Incluso": "false",
                                "Calculo": {
                                    "ValorUnitario": "20.00",
                                    "Recorencia": "Diaria",
                                    "Qtd": "1",
                                    "TaxTotal": "20.00"
                                }
                            }
                        }
                    ],
                    "Protecoes": [
                        {
                            "Sigla": "SUP",
                            "PictureURL": "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/protecao-SUP.png",
                            "Detalhes": "Super - Veículo + terceiros + ocupantes",
                            "Valores": {
                                "Total": "126.00",
                                "Incluso": false,
                                "Moeda": "BRL",
                                "Desconto": 0,
                                "Calculo": {
                                    "ValorUnitario": "63.00",
                                    "Recorencia": "Diaria",
                                    "Qtd": 2
                                }
                            }
                        },
                        {
                            "Sigla": "COM",
                            "PictureURL": "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/protecao-COM.png",
                            "Detalhes":  "Completa - Veículo + terceiros",
                            "Valores": {
                                "Total": "86.00",
                                "Incluso": false,
                                "Moeda": "BRL",
                                "Desconto": 0,
                                "Calculo": {
                                    "ValorUnitario": "43.00",
                                    "Recorencia": "Diaria",
                                    "Qtd": 2
                                }
                            }
                        },
                        {
                            "Sigla": "BAS",
                            "PictureURL": "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/protecao-BAS.png",
                            "Detalhes": "Básica - Veículo",
                            "Valores": {
                                "Total": "56.00",
                                "Incluso": true,
                                "Moeda": "BRL",
                                "Desconto": 0,
                                "Calculo": {
                                    "ValorUnitario": "28.00",
                                    "Recorencia": "Diaria",
                                    "Qtd": 2
                                }
                            }
                        }
                    ]
                }
            }
        ]
    }
}
```

## 2° Crie um front(view) que busque o json via ajax e mostre os dados na tela, use o movida.com.br **lembre que neste json tem apenas um veiculo porem posso querer testar com mais de um**

>### Sugira correções e melhorias no json, sintase livre pra usare fazer o que vier a fazer


# Terminei e agora?
>Vamos analisar e testar, vamos dar um feedback, positivo ou negativo.
