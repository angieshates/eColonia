        <nav>
			<div class="container">
				<ul class="navbar izquierda">
 					<li><a href="<?php echo site_url('colono'); ?>">Menú</a></li>
 				</ul>
 				<ul class="navbar derecha">
					<a href="<?php echo site_url('colono/logout'); ?>" class="btn btn-rojo">
						Cerrar Sesión
					</a>
 				</ul>
			</div>
		</nav>
		<section>
			<div class="container">
				<article>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<article>
								<div class="row">
<!--									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>-->
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<fieldset>
											<legend>Menú</legend>
											<label>
                                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                  <div class="row">
                                                  <label>
                                                      <a href="<?php echo site_url('colono/peticion'); ?>" class="btn btn-lg btn-block btn-azul">
                                                      Realizar petición</a>
                                                  </label>
                                                  </div>
                                                  <div class="row">
                                                  <label>
                                                    <a href="<?php echo site_url('colono/tabla_peticion'); ?>" class="btn btn-lg btn-block btn-azul">
                                                    Peticiones realizadas</a>
                                                </label>
                                                  </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 
                                                col-xs-offset-1 col-sm--offset-1 col-md--offset-1 col-lg--offset-1">
                                                  <div class="row">
                                                  <table id="example" class="table table-hover">
                                                      <thead>
                                                          <tr>
                                                              <th>Folio</th>
                                                              <th>Asunto</th>
                                                              <th>Fecha de Elaboración</th>
                                                              <th>Atendido</th>
                                                              <th>Categoría</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php foreach($peticiones as $row){ ?>
                                                          <tr>
                                                              <td><?php echo $row->Folio; ?></td>
                                                              <td><?php echo $row->Asunto; ?></td>
                                                              <td><?php echo $row->Elab; ?></td>
                                                              <?php if ($row->Aten != NULL) {?>
                                                              <td><span class="glyphicon glyphicon-ok"></span></td>
                                                              <?php } else { ?>
                                                              <td><span class="glyphicon glyphicon-remove"></span></td>
                                                              <?php } ?>
<!--                                                              <td><?php echo $row->Aten; ?></td>-->
                                                              <td><?php echo $row->Categoria; ?></td>
                                                          </tr>
                                                          <?php } ?>
                                                      </tbody>
                                                  </table>
                                                </div>
                                                  </div>
                                                </div>
											</label>
										</fieldset>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
								</div>
							</article>					
						</div>
					</div>
				</article>
			</div>
		</section>