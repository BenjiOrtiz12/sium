   <div class="modal  modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-1">
    
    <div class="modal-dialog">     <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Tiempo de administracion</h4>
            </div>
            <div class="modal-body">
               <div class=" col-md-3">
                    <div class="form-group">                    
                    <input type="number" name="estabilidad" class="form-control" placeholder="Estabilidad..." required="required">
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="form-group">
                    
                      <select name="genero" id="opcion" class="form-control "  class="form-control"  data-live-search="true">

                         <option value="{{$dias_horas[1]->id}}" >{{$dias_horas[1]->tipo}}</option>
                          <option value="{{$dias_horas[0]->id}}" >{{$dias_horas[0]->tipo}}</option>
                        </select>
                    </div>
                </div>
                 <div class=" col-md-3">
                    <div class="form-group">                    
                    <input type="number" name="estabilidad" class="form-control" placeholder="Hora(s)..." required="required">
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="form-group">
                    
                      <select name="genero"  class="form-control "  class="form-control"  data-live-search="true">
                          <option value="{{$dias_horas[1]->id}}" >{{$dias_horas[1]->tipo}}</option>
                        </select>
                    </div>
                </div>

                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
            </div>
        </div>
    </div>
    <script>
    $('.opcion').change(function(){
        var option_val = $(this).val();
        alert(option_val);
    }
    </script>