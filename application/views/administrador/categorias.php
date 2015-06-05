		<nav>
			<div class="container">
				<ul class="navbar izquierda">
 					<li><a href="<?php echo site_url('administrador'); ?>">Menú</a></li>
 					<li><a href="<?php echo site_url('administrador/gestion'); ?>">Gestión</a></li>
 				</ul>
 				<ul class="navbar derecha">
					<a href="<?php echo site_url('presidente/logout'); ?>" class="btn btn-rojo">
						Cerrar Sesión
					</a>
 				</ul>
			</div>
		</nav>
		<section>
			<div class="container">
<!--				<div class="row">-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <fieldset>
                      <legend>Catálogo</legend>
                      <div id="tabla">
                          <table id="catalogo" class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>Nombre</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php foreach($categorias as $row){ ?>
                                  <tr>
                                      <td><?php echo $row->Nombre; ?></td>
                                      <td><span class="glyphicon glyphicon-pencil"></span>
                                      <span class="glyphicon glyphicon-trash"></span></td>
                                  </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                      </div>
                      </fieldset>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<fieldset>
							<legend>Agregar</legend>
							<form class="form-vertical" id="frmcat" name="frmcat" action="index.php/administrador/registrar_categoria" 
                            method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label for="nombre">
											<spam class="glyphicon glyphicon-asterisk requerido"></spam>Nombre
											</label>
											<input type="text" id="nombre" name="nombre"/>
										</div>
									</div>
								</div>
								<div class="row">
								<div class="col-xs-4 col-xs-offset-8 col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 col-lg-4 col-lg-offset-8">
<!--									<label>-->
										<button type="button" class="btn-lg btn-azul derecha" id="enviar_categoria">Registrar</button>
								</div>
							   </div>
							</form>							
						</fieldset>
                      </div>
<!--					</div>-->
				</div>
			</div>
		</section>
		<script type="text/javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
		<script type="text/javascript" src="js/formatter.js"></script>
		<script type="text/javascript" src="js/registrar_categoria.js"></script>
        <script>
			$(document).ready(function() {
			    $('#catalogo').dataTable();
			} );
		</script>

		<div class="modal dialogo fade" id="alert">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="titulo_alert"></h4>
					</div>
					<div class="modal-body">
						<p id="texto_alert"></p>
						<input type="button" value="Aceptar" data-dismiss="modal">
					</div>
				</div>
			</div>
		</div>