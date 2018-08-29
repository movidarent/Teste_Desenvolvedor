<div class="container-fluid">
	<?= form_open('controller_cotacao/finaliza_cotacao'); ?>
	<div class="row">
		<div class="col-md-4">
			<label>Loja Retirada: </label>
			<span id="lojaretirada"><?= $lojaretirada['Name']; ?></span>
			<input type="hidden" name="lojaretirada_" value="<?= $lojaretirada['Sigla']; ?>">
		</div>
		<div class="col-md-8">
			<label>Endereço: </label>
			<span id="enderecolojaretirada"><?= $lojaretirada['Endereco']['Logradouro']; ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Loja Devolução: </label>
			<span id="lojadevolucao"><?= $lojadevolucao['Name']; ?></span>
			<input type="hidden" name="lojadevolucao_" value="<?= $lojadevolucao['Sigla']; ?>">
		</div>
		<div class="col-md-8">
			<label>Endereço: </label>
			<span id="enderecolojadevolucao"><?= $lojadevolucao['Endereco']['Logradouro']; ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Data Retirada: </label>
			<span id="dataretirada"><?= $dataretirada.' '.$horaretirada; ?></span>
			<input type="hidden" name="dataretirada_" value="<?= $dataretirada.' '.$horaretirada; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Data Devolução: </label>
			<span id="datadevolucao"><?= $datadevolucao.' '.$horadevolucao; ?></span>
			<input type="hidden" name="datadevolucao_" value="<?= $datadevolucao.' '.$horadevolucao; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Diárias: </label>
			<span id="diarias"><?= $diarias; ?></span>
			<input type="hidden" name="diarias_" value="<?= $diarias; ?>">
		</div>
	</div>
</div>
<div class="container-fluid">
	<div id="label-veiculos" class="borda">
		<h3>Veículos</h3>
	</div>
	<div id="veiculos">
		<?php foreach ($veiculos as $key => $veiculo): ?>
			<div class="borda">
				<input type="radio" name="veiculo" value="<?= $veiculo['Sigla'] ?>" required="true">
				<div class="row">
					<div class="col-md-12">
						<label><?= $veiculo['Descricao'] ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label><?= $veiculo['DescricaoGrupo'] ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table>
							<tr>
								<td>Ar condicionado</td>
								<td><?= $veiculo['Arcondicionado'] == 'true' ? 'Sim' : 'Não' ?></td>
							</tr>
							<tr>
								<td>Lugares</td>
								<td><?= $veiculo['QtdLugares'] ?></td>
							</tr>
							<tr>
								<td>Malas</td>
								<td><?= $veiculo['QtdMala'] ?></td>
							</tr>
							<tr>
								<td>Cambio</td>
								<td><?= $veiculo['Cambio'] ?></td>
							</tr>
							<tr>
								<td>Portas</td>
								<td><?= $veiculo['QtdPortas'] ?></td>
							</tr>
							<tr>
								<td>Veículo</td>
								<td><?= $veiculo['Nome'] ?></td>
							</tr>
							<tr>
								<td>Valor diária</td>
								<td>R$ <?= $veiculo['ValorUnitario'] ?></td>
							</tr>
							<tr>
								<td>Total diárias</td>
								<td>R$ <?= $veiculo['ValorUnitario']*$diarias ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<img src="<?= $veiculo['Imagem'] ?>">
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	<div id="label-produtos" class="borda">
		<h3>Produtos</h3>
	</div>
	<div id="produtos">
		<?php foreach ($produtos as $key => $produto): ?>
			<div class="borda">
				<input type="checkbox" name="produtos[]" value="<?= $produto['Code'] ?>" <?= $produto['Valores']['Incluso'] == 'true' ? 'checked' : '' ?> >
				<div class="row">
					<div class="col-md-12">
						<label><?= $produto['Descricao'] ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label><?= $produto['Detalhes'] ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table>
							<tr>
								<td>Incluso</td>
								<td><?= $produto['Valores']['Incluso'] == 'true' ? 'Sim' : 'Não' ?></td>
							</tr>
							<tr>
								<td>Valor unitário</td>
								<td>R$ <?= $produto['Valores']['Calculo']['ValorUnitario'] ?></td>
							</tr>
							<tr>
								<td>Recorrência</td>
								<td><?= $produto['Valores']['Calculo']['Recorencia'] ?></td>
							</tr>
							<tr>
								<td>Total</td>
								<td>R$ <?= $produto['Valores']['Calculo']['ValorUnitario'] * $diarias ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<img src="<?= $produto['PictureURL'] ?>" width="150" height="105">
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	<div id="label-protecoes" class="borda">
		<h3>Proteções</h3>
	</div>
	<div id="protecoes">
		<?php foreach ($protecoes as $key => $protecao): ?>
			<div class="borda">
				<input type="radio" name="protecao" value="<?= $protecao['Sigla'] ?>" <?= $protecao['Valores']['Incluso'] == 'true' ? 'checked' : '' ?> required="true">
				<div class="row">
					<div class="col-md-12">
						<label><?= $protecao['Detalhes'] ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table>
							<tr>
								<td>Incluso</td>
								<td><?= $protecao['Valores']['Incluso'] == 'true' ? 'Sim' : 'Não' ?></td>
							</tr>
							<tr>
								<td>Valor unitário</td>
								<td>R$ <?= $protecao['Valores']['ValorUnitario'] ?></td>
							</tr>
							<tr>
								<td>Recorrência</td>
								<td><?= $protecao['Valores']['Recorencia'] ?></td>
							</tr>
							<tr>
								<td>Total</td>
								<td>R$ <?= $protecao['Valores']['ValorUnitario'] * $diarias ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<img src="<?= $protecao['PictureURL'] ?>" width="150" height="105">
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<input type="submit" name="buscar" value="Enviar" style="float: right;">
	</div>
</div>
<?= form_close(); ?>
</div>