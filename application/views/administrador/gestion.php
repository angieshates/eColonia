<!--
        <nav>
			<div class="container">
				<ul class="navbar izquierda">
 					<li><a href="<?php echo site_url('administrador'); ?>">Menú</a></li>
 				</ul>
 				<ul class="navbar derecha">
					<a href="<?php echo site_url('administrador/logout'); ?>" class="btn btn-rojo">
						Cerrar Sesión
					</a>
 				</ul>
			</div>
		</nav>
-->
		<section class="content" id="contenido">
			<div class="container">
				<article>
					<div class="row">
						<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
							<article>
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
										<fieldset>
											<legend>Menú</legend>
											<label>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<label>
                                                    <a href="<?php echo site_url('administrador/tabla_peticion'); ?>" 
                                                    class="btn btn-lg btn-block btn-azul">Tabla de Peticiones</a>
                                                </label>
												<label>
                                                    <a href="<?php echo site_url('administrador/tabla_oficio'); ?>" 
                                                    class="btn btn-lg btn-block btn-azul">Tabla de Oficios</a>
                                                </label>
                                                <label>
                                                    <a href="<?php echo site_url('administrador/dependencias'); ?>" 
                                                    class="btn btn-lg btn-block btn-azul">Dependencias</a>
                                                </label>
                                                <label>
                                                    <a href="<?php echo site_url('administrador/categorias'); ?>" 
                                                    class="btn btn-lg btn-block btn-azul">Categorías</a>
                                                </label>
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