

<section class="content-header">
  <h1>
    <i class="fas fa-weight"></i> Reporte tonelaje
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      
      <div class="box box-primary">
        <!-- form start -->
        <form role="form" class="form-horizontal" method="POST" action="?modulo=form_reporte_tonelaje" target="_blank">
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
              <label class="col-sm-2 control-label">Asignación:</label>
              <div class="col-sm-5">
                <input type="hidden" class="form-control" name="asignacion_ID_busqueda" id="asignacion_ID_busqueda" autocomplete="off">
                <input type="text" class="form-control" name="asignacion_dinamico_busqueda" id="asignacion_dinamico_busqueda" autocomplete="off">
              </div>
            </div>
<!--             <div class="form-group">
              <label class="col-sm-2 control-label">No Económico:</label>
              <div class="col-sm-5">
                <input type="hidden" class="form-control" name="unidad_ID_rendimiento_busqueda" id="unidad_ID_rendimiento_busqueda" autocomplete="off" >
                <input type="text" class="form-control" name="unidad_rendimiento_busqueda" id="unidad_rendimiento_busqueda" autocomplete="off">
              </div>
            </div> -->
            
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