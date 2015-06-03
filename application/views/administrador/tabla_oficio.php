		<nav>
			<div class="container">
				<ul class="navbar izquierda">
 					<li><a href="<?php echo site_url('administrador'); ?>">Menú</a></li>
 					<li><a href="<?php echo site_url('administrador/gestion'); ?>">Gestión</a></li>
 				</ul>
 				<ul class="navbar derecha">
					<a href="<?php echo site_url('administrador/logout'); ?>" class="btn btn-rojo">
						Cerrar Sesión
					</a>
 				</ul>
			</div>
		</nav>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<fieldset>
							<legend>Oficios enviados</legend>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div id="tabla">
										<table id="example" class="table table-hover">
									        <thead>
									            <tr>
													<th>Folio</th>
													<th>Asunto</th>
													<th>Fecha de Envío</th>
													<th>Fecha de Respuesta</th>
													<th>Colonia</th>
													<th>Estado</th>
									            </tr>
									        </thead>
									        <tbody>
									        	<?php foreach($oficios as $row) { ?> 
												<tr>
													<th><?php echo $row->nombre_colono." ".$row->ApellidoPaterno." ".$row->ApellidoMaterno;?></th>
													<th><?php echo $row->Nombre_calle." ".$row->numero_casa?></th>
													<th><?php echo $row->Nombre_comite?></th>
													<th><?php echo $row->Nombre_calle_representa?></th>
													<th><?php echo $row->Nombre_calle_representa?></th>
													<th><?php echo $row->Nombre_calle_representa?></th>
												</tr>
									        	<?php } ?>
									        </tbody>
									    </table>
									</div>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
<!--
				<div class="row">
					<div class="col-xs-4 col-xs-offset-8 col-sm-4 col-sm-offset-8 col-md-2 col-md-offset-10 col-lg-3 col-lg-offset-9">
						<a href="<?php echo site_url('presidente/registrar_representantes'); ?>" class="btn btn-lg btn-azul derecha">Registrar Representantes de Calle</a>
					</div>
				</div>
-->
			</div>
		</section>
		<script type="text/javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
		<script>
			$(document).ready(function() {
			    $('#example').dataTable();
			} );
		</script>