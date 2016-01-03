<div class="example-modal">
  <div class="modal modal-primary" id="modal-new">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Nueva Categoria</h4>
        </div>
        <form action="{{ route('admin_new_category_path')}}" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <div class="form-group">
                <label for="name">Nombre de la categoria</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa nombre de la categoria">
              </div>
              <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción"></textarea>
              </div>
              <div class="form-group">
                <label>Descripción corta</label>
                <textarea class="form-control" id="short_description" name="short_description" rows="3" placeholder="Descripción corta"></textarea>
              </div>
              <div class="form-group">
                <label for="title">Titulo para la pagina</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa el titulo de la categoria">
              </div>
              <div class="form-group">
                <label for="keywords">Palabras claves</label>
                <input type="text" class="form-control" id="keywors" name="keywords" placeholder="Ingresa las palabras claves de la categoria">
              </div>
              <div class="form-group">
                <label>Meta Descripción</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="Descripción"></textarea>
              </div>
              <div class="form-group">
                <label for="img" class="col-lg-12">Foto</label>
                <input type="file" id="img" name="img">
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
