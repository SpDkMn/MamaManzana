<div class="example-modal">
  <div class="modal modal-primary" id="modal-new">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Nueva zona</h4>
        </div>
        <form action="{{ route('admin_new_zone_path')}}" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
              {{ csrf_field() }}
              <div class="form-group">
                    <label>Destino</label>
                    <select class="form-control select2" name="city" style="width: 100%;">
                      @foreach($cities as $c)
                      <option value="{{$c->id}}">{{$c->name}}</option>
                      @endforeach
                    </select>
                  </div><!-- /.form-group -->
              <div class="form-group">
                <label for="name">Nombre de la zona</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa nombre de la categoria">
              </div>
              <div class="form-group">
                <label>Referencia</label>
                <textarea class="form-control" id="reference" name="reference" rows="3" placeholder="Escriba una referencia sobre la zona de envío."></textarea>
              </div>
              <div class="form-group">
                <label for="keywords">Flete</label>
                <input type="text" class="form-control" id="cost" name="cost" placeholder="Flete">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-outline">Guardar</button>
            </div>
          </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- /.modal-new -->
