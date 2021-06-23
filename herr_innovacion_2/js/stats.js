window.onload = function () {

}
var myGrafPuntuacion
var myGrafPersonal
var myGrafGastos
var myGrafContratacion
var myGrafVentas
var valorPersonal
var percentilPersonal
var valorGastos
var percentilGastos
var valorContratacion
var percentilContratacion
var valorVentas
var percentilVentas
var valorPuntuacion
var percentilPuntuacion

function verEstadisticas(tipo) {
    if (tipo == 1) {
        $.ajax({
            method: 'GET',
            datatype: "json",
            url: "repository/ws_get.php",
            data: {
                query: 7
            },
            success: function (res) {
                console.log(res)
                var objRepo = jQuery.parseJSON(res);
                console.log(objRepo)
                if (objRepo.status === 200) {

                    objRepo.data.forEach(element => {
                        valorPersonal = parseInt(element.pP)
                        valorGastos = parseInt(element.pG)
                        valorContratacion = parseInt(element.pC)
                        valorVentas = parseInt(element.pV)
                        valorPuntuacion = parseInt(element.pu)
                    });

                    cargarGraficaPorcentajePuntuacion(tipo)
                    cargarGraficaPorcentajePersonal(tipo)
                    cargarGraficaPorcentajeGastos(tipo)
                    cargarGraficaPorcentajeContratatacion(tipo)
                    cargarGraficaPorcentajeVentas(tipo)

                }
                else {
                    bootbox.alert("Error al cargar la información de la base de datos")
                }
            }
        });
    } else {
        cargarGraficaPorcentajePuntuacion(tipo)
        cargarGraficaPorcentajePersonal(tipo)
        cargarGraficaPorcentajeGastos(tipo)
        cargarGraficaPorcentajeContratatacion(tipo)
        cargarGraficaPorcentajeVentas(tipo)
    }
}
function cargarGraficaPorcentajePuntuacion(tipo) {
    var messageValidation = "";
    var validation = true;
    var num_empleadosDesde = parseInt($('#eval_num_empleadosDesde').val());
    var num_empleadosHasta = parseInt($('#eval_num_empleadosHasta').val());
    if (num_empleadosHasta < num_empleadosDesde) {
        messageValidation = "El numero de empleados máximo no puede ser menor que el mínimo\n"
        validation = false;
    }
    var fact_empresaDesde = parseInt($('#eval_facturacionDesde').val());
    var fact_empresaHasta = parseInt($('#eval_facturacionHasta').val());
    if (fact_empresaHasta < fact_empresaDesde) {
        messageValidation = "La facturacion máxima no puede ser menor que la mínima\n"
        validation = false;
    }
    var ano_desde = parseInt($('#eval_ano_constitucionDesde').val());
    var ano_hasta = parseInt($('#eval_ano_constitucionHasta').val());
    if (ano_hasta < ano_desde) {
        messageValidation = "El año de contitución máximo no puede ser menor que el mínimo\n"
        validation = false;
    }
    var ccaa = $('#eval_ccaa').val();
    var sector = $('#eval_sector').val();
    if (validation) {
        $.ajax({
            method: 'GET',
            datatype: "json",
            url: "repository/ws_get.php",
            data: {
                params_ccaa: ccaa,
                params_sector: sector,
                params_ano_constitucionDesde: ano_desde,
                params_ano_constitucionHasta: ano_hasta,
                params_num_empleadosDesde: num_empleadosDesde,
                params_num_empleadosHasta: num_empleadosHasta,
                params_fact_empresaDesde: fact_empresaDesde,
                params_fact_empresaHasta: fact_empresaHasta,
                query: 6
            },
            success: function (res) {
                console.log(res)
                var objRepo = jQuery.parseJSON(res);
                console.log(objRepo)
                if (objRepo.status === 200) {
                    cargarGraficaPuntuacion(tipo, objRepo.data, "porcentajePuntuacion", "#16A085")
                }
                else {
                    bootbox.alert("Error al guardar la información en base de datos")
                }
            }
        });
    } else {
        bootbox.alert(messageValidation, function () {
            location.reload()
        });

    }
}
function cargarGraficaPorcentajeVentas(tipo) {
    var messageValidation = "";
    var validation = true;
    var num_empleadosDesde = parseInt($('#eval_num_empleadosDesde').val());
    var num_empleadosHasta = parseInt($('#eval_num_empleadosHasta').val());
    var fact_empresaDesde = parseInt($('#eval_facturacionDesde').val());
    var fact_empresaHasta = parseInt($('#eval_facturacionHasta').val());
    var ano_desde = parseInt($('#eval_ano_constitucionDesde').val());
    var ano_hasta = parseInt($('#eval_facturacionHasta').val());
    var ccaa = $('#eval_ccaa').val();
    var sector = $('#eval_sector').val();
    if (validation) {
        $.ajax({
            method: 'GET',
            datatype: "json",
            url: "repository/ws_get.php",
            data: {
                params_ccaa: ccaa,
                params_sector: sector,
                params_ano_constitucionDesde: ano_desde,
                params_ano_constitucionHasta: ano_hasta,
                params_num_empleadosDesde: num_empleadosDesde,
                params_num_empleadosHasta: num_empleadosHasta,
                params_fact_empresaDesde: fact_empresaDesde,
                params_fact_empresaHasta: fact_empresaHasta,
                query: 5
            },
            success: function (res) {
                console.log(res)
                var objRepo = jQuery.parseJSON(res);
                console.log(objRepo)
                if (objRepo.status === 200) {
                    cargarGraficaPorcentaje(tipo, objRepo.data, "porcentajeVentas", "#16A085")
                }
                else {
                    bootbox.alert("Error al guardar la información en base de datos")
                }
            }
        });
    } else {
        bootbox.alert(messageValidation)
    }
}
function cargarGraficaPorcentajePersonal(tipo) {
    var messageValidation = "";
    var validation = true;
    var num_empleadosDesde = parseInt($('#eval_num_empleadosDesde').val());
    var num_empleadosHasta = parseInt($('#eval_num_empleadosHasta').val());
    var fact_empresaDesde = parseInt($('#eval_facturacionDesde').val());
    var fact_empresaHasta = parseInt($('#eval_facturacionHasta').val());
    var ano_desde = parseInt($('#eval_ano_constitucionDesde').val());
    var ano_hasta = parseInt($('#eval_facturacionHasta').val());
    var ccaa = $('#eval_ccaa').val();
    var sector = $('#eval_sector').val();
    if (validation) {
        $.ajax({
            method: 'GET',
            datatype: "json",
            url: "repository/ws_get.php",
            data: {
                params_ccaa: ccaa,
                params_sector: sector,
                params_ano_constitucionDesde: ano_desde,
                params_ano_constitucionHasta: ano_hasta,
                params_num_empleadosDesde: num_empleadosDesde,
                params_num_empleadosHasta: num_empleadosHasta,
                params_fact_empresaDesde: fact_empresaDesde,
                params_fact_empresaHasta: fact_empresaHasta,
                query: 2
            },
            success: function (res) {

                var objRepo = jQuery.parseJSON(res);
                console.log(objRepo)
                if (objRepo.status === 200) {
                    cargarGraficaPorcentaje(tipo, objRepo.data, "porcentajePersonal", "#16A085")
                }
                else {
                    bootbox.alert("Error al guardar la información en base de datos")
                }
            }
        });
    } else {
        bootbox.alert(messageValidation)
    }
}
function cargarGraficaPorcentajeGastos(tipo) {
    var messageValidation = "";
    var validation = true;
    var num_empleadosDesde = parseInt($('#eval_num_empleadosDesde').val());
    var num_empleadosHasta = parseInt($('#eval_num_empleadosHasta').val());
    var fact_empresaDesde = parseInt($('#eval_facturacionDesde').val());
    var fact_empresaHasta = parseInt($('#eval_facturacionHasta').val());
    var ano_desde = parseInt($('#eval_ano_constitucionDesde').val());
    var ano_hasta = parseInt($('#eval_facturacionHasta').val());
    var ccaa = $('#eval_ccaa').val();
    var sector = $('#eval_sector').val();
    if (validation) {
        $.ajax({
            method: 'GET',
            datatype: "json",
            url: "repository/ws_get.php",
            data: {
                params_ccaa: ccaa,
                params_sector: sector,
                params_ano_constitucionDesde: ano_desde,
                params_ano_constitucionHasta: ano_hasta,
                params_num_empleadosDesde: num_empleadosDesde,
                params_num_empleadosHasta: num_empleadosHasta,
                params_fact_empresaDesde: fact_empresaDesde,
                params_fact_empresaHasta: fact_empresaHasta,
                query: 3
            },
            success: function (res) {

                var objRepo = jQuery.parseJSON(res);
                console.log(objRepo)
                if (objRepo.status === 200) {
                    cargarGraficaPorcentaje(tipo, objRepo.data, "porcentajeGastos", "#16A085")
                }
                else {
                    bootbox.alert("Error al guardar la información en base de datos")
                }
            }
        });
    } else {
        bootbox.alert(messageValidation)
    }
}
function cargarGraficaPorcentajeContratatacion(tipo) {
    var messageValidation = "";
    var validation = true;
    var num_empleadosDesde = parseInt($('#eval_num_empleadosDesde').val());
    var num_empleadosHasta = parseInt($('#eval_num_empleadosHasta').val());
    var fact_empresaDesde = parseInt($('#eval_facturacionDesde').val());
    var fact_empresaHasta = parseInt($('#eval_facturacionHasta').val());
    var ano_desde = parseInt($('#eval_ano_constitucionDesde').val());
    var ano_hasta = parseInt($('#eval_facturacionHasta').val());
    var ccaa = $('#eval_ccaa').val();
    var sector = $('#eval_sector').val();
    if (validation) {
        $.ajax({
            method: 'GET',
            datatype: "json",
            url: "repository/ws_get.php",
            data: {
                params_ccaa: ccaa,
                params_sector: sector,
                params_ano_constitucionDesde: ano_desde,
                params_ano_constitucionHasta: ano_hasta,
                params_num_empleadosDesde: num_empleadosDesde,
                params_num_empleadosHasta: num_empleadosHasta,
                params_fact_empresaDesde: fact_empresaDesde,
                params_fact_empresaHasta: fact_empresaHasta,
                query: 4
            },
            success: function (res) {

                var objRepo = jQuery.parseJSON(res);
                console.log(objRepo)
                if (objRepo.status === 200) {
                    cargarGraficaPorcentaje(tipo, objRepo.data, "porcentajeContratacion", "#16A085")
                }
                else {
                    bootbox.alert("Error al guardar la información en base de datos")
                }
            }
        });
    } else {
        bootbox.alert(messageValidation)
    }
}
function cargarGraficaPorcentaje(tipo, obj, divId, color) {
    var arrayPorcentaje = []
    var arrayNumEmpresas = []
    obj.forEach(element => {
        arrayPorcentaje.push(element.y)
        arrayNumEmpresas.push(element.x)
    });
    var numEmpresasTotal = 0
    var numEmpresasAux = 0
    var arrayEmpresasAgrupados = []

    if (divId == 'porcentajePersonal') {
        percentilPersonal = 0
        for (var i = 0; i < arrayNumEmpresas.length; i++) {
            if (parseInt(arrayPorcentaje[i]) == 0) {
                numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[i])
            }
        }
        if (valorPersonal > 0) {
            percentilPersonal = numEmpresasAux
        }
        numEmpresasTotal = numEmpresasTotal + numEmpresasAux
        arrayEmpresasAgrupados.push(numEmpresasAux)
        numEmpresasAux = 0
        for (var i = 0; i <= 95; i = i + 5) {
            for (var j = 0; j < arrayNumEmpresas.length; j++) {
                if (parseInt(arrayPorcentaje[j]) > i && parseInt(arrayPorcentaje[j]) <= (i + 5)) {
                    numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[j])
                }
                if (parseInt(arrayPorcentaje[j]) < valorPersonal && i == 0) {
                    percentilPersonal = percentilPersonal + parseInt(arrayNumEmpresas[j])
                }
            }
            numEmpresasTotal = numEmpresasTotal + numEmpresasAux
            arrayEmpresasAgrupados.push(numEmpresasAux)
            numEmpresasAux = 0
        }

        percentilPersonal = parseInt(percentilPersonal / numEmpresasTotal * 100)
        if (tipo == 1) {
            document.getElementById("valorPersonal").value = valorPersonal + "%"
            document.getElementById("percentilPersonal").value = percentilPersonal
        }
        var arrayEmpresasAgrupadosGraf = []
        var comprobacion = 0
        for (var i = 0; i < arrayEmpresasAgrupados.length; i++) {
            arrayEmpresasAgrupadosGraf.push(parseInt(arrayEmpresasAgrupados[i]) / numEmpresasTotal * 100)
            comprobacion = comprobacion + parseInt(arrayEmpresasAgrupados[i]) / numEmpresasTotal * 100
        }
        var ctx = document.getElementById(divId).getContext('2d');
        percentilPersonal

        if (myGrafPersonal != undefined) { myGrafPersonal.destroy(); }
        myGrafPersonal = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100],
                datasets: [{
                    label: 'Porcentaje de empresas (%)',
                    data: arrayEmpresasAgrupadosGraf,
                    backgroundColor: [
                        color
                    ],

                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                },
            }
        });
    } else if (divId == 'porcentajeGastos') {
        percentilGastos = 0
        for (var i = 0; i < arrayNumEmpresas.length; i++) {
            if (parseInt(arrayPorcentaje[i]) == 0) {
                numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[i])
            }
        }
        if (valorGastos > 0) {
            percentilGastos = numEmpresasAux
        }
        numEmpresasTotal = numEmpresasTotal + numEmpresasAux
        arrayEmpresasAgrupados.push(numEmpresasAux)
        numEmpresasAux = 0
        for (var i = 0; i <= 95; i = i + 5) {
            for (var j = 0; j < arrayNumEmpresas.length; j++) {
                if (parseInt(arrayPorcentaje[j]) > i && parseInt(arrayPorcentaje[j]) <= (i + 5)) {
                    numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[j])

                }
                if (parseInt(arrayPorcentaje[j]) < valorGastos && i == 0) {
                    percentilGastos = percentilGastos + parseInt(arrayNumEmpresas[j])
                }
            }
            numEmpresasTotal = numEmpresasTotal + numEmpresasAux
            arrayEmpresasAgrupados.push(numEmpresasAux)
            numEmpresasAux = 0
        }

        percentilGastos = parseInt(percentilGastos / numEmpresasTotal * 100)
        if (tipo == 1) {
            document.getElementById("valorGastos").value = valorGastos + "%"
            document.getElementById("percentilGastos").value = percentilGastos
        }
        var arrayEmpresasAgrupadosGraf = []
        var comprobacion = 0
        for (var i = 0; i < arrayEmpresasAgrupados.length; i++) {
            arrayEmpresasAgrupadosGraf.push(parseInt(arrayEmpresasAgrupados[i]) / numEmpresasTotal * 100)
            comprobacion = comprobacion + parseInt(arrayEmpresasAgrupados[i]) / numEmpresasTotal * 100
        }
        var ctx = document.getElementById(divId).getContext('2d');
        if (myGrafGastos != undefined) { myGrafGastos.destroy(); }
        myGrafGastos = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100],
                datasets: [{
                    label: 'Porcentaje de empresas (%)',
                    data: arrayEmpresasAgrupadosGraf,
                    backgroundColor: [
                        color
                    ],

                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                },
            }
        });
    } else if (divId == 'porcentajeContratacion') {
        percentilContratacion = 0
        for (var i = 0; i < arrayNumEmpresas.length; i++) {
            if (parseInt(arrayPorcentaje[i]) == 0) {
                numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[i])
            }
        }
        if (valorContratacion > 0) {
            percentilContratacion = numEmpresasAux
        }
        numEmpresasTotal = numEmpresasTotal + numEmpresasAux
        arrayEmpresasAgrupados.push(numEmpresasAux)
        numEmpresasAux = 0
        for (var i = 0; i <= 95; i = i + 5) {
            for (var j = 0; j < arrayNumEmpresas.length; j++) {
                if (parseInt(arrayPorcentaje[j]) > i && parseInt(arrayPorcentaje[j]) <= (i + 5)) {
                    numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[j])
                }
                if (parseInt(arrayPorcentaje[j]) < valorContratacion && i == 0) {
                    percentilContratacion = percentilContratacion + parseInt(arrayNumEmpresas[j])
                }
            }
            numEmpresasTotal = numEmpresasTotal + numEmpresasAux
            arrayEmpresasAgrupados.push(numEmpresasAux)
            numEmpresasAux = 0
        }

        percentilContratacion = parseInt(percentilContratacion / numEmpresasTotal * 100)
        if (tipo == 1) {
            document.getElementById("valorContratacion").value = valorContratacion + "%"
            document.getElementById("percentilContratacion").value = percentilContratacion
        }
        var arrayEmpresasAgrupadosGraf = []
        var comprobacion = 0
        for (var i = 0; i < arrayEmpresasAgrupados.length; i++) {
            arrayEmpresasAgrupadosGraf.push(parseInt(arrayEmpresasAgrupados[i]) / numEmpresasTotal * 100)
            comprobacion = comprobacion + parseInt(arrayEmpresasAgrupados[i]) / numEmpresasTotal * 100
        }
        var ctx = document.getElementById(divId).getContext('2d');
        if (myGrafContratacion != undefined) { myGrafContratacion.destroy(); }
        myGrafContratacion = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100],
                datasets: [{
                    label: 'Porcentaje de empresas (%)',
                    data: arrayEmpresasAgrupadosGraf,
                    backgroundColor: [
                        color
                    ],

                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                },
            }
        });
    } else if (divId == 'porcentajeVentas') {
        percentilVentas = 0
        for (var i = 0; i < arrayNumEmpresas.length; i++) {
            if (parseInt(arrayPorcentaje[i]) == 0) {
                numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[i])
            }
        }
        if (valorVentas > 0) {
            percentilVentas = numEmpresasAux
        }
        numEmpresasTotal = numEmpresasTotal + numEmpresasAux
        arrayEmpresasAgrupados.push(numEmpresasAux)
        numEmpresasAux = 0
        for (var i = 0; i <= 95; i = i + 5) {
            for (var j = 0; j < arrayNumEmpresas.length; j++) {
                if (parseInt(arrayPorcentaje[j]) > i && parseInt(arrayPorcentaje[j]) <= (i + 5)) {
                    numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[j])
                }
                if (parseInt(arrayPorcentaje[j]) < valorVentas && i == 0) {
                    percentilVentas = percentilVentas + parseInt(arrayNumEmpresas[j])
                }
            }
            numEmpresasTotal = numEmpresasTotal + numEmpresasAux
            arrayEmpresasAgrupados.push(numEmpresasAux)
            numEmpresasAux = 0
        }

        percentilVentas = parseInt(percentilVentas / numEmpresasTotal * 100)
        if (tipo == 1) {
            document.getElementById("valorVentas").value = valorVentas + "%"
            document.getElementById("percentilVentas").value = percentilVentas
        }
        var arrayEmpresasAgrupadosGraf = []
        var comprobacion = 0
        for (var i = 0; i < arrayEmpresasAgrupados.length; i++) {
            arrayEmpresasAgrupadosGraf.push(parseInt(arrayEmpresasAgrupados[i]) / numEmpresasTotal * 100)
            comprobacion = comprobacion + parseInt(arrayEmpresasAgrupados[i]) / numEmpresasTotal * 100
        }
        var ctx = document.getElementById(divId).getContext('2d');
        if (myGrafVentas != undefined) { myGrafVentas.destroy(); }
        myGrafVentas = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100],
                datasets: [{
                    label: 'Porcentaje de empresas (%)',
                    data: arrayEmpresasAgrupadosGraf,
                    backgroundColor: [
                        color
                    ],

                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                },
            }
        });
    }
}


function cargarGraficaPuntuacion(tipo, obj, divId, color) {
    var arrayPuntuacion = []
    var arrayNumEmpresas = []
    obj.forEach(element => {
        arrayPuntuacion.push(element.y)
        arrayNumEmpresas.push(element.x)
    });
    var numEmpresasTotal = 0
    var numEmpresasAux = 0
    percentilPuntuacion = 0
    var arrayEmpresasAgrupados = []
    for (var i = 0; i < arrayNumEmpresas.length; i++) {
        if (parseInt(arrayPuntuacion[i]) == 0) {
            numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[i])
        }
    }
    if (valorPuntuacion > 0) { percentilPuntuacion = numEmpresasAux }
    numEmpresasTotal = numEmpresasTotal + numEmpresasAux
    arrayEmpresasAgrupados.push(numEmpresasAux)
    numEmpresasAux = 0
    for (var i = 0; i <= 950; i = i + 50) {
        for (var j = 0; j < arrayNumEmpresas.length; j++) {
            if (parseInt(arrayPuntuacion[j]) >= i && parseInt(arrayPuntuacion[j]) < (i + 50)) {
                numEmpresasAux = numEmpresasAux + parseInt(arrayNumEmpresas[j])
            }
            if (parseInt(arrayPuntuacion[j]) < valorPuntuacion && i == 0) {
                percentilPuntuacion = percentilPuntuacion + parseInt(arrayNumEmpresas[j])
            }
        }
        numEmpresasTotal = numEmpresasTotal + numEmpresasAux
        arrayEmpresasAgrupados.push(numEmpresasAux)
        numEmpresasAux = 0
    }
    percentilPuntuacion = parseInt(percentilPuntuacion / numEmpresasTotal * 100)
    if (tipo == 1) {
        document.getElementById("valorPuntuacion").value = valorPuntuacion
        document.getElementById("percentilPuntuacion").value = percentilPuntuacion
    }
    var arrayEmpresasAgrupadosGraf = []
    for (var i = 0; i < arrayEmpresasAgrupados.length; i++) {
        arrayEmpresasAgrupadosGraf.push(parseInt(arrayEmpresasAgrupados[i]) / numEmpresasTotal * 100)
    }
    if (myGrafPuntuacion != undefined) { myGrafPuntuacion.destroy(); }
    var ctx = document.getElementById(divId).getContext('2d');
    myGrafPuntuacion = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [0, 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750, 800, 850, 900, 950, 1000],
            datasets: [{
                label: 'Porcentaje de empresas (%)',
                data: arrayEmpresasAgrupadosGraf,
                backgroundColor: [
                    color
                ],

                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
}
