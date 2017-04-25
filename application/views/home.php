<div class="container">
  <div class="row">
    
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-8">
              <h4>Ultimos Pedidos</h4>
            </div>
            <div class="col-md-4">
              <div class="text-right">
                <a href="<?=base_url('/pedido')?>" title="Novo Pedido"><button class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-block">
          <table class="table table-hover text-center">
            <tr>
              <th class="text-center">Pedido</th>
              <th class="text-center">Cliente</th>
              <th class="text-center">Ação</th>
            </tr>
            <?php foreach ($pedidos as $pedido): ?>
              <tr <?php if ($pedido->id_pedido == 1002 ): echo 'class="table-danger"'; endif;?> >
                <td><?=$pedido->id_pedido?></td>
                <td><?=$pedido->nome?></td>
                <td class="text-center">
                  <a href="#" title="Remover"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                </td>
              </tr>
            <?php endforeach ?>
          </table>
          <button class="btn btn-danger"></button> Pedidos Reprovados
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4>Estoque em Tempo Real</h4>
        </div>
        <div class="card-block">
          <div class="row">
          <div class="col-md-3">
              <div class="card">
                <div class="card-header">Placas Usadas</div>
                <div class="text-center">
                  <div class="card-block">
                    <h4>353</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">Total Pedido</div>
                <div class="text-center">
                  <div class="card-block">
                    <h4>2550</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">Margem/Perda</div>
                <div class="text-center">
                  <div class="card-block">
                    <h4>2805</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">Produzido</div>
                <div class="text-center">
                  <div class="card-block">
                    <h4>2824</h4>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-md-6">
              <br>
              <div class="card">
                <div class="card-header">Estoque Espuma</div>
                <div class="text-center">
                  <div class="card-block">
                    <h4><?='176.4 m'/*$espuma[0]->estoque .' m'*/?></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <br>
              <div class="card">
                <div class="card-header">Tecido Vermelho</div>
                <div class="text-center">
                  <div class="card-block card-warning">
                    <h4><?='1.2 kg'/*$vermelho[0]->estoque .' kg'*/?></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <br>
              <div class="card">
                <div class="card-header">Tecido Branco</div>
                <div class="text-center">
                  <div class="card-block card-danger">
                    <h4><?='-3,6 kg'/*$branco[0]->estoque .' kg'*/?></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <br>
              <div class="card">
                <div class="card-header">Tecido Preto</div>
                <div class="text-center">
                  <div class="card-block">
                    <h4><?='11.2 kg'/*$preto[0]->estoque .' kg'*/?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
