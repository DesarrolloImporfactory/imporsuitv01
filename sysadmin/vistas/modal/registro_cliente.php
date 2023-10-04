<?php
if (isset($conexion)) {
    ?>
	<div id="nuevoCliente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title"><i class='fa fa-edit'></i> Nuevo Cliente</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
						<div id="resultados_ajax"></div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre" class="control-label">Nombre Comercial:</label>
									<input type="text" class="form-control UpperCase" id="nombre" name="nombre" autocomplete="off" required>
								</div>
							</div>
                                                    <div class="col-md-6">
								<div class="form-group">
									<label for="nombre" class="control-label">Razón Social:</label>
									<input type="text" class="form-control UpperCase" id="razon_social" name="razon_social" autocomplete="off" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="fiscal" class="control-label">RUC/CEDULA:</label>
									<input type="text" class="form-control" id="fiscal" name="fiscal" autocomplete="off">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="telefono" class="control-label">Telefono:</label>
									<input type="text" class="form-control" id="telefono" name="telefono" autocomplete="off" required>
								</div>
							</div>
						</div>
                                                <div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="fiscal" class="control-label">Ciudad:</label>
									<input type="text" class="form-control" id="ciudad" name="ciudad" autocomplete="on">
								</div>
							</div>
                                                    <div class="col-md-6">
                                                            <div class="form-group">
									<label for="direccion" class="control-label">Crédito hasta:</label>
                                                                        <select class="form-control" id="credito" name="credito">
                                                                            <option value="">Escoja una opción</option>
                                                                            <option value="0">Sin crédito</option>
                                                                            <option value="15">Hasta 15 días</option>
                                                                            <option value="30">Hasta 30 días</option>
                                                                            <option value="60">Hasta 60 días</option>
                                                                            <option value="90">Hasta 90 días</option>
                                                                             <option value="180">Hasta 180 días</option>
                                                                            
                                                                        </select>
								</div>
								
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="direccion" class="control-label">Dirección:</label>
									<textarea class="form-control UpperCase"  id="direccion" name="direccion" maxlength="255" autocomplete="off"></textarea>
								</div>
							</div>
						</div>
                                                
                                            
                                                
                                                <div class="row">
							
							
						</div>
                                                  
                                                
						<div class="row">
							<div class="col-md-8">
							<div class="form-group">
									<label for="telefono" class="control-label">Email:</label>
									<input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="estado" class="control-label">Estado:</label>
									<select class="form-control" id="estado" name="estado" required>
										<option value="">-- Selecciona --</option>
										<option value="1" selected>Activo</option>
										<option value="0">Inactivo</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary waves-effect waves-light" id="guardar_datos">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div><!-- /.modal -->
	<?php
}
?>