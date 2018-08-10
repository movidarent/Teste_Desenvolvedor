	//veiculos-controller.js -------------------------------------------------------------------------------

	angular.module("movida").controller('VeiculosController', function($scope, $http) {


		$scope.veiculos = [];

        $scope.cotacao = [];

        $scope.data_retirada = [];

        $scope.data_devolucao = [];

		$http.get("/veiculos")

		.success(function(veiculos) {

			$scope.veiculos = veiculos.Cotacao.VeiculosDisponiveis;
            $scope.cotacao = veiculos.Cotacao;
            
            $scope.data_retirada = formata_data(veiculos.Cotacao.Informacoes.DataRetirada);

            $scope.data_devolucao = formata_data(veiculos.Cotacao.Informacoes.DataDevolucao);

			console.log(veiculos.Cotacao.VeiculosDisponiveis);


		})

		.error(function(error) {

			console.log(veiculos);

		});









	});    

    function formata_data(data_retirada_tratar){
            data_retirada_retorno_array = data_retirada_tratar.split("T");

            data_retirada_formata = data_retirada_retorno_array[0].split("-");

            data_final_ret = data_retirada_formata[2] + "/" + data_retirada_formata[1] + "/" + data_retirada_formata[0] + " " + data_retirada_retorno_array[1];

            return data_final_ret;
    }
