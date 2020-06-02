<!-- inicio div -->



<div class="table-responsive-xl">

<!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><b>Confirme datos para Reserva de Hora</b></h4>
                        </div>
                        <form role="form" action="index.php" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Fecha Atencion:</label>
                                    <input class="form-control" disabled="true" type="text" id="txtFecha" size="8" name="txtFecha"> 
                                </div>
                                <div class="form-group">
                                    <label>Hora Atencion:</label>
                                    <input class="form-control" disabled="true" type="text" id="txtHora" size="8" name="txtHora"> 
                                </div>
                                <div class="form-group">
                                    <label>Ingrese su Rut</label>
                                    <input class="form-control" disabled="true" type="text" id="txtRut" size="8" name="txtRut"> 
                                </div>
                                <div class="form-group">
                                    <label>Mensaje</label>
                                    <textarea class="form-control" placeholder="Describa brevemente su motivo de consulta" id="txtMensaje" name="txtMensaje" rows="8" cols="40" required="true"></textarea>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default" id="btnEnvioDatos" name="btnEnvioDatos">Reservar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
<!-- /.modal -->
{% csrf_token %}
{% if sw %}
        <script>
            setTimeout(function(){
                document.getElementById("mensaje").innerHTML=''
            },2000)
        </script>
        <div id="mensaje">        
            <b>{{msg}}</b>
        </div>
        
        {% endif %}
        

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

