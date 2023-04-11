SELECT 
                                              cat_registros.registro_ID,
                                              cat_unidades.unidad,
                                              cat_asignaciones.asignacion,
                                              cat_registros.semana,
                                              cat_registros.dia,
                                              cat_registros.fecha,
                                              cat_usuarios.nombre_completo AS nombre_supervisor,
                                              cat_alias.alias,
                                              cat_turnos.turno,
                                              cat_rutas.ruta,
                                              cat_operadores.nombre_completo AS nombre_operador,
                                              cat_registros.tripulantes,
                                              R1.nombre_completo AS Recolector_1,
                                              R2.nombre_completo AS Recolector_2,
                                              R3.nombre_completo AS Recolector_3,
                                              R4.nombre_completo AS Recolector_4,
                                              R5.nombre_completo AS Recolector_5,
                                              cat_registros.km_salida,
                                              cat_registros.km_entrada,
                                              cat_registros.hora_recorridas,
                                              cat_registros.recorrido,
                                              cat_registros.litros_cargados,
                                              cat_registros.rendimiento,
                                              cat_registros.hora_salida,
                                              cat_registros.hora_entrada,
                                              cat_registros.hora_recorridas,
                                              cat_registros.tiempo_ruta,
                                              cat_registros.total_peso,
                                              cat_registros.viajes,
                                              cat_registros.observaciones,
                                              cat_estatus_registro.estatus
                                              FROM cat_registros
                                              INNER JOIN cat_unidades ON cat_unidades.unidad_ID = cat_registros.unidad_ID
                                              INNER JOIN cat_asignaciones ON cat_asignaciones.asignacion_ID = cat_registros.asignacion_ID
                                              INNER JOIN cat_usuarios ON cat_usuarios.usuario_ID = cat_registros.supervisor_ID
                                              INNER JOIN cat_alias ON cat_alias.alias_ID = cat_registros.alias_ID
                                              INNER JOIN cat_turnos ON cat_turnos.turno_ID = cat_registros.turno_ID
                                              INNER JOIN cat_rutas ON cat_rutas.ruta_ID = cat_registros.ruta_ID
                                              INNER JOIN cat_operadores ON cat_operadores.operador_ID = cat_registros.operador_ID
                                              INNER JOIN cat_estatus_registro ON cat_estatus_registro.estatus_ID = cat_registros.estatus_ID
                                              INNER JOIN cat_recolectores R1 ON R1.recolector_ID = cat_registros.recolector_1_ID
                                              INNER JOIN cat_recolectores R2 ON R2.recolector_ID = cat_registros.recolector_2_ID
                                              INNER JOIN cat_recolectores R3 ON R3.recolector_ID = cat_registros.recolector_3_ID
                                              INNER JOIN cat_recolectores R4 ON R4.recolector_ID = cat_registros.recolector_4_ID
                                              INNER JOIN cat_recolectores R5 ON R5.recolector_ID = cat_registros.recolector_5_ID
                                              WHERE cat_registros.estatus_ID = '3'
                                            ORDER BY
                                                cat_registros.registro_ID
                                            DESC