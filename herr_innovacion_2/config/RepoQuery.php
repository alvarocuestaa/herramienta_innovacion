<?php


class RepoQuery
{

    static function GetQuery($numberQuery, $params)
    {

        switch ($numberQuery) {

            case 1:
                return self::GuardarEvaluacion($params);
            case 2:
                return self::ObtenerEstadisticasPersonal($params);
            case 3:
                return self::ObtenerEstadisticasGastos($params);
            case 4:
                return self::ObtenerEstadisticasContrataciones($params);
            case 5:
                return self::ObtenerEstadisticasVentas($params);
            case 6:
                return self::ObtenerEstadisticasPuntuacion($params);
            case 7:
                return self::ObtenerUltimaEmpresa();
            default:
                return "";
        }
    }
    static function ObtenerEstadisticasPuntuacion($params)
    {
        $params_ccaa = $params['params_ccaa'];
        $params_sector = $params['params_sector'];
        $params_ano_constitucionDesde = $params['params_ano_constitucionDesde'];
        $params_ano_constitucionHasta = $params['params_ano_constitucionHasta'];
        $params_num_empleadosDesde = $params['params_num_empleadosDesde'];
        $params_num_empleadosHasta = $params['params_num_empleadosHasta'];
        $params_fact_empresaDesde = $params['params_fact_empresaDesde'];
        $params_fact_empresaHasta = $params['params_fact_empresaHasta'];

        if ($params_ccaa != "Todas") {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        puntuacion as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa') 
                        AND (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  puntuacion ";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        puntuacion as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  puntuacion ";
            }
        } else {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        puntuacion as 'y' 
                        FROM evaluaciones 
                        WHERE (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  puntuacion ";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        puntuacion as 'y' 
                        FROM evaluaciones 
                        WHERE (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  puntuacion ";
            }
        }
    }
    static function ObtenerEstadisticasContrataciones($params)
    {
        $params_ccaa = $params['params_ccaa'];
        $params_sector = $params['params_sector'];
        $params_ano_constitucionDesde = $params['params_ano_constitucionDesde'];
        $params_ano_constitucionHasta = $params['params_ano_constitucionHasta'];
        $params_num_empleadosDesde = $params['params_num_empleadosDesde'];
        $params_num_empleadosHasta = $params['params_num_empleadosHasta'];
        $params_fact_empresaDesde = $params['params_fact_empresaDesde'];
        $params_fact_empresaHasta = $params['params_fact_empresaHasta'];

        if ($params_ccaa != "Todas") {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        porcentaje_contratacion as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa') 
                        AND (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_contratacion ";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        porcentaje_contratacion as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_contratacion ";
            }
        } else {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        porcentaje_contratacion as 'y' 
                        FROM evaluaciones 
                        WHERE (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_contratacion";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        porcentaje_contratacion as 'y' 
                        FROM evaluaciones 
                        WHERE (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_contratacion";
            }
        }
    }
    static function ObtenerEstadisticasVentas($params)
    {
        $params_ccaa = $params['params_ccaa'];
        $params_sector = $params['params_sector'];
        $params_ano_constitucionDesde = $params['params_ano_constitucionDesde'];
        $params_ano_constitucionHasta = $params['params_ano_constitucionHasta'];
        $params_num_empleadosDesde = $params['params_num_empleadosDesde'];
        $params_num_empleadosHasta = $params['params_num_empleadosHasta'];
        $params_fact_empresaDesde = $params['params_fact_empresaDesde'];
        $params_fact_empresaHasta = $params['params_fact_empresaHasta'];

        if ($params_ccaa != "Todas") {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        porcentaje_ventas as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa') 
                        AND (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_ventas ";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        porcentaje_ventas as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_ventas ";
            }
        } else {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        porcentaje_ventas as 'y' 
                        FROM evaluaciones 
                        WHERE (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_ventas";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        porcentaje_ventas as 'y' 
                        FROM evaluaciones 
                        WHERE (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_ventas";
            }
        }
    }
    static function ObtenerEstadisticasGastos($params)
    {
        $params_ccaa = $params['params_ccaa'];
        $params_sector = $params['params_sector'];
        $params_ano_constitucionDesde = $params['params_ano_constitucionDesde'];
        $params_ano_constitucionHasta = $params['params_ano_constitucionHasta'];
        $params_num_empleadosDesde = $params['params_num_empleadosDesde'];
        $params_num_empleadosHasta = $params['params_num_empleadosHasta'];
        $params_fact_empresaDesde = $params['params_fact_empresaDesde'];
        $params_fact_empresaHasta = $params['params_fact_empresaHasta'];

        if ($params_ccaa != "Todas") {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        porcentaje_gastos as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa') 
                        AND (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_gastos ";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        porcentaje_gastos as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_gastos ";
            }
        } else {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        porcentaje_gastos as 'y' 
                        FROM evaluaciones 
                        WHERE (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_gastos";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        porcentaje_gastos as 'y' 
                        FROM evaluaciones 
                        WHERE (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_gastos";
            }
        }
    }
    static function ObtenerEstadisticasPersonal($params)
    {
        $params_ccaa = $params['params_ccaa'];
        $params_sector = $params['params_sector'];
        $params_ano_constitucionDesde = $params['params_ano_constitucionDesde'];
        $params_ano_constitucionHasta = $params['params_ano_constitucionHasta'];
        $params_num_empleadosDesde = $params['params_num_empleadosDesde'];
        $params_num_empleadosHasta = $params['params_num_empleadosHasta'];
        $params_fact_empresaDesde = $params['params_fact_empresaDesde'];
        $params_fact_empresaHasta = $params['params_fact_empresaHasta'];

        if ($params_ccaa != "Todas") {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        porcentaje_personal as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa') 
                        AND (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_personal ";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        porcentaje_personal as 'y' 
                        FROM evaluaciones 
                        WHERE (ccaa='$params_ccaa')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_personal ";
            }
        } else {
            if ($params_sector != "0000") {

                return "SELECT COUNT(*) as 'x',  
                        porcentaje_personal as 'y' 
                        FROM evaluaciones 
                        WHERE (sector='$params_sector')  
                        AND (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_personal";
            } else {
                return "SELECT COUNT(*) as 'x',  
                        porcentaje_personal as 'y' 
                        FROM evaluaciones 
                        WHERE (ano_constitucion BETWEEN $params_ano_constitucionDesde AND $params_ano_constitucionHasta)
                        AND (fact_empresa BETWEEN $params_fact_empresaDesde AND $params_fact_empresaHasta)
                        AND (num_empleados BETWEEN $params_num_empleadosDesde AND $params_num_empleadosHasta)
                        GROUP BY  porcentaje_personal";
            }
        }
    }

    static function GuardarEvaluacion($params)
    {
        $params_nombre = $params['params_nombre'];
        $params_web = $params['params_web'];
        $params_num_empleados = $params['params_num_empleados'];
        $params_ccaa = $params['params_ccaa'];
        $params_cp = $params['params_cp'];
        $params_ano_constitucion = $params['params_ano_constitucion'];
        $params_sector = $params['params_sector'];
        $params_descripcion = $params['params_descripcion'];
        $params_fact_empresa = $params['params_fact_empresa'];
        $params_porcentaje_personal = $params['params_porcentaje_personal'];
        $params_porcentaje_gastos = $params['params_porcentaje_gastos'];
        $params_porcentaje_contratacion = $params['params_porcentaje_contratacion'];
        $params_porcentaje_ventas = $params['params_porcentaje_ventas'];
        $params_puntuacion = $params['params_puntuacion'];
        return "INSERT INTO evaluaciones ( 
            nombre,
            web,
            num_empleados,
            ccaa, 
            cp,
            ano_constitucion,
            sector, 
            descripcion, 
            fact_empresa, 
            porcentaje_personal, 
            porcentaje_gastos, 
            porcentaje_contratacion, 
            porcentaje_ventas, 
            puntuacion) 
        VALUES ( 
        '$params_nombre',
        '$params_web',
        '$params_num_empleados',
        '$params_ccaa',
        '$params_cp',
        '$params_ano_constitucion',
        '$params_sector',
        '$params_descripcion',        
        '$params_fact_empresa',
        '$params_porcentaje_personal',
        '$params_porcentaje_gastos',
        '$params_porcentaje_contratacion',
        '$params_porcentaje_ventas',
        '$params_puntuacion'
        )";
    }
    static function ObtenerUltimaEmpresa()
    {

        return "SELECT porcentaje_personal as 'pP', 
                porcentaje_gastos as 'pG', 
                porcentaje_contratacion as 'pC', 
                porcentaje_ventas as 'pV', 
                puntuacion as 'pu' 
                FROM evaluaciones 
                ORDER BY id desc 
                LIMIT 1";
    }
}
