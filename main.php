<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>COBI | Control Bitácoras</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="DESCRIPCION">
    <meta name="author" content="I.S.C. ANGEL POOL TAH" />
    
    <!-- favicon -->
    <link rel="shortcut icon" href="imagenes/favicon_32x32.png" />

    <!-- Bootstrap 3.3.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <!-- <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/fontawesome.css">
    <!-- DATA TABLES -->
    <!-- <link href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" /> -->
    <!-- Datepicker -->
    <link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Chosen Select -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chosen/css/chosen.min.css" />
    <!-- Theme style -->
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="assets/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">

  <script type="text/javascript">
    $(function() {
            $("#turno_alias_agregar").autocomplete({
                source: "modulos/alias/busqueda_turnos.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#turno_alias_agregar').val(ui.item.turno_agregar);
          $('#id_turno_agregar').val(ui.item.id_turno_agregar);
          
           }
            });
    });
    $(function() {
            $("#ruta_alias_agregar").autocomplete({
                source: "modulos/alias/busqueda_rutas.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#ruta_alias_agregar').val(ui.item.ruta_agregar);
          $('#id_ruta_agregar').val(ui.item.id_ruta_agregar);
          
           }
            });
    });

    $(function() {
            $("#unidad_registro_agregar").autocomplete({
                source: "modulos/registros_vigilancia/busqueda_unidades.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#unidad_registro_agregar').val(ui.item.unidad_agregar);
          $('#id_unidad_registro_agregar').val(ui.item.id_unidad_agregar);      
           }
            });
    });

    $(function() {
            $("#supervisor_registro_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_supervisores.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#supervisor_registro_agregar').val(ui.item.supervisor_agregar);
          $('#id_supervisor_registro_agregar').val(ui.item.id_supervisor_agregar);        
           }
            });
    });
    $(function() {
            $("#alias_registro_agregar").autocomplete({
                source: "modulos/registros_vigilancia/busqueda_alias.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#alias_registro_agregar').val(ui.item.alias_agregar);
          $('#id_alias_registro_agregar').val(ui.item.id_alias_agregar);
          $('#turno_registro_agregar').val(ui.item.turno_agregar);
          $('#id_turno_registro_agregar').val(ui.item.id_turno_agregar);
          $('#ruta_registro_agregar').val(ui.item.ruta_agregar);
          $('#id_ruta_registro_agregar').val(ui.item.id_ruta_agregar);    
           }
            });
    });
    $(function() {
            $("#operador_registro_agregar").autocomplete({
                source: "modulos/registros_vigilancia/busqueda_operadores.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#operador_registro_agregar').val(ui.item.operador_agregar);
          $('#id_operador_registro_agregar').val(ui.item.id_operador_agregar);   
           }
            });
    });

    // ACTUALIZACION ANGEL 2021
    $(function() {
            $("#recolector_uno_agregar").autocomplete({
                source: "modulos/registros_vigilancia/busqueda_recolector_uno.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#recolector_uno_agregar').val(ui.item.recolector_agregar);
          $('#id_recolector_uno_agregar').val(ui.item.id_recolector_agregar);   
           }
            });
    });
    $(function() {
            $("#recolector_dos_agregar").autocomplete({
                source: "modulos/registros_vigilancia/busqueda_recolector_dos.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#recolector_dos_agregar').val(ui.item.recolector_agregar);
          $('#id_recolector_dos_agregar').val(ui.item.id_recolector_agregar);   
           }
            });
    });
    $(function() {
            $("#recolector_tres_agregar").autocomplete({
                source: "modulos/registros_vigilancia/busqueda_recolector_tres.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#recolector_tres_agregar').val(ui.item.recolector_agregar);
          $('#id_recolector_tres_agregar').val(ui.item.id_recolector_agregar);   
           }
            });
    });
    $(function() {
            $("#recolector_cuatro_agregar").autocomplete({
                source: "modulos/registros_vigilancia/busqueda_recolector_cuatro.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#recolector_cuatro_agregar').val(ui.item.recolector_agregar);
          $('#id_recolector_cuatro_agregar').val(ui.item.id_recolector_agregar);   
           }
            });
    });
    $(function() {
            $("#recolector_cinco_agregar").autocomplete({
                source: "modulos/registros_vigilancia/busqueda_recolector_cinco.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#recolector_cinco_agregar').val(ui.item.recolector_agregar);
          $('#id_recolector_cinco_agregar').val(ui.item.id_recolector_agregar);   
           }
            });
    });
// ========================================
    $(function() {
            $("#unidad_ticket_agregar").autocomplete({
                source: "modulos/tickets/busqueda_unidades.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#placas_ticket_agregar').val(ui.item.placas_agregar);
          $('#unidad_ticket_agregar').val(ui.item.unidad_agregar);
          $('#id_unidad_ticket_agregar').val(ui.item.id_unidad_agregar);
           }
            });
    });

    $(function() {
            $("#unidad_ticket_editar").autocomplete({
                source: "modulos/tickets/busqueda_unidades.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#placas_ticket_editar').val(ui.item.placas_agregar);
          $('#unidad_ticket_editar').val(ui.item.unidad_agregar);
          $('#id_unidad_ticket_editar').val(ui.item.id_unidad_agregar);
           }
            });
    });

    $(function() {
            $("#destino_final_t_agregar").autocomplete({
                source: "modulos/tickets/busqueda_destino_final.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_t_agregar').val(ui.item.destino_final_t_agregar);
          $('#id_destino_final_t_agregar').val(ui.item.id_destino_final_t_agregar);
           }
            });
    });

    $(function() {
            $("#destino_final_t_editar").autocomplete({
                source: "modulos/tickets/busqueda_destino_final.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_t_editar').val(ui.item.destino_final_t_agregar);
          $('#id_destino_final_t_editar').val(ui.item.id_destino_final_t_agregar);
           }
            });
    });
    

    $(function() {
            $("#tiro_uno_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_uno.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_uno_agregar').val(ui.item.peso_agregar);
          $('#tiro_1_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_uno_agregar').val(ui.item.id_ticket_agregar);
          
           }
            });
    });


    $(function() {
            $("#tiro_dos_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_dos.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_dos_agregar').val(ui.item.peso_agregar);
          $('#tiro_2_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_dos_agregar').val(ui.item.id_ticket_agregar);
          
           }
            });
    });
    $(function() {
            $("#tiro_tres_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_tres.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_tres_agregar').val(ui.item.peso_agregar);
          $('#tiro_3_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_tres_agregar').val(ui.item.id_ticket_agregar);
          
           }
            });
    });
    $(function() {
            $("#tiro_cuatro_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_cuatro.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_cuatro_agregar').val(ui.item.peso_agregar);
          $('#tiro_4_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_cuatro_agregar').val(ui.item.id_ticket_agregar);
          
           }
            });
    });
    $(function() {
            $("#tiro_cinco_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_cinco.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_cinco_agregar').val(ui.item.peso_agregar);
          $('#tiro_5_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_cinco_agregar').val(ui.item.id_ticket_agregar);
          
           }
            });
    });
//ACTUALIZACIONES ANGEL ENERO 2021
    $(function() {
            $("#tiro_seis_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_seis.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_seis_agregar').val(ui.item.peso_agregar);
          $('#tiro_6_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_seis_agregar').val(ui.item.id_ticket_agregar);
          
           }
            });
    });
     $(function() {
            $("#tiro_siete_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_siete.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_siete_agregar').val(ui.item.peso_agregar);
          $('#tiro_7_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_siete_agregar').val(ui.item.id_ticket_agregar);
          
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_uno_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_uno.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_uno_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_1').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_uno_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_dos_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_dos.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_dos_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_2').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_dos_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_tres_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_tres.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_tres_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_3').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_tres_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_cuatro_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_cuatro.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_cuatro_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_4').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_cuatro_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_cinco_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_cinco.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_cinco_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_5').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_cinco_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_seis_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_seis.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_seis_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_6').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_seis_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_siete_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_siete.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_siete_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_7').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_siete_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });
////////////////////////////////////////////

    $(function() {
            $("#supervisor_dinamico_busqueda").autocomplete({
                source: "modulos/reporte_dinamico/dinamico_busqueda_supervisores.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#supervisor_dinamico_busqueda').val(ui.item.supervisor_dinamico);
          $('#supervisor_ID_busqueda').val(ui.item.id_supervisor_dinamico);
          
           }
            });
    });
    $(function() {
            $("#unidad_dinamico_busqueda").autocomplete({
                source: "modulos/reporte_dinamico/dinamico_busqueda_unidades.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#unidad_dinamico_busqueda').val(ui.item.unidad_dinamico);
          $('#unidad_ID_busqueda').val(ui.item.id_unidad_dinamico);
          
           }
            });
    });
    $(function() {
            $("#alias_dinamico_busqueda").autocomplete({
                source: "modulos/reporte_dinamico/dinamico_busqueda_alias.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#alias_dinamico_busqueda').val(ui.item.alias_dinamico);
          $('#alias_ID_busqueda').val(ui.item.id_alias_dinamico);
          
           }
            });
    });
    $(function() {
            $("#operador_dinamico_busqueda").autocomplete({
                source: "modulos/reporte_dinamico/dinamico_busqueda_operadores.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#operador_dinamico_busqueda').val(ui.item.operador_dinamico);
          $('#operador_ID_busqueda').val(ui.item.id_operador_dinamico);
          
           }
            });
    });
    // ACTUALIZACION ANGEL 2021
    $(function() {
            $("#destino_final_dinamico_busqueda").autocomplete({
                source: "modulos/reporte_dinamico/dinamico_busqueda_destino_final.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_dinamico_busqueda').val(ui.item.destino_final_dinamico);
          $('#destino_final_ID_busqueda').val(ui.item.id_destino_final_dinamico);
          
           }
            });
    });
    // -------------------


    $(function() {
            $("#asignacion_dinamico_busqueda").autocomplete({
                source: "modulos/reporte_dinamico/dinamico_busqueda_asignaciones.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#asignacion_dinamico_busqueda').val(ui.item.asignacion_dinamico);
          $('#asignacion_ID_busqueda').val(ui.item.id_asignacion_dinamico);
          
           }
            });
    });
    $(function() {
            $("#turno_dinamico_busqueda").autocomplete({
                source: "modulos/reporte_dinamico/dinamico_busqueda_turnos.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#turno_dinamico_busqueda').val(ui.item.turno_dinamico);
          $('#turno_ID_busqueda').val(ui.item.id_turno_dinamico);
          
           }
            });
    });

    $(function() {
            $("#unidad_rendimiento_busqueda").autocomplete({
                source: "modulos/reporte_rendimiento/rendimiento_busqueda_unidades.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#unidad_rendimiento_busqueda').val(ui.item.unidad_rendimiento);
          $('#unidad_ID_rendimiento_busqueda').val(ui.item.id_unidad_rendimiento);
          
           }
            });
    });

    $(function() {
            $("#unidad_horas_ruta_busqueda").autocomplete({
                source: "modulos/reporte_horas_ruta/horas_ruta_busqueda_unidades.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#unidad_horas_ruta_busqueda').val(ui.item.unidad_horas_ruta);
          $('#unidad_ID_horas_ruta_busqueda').val(ui.item.id_unidad_horas_ruta);
          
           }
            });
    });

    // actualizacion noviembre 2021 - cantidad de tiros 10
    $(function() {
            $("#tiro_ocho_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_ocho.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_ocho_agregar').val(ui.item.peso_agregar);
          $('#tiro_8_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_ocho_agregar').val(ui.item.id_ticket_agregar);
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_ocho_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_ocho.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_ocho_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_8').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_ocho_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });

    $(function() {
            $("#tiro_nueve_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_nueve.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_nueve_agregar').val(ui.item.peso_agregar);
          $('#tiro_9_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_nueve_agregar').val(ui.item.id_ticket_agregar);
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_nueve_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_nueve.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_nueve_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_9').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_nueve_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });

    $(function() {
            $("#tiro_diez_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_tiro_diez.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#tiro_diez_agregar').val(ui.item.peso_agregar);
          $('#tiro_10_folio_ticket').val(ui.item.folio_ticket_agregar);
          $('#id_folio_tiro_diez_agregar').val(ui.item.id_ticket_agregar);
           }
            });
    });
    $(function() {
            $("#destino_final_tiro_diez_agregar").autocomplete({
                source: "modulos/registros_supervision/busqueda_destino_final_tiro_diez.php",
                minLength: 2,
                select: function(event, ui) {
          event.preventDefault();
          $('#destino_final_tiro_diez_agregar').val(ui.item.destino_final_tiro_agregar);
          $('#name_destino_final_tiro_10').val(ui.item.name_destino_final_tiro_agregar);
          $('#id_destino_final_tiro_diez_agregar').val(ui.item.id_destino_final_tiro_agregar);
           }
            });
    });

  </script>

    <script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
          var i;
          for (i = 0; i < field.form.elements.length; i++)
            if (field == field.form.elements[i])
              break;
          i = (i + 1) % field.form.elements.length;
          field.form.elements[i].focus();
          return false;
        };
        // else return false
        return false;
      }
    </script>

  </head>
  <body class="skin-blue fixed">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="?modulo=start" class="logo">
          <img style="margin-right:5px; height: 80%;" src="imagenes/COBI_BLANCO.png" alt="Logo"> 
         <!--  <span style="font-size:20px">ENCIERRO</span> -->
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"><i class="fas fa-bars"></i></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <?php include "top-menu.php" ?>
              
            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar">

        <section class="sidebar">

            <?php include "sidebar-menu.php" ?>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <?php include "content.php" ?>


        <!-- <marquee behavior="" direction="right"><img src="imagenes/camion.png" alt="" style="width: 20%;"></marquee> -->




        <div class="modal fade" id="logout">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fas fa-sign-out-alt"> Salir</i></h4>
                </div>
                <div class="modal-body">
                    <p>¿Seguro que quieres salir? </p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-danger" href="logout.php">Si, Salir</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong>Copyright &copy; 2019 - <?php echo date('Y');?> - <a href="www.sana.com.mx" target="_blank">Saneamiento SANA S.C. de R.L.</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- datepicker -->
    <script src="assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- chosen select -->
    <script src="assets/plugins/chosen/js/chosen.jquery.min.js"></script>
    <!-- DATA TABES SCRIPT -->
    <!-- <script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script> -->
    <script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- Datepicker -->
    <script src="assets/plugins/datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- maskMoney -->
    <script src="assets/js/jquery.maskMoney.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/mask.js" type="text/javascript"></script>


    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
          var table = $('#tabla_reporte_normal').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_reporte_normal_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_registros_vigilancia').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_registros_vigilancia_wrapper .col-md-6:eq(1)' );
      } );
    </script>

    <script>
        $(document).ready(function() {
          var table = $('#tabla_registros_supervision').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_registros_supervision_wrapper .col-md-6:eq(1)' );
      } );
    </script>

    <script>
        $(document).ready(function() {
          var table = $('#tabla_tickets').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_tickets_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_operadores').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_operadores_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_recolectores').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_recolectores_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_unidades').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_unidades_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_ruta_alias').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_ruta_alias_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_rutas').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_rutas_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_supervisores').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_supervisores_wrapper .col-md-6:eq(1)' );
      } );
    </script>

    <script>
        $(document).ready(function() {
          var table = $('#tabla_reporte_rendimiento').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_reporte_rendimiento_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_reporte_filtros').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_reporte_filtros_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_reporte_2km').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_reporte_2km_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_reporte_tonelaje').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_reporte_tonelaje_wrapper .col-md-6:eq(1)' );
      } );
    </script>
    <script>
        $(document).ready(function() {
          var table = $('#tabla_reporte_horas_ruta').DataTable( {

              responsive: true,
              dom:'lBfrtip',
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_reporte_horas_ruta_wrapper .col-md-6:eq(1)' );
      } );
    </script>



    <!-- <script>
        $(document).ready(function(){   
      dataTable = $('#tabla_reporte_normal').DataTable({
         "processing":true,
         "serverSide":true,
          dom:'lBfrtip',
          buttons: ['excel'],
         "lengthMenu": [50,100,500,1000,2000,5000,10000,50000,100000],
         "order":[],
         "sScrollX": "100%",
         "scrollCollapse": true
      });       
   });
    </script> -->
    <script>
        $(document).ready(function() {
          var table = $('#dataTables1').DataTable( {

              responsive: true,
              buttons: ['excel']
          } );
       
          table.buttons().container()
              .appendTo( '#tabla_reporte_normal_wrapper .col-md-6:eq(0)' );
      } );
    </script>

    <script>
      function calcular_rendimiento() {
        var km_recorrido = document.getElementById("km_recorrido").value;
        var litros_cargados = document.getElementById("litros_cargados").value;
        var recorrido_total = km_recorrido / litros_cargados;
        document.getElementById("total_rendimiento").value = recorrido_total;

      }
    </script>

    <script>
      function restar_Recorrido() {
        var km_entrada = document.getElementById("km_entrada").value;
        var km_salida = document.getElementById("km_salida").value;
        var recorrido_total = km_entrada - km_salida;
        document.getElementById("km_recorrido").value = recorrido_total;

      }
    </script>
<!--     <script>
      function sumar_pesos_tickets() {
        var tiro_uno = document.getElementById("tiro_uno_agregar").value;
        var tiro_dos = document.getElementById("tiro_dos_agregar").value;
        var tiro_tres = document.getElementById("tiro_tres_agregar").value;
        var tiro_cuatro = document.getElementById("tiro_cuatro_agregar").value;
        var tiro_cinco = document.getElementById("tiro_cinco_agregar").value;
        var suma_total_pesos = parseInt(tiro_uno) + parseInt(tiro_dos) + parseInt(tiro_tres) + parseInt(tiro_cuatro) + parseInt(tiro_cinco);
        document.getElementById("total_suma_tickets").value = suma_total_pesos;

      }
    </script> -->


<script>
    function sumar_tickets() {

  var total = 0;

  $(".tiros").each(function() {

    if (isNaN(parseFloat($(this).val()))) {

      total += 0;

    } else {

      total += parseFloat($(this).val());

    }

  });

  //alert(total);
  document.getElementById("total_suma_tickets").value = total;

}
</script>


<script>
    function mostrar_tickets(id) {
    if (id == "1") {
        $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").hide();
        $("#tiro_dos_d").hide();
        $("#tiro_tres").hide();
        $("#tiro_tres_d").hide();
        $("#tiro_cuatro").hide();
        $("#tiro_cuatro_d").hide();
        $("#tiro_cinco").hide();
        $("#tiro_cinco_d").hide();
        $("#tiro_seis").hide();
        $("#tiro_seis_d").hide();
        $("#tiro_siete").hide();
        $("#tiro_siete_d").hide();
        $("#tiro_ocho").hide();
        $("#tiro_ocho_d").hide();
        $("#tiro_nueve").hide();
        $("#tiro_nueve_d").hide();
        $("#tiro_diez").hide();
        $("#tiro_diez_d").hide();
    }

    if (id == "2") {
        $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").show();
        $("#tiro_dos_d").show();
        $("#tiro_tres").hide();
        $("#tiro_tres_d").hide();
        $("#tiro_cuatro").hide();
        $("#tiro_cuatro_d").hide();
        $("#tiro_cinco").hide();
        $("#tiro_cinco_d").hide();
        $("#tiro_seis").hide();
        $("#tiro_seis_d").hide();
        $("#tiro_siete").hide();
        $("#tiro_siete_d").hide();
        $("#tiro_ocho").hide();
        $("#tiro_ocho_d").hide();
        $("#tiro_nueve").hide();
        $("#tiro_nueve_d").hide();
        $("#tiro_diez").hide();
        $("#tiro_diez_d").hide();
    }

    if (id == "3") {
        $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").show();
        $("#tiro_dos_d").show();
        $("#tiro_tres").show();
        $("#tiro_tres_d").show();
        $("#tiro_cuatro").hide();
        $("#tiro_cuatro_d").hide();
        $("#tiro_cinco").hide();
        $("#tiro_cinco_d").hide();
        $("#tiro_seis").hide();
        $("#tiro_seis_d").hide();
        $("#tiro_siete").hide();
        $("#tiro_siete_d").hide();
        $("#tiro_ocho").hide();
        $("#tiro_ocho_d").hide();
        $("#tiro_nueve").hide();
        $("#tiro_nueve_d").hide();
        $("#tiro_diez").hide();
        $("#tiro_diez_d").hide();
    }

    if (id == "4") {
        $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").show();
        $("#tiro_dos_d").show();
        $("#tiro_tres").show();
        $("#tiro_tres_d").show();
        $("#tiro_cuatro").show();
        $("#tiro_cuatro_d").show();
        $("#tiro_cinco").hide();
        $("#tiro_cinco_d").hide();
        $("#tiro_seis").hide();
        $("#tiro_seis_d").hide();
        $("#tiro_siete").hide();
        $("#tiro_siete_d").hide();
        $("#tiro_ocho").hide();
        $("#tiro_ocho_d").hide();
        $("#tiro_nueve").hide();
        $("#tiro_nueve_d").hide();
        $("#tiro_diez").hide();
        $("#tiro_diez_d").hide();
    }
    if (id == "5") {
        $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").show();
        $("#tiro_dos_d").show();
        $("#tiro_tres").show();
        $("#tiro_tres_d").show();
        $("#tiro_cuatro").show();
        $("#tiro_cuatro_d").show();
        $("#tiro_cinco").show();
        $("#tiro_cinco_d").show();
        $("#tiro_seis").hide();
        $("#tiro_seis_d").hide();
        $("#tiro_siete").hide();
        $("#tiro_siete_d").hide();
        $("#tiro_ocho").hide();
        $("#tiro_ocho_d").hide();
        $("#tiro_nueve").hide();
        $("#tiro_nueve_d").hide();
        $("#tiro_diez").hide();
        $("#tiro_diez_d").hide();
    }
    // ACTUALIZACIONES ANGEL 2021
    if (id == "6") {
        $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").show();
        $("#tiro_dos_d").show();
        $("#tiro_tres").show();
        $("#tiro_tres_d").show();
        $("#tiro_cuatro").show();
        $("#tiro_cuatro_d").show();
        $("#tiro_cinco").show();
        $("#tiro_cinco_d").show();
        $("#tiro_seis").show();
        $("#tiro_seis_d").show();
        $("#tiro_siete").hide();
        $("#tiro_siete_d").hide();
        $("#tiro_ocho").hide();
        $("#tiro_ocho_d").hide();
        $("#tiro_nueve").hide();
        $("#tiro_nueve_d").hide();
        $("#tiro_diez").hide();
        $("#tiro_diez_d").hide();
    }
    if (id == "7") {
      $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").show();
        $("#tiro_dos_d").show();
        $("#tiro_tres").show();
        $("#tiro_tres_d").show();
        $("#tiro_cuatro").show();
        $("#tiro_cuatro_d").show();
        $("#tiro_cinco").show();
        $("#tiro_cinco_d").show();
        $("#tiro_seis").show();
        $("#tiro_seis_d").show();
        $("#tiro_siete").show();
        $("#tiro_siete_d").show();
        $("#tiro_ocho").hide();
        $("#tiro_ocho_d").hide();
        $("#tiro_nueve").hide();
        $("#tiro_nueve_d").hide();
        $("#tiro_diez").hide();
        $("#tiro_diez_d").hide();
    }

    if (id == "8") {
      $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").show();
        $("#tiro_dos_d").show();
        $("#tiro_tres").show();
        $("#tiro_tres_d").show();
        $("#tiro_cuatro").show();
        $("#tiro_cuatro_d").show();
        $("#tiro_cinco").show();
        $("#tiro_cinco_d").show();
        $("#tiro_seis").show();
        $("#tiro_seis_d").show();
        $("#tiro_siete").show();
        $("#tiro_siete_d").show();
        $("#tiro_ocho").show();
        $("#tiro_ocho_d").show();
        $("#tiro_nueve").hide();
        $("#tiro_nueve_d").hide();
        $("#tiro_diez").hide();
        $("#tiro_diez_d").hide();
    }
    if (id == "9") {
      $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").show();
        $("#tiro_dos_d").show();
        $("#tiro_tres").show();
        $("#tiro_tres_d").show();
        $("#tiro_cuatro").show();
        $("#tiro_cuatro_d").show();
        $("#tiro_cinco").show();
        $("#tiro_cinco_d").show();
        $("#tiro_seis").show();
        $("#tiro_seis_d").show();
        $("#tiro_siete").show();
        $("#tiro_siete_d").show();
        $("#tiro_ocho").show();
        $("#tiro_ocho_d").show();
        $("#tiro_nueve").show();
        $("#tiro_nueve_d").show();
        $("#tiro_diez").hide();
        $("#tiro_diez_d").hide();
    }
    if (id == "10") {
      $("#tiro_uno").show();
        $("#tiro_uno_d").show();
        $("#tiro_dos").show();
        $("#tiro_dos_d").show();
        $("#tiro_tres").show();
        $("#tiro_tres_d").show();
        $("#tiro_cuatro").show();
        $("#tiro_cuatro_d").show();
        $("#tiro_cinco").show();
        $("#tiro_cinco_d").show();
        $("#tiro_seis").show();
        $("#tiro_seis_d").show();
        $("#tiro_siete").show();
        $("#tiro_siete_d").show();
        $("#tiro_ocho").show();
        $("#tiro_ocho_d").show();
        $("#tiro_nueve").show();
        $("#tiro_nueve_d").show();
        $("#tiro_diez").show();
        $("#tiro_diez_d").show();
    }

}
</script>

<!-- ACTUALIZACION ANGEL -->
<script>
    function mostrar_recolectores(id) {
    if (id == "1") {
        $("#recolector_uno").show();
        $("#recolector_dos").hide();
        $("#recolector_tres").hide();
        $("#recolector_cuatro").hide();
        $("#recolector_cinco").hide();
    }

    if (id == "2") {
        $("#recolector_uno").show();
        $("#recolector_dos").show();
        $("#recolector_tres").hide();
        $("#recolector_cuatro").hide();
        $("#recolector_cinco").hide();
    }

    if (id == "3") {
        $("#recolector_uno").show();
        $("#recolector_dos").show();
        $("#recolector_tres").show();
        $("#recolector_cuatro").hide();
        $("#recolector_cinco").hide();
    }

    if (id == "4") {
        $("#recolector_uno").show();
        $("#recolector_dos").show();
        $("#recolector_tres").show();
        $("#recolector_cuatro").show();
        $("#recolector_cinco").hide();
    }
    if (id == "5") {
        $("#recolector_uno").show();
        $("#recolector_dos").show();
        $("#recolector_tres").show();
        $("#recolector_cuatro").show();
        $("#recolector_cinco").show();
    }
}
</script>



    <script>

      function restarHoras() {

        inicio = document.getElementById("inicio").value;
        fin = document.getElementById("fin").value;
        

        $intervalo = $fin->diff($inicio);

        $intervalo->format('%H %i %s');

        document.getElementById("tiempo_ruta").value = intervalo;

      }

    </script>

    <!-- <script>
      $("#alert_bienvenida").fadeTo(2000, 500).slideUp(500, function(){
        $("#alert_bienvenida").slideUp(500);
    });
    </script> -->


    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        // datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        // chosen select
        $('.chosen-select').chosen({allow_single_deselect:true}); 
        //resize the chosen on window resize
        
        // mask money
        $('#harga_beli').maskMoney({thousands:'.', decimal:',', precision:0});
        $('#harga_jual').maskMoney({thousands:'.', decimal:',', precision:0});

        $(window)
        .off('resize.chosen')
        .on('resize.chosen', function() {
          $('.chosen-select').each(function() {
             var $this = $(this);
             $this.next().css({'width': $this.parent().width()});
          })
        }).trigger('resize.chosen');
        //resize chosen on sidebar collapse/expand
        $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
          if(event_name != 'sidebar_collapsed') return;
          $('.chosen-select').each(function() {
             var $this = $(this);
             $this.next().css({'width': $this.parent().width()});
          })
        });
    
    
        $('#chosen-multiple-style .btn').on('click', function(e){
          var target = $(this).find('input[type=radio]');
          var which = parseInt(target.val());
          if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
           else $('#form-field-select-4').removeClass('tag-input-style');
        });

        // DataTables
        $("#dataTables1").dataTable();
        $('#dataTables2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false,


          "language": idioma_español
        });
      });

      var idioma_español= {
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ registros",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "dataTables_empty":     "Ningún dato disponible en esta tabla",
          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
          },
          "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          }
      }

    </script>

  </body>
</html>