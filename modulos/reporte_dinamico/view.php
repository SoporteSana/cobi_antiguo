

<section class="content-header">
  <h1>
    <i class="fas fa-filter"></i> Reporte con filtros
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      
      <div class="box box-primary">
        <!-- form start -->
        <form role="form" class="form-horizontal" method="POST" action="?modulo=form_reporte_dinamico" target="_blank">
          <div class="box-body">

            <div class="form-group">
              <label class="col-sm-2 control-label">Fecha de:</label>
              <div class="col-sm-5">
                <input class="form-control" type="date" data-date-format="yyyy-mm-dd" name="fecha_uno_busqueda" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Fecha hasta:</label>
              <div class="col-sm-5">
                <input class="form-control" type="date" data-date-format="yyyy-mm-dd" name="fecha_dos_busqueda" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">No Económico:</label>
              <div class="col-sm-5">
                <input type="hidden" class="form-control" name="unidad_ID_busqueda" id="unidad_ID_busqueda" autocomplete="off" >
                <input type="text" class="form-control" name="unidad_dinamico_busqueda" id="unidad_dinamico_busqueda" autocomplete="off">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Asignación:</label>
              <div class="col-sm-5">
                <input type="hidden" class="form-control" name="asignacion_ID_busqueda" id="asignacion_ID_busqueda" autocomplete="off">
                <input type="text" class="form-control" name="asignacion_dinamico_busqueda" id="asignacion_dinamico_busqueda" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Supervisor:</label>
              <div class="col-sm-5">
                <input type="hidden" class="form-control" name="supervisor_ID_busqueda" id="supervisor_ID_busqueda" autocomplete="off" >
                <input type="text" class="form-control" name="supervisor_dinamico_busqueda" id="supervisor_dinamico_busqueda" autocomplete="off">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Alias:</label>
              <div class="col-sm-5">
                <input type="hidden" class="form-control" name="alias_ID_busqueda" id="alias_ID_busqueda" autocomplete="off">
                <input type="text" class="form-control" name="alias_dinamico_busqueda" id="alias_dinamico_busqueda" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Turno:</label>
              <div class="col-sm-5">
                <input type="hidden" class="form-control" name="turno_ID_busqueda" id="turno_ID_busqueda" autocomplete="off">
                <input type="text" class="form-control" name="turno_dinamico_busqueda" id="turno_dinamico_busqueda" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Operador:</label>
              <div class="col-sm-5">
                <input type="hidden" class="form-control" name="operador_ID_busqueda" id="operador_ID_busqueda" autocomplete="off">
                <input type="text" class="form-control" name="operador_dinamico_busqueda" id="operador_dinamico_busqueda" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Destino Final:</label>
              <div class="col-sm-5">
                <input type="hidden" class="form-control" name="destino_final_ID_busqueda" id="destino_final_ID_busqueda" autocomplete="off">
                <input type="text" class="form-control" name="destino_final_dinamico_busqueda" id="destino_final_dinamico_busqueda" autocomplete="off">
              </div>
            </div>
            
          </div>
          
          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-info btn-social btn-submit" style="width: 120px;">
                  <i class="fa fa-search"></i> Consulta
                </button>
                <button type="reset" class="btn btn-warning btn-social btn-submit" style="width: 120px;">
                  <i class="fas fa-broom"></i> Limpiar
                </button>
              </div>
            </div>
          </div>
        </form>
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content -->