<!-- inicio div -->



<div class="table-responsive-xl">

<!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <form role="form" action="index.php" method="post">
                            
                            <div class="modal-body">
                                    <label for="usuario">¿Está seguro que desea reservar la hora seleccionada?</label>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default" name="btnValida" value="btnValida">Aceptar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
<!-- /.modal -->

        <div class="input-group input-group-lg mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Nombre Médico</label>
          </div>
          <select class="custom-select" id="inputGroupSelect04" aria-label="">
                    <option selected>Seleccione Médico...</option>
                    <option value="1">Juanito Perez - Dentista General</option>
                    <option value="2">Mirta Rayuela - Implantes</option>
                    <option value="3">Pablito Clavito - Ortodoncia</option>
          </select>
          <div class="input-group-append" style="margin: 0px 0px 0px 5px;">
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Tomar Hora</button>
          </div>
        </div>
        
                      <table class="table table-bordered">
                           <thead class='thead-dark'>
                                <tr>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miercoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sabado</th>
                                </tr>
                            </thead>
                                <tr>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>09:00 - 09:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>09:00 - 09:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>09:00 - 09:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>09:00 - 09:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>09:00 - 09:50</button></th>
                                    <th><button type='button' class='btn btn-secondary btn-lg' disabled>No Disponible</button></th>
                                </tr>
                                <tr>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>10:00 - 10:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>10:00 - 10:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>10:00 - 10:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>10:00 - 10:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>10:00 - 10:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>10:00 - 10:50</button></th>
                                </tr>
                                <tr>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>11:00 - 11:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>11:00 - 11:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>11:00 - 11:50</button></th>
                                    <th><button type='button' class='btn btn-secondary btn-lg' disabled>No Disponible</button></th>
                                    <th><button type='button' class='btn btn-secondary btn-lg' disabled>No Disponible</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>11:00 - 11:50</button></th>
                                </tr>
                                <tr>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>12:00 - 12:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>12:00 - 12:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>12:00 - 12:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>12:00 - 12:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>12:00 - 12:50</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>12:00 - 12:50</button></th>
                                </tr>
                                <tr>
                                    <th><button type='button' class='btn btn-secondary btn-lg' disabled>No Disponible</button></th>
                                    <th><button type='button' class='btn btn-secondary btn-lg' disabled>No Disponible</button></th>
                                    <th><button type='button' class='btn btn-secondary btn-lg' disabled>No Disponible</button></th>
                                    <th><button type='button' class='btn btn-secondary btn-lg' disabled>No Disponible</button></th>
                                    <th><button type='button' class='btn btn-secondary btn-lg' disabled>No Disponible</button></th>
                                    <th><button type='button' class='btn btn-success btn-lg' enable>13:00 - 13:50</button></th>
                                </tr>
                                
                            <tbody>
                            
                            </tbody>
                       </table>

</div>     

