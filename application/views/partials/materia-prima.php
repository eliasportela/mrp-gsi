<div class="container">
	<div class="row">
		<div class="col-md-2">
			<h4>Pesquisar:</h4>
		</div>
		<div class="col-md-8">
			<input ng-model="filtro" type="search" placeholder="Pesquisar Matéria Prima" class="form-control">
		</div>
		<div class="col-md-2 text-right">
			<button class="btn btn-primary" data-toggle="modal" data-target="#includeMp" title="Cadastrar"><i class="fa fa-plus"></i></button>
		</div>
	</div>
	<br>
	<table class="table table-hover text-center">
		<tr>
			<th class="text-center">Matéria Prima</th>
			<th class="text-center">Unidade de Medida</th>
			<th class="text-center">Estoque</th>
			<th class="text-center">Ação</th>
		</tr>
		<tr ng-repeat="mp in mps | filter: filtro">
			<td>Tecido</td>
			<td>Mt</td>
			<td>600</td>
			<td class="text-center">
				<a href="#" title="Editar"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
				<a href="#" title="Remover"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>
			</td>
		</tr>
	</table>
</div>
<!-- Modal Matéria Prima -->
<div class="modal fade" id="includeMp" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Cadastro de Matéria Prima</h5>
			</div>
			<div class="modal-body">
				<label for="dsMp">Descriçao da Matéria Prima</label>
				<input type="text" id="dsMp" placeholder="Descrição" class="form-control" ng-model="mp.ds">	
				<br>
				<label for="uM">Unidade de Medida</label>
				<select id="uM" class="form-control" ng-model="mp.um">
					<option value="1">Kilos</option>
					<option value="2">Metros</option>
				</select>
				<br>
				<label for="es">Estoque</label>
				<input type="text" placeholder="Estoque" id="es" class="form-control" ng-model="mp.es">
				<br>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button class="btn btn-primary" data-dismiss="modal" ng-click="inserirMp()">Confirmar</button>
			</div>
		</div>
	</div>
</div>