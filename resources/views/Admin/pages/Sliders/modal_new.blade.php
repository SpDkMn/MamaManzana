<div class="example-modal">
  <div class="modal modal-primary" id="modal-new">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Nuevo Slider</h4>
        </div>
        <form action="{{ route('admin_new_sliders_path')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
            <div class="modal-body">
              <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa un titulo">
              </div>
              <div class="form-group">
                <label for="short_description">Descripción corta</label>
                <textarea id="short_description" name="short_description" rows="10" cols="80">Aquí va la descripción corta</textarea>
              </div>
              <div class="form-group">
                <label for="photo">Imagen</label>
                <input type="file" id="photo" name="photo">
              </div>
              <div class="form-group">
                <label for="action">Acción</label>
                <input type="text" class="form-control" id="action" name="action" placeholder="Ingresa una acción">
              </div>
              <div class="form-group">
                <label for="slug">Url</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Ingresa una url">
              </div>
            </div><!-- /.modal-content -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline">Guardar</button>
              </div>
          </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- /.modal-new -->
