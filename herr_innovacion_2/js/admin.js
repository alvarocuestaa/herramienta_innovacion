function obtenerDatos() {


    var num_empleados = parseInt($('#eval_num_empleados').val());
    var num_empleados_IDi = parseInt($('#selectPreguntaARH').val());
    var num_empleados_ID = parseInt($('#selectPreguntaBRH').val());
    var fact_empresa = parseInt($('#eval_facturacion').val());
    var gasto_IDi = parseInt($('#selectPreguntaEREF').val());
    var gasto_ID = parseInt($('#selectPreguntaFREF').val());
    var gasto_ID_ext = parseInt($('#selectPreguntaAFI').val());
    var contrataciones_IDi = parseInt($('#selectPreguntaAEIDI').val());
    var ingresos_lic_pat = parseInt($('#selectPreguntaARE').val());
    var ventas_tot = parseInt($('#selectPreguntaBRE').val());
    var ventas_inn = parseInt($('#selectPreguntaBBRE').val());
    var exportaciones_tot = parseInt($('#selectPreguntaCRE').val());
    var exportaciones_inn = parseInt($('#selectPreguntaCCRE').val());


    if (num_empleados < num_empleados_IDi) {
        bootbox.alert("El número de empleados en I+D+i no puede ser mayor que el total")
    } else if (num_empleados_IDi < num_empleados_ID) {
        bootbox.alert("El número de empleados en I+D no puede ser mayor que el de I+D+i")
    } else if (gasto_IDi < gasto_ID) {
        bootbox.alert("El gasto en I+D no puede ser mayor que el gasto en I+D+i")
    } else if (gasto_ID < gasto_ID_ext) {
        bootbox.alert("El gasto en I+D de forma externa no puede ser mayor que el gasto en I+D")
    } else if (fact_empresa < ingresos_lic_pat) {
        bootbox.alert("Los ingresos por licencia de patentes no pueden ser mayores que la facturación total de la empresa")
    } else if (ventas_tot < ventas_inn) {
        bootbox.alert("Las ventas de productos nuevos para la empresa o el mercado no pueden ser mayores que las ventas totales")
    } else if (exportaciones_tot < exportaciones_inn) {
        bootbox.alert("Las exportaciones de productos nuevos para la empresa o el mercado no pueden ser mayores que las exportaciones totales")
    } else {


        var nombre_empresa = $('#eval_nombre').val();
        var web_empresa = $('#eval_web').val();
        var ccaa = $('#eval_ccaa').val();
        var cod_postal = $('#eval_cp').val();
        var ano_constitucion = $('#eval_ano_constitucion').val();
        var sector = $('#eval_sector').val();
        var descripcion_act = $('#eval_actividades').val();

        if (nombre_empresa == '') {
            nombre_empresa = 'n.a.';
        }
        if (web_empresa == '') {
            web_empresa = 'n.a.';
        }
        if (cod_postal == '') {
            cod_postal = 'n.a.';
        }
        if (descripcion_act == '') {
            descripcion_act = 'n.a.';
        }
        var recursosHumanosA = parseInt(num_empleados_IDi / num_empleados * 100);

        if (num_empleados_IDi == 0) {
            var recursosHumanosB = 0;
        } else {
            var recursosHumanosB = parseInt(num_empleados_ID / num_empleados_IDi * 100);
        }
        var recursosHumanosC = $('#selectPreguntaCRH').val();
        var recursosEconomicosA = $('#selectPreguntaAREF').val();
        var recursosEconomicosB = $('#selectPreguntaBREF').val();
        var recursosEconomicosC = $('#selectPreguntaCREF').val();
        var recursosEconomicosD = $('#selectPreguntaDREF').val();
        if (fact_empresa == 0) {
            var recursosEconomicosE = 0;
        } else {
            var recursosEconomicosE = parseInt(gasto_IDi / fact_empresa * 100);
        }
        if (gasto_IDi == 0) {
            var recursosEconomicosF = 0;
        } else {
            var recursosEconomicosF = parseInt(gasto_ID / gasto_IDi * 100);
        }
        if (gasto_ID == 0) {
            var formaInnovarA = 0;
        } else {
            var formaInnovarA = parseInt(gasto_ID_ext / gasto_ID * 100);
        }
        var formaInnovarB = $('#selectPreguntaBFI').val();
        var organizacionInnovacionA = $('#selectPreguntaAOI').val();
        var organizacionInnovacionB = $('#selectPreguntaBOI').val();
        var organizacionInnovacionC = $('#selectPreguntaCOI').val();
        var organizacionInnovacionD = $('#selectPreguntaDOI').val();
        var organizacionInnovacionE = $('#selectPreguntaEOI').val();
        var organizacionInnovacionF = $('#selectPreguntaFOI').val();

        var registrosA = $('#selectPreguntaAR').val();
        var registrosB = $('#selectPreguntaBR').val();
        var registrosC = $('#selectPreguntaCR').val();
        var registrosD = $('#selectPreguntaDR').val();

        var resultadoProcesoA = $('#selectPreguntaARP').val();
        var resultadoProcesoB = $('#selectPreguntaBRP').val();
        var resultadoProcesoC = $('#selectPreguntaCRP').val();

        var empleadoIdiA = parseInt(contrataciones_IDi / num_empleados * 100);
        if (gasto_IDi == 0) {
            var retornoEconomicoA = 0;
        } else {
            var retornoEconomicoA = parseInt(ingresos_lic_pat / gasto_IDi * 100);
        }
        if (ventas_tot == 0) {
            var retornoEconomicoB = 0;
        } else {
            var retornoEconomicoB = parseInt(ventas_inn / ventas_tot * 100);
        }
        if (exportaciones_tot == 0) {
            var retornoEconomicoC = 0;
        } else {
            var retornoEconomicoC = parseInt(exportaciones_inn / exportaciones_tot * 100);
        }

        var total = calcularValores(recursosHumanosA, recursosHumanosB, recursosHumanosC, recursosEconomicosA, recursosEconomicosB, recursosEconomicosC, recursosEconomicosD, recursosEconomicosE, recursosEconomicosF, formaInnovarA, formaInnovarB, organizacionInnovacionA, organizacionInnovacionB, organizacionInnovacionC, organizacionInnovacionD, organizacionInnovacionE, organizacionInnovacionF, registrosA, registrosB, registrosC, registrosD, resultadoProcesoA, resultadoProcesoB, resultadoProcesoC, empleadoIdiA, retornoEconomicoA, retornoEconomicoB, retornoEconomicoC)

        $.ajax({
            method: 'POST',
            datatype: "json",
            url: "repository/ws_post.php",
            data: {
                params_nombre: nombre_empresa,
                params_web: web_empresa,
                params_num_empleados: num_empleados,
                params_ccaa: ccaa,
                params_cp: cod_postal,
                params_ano_constitucion: ano_constitucion,
                params_sector: sector,
                params_descripcion: descripcion_act,
                params_fact_empresa: fact_empresa,
                params_porcentaje_personal: recursosHumanosA,
                params_porcentaje_gastos: recursosEconomicosE,
                params_porcentaje_contratacion: empleadoIdiA,
                params_porcentaje_ventas: retornoEconomicoB,
                params_puntuacion: total,
                query: 1
            },
            success: function (res) {

                var objRepo = jQuery.parseJSON(res);
                console.log(objRepo)
                if (objRepo.status === 200) {
                    mostrarRecomendaciones(total, recursosHumanosA, recursosHumanosB, recursosEconomicosE, recursosEconomicosF, formaInnovarA, retornoEconomicoB, recursosHumanosC, organizacionInnovacionB, organizacionInnovacionF, formaInnovarB, organizacionInnovacionA, organizacionInnovacionC, resultadoProcesoC, empleadoIdiA, retornoEconomicoC, organizacionInnovacionD, resultadoProcesoB)
                } else {
                    bootbox.alert("Error al guardar la información en base de datos")
                }
            }
        });
    }

}
//Mostra recomendaciones
function mostrarRecomendaciones(total, recursosHumanosA, recursosHumanosB, recursosEconomicosE, recursosEconomicosF, formaInnovarA, retornoEconomicoB, recursosHumanosC, organizacionInnovacionB, organizacionInnovacionF, formaInnovarB, organizacionInnovacionA, organizacionInnovacionC, resultadoProcesoC, empleadoIdiA, retornoEconomicoC, organizacionInnovacionD, resultadoProcesoB) {
    if (total > 600) {
        bootbox.confirm({
            message: "<strong> ¡Enhorabuena, el carácter innovador de su empresa es satisfactorio! </strong><br><br>En base a los indicadores analizados y teniendo como referencia los criterios de la especificación AENOR EA0047 “Requisitos para la consideración como Pequeña o Mediana Empresa Innovadora”, se puede afirmar que la estrategia de innovación desarrollada por su empresa es buena y le permite ser considerada como una PYME innovadora.<br><br><a class='btn-link' href='https://www.ciencia.gob.es/portal/site/MICINN/menuitem.6f2062042f6a5bc43b3f6810d14041a0/?vgnextoid=45cc94d74dd4a410VgnVCM1000001d04140aRCRD' target='_blank'>Saber más acerca del Sello PYME innovadora</a><br><br><strong>La puntuación obtenida ha sido " + total + " puntos.</strong>",
            buttons: {
                confirm: {
                    label: 'Ver estadisticas',
                    className: 'btn-primary'
                },
                cancel: {
                    label: 'Cerrar',
                    className: 'btn-secondary'
                }
            },
            callback: function (result) {
                if (result) {
                    window.open("estadisticasComp.php", "_self")
                }
            }
        });

    } else if (total >= 400) {
        var mensajesPuntuacion = '<p><strong> ¡Enhorabuena, el carácter innovador de su empresa es satisfactorio! </strong><br><br>En base a los indicadores analizados y teniendo como referencia los criterios de la especificación AENOR EA0047 “Requisitos para la consideración como Pequeña o Mediana Empresa Innovadora”, se puede afirmar que la estrategia de innovación desarrollada por su empresa está bien direccionada y le permite ser considerada como considerada una PYME innovadora.<br><br><a class="btn-link" href="https://www.ciencia.gob.es/portal/site/MICINN/menuitem.6f2062042f6a5bc43b3f6810d14041a0/?vgnextoid=45cc94d74dd4a410VgnVCM1000001d04140aRCRD" target="_blank">Saber más acerca del Sello PYME innovadora</a><br><br><strong>La puntuación obtenida ha sido ' + total + ' puntos.</strong><br><br>Debajo puede encontrar unas recomendaciones para continuar incorporando nuevos aspectos contemplados en la citada especificación, lo que le permitirá incrementar el carácter innovador de su empresa y llevarlo a otro nivel.<p/><hr><br>'
        //PRIORIDAD ALTA

        var mensajesPrioridad3 = '<h4 class="text-muted">Iniciativas de prioridad alta</h4><div class="alert alert-primary" id="mensajes_prioridad3" role="alert"><br><ul>';
        var auxM3 = mensajesPrioridad3
        //1.1A
        if (recursosHumanosA >= 0 && recursosHumanosA <= 10) {
            mensajesPrioridad3 += '<li><strong>1.1A: </strong>El número de empleados disponibles en I+D+i es muy escaso. Para incrementar el nivel de innovación en su empresa, es recomendable construir un equipo dedicado con al menos el 20% de los empleados de la empresa</li><br>';
        }
        //1.1B
        if (recursosHumanosB >= 0 && recursosHumanosB <= 25) {
            mensajesPrioridad3 += '<li><strong>1.1B: </strong>El talento humano y la formación son condiciones indispensables para garantizar el éxito en la innovación. El nivel de formación de su equipo dedicado a I+D+i es bajo. Para incrementar el nivel de innovación en su empresa, es recomendable incrementar sustancialmente el número de graduados en el equipo.</li><br>';
        }
        //1.2E
        if (recursosEconomicosE >= 0 && recursosEconomicosE <= 10) {
            mensajesPrioridad3 += '<li><strong>1.2E: </strong>Alcanzar una buena estrategia de inversión es fundamental para obtener un espacio relevante en la innovación. Para incrementar el nivel de innovación en su empresa, es recomendable aumentar la inversión en I+D+i hasta al menos un 15% de su facturación total.</li><br>';
        }
        //1.2F
        if (recursosEconomicosF >= 0 && recursosEconomicosF <= 20) {
            mensajesPrioridad3 += '<li><strong>1.2F: </strong>La inversión en I+D da lugar al incremento de producción, de innovación y diferenciación en el mercado. Para incrementar el nivel de innovación en su empresa, es recomendable que su inversión en I+D alcance el 30% de la inversión total en I+D+i.</li><br>';
        }
        //2.1A
        if (formaInnovarA >= 0 && formaInnovarA <= 20) {
            mensajesPrioridad3 += '<li><strong>2.1A: </strong>La Innovación externa consiste en abrir los procesos de innovación de la empresa al exterior (mediante alianzas con otras empresas o startups, adquisiciones, etc.) y es una forma eficaz de aumentar el conocimiento de la industria y localizar el talento. Para incrementar el nivel de innovación en su empresa, es recomendable que considere este modelo en su estrategia de innovación e incremente su inversión.</li><br>';
        }
        //2.2D
        if (organizacionInnovacionD == '0') {
            mensajesPrioridad3 += '<li><strong>2.2D: </strong>La contabilidad analítica ayuda a distribuir los gastos y los ingresos en cada línea de negocio, producto, cliente o departamento, y así poder hacer un seguimiento a las actividades de innovación. Es fundamental para medir el desempeño de dichas actividades y necesaria para acceder a algunas ayudas públicas.</li><br>';
        }
        //3.2B
        if (resultadoProcesoB == '0') {
            mensajesPrioridad3 += '<li><strong>3.2B: </strong>Aplicar técnicas innovadoras de márketing permite adelantarse al mercado en un entorno tan cambiante como el actual. Los cambios en el consumidor habilitan muchas nuevas oportunidades a las empresas y las técnicas innovadoras de marketing son una palanca para capturarlas.</li><br>';
        }
        //3.4B
        if (retornoEconomicoB >= 0 && retornoEconomicoB <= 10) {
            mensajesPrioridad3 += '<li><strong>3.4B: </strong>La inversión en I+D+i da lugar a la creación de productos únicos y ayuda a crear nuevas posibilidades de crecimiento dentro del mercado. Es importante enfocarse hacia una estrategia adecuada en innovación que habilite la posibilidad de lanzar productos nuevos para el mercado o para la empresa.</li>';
        }

        //PRIORIDAD MEDIA
        var mensajesPrioridad2 = '<h4 class="text-muted">Iniciativas de prioridad media</h4><div class="alert alert-secondary" id="mensajes_prioridad2" role="alert"><br><ul>';
        var auxM2 = mensajesPrioridad2

        //1.1A
        if (recursosHumanosA > 10 && recursosHumanosA <= 20) {
            mensajesPrioridad2 += '<li><strong>1.1A</strong>Para incrementar el nivel de innovación en su empresa es recomendable aumentar el número de recursos dedicados a I+D+i.</li><br>';
        }
        //1.1B
        if (recursosHumanosB > 25 && recursosHumanosB <= 45) {
            mensajesPrioridad2 += '<li><strong>1.1B: </strong>El talento humano y la formación son condiciones indispensables para garantizar el éxito en la innovación. Para incrementar el nivel de innovación en su empresa, es recomendable incrementar el número de graduados en el equipo.</li><br>';
        }
        //1.1C
        if (recursosHumanosC == '0') {
            mensajesPrioridad2 += '<li><strong>1.1C: </strong>El talento humano interno es la mejor palanca que posee su empresa para mejorar en innovación empleando pocos recursos. Asegúrese de que la dedicación voluntaria a actividades innovadoras dentro de su empresa es recompensada de alguna forma</li><br>';
        }
        //1.2E
        if (recursosEconomicosE > 10 && recursosEconomicosE <= 15) {
            mensajesPrioridad2 += '<li><strong>1.2E: </strong>Alcanzar una buena estrategia de inversión es fundamental para obtener un espacio relevante en la innovación. Para incrementar el nivel de innovación en su empresa, es recomendable aumentar su inversión en I+D+i.</li><br>';
        }
        //1.2F
        if (recursosEconomicosF > 20 && recursosEconomicosF <= 30) {
            mensajesPrioridad2 += '<li><strong>1.2F: </strong>La inversión en I+D da lugar al incremento de producción, de innovación y diferenciación en el mercado. Para incrementar el nivel de innovación en su empresa, es recomendable que aumente su inversión en I+D dentro del presupuesto total de I+D+i.</li><br>';
        }
        //2.1A
        if (formaInnovarA > 20 && formaInnovarA <= 30) {
            mensajesPrioridad2 += '<li><strong>2.1A: </strong>La Innovación externa consiste en abrir los procesos de innovación de la empresa al exterior (mediante alianzas con otras empresas o startups, adquisiciones, etc.) y es una forma eficaz de aumentar el conocimiento de la industria y localizar el talento. Para incrementar el nivel de innovación en su empresa, es recomendable que incremente su inversión en innovación externa.</li><br>';
        }
        //2.1B
        if (formaInnovarB == '0') {
            mensajesPrioridad2 += '<li><strong>2.1B: </strong>Los equipos o personas innovadoras necesitan activar su capital social para interactuar con otras de diferentes equipos, de diferentes lugares, o de diferentes sectores. Quienes cuentan con la posibilidad y la habilidad de hacerse con estas capacidades tendrán más oportunidades para llevar a buen puerto sus iniciativas innovadoras.. </li><br>';
        }
        //2.2A
        if (organizacionInnovacionA == '0') {
            mensajesPrioridad2 += '<li><strong>2.2A: </strong>Es importante utilizar procesos sistemáticos para relacionarse con suministradores que permitan aumentar la capacidad innovadora de la empresa. </li><br>';
        }
        //2.2B
        if (organizacionInnovacionB == '0') {
            mensajesPrioridad2 += '<li><strong>2.2B: </strong>Para aumentar la capacidad innovadora es importante utilizar información actualizada y conocer todas las novedades del mercado. Para garantizar que eso ocurre, es recomendable asignar un responsable para dicha tarea dentro de su empresa. </li><br>';
        }
        //2.2C
        if (organizacionInnovacionC == '0') {
            mensajesPrioridad2 += '<li><strong>2.2C: </strong>Es recomendable aplicar procesos sistemáticos que permitan conseguir realimentación del cliente para aumentar la capacidad innovadora de la empresa </li><br>';
        }
        //2.2F
        if (organizacionInnovacionF == '0') {
            mensajesPrioridad2 += '<li><strong>2.2F: </strong>Para destacar la innovación de su empresa es importante incluir los resultados de la capacidad innovadora en su política de comunicación. </li><br>';
        }
        //3.2C
        if (resultadoProcesoC == '0') {
            mensajesPrioridad2 += '<li><strong>3.2C: </strong>Es importante destacar la innovación de sus productos en la publicidad para destacar la innovación de su empresa </li><br>';
        }
        //3.3A
        if (empleadoIdiA >= 0 && empleadoIdiA <= 15) {
            mensajesPrioridad2 += '<li><strong>3.3A: </strong>Atraer y contratar talento humano dedicado a I+D+i incrementará las capacidades de innovación de su empresa. Es importante dedicar, al menos, el 15% de las nuevas vacantes a I+D+i para potenciar la innovación. </li><br>';
        }
        //3.4B
        if (retornoEconomicoB > 10 && retornoEconomicoB <= 20) {
            mensajesPrioridad2 += '<li><strong>3.4B: </strong>La inversión en I+D+i da lugar a la creación de productos únicos y ayuda a crear nuevas posibilidades de crecimiento dentro del mercado. Es importante continuar desarrollando una estrategia adecuada en innovación que habilite la posibilidad de lanzar productos nuevos para el mercado o para la empresa.</li><br>';
        }
        //3.4C
        if (retornoEconomicoC >= 0 && retornoEconomicoC <= 5) {
            mensajesPrioridad2 += '<li><strong>3.4C: </strong>La inversión en I+D+i da lugar a la creación de productos únicos y ayuda a crear nuevas posibilidades de crecimiento dentro del mercado. Es importante desarrollar una estrategia adecuada en innovación que habilite la posibilidad de exportar productos nuevos para el mercado o para la empresa. </li>';
        }


        if (mensajesPrioridad3 != auxM3) {
            mensajesPrioridad3 += "</ul></div><br>";
            mensajesPuntuacion += mensajesPrioridad3
        }
        if (mensajesPrioridad2 != auxM2) {
            mensajesPrioridad2 += "</ul></div><br>";
            mensajesPuntuacion += mensajesPrioridad2
        }

        $('#recomendaciones').html(mensajesPuntuacion);
        $('#modalRecomendaciones').modal("show")


    } else if (total > 300) {

        var mensajesPuntuacion = '<p><strong> El carácter innovador de su empresa no es bueno. </strong><br><br>En base a los indicadores analizados y teniendo como referencia los criterios de la especificación AENOR EA0047 “Requisitos para la consideración como Pequeña o Mediana Empresa Innovadora”, se puede afirmar que el carácter innovador de su empresa no alcanza el nivel necesario para ser considerada una PYME innovadora.<br><br><strong>La puntuación obtenida ha sido ' + total + ' puntos.</strong><br><br>Pese a todo, se encuentra cerca de conseguir su objetivo. Siga nuestras recomendaciones para poder alcanzar el nivel de PYME innovadora.<p/><hr><br>'
        //PRIORIDAD ALTA

        var mensajesPrioridad3 = '<h4 class="text-muted">Iniciativas de prioridad alta</h4><div class="alert alert-danger" id="mensajes_prioridad3" role="alert"><br><ul>';
        var auxM3 = mensajesPrioridad3
        //1.1A
        if (recursosHumanosA >= 0 && recursosHumanosA <= 10) {
            mensajesPrioridad3 += '<li><strong>1.1A: </strong>El número de empleados disponibles en I+D+i es muy escaso. Para incrementar el nivel de innovación en su empresa, es recomendable construir un equipo dedicado con al menos el 20% de los empleados de la empresa</li><br>';
        }
        //1.1B
        if (recursosHumanosB >= 0 && recursosHumanosB <= 25) {
            mensajesPrioridad3 += '<li><strong>1.1B: </strong>El talento humano y la formación son condiciones indispensables para garantizar el éxito en la innovación. El nivel de formación de su equipo dedicado a I+D+i es bajo. Para incrementar el nivel de innovación en su empresa, es recomendable incrementar sustancialmente el número de graduados en el equipo.</li><br>';
        }
        //1.2E
        if (recursosEconomicosE >= 0 && recursosEconomicosE <= 10) {
            mensajesPrioridad3 += '<li><strong>1.2E: </strong>Alcanzar una buena estrategia de inversión es fundamental para obtener un espacio relevante en la innovación. Para incrementar el nivel de innovación en su empresa, es recomendable aumentar la inversión en I+D+i hasta al menos un 15% de su facturación total.</li><br>';
        }
        //1.2F
        if (recursosEconomicosF >= 0 && recursosEconomicosF <= 20) {
            mensajesPrioridad3 += '<li><strong>1.2F: </strong>La inversión en I+D da lugar al incremento de producción, de innovación y diferenciación en el mercado. Para incrementar el nivel de innovación en su empresa, es recomendable que su inversión en I+D alcance el 30% de la inversión total en I+D+i.</li><br>';
        }
        //2.1A
        if (formaInnovarA >= 0 && formaInnovarA <= 20) {
            mensajesPrioridad3 += '<li><strong>2.1A: </strong>La Innovación externa consiste en abrir los procesos de innovación de la empresa al exterior (mediante alianzas con otras empresas o startups, adquisiciones, etc.) y es una forma eficaz de aumentar el conocimiento de la industria y localizar el talento. Para incrementar el nivel de innovación en su empresa, es recomendable que considere este modelo en su estrategia de innovación e incremente su inversión.</li><br>';
        }
        //2.2D
        if (organizacionInnovacionD == '0') {
            mensajesPrioridad3 += '<li><strong>2.2D: </strong>La contabilidad analítica ayuda a distribuir los gastos y los ingresos en cada línea de negocio, producto, cliente o departamento, y así poder hacer un seguimiento a las actividades de innovación. Es fundamental para medir el desempeño de dichas actividades y necesaria para acceder a algunas ayudas públicas.</li><br>';
        }
        //3.2B
        if (resultadoProcesoB == '0') {
            mensajesPrioridad3 += '<li><strong>3.2B: </strong>Aplicar técnicas innovadoras de márketing permite adelantarse al mercado en un entorno tan cambiante como el actual. Los cambios en el consumidor habilitan muchas nuevas oportunidades a las empresas y las técnicas innovadoras de marketing son una palanca para capturarlas.</li><br>';
        }
        //3.4B
        if (retornoEconomicoB >= 0 && retornoEconomicoB <= 10) {
            mensajesPrioridad3 += '<li><strong>3.4B: </strong>La inversión en I+D+i da lugar a la creación de productos únicos y ayuda a crear nuevas posibilidades de crecimiento dentro del mercado. Es importante enfocarse hacia una estrategia adecuada en innovación que habilite la posibilidad de lanzar productos nuevos para el mercado o para la empresa.</li>';
        }

        //PRIORIDAD MEDIA
        var mensajesPrioridad2 = '<h4 class="text-muted">Iniciativas de prioridad media</h4><div class="alert alert-warning" id="mensajes_prioridad2" role="alert"><br><ul>';
        var auxM2 = mensajesPrioridad2

        //1.1A
        if (recursosHumanosA > 10 && recursosHumanosA <= 20) {
            mensajesPrioridad2 += '<li><strong>1.1A</strong>Para incrementar el nivel de innovación en su empresa es recomendable aumentar el número de recursos dedicados a I+D+i.</li><br>';
        }
        //1.1B
        if (recursosHumanosB > 25 && recursosHumanosB <= 45) {
            mensajesPrioridad2 += '<li><strong>1.1B: </strong>El talento humano y la formación son condiciones indispensables para garantizar el éxito en la innovación. Para incrementar el nivel de innovación en su empresa, es recomendable incrementar el número de graduados en el equipo.</li><br>';
        }
        //1.1C
        if (recursosHumanosC == '0') {
            mensajesPrioridad2 += '<li><strong>1.1C: </strong>El talento humano interno es la mejor palanca que posee su empresa para mejorar en innovación empleando pocos recursos. Asegúrese de que la dedicación voluntaria a actividades innovadoras dentro de su empresa es recompensada de alguna forma</li><br>';
        }
        //1.2E
        if (recursosEconomicosE > 10 && recursosEconomicosE <= 15) {
            mensajesPrioridad2 += '<li><strong>1.2E: </strong>Alcanzar una buena estrategia de inversión es fundamental para obtener un espacio relevante en la innovación. Para incrementar el nivel de innovación en su empresa, es recomendable aumentar su inversión en I+D+i.</li><br>';
        }
        //1.2F
        if (recursosEconomicosF > 20 && recursosEconomicosF <= 30) {
            mensajesPrioridad2 += '<li><strong>1.2F: </strong>La inversión en I+D da lugar al incremento de producción, de innovación y diferenciación en el mercado. Para incrementar el nivel de innovación en su empresa, es recomendable que aumente su inversión en I+D dentro del presupuesto total de I+D+i.</li><br>';
        }
        //2.1A
        if (formaInnovarA > 20 && formaInnovarA <= 30) {
            mensajesPrioridad2 += '<li><strong>2.1A: </strong>La Innovación externa consiste en abrir los procesos de innovación de la empresa al exterior (mediante alianzas con otras empresas o startups, adquisiciones, etc.) y es una forma eficaz de aumentar el conocimiento de la industria y localizar el talento. Para incrementar el nivel de innovación en su empresa, es recomendable que incremente su inversión en innovación externa.</li><br>';
        }
        //2.1B
        if (formaInnovarB == '0') {
            mensajesPrioridad2 += '<li><strong>2.1B: </strong>Los equipos o personas innovadoras necesitan activar su capital social para interactuar con otras de diferentes equipos, de diferentes lugares, o de diferentes sectores. Quienes cuentan con la posibilidad y la habilidad de hacerse con estas capacidades tendrán más oportunidades para llevar a buen puerto sus iniciativas innovadoras.. </li><br>';
        }
        //2.2A
        if (organizacionInnovacionA == '0') {
            mensajesPrioridad2 += '<li><strong>2.2A: </strong>Es importante utilizar procesos sistemáticos para relacionarse con suministradores que permitan aumentar la capacidad innovadora de la empresa. </li><br>';
        }
        //2.2B
        if (organizacionInnovacionB == '0') {
            mensajesPrioridad2 += '<li><strong>2.2B: </strong>Para aumentar la capacidad innovadora es importante utilizar información actualizada y conocer todas las novedades del mercado. Para garantizar que eso ocurre, es recomendable asignar un responsable para dicha tarea dentro de su empresa. </li><br>';
        }
        //2.2C
        if (organizacionInnovacionC == '0') {
            mensajesPrioridad2 += '<li><strong>2.2C: </strong>Es recomendable aplicar procesos sistemáticos que permitan conseguir realimentación del cliente para aumentar la capacidad innovadora de la empresa </li><br>';
        }
        //2.2F
        if (organizacionInnovacionF == '0') {
            mensajesPrioridad2 += '<li><strong>2.2F: </strong>Para destacar la innovación de su empresa es importante incluir los resultados de la capacidad innovadora en su política de comunicación. </li><br>';
        }
        //3.2C
        if (resultadoProcesoC == '0') {
            mensajesPrioridad2 += '<li><strong>3.2C: </strong>Es importante destacar la innovación de sus productos en la publicidad para destacar la innovación de su empresa </li><br>';
        }
        //3.3A
        if (empleadoIdiA >= 0 && empleadoIdiA <= 15) {
            mensajesPrioridad2 += '<li><strong>3.3A: </strong>Atraer y contratar talento humano dedicado a I+D+i incrementará las capacidades de innovación de su empresa. Es importante dedicar, al menos, el 15% de las nuevas vacantes a I+D+i para potenciar la innovación. </li><br>';
        }
        //3.4B
        if (retornoEconomicoB > 10 && retornoEconomicoB <= 20) {
            mensajesPrioridad2 += '<li><strong>3.4B: </strong>La inversión en I+D+i da lugar a la creación de productos únicos y ayuda a crear nuevas posibilidades de crecimiento dentro del mercado. Es importante continuar desarrollando una estrategia adecuada en innovación que habilite la posibilidad de lanzar productos nuevos para el mercado o para la empresa.</li><br>';
        }
        //3.4C
        if (retornoEconomicoC >= 0 && retornoEconomicoC <= 5) {
            mensajesPrioridad2 += '<li><strong>3.4C: </strong>La inversión en I+D+i da lugar a la creación de productos únicos y ayuda a crear nuevas posibilidades de crecimiento dentro del mercado. Es importante desarrollar una estrategia adecuada en innovación que habilite la posibilidad de exportar productos nuevos para el mercado o para la empresa. </li>';
        }
        if (mensajesPrioridad3 != auxM3) {
            mensajesPrioridad3 += "</ul></div><br>";
            mensajesPuntuacion += mensajesPrioridad3
        }
        if (mensajesPrioridad2 != auxM2) {
            mensajesPrioridad2 += "</ul></div><br>";
            mensajesPuntuacion += mensajesPrioridad2
        }

        $('#recomendaciones').html(mensajesPuntuacion);
        $('#modalRecomendaciones').modal("show")
    } else {
        var mensajesPuntuacion = '<p><strong> El carácter innovador de su empresa está lejos del nivel deseado. </strong><br><br>En base a los indicadores analizados y teniendo como referencia los criterios de la especificación AENOR EA0047 “Requisitos para la consideración como Pequeña o Mediana Empresa Innovadora”, se puede afirmar que el carácter innovador de su empresa está lejos del nivel necesario para ser considerada una PYME innovadora.<br><br><strong>La puntuación obtenida ha sido ' + total + ' puntos.</strong><br><br>Es importante definir una buena estrategia de innovación para lograr su objetivo. Siga nuestras recomendaciones para poder mejorar el carácter innovador de su empresa.<p/><hr><br>'
        //PRIORIDAD ALTA

        var mensajesPrioridad3 = '<h4 class="text-muted">Iniciativas de prioridad alta</h4><div class="alert alert-danger" id="mensajes_prioridad3" role="alert"><br><ul>';
        var auxM3 = mensajesPrioridad3
        //1.1A
        if (recursosHumanosA >= 0 && recursosHumanosA <= 10) {
            mensajesPrioridad3 += '<li><strong>1.1A: </strong>El número de empleados disponibles en I+D+i es muy escaso. Para incrementar el nivel de innovación en su empresa, es recomendable construir un equipo dedicado con al menos el 20% de los empleados de la empresa</li><br>';
        }
        //1.1B
        if (recursosHumanosB >= 0 && recursosHumanosB <= 25) {
            mensajesPrioridad3 += '<li><strong>1.1B: </strong>El talento humano y la formación son condiciones indispensables para garantizar el éxito en la innovación. El nivel de formación de su equipo dedicado a I+D+i es bajo. Para incrementar el nivel de innovación en su empresa, es recomendable incrementar sustancialmente el número de graduados en el equipo.</li><br>';
        }
        //1.2E
        if (recursosEconomicosE >= 0 && recursosEconomicosE <= 10) {
            mensajesPrioridad3 += '<li><strong>1.2E: </strong>Alcanzar una buena estrategia de inversión es fundamental para obtener un espacio relevante en la innovación. Para incrementar el nivel de innovación en su empresa, es recomendable aumentar la inversión en I+D+i hasta al menos un 15% de su facturación total.</li><br>';
        }
        //1.2F
        if (recursosEconomicosF >= 0 && recursosEconomicosF <= 20) {
            mensajesPrioridad3 += '<li><strong>1.2F: </strong>La inversión en I+D da lugar al incremento de producción, de innovación y diferenciación en el mercado. Para incrementar el nivel de innovación en su empresa, es recomendable que su inversión en I+D alcance el 30% de la inversión total en I+D+i.</li><br>';
        }
        //2.1A
        if (formaInnovarA >= 0 && formaInnovarA <= 20) {
            mensajesPrioridad3 += '<li><strong>2.1A: </strong>La Innovación externa consiste en abrir los procesos de innovación de la empresa al exterior (mediante alianzas con otras empresas o startups, adquisiciones, etc.) y es una forma eficaz de aumentar el conocimiento de la industria y localizar el talento. Para incrementar el nivel de innovación en su empresa, es recomendable que considere este modelo en su estrategia de innovación e incremente su inversión.</li><br>';
        }
        //2.2D
        if (organizacionInnovacionD == '0') {
            mensajesPrioridad3 += '<li><strong>2.2D: </strong>La contabilidad analítica ayuda a distribuir los gastos y los ingresos en cada línea de negocio, producto, cliente o departamento, y así poder hacer un seguimiento a las actividades de innovación. Es fundamental para medir el desempeño de dichas actividades y necesaria para acceder a algunas ayudas públicas.</li><br>';
        }
        //3.2B
        if (resultadoProcesoB == '0') {
            mensajesPrioridad3 += '<li><strong>3.2B: </strong>Aplicar técnicas innovadoras de márketing permite adelantarse al mercado en un entorno tan cambiante como el actual. Los cambios en el consumidor habilitan muchas nuevas oportunidades a las empresas y las técnicas innovadoras de marketing son una palanca para capturarlas.</li><br>';
        }
        //3.4B
        if (retornoEconomicoB >= 0 && retornoEconomicoB <= 10) {
            mensajesPrioridad3 += '<li><strong>3.4B: </strong>La inversión en I+D+i da lugar a la creación de productos únicos y ayuda a crear nuevas posibilidades de crecimiento dentro del mercado. Es importante enfocarse hacia una estrategia adecuada en innovación que habilite la posibilidad de lanzar productos nuevos para el mercado o para la empresa.</li>';
        }

        //PRIORIDAD MEDIA
        var mensajesPrioridad2 = '<h4 class="text-muted">Iniciativas de prioridad media</h4><div class="alert alert-warning" id="mensajes_prioridad2" role="alert"><br><ul>';
        var auxM2 = mensajesPrioridad2

        //1.1A
        if (recursosHumanosA > 10 && recursosHumanosA <= 20) {
            mensajesPrioridad2 += '<li><strong>1.1A</strong>Para incrementar el nivel de innovación en su empresa es recomendable aumentar el número de recursos dedicados a I+D+i.</li><br>';
        }
        //1.1B
        if (recursosHumanosB > 25 && recursosHumanosB <= 45) {
            mensajesPrioridad2 += '<li><strong>1.1B: </strong>El talento humano y la formación son condiciones indispensables para garantizar el éxito en la innovación. Para incrementar el nivel de innovación en su empresa, es recomendable incrementar el número de graduados en el equipo.</li><br>';
        }
        //1.1C
        if (recursosHumanosC == '0') {
            mensajesPrioridad2 += '<li><strong>1.1C: </strong>El talento humano interno es la mejor palanca que posee su empresa para mejorar en innovación empleando pocos recursos. Asegúrese de que la dedicación voluntaria a actividades innovadoras dentro de su empresa es recompensada de alguna forma</li><br>';
        }
        //1.2E
        if (recursosEconomicosE > 10 && recursosEconomicosE <= 15) {
            mensajesPrioridad2 += '<li><strong>1.2E: </strong>Alcanzar una buena estrategia de inversión es fundamental para obtener un espacio relevante en la innovación. Para incrementar el nivel de innovación en su empresa, es recomendable aumentar su inversión en I+D+i.</li><br>';
        }
        //1.2F
        if (recursosEconomicosF > 20 && recursosEconomicosF <= 30) {
            mensajesPrioridad2 += '<li><strong>1.2F: </strong>La inversión en I+D da lugar al incremento de producción, de innovación y diferenciación en el mercado. Para incrementar el nivel de innovación en su empresa, es recomendable que aumente su inversión en I+D dentro del presupuesto total de I+D+i.</li><br>';
        }
        //2.1A
        if (formaInnovarA > 20 && formaInnovarA <= 30) {
            mensajesPrioridad2 += '<li><strong>2.1A: </strong>La Innovación externa consiste en abrir los procesos de innovación de la empresa al exterior (mediante alianzas con otras empresas o startups, adquisiciones, etc.) y es una forma eficaz de aumentar el conocimiento de la industria y localizar el talento. Para incrementar el nivel de innovación en su empresa, es recomendable que incremente su inversión en innovación externa.</li><br>';
        }
        //2.1B
        if (formaInnovarB == '0') {
            mensajesPrioridad2 += '<li><strong>2.1B: </strong>Los equipos o personas innovadoras necesitan activar su capital social para interactuar con otras de diferentes equipos, de diferentes lugares, o de diferentes sectores. Quienes cuentan con la posibilidad y la habilidad de hacerse con estas capacidades tendrán más oportunidades para llevar a buen puerto sus iniciativas innovadoras.. </li><br>';
        }
        //2.2A
        if (organizacionInnovacionA == '0') {
            mensajesPrioridad2 += '<li><strong>2.2A: </strong>Es importante utilizar procesos sistemáticos para relacionarse con suministradores que permitan aumentar la capacidad innovadora de la empresa. </li><br>';
        }
        //2.2B
        if (organizacionInnovacionB == '0') {
            mensajesPrioridad2 += '<li><strong>2.2B: </strong>Para aumentar la capacidad innovadora es importante utilizar información actualizada y conocer todas las novedades del mercado. Para garantizar que eso ocurre, es recomendable asignar un responsable para dicha tarea dentro de su empresa. </li><br>';
        }
        //2.2C
        if (organizacionInnovacionC == '0') {
            mensajesPrioridad2 += '<li><strong>2.2C: </strong>Es recomendable aplicar procesos sistemáticos que permitan conseguir realimentación del cliente para aumentar la capacidad innovadora de la empresa </li><br>';
        }
        //2.2F
        if (organizacionInnovacionF == '0') {
            mensajesPrioridad2 += '<li><strong>2.2F: </strong>Para destacar la innovación de su empresa es importante incluir los resultados de la capacidad innovadora en su política de comunicación. </li><br>';
        }
        //3.2C
        if (resultadoProcesoC == '0') {
            mensajesPrioridad2 += '<li><strong>3.2C: </strong>Es importante destacar la innovación de sus productos en la publicidad para destacar la innovación de su empresa </li><br>';
        }
        //3.3A
        if (empleadoIdiA >= 0 && empleadoIdiA <= 15) {
            mensajesPrioridad2 += '<li><strong>3.3A: </strong>Atraer y contratar talento humano dedicado a I+D+i incrementará las capacidades de innovación de su empresa. Es importante dedicar, al menos, el 15% de las nuevas vacantes a I+D+i para potenciar la innovación. </li><br>';
        }
        //3.4B
        if (retornoEconomicoB > 10 && retornoEconomicoB <= 20) {
            mensajesPrioridad2 += '<li><strong>3.4B: </strong>La inversión en I+D+i da lugar a la creación de productos únicos y ayuda a crear nuevas posibilidades de crecimiento dentro del mercado. Es importante continuar desarrollando una estrategia adecuada en innovación que habilite la posibilidad de lanzar productos nuevos para el mercado o para la empresa.</li><br>';
        }
        //3.4C
        if (retornoEconomicoC >= 0 && retornoEconomicoC <= 5) {
            mensajesPrioridad2 += '<li><strong>3.4C: </strong>La inversión en I+D+i da lugar a la creación de productos únicos y ayuda a crear nuevas posibilidades de crecimiento dentro del mercado. Es importante desarrollar una estrategia adecuada en innovación que habilite la posibilidad de exportar productos nuevos para el mercado o para la empresa. </li>';
        }
        if (mensajesPrioridad3 != auxM3) {
            mensajesPrioridad3 += "</ul></div><br>";
            mensajesPuntuacion += mensajesPrioridad3
        }
        if (mensajesPrioridad2 != auxM2) {
            mensajesPrioridad2 += "</ul></div><br>";
            mensajesPuntuacion += mensajesPrioridad2
        }

        $('#recomendaciones').html(mensajesPuntuacion);
        $('#modalRecomendaciones').modal("show")
    }
}

// Cacular valores respuestas
function calcularValores(recursosHumanosA, recursosHumanosB, recursosHumanosC, recursosEconomicosA, recursosEconomicosB, recursosEconomicosC, recursosEconomicosD, recursosEconomicosE, recursosEconomicosF, formaInnovarA, formaInnovarB, organizacionInnovacionA, organizacionInnovacionB, organizacionInnovacionC, organizacionInnovacionD, organizacionInnovacionE, organizacionInnovacionF, registrosA, registrosB, registrosC, registrosD, resultadoProcesoA, resultadoProcesoB, resultadoProcesoC, empleadoIdiA, retornoEconomicoA, retornoEconomicoB, retornoEconomicoC) {

    var totalValores;


    if (recursosHumanosA >= 0 && recursosHumanosA <= 40) { //Cálculo pregunta A RECURSOS HUMANOS
        recursosHumanosA = recursosHumanosA * 3;
    } else {
        recursosHumanosA = 120;
    }

    if (recursosHumanosB >= 0 && recursosHumanosB <= 65) { // Cálculo pregunta B RECURSOS HUMANOS
        recursosHumanosB = recursosHumanosB;
    } else {
        recursosHumanosB = 65;
    }

    if (recursosEconomicosE >= 0 && recursosEconomicosE <= 25) { // Cálculo pregunta E RECURSOS ECONÓMICOS-FINANCIEROS
        recursosEconomicosE = recursosEconomicosE * 4;
    } else {
        recursosEconomicosE = 100;
    }

    if (recursosEconomicosF >= 0 && recursosEconomicosF <= 50) { // Cálculo pregunta F RECURSOS ECONÓMICOS-FINANCIEROS
        recursosEconomicosF = recursosEconomicosF;
    } else {
        recursosEconomicosF = 50;
    }

    if (formaInnovarA >= 0 && formaInnovarA <= 60) { // Cálculo pregunta A FORMAR DE INNOVAR
        formaInnovarA = formaInnovarA;
    } else {
        formaInnovarA = 60;
    }

    if (empleadoIdiA >= 0 && empleadoIdiA <= 25) { // Cálculo pregunta A EMPLEO EN I+D+i
        empleadoIdiA = empleadoIdiA * 2;
    } else {
        empleadoIdiA = 50;
    }


    if (retornoEconomicoA >= 0 && retornoEconomicoA <= 30) { // Cálculo pregunta A RETORNO ECONÓMICO
        retornoEconomicoA = retornoEconomicoA;
    } else {
        retornoEconomicoA = 30;
    }

    if (retornoEconomicoB >= 0 && retornoEconomicoB <= 40) { // Cálculo pregunta B RETORNO ECONÓMICO
        retornoEconomicoB = retornoEconomicoB * 3;
    } else {
        retornoEconomicoB = 120;
    }

    if (retornoEconomicoC >= 0 && retornoEconomicoC <= 10) { // Cálculo pregunta B RETORNO ECONÓMICO
        retornoEconomicoC = retornoEconomicoC * 6;
    } else {
        retornoEconomicoC = 60;
    }



    totalValores = (parseInt(recursosHumanosA) + parseInt(recursosHumanosB) + parseInt(recursosHumanosC) +
        parseInt(recursosEconomicosA) + parseInt(recursosEconomicosB) + parseInt(recursosEconomicosC) + parseInt(recursosEconomicosD) + parseInt(recursosEconomicosE) + parseInt(recursosEconomicosF) +
        parseInt(formaInnovarA) + parseInt(formaInnovarB) +
        parseInt(organizacionInnovacionA) + parseInt(organizacionInnovacionB) + parseInt(organizacionInnovacionC) + parseInt(organizacionInnovacionD) + parseInt(organizacionInnovacionE) + parseInt(organizacionInnovacionF) +
        parseInt(registrosA) + parseInt(registrosB) + parseInt(registrosC) + parseInt(registrosD) +
        parseInt(resultadoProcesoA) + parseInt(resultadoProcesoB) + parseInt(resultadoProcesoC) +
        parseInt(empleadoIdiA) + parseInt(retornoEconomicoA) + parseInt(retornoEconomicoB) + parseInt(retornoEconomicoC));
    console.log(totalValores)

    return totalValores;
} //Fin de calcularValores()