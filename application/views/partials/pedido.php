<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4>Inserir Pedido</h4>
				</div>
				<div class="card-block">
					<div class="row">
						<div class="col-md-2" style="padding-top:6px;">
							<h5>Cliente</h5>
						</div>
						<div class="col-md-10">
							<select class="form-control">
								<option>Elias Douglas W. Portela</option>
								<option>Mahezer Carvalho</option>
							</select>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="text-center">
								<label>Produto</label>
								<select class="form-control">
									<option>Produto</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="text-center">
								<label>Quantidade</label>
								<input type="text" name="" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="text-center" style="padding-top:7px;">
								<br>
								<button class="btn btn-primary btn-block" title="Cadastrar">Inserir</button>	
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4>Pedido</h4>
				</div>
				<div class="card-block">
					<table class="table table-hover text-center">
						<tr>
							<th class="text-center">Produto</th>
							<th class="text-center">Quantidade</th>
							<th class="text-center">Perda</th>
							<th class="text-center">Ação</th>
						</tr>
						<tr>
							<td><?='Bojo Vermelho'?></td>
							<td><?='50'?></td>
							<td><?='55'?></td>
							<td class="text-center">
								<a href="#" title="Remover"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<br>
			<div class="text-center">
				<button class="btn btn-primary btn-block" title="Cadastrar">Finalizar Pedido</button>
			</div>
		</div>
	</div>
</div>
<br>

<!-- Modal Matéria Prima -->
<div class="container-fluid">
  <div class="modal fade" id="Include" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2>Nova Matéria Prima</h2>
        </div>
        <div class="modal-body">
        	<div class="row text-center">
        		<div class="col-sm-1"></div>
        		<div class="col-sm-10">
					<label for="ds">Matéria Prima</label>
					<input type="text" id="ds" placeholder="Descrição" class="form-control">	
					<br>
					<label for="uM">Unidade de Medida</label>
					<select id="uM" class="form-control">
						<option>Kilos</option>
						<option>Metros</option>
					</select>
					<br>
					<label for="es">Estoque</label>
					<input type="text" placeholder="Estoque" class="form-control">
					<br>
					<button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
					<button class="btn btn-primary" data-dismiss="modal">Confirmar</button>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>
