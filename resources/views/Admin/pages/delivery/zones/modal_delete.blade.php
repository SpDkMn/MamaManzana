<div class="example-modal">
  <div class="modal modal-danger" id="modal-delete">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close close-delete" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Eliminar Zona</h4>
        </div>
        <div class="modal-body">
          ¿Estas seguro de eliminar esta zona?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left close-delete" data-dismiss="modal">Cerrar</button>
          <form action="{{ route('admin_destroy_zonas_path')}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="hidden" value="{{$id}}" name="id" />
            <button type="submit" class="btn btn-outline">Elimiar</button>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- /.example-modal -->
