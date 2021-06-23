<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Estadisticas de las PYMES" />
    <meta name="author" content="Alvaro Cuesta Garcia" />
    <title>Innovacion en las PYMES - Estadísticas</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- librería de iconos para Bootstrap -->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Estilos de fuentes-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <a class="navbar-brand" href="index.php">Innovación en las PYMES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="informacion.php">Información</a>
                <a class="nav-item nav-link" href="formulario.php">Autoevaluación</a>
                <a class="nav-item active nav-link" href="estadisticasComp.php">Estadísticas</a>
            </div>
        </div>
    </nav>

    <!-- Seccion de estadísticas-->
    <section class="page-section  bg-light" id="estadisticas">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading">Descubra el desempeño de otras empresas</h3>
                <br>
                <hr>
            </div>

            <h4 class="text-muted">Filtros</h4>
            <hr>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">

                <div class="row align-items-stretch mb-5">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>Año de constituci&oacute;n</strong></label><br>
                            Desde
                            <select class="form form-control" id="eval_ano_constitucionDesde">
                                <option value="1000">Min</option>
                                <option value="1001">Anterior a 1900</option>
                                <option value="1900">1900</option>
                                <option value="1901">1901</option>
                                <option value="1902">1902</option>
                                <option value="1903">1903</option>
                                <option value="1904">1904</option>
                                <option value="1905">1905</option>
                                <option value="1906">1906</option>
                                <option value="1907">1907</option>
                                <option value="1908">1908</option>
                                <option value="1909">1909</option>
                                <option value="1910">1910</option>
                                <option value="1911">1911</option>
                                <option value="1912">1912</option>
                                <option value="1913">1913</option>
                                <option value="1914">1914</option>
                                <option value="1915">1915</option>
                                <option value="1916">1916</option>
                                <option value="1917">1917</option>
                                <option value="1918">1918</option>
                                <option value="1919">1919</option>
                                <option value="1920">1920</option>
                                <option value="1921">1921</option>
                                <option value="1922">1922</option>
                                <option value="1923">1923</option>
                                <option value="1924">1924</option>
                                <option value="1925">1925</option>
                                <option value="1926">1926</option>
                                <option value="1927">1927</option>
                                <option value="1928">1928</option>
                                <option value="1929">1929</option>
                                <option value="1930">1930</option>
                                <option value="1931">1931</option>
                                <option value="1932">1932</option>
                                <option value="1933">1933</option>
                                <option value="1934">1934</option>
                                <option value="1935">1935</option>
                                <option value="1936">1936</option>
                                <option value="1937">1937</option>
                                <option value="1938">1938</option>
                                <option value="1939">1939</option>
                                <option value="1940">1940</option>
                                <option value="1941">1941</option>
                                <option value="1942">1942</option>
                                <option value="1943">1943</option>
                                <option value="1944">1944</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>

                            </select>
                            Hasta
                            <select class="form form-control" id="eval_ano_constitucionHasta">
                                <option value="3000">Max</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                                <option value="1904">1904</option>
                                <option value="1903">1903</option>
                                <option value="1902">1902</option>
                                <option value="1901">1901</option>
                                <option value="1900">1900</option>
                                <option value="0000">Anterior a 1900</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><strong>Comunidad aut&oacute;noma</strong></label>
                            <div class="form-group">
                                <select class="form form-control" id="eval_ccaa">
                                    <option value='Todas'>Todas</option>
                                    <option value='Andalucía'>Andalucía</option>
                                    <option value='Aragón'>Aragón</option>
                                    <option value='Principado de Asturias'>Principado de Asturias</option>
                                    <option value='Illes Balears'>Illes Balears</option>
                                    <option value='Canarias'>Canarias</option>
                                    <option value='Cantabria'>Cantabria</option>
                                    <option value='Castilla y León'>Castilla y León</option>
                                    <option value='Castilla-La Mancha'>Castilla-La Mancha</option>
                                    <option value='Cataluña'>Cataluña</option>
                                    <option value='Comunitat Valenciana'>Comunitat Valenciana</option>
                                    <option value='Extremadura'>Extremadura</option>
                                    <option value='Galicia'>Galicia</option>
                                    <option value='Comunidad de Madrid'>Comunidad de Madrid</option>
                                    <option value='Región de Murcia'>Región de Murcia</option>
                                    <option value='Comunidad Foral de Navarra'>Comunidad Foral de Navarra</option>
                                    <option value='País Vasco'>País Vasco</option>
                                    <option value='La Rioja'>La Rioja</option>
                                    <option value='Ciudad Autónoma de Ceuta o Melilla'>Ciudad Autónoma de Ceuta/ Melilla
                                    </option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>Facturacion de la empresa</strong></label><br>
                            Desde
                            <select class="form form-control" id="eval_facturacionDesde">
                                <option value="0">Min</option>
                                <option value="1000000">1 M€</option>
                                <option value="2000000">2 M€</option>
                                <option value="3000000">3 M€</option>
                                <option value="4000000">4 M€</option>
                                <option value="5000000">5 M€</option>
                                <option value="6000000">6 M€</option>
                                <option value="7000000">7 M€</option>
                                <option value="8000000">8 M€</option>
                                <option value="9000000">9 M€</option>
                                <option value="10000000">10 M€</option>
                                <option value="11000000">11 M€</option>
                                <option value="12000000">12 M€</option>
                                <option value="13000000">13 M€</option>
                                <option value="14000000">14 M€</option>
                                <option value="15000000">15 M€</option>
                                <option value="16000000">16 M€</option>
                                <option value="17000000">17 M€</option>
                                <option value="18000000">18 M€</option>
                                <option value="19000000">19 M€</option>
                                <option value="20000000">20 M€</option>
                                <option value="21000000">21 M€</option>
                                <option value="22000000">22 M€</option>
                                <option value="23000000">23 M€</option>
                                <option value="24000000">24 M€</option>
                                <option value="25000000">25 M€</option>
                                <option value="26000000">26 M€</option>
                                <option value="27000000">27 M€</option>
                                <option value="28000000">28 M€</option>
                                <option value="29000000">29 M€</option>
                                <option value="30000000">30 M€</option>
                                <option value="31000000">31 M€</option>
                                <option value="32000000">32 M€</option>
                                <option value="33000000">33 M€</option>
                                <option value="34000000">34 M€</option>
                                <option value="35000000">35 M€</option>
                                <option value="36000000">36 M€</option>
                                <option value="37000000">37 M€</option>
                                <option value="38000000">38 M€</option>
                                <option value="39000000">39 M€</option>
                                <option value="40000000">40 M€</option>
                                <option value="41000000">41 M€</option>
                                <option value="42000000">42 M€</option>
                                <option value="43000000">43 M€</option>
                                <option value="44000000">44 M€</option>
                                <option value="45000000">45 M€</option>
                                <option value="46000000">46 M€</option>
                                <option value="47000000">47 M€</option>
                                <option value="48000000">48 M€</option>
                                <option value="49000000">49 M€</option>
                                <option value="50000000">50 M€</option>
                            </select>
                            Hasta
                            <select class="form form-control" id="eval_facturacionHasta">
                                <option value="50000000">Max</option>
                                <option value="49000000">49 M€</option>
                                <option value="48000000">48 M€</option>
                                <option value="47000000">47 M€</option>
                                <option value="46000000">46 M€</option>
                                <option value="45000000">45 M€</option>
                                <option value="44000000">44 M€</option>
                                <option value="43000000">43 M€</option>
                                <option value="42000000">42 M€</option>
                                <option value="41000000">41 M€</option>
                                <option value="40000000">40 M€</option>
                                <option value="39000000">39 M€</option>
                                <option value="38000000">38 M€</option>
                                <option value="37000000">37 M€</option>
                                <option value="36000000">36 M€</option>
                                <option value="35000000">35 M€</option>
                                <option value="34000000">34 M€</option>
                                <option value="33000000">33 M€</option>
                                <option value="32000000">32 M€</option>
                                <option value="31000000">31 M€</option>
                                <option value="30000000">30 M€</option>
                                <option value="29000000">29 M€</option>
                                <option value="28000000">28 M€</option>
                                <option value="27000000">27 M€</option>
                                <option value="26000000">26 M€</option>
                                <option value="25000000">25 M€</option>
                                <option value="24000000">24 M€</option>
                                <option value="23000000">23 M€</option>
                                <option value="22000000">22 M€</option>
                                <option value="21000000">21 M€</option>
                                <option value="20000000">20 M€</option>
                                <option value="19000000">19 M€</option>
                                <option value="18000000">18 M€</option>
                                <option value="17000000">17 M€</option>
                                <option value="16000000">16 M€</option>
                                <option value="15000000">15 M€</option>
                                <option value="14000000">14 M€</option>
                                <option value="13000000">13 M€</option>
                                <option value="12000000">12 M€</option>
                                <option value="11000000">11 M€</option>
                                <option value="10000000">10 M€</option>
                                <option value="9000000">9 M€</option>
                                <option value="8000000">8 M€</option>
                                <option value="7000000">7 M€</option>
                                <option value="6000000">6 M€</option>
                                <option value="5000000">5 M€</option>
                                <option value="4000000">4 M€</option>
                                <option value="3000000">3 M€</option>
                                <option value="2000000">2 M€</option>
                                <option value="1000000">1 M€</option>
                                <option value="0">0 M€</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><strong>Actividad econ&oacute;mica (C&oacute;digo CNAE)</strong></label>
                            <select class="form form-control" id="eval_sector">
                                <option value="0000">Todos</option>
                                <option value="0111">0111 - Cultivo de cereales (excepto arroz), leguminosas y semillas oleaginosas</option>
                                <option value="0112">0112 - Cultivo de arroz</option>
                                <option value="0113">0113 - Cultivo de hortalizas, raíces y tubérculos</option>
                                <option value="0114">0114 - Cultivo de caña de azúcar</option>
                                <option value="0115">0115 - Cultivo de tabaco</option>
                                <option value="0116">0116 - Cultivo de plantas para fibras textiles</option>
                                <option value="0119">0119 - Otros cultivos no perennes</option>
                                <option value="0121">0121 - Cultivo de la vid</option>
                                <option value="0122">0122 - Cultivo de frutos tropicales y subtropicales</option>
                                <option value="0123">0123 - Cultivo de cítricos</option>
                                <option value="0124">0124 - Cultivo de frutos con hueso y pepitas</option>
                                <option value="0125">0125 - Cultivo de otros árboles y arbustos frutales y frutos secos</option>
                                <option value="0126">0126 - Cultivo de frutos oleaginosos</option>
                                <option value="0127">0127 - Cultivo de plantas para bebidas</option>
                                <option value="0128">0128 - Cultivo de especias, plantas aromáticas, medicinales y farmacéuticas</option>
                                <option value="0129">0129 - Otros cultivos perennes</option>
                                <option value="0130">0130 - Propagación de plantas</option>
                                <option value="0141">0141 - Explotación de ganado bovino para la producción de leche</option>
                                <option value="0142">0142 - Explotación de otro ganado bovino y búfalos</option>
                                <option value="0143">0143 - Explotación de caballos y otros equinos</option>
                                <option value="0144">0144 - Explotación de camellos y otros camélidos</option>
                                <option value="0145">0145 - Explotación de ganado ovino y caprino</option>
                                <option value="0146">0146 - Explotación de ganado porcino</option>
                                <option value="0147">0147 - Avicultura</option>
                                <option value="0149">0149 - Otras explotaciones de ganado</option>
                                <option value="0150">0150 - Producción agrícola combinada con la producción ganadera</option>
                                <option value="0161">0161 - Actividades de apoyo a la agricultura</option>
                                <option value="0162">0162 - Actividades de apoyo a la ganadería</option>
                                <option value="0163">0163 - Actividades de preparación posterior a la cosecha</option>
                                <option value="0164">0164 - Tratamiento de semillas para reproducción</option>
                                <option value="0170">0170 - Caza, captura de animales y servicios relacionados con las mismas</option>
                                <option value="0210">0210 - Silvicultura y otras actividades forestales</option>
                                <option value="0220">0220 - Explotación de la madera</option>
                                <option value="0230">0230 - Recolección de productos silvestres, excepto madera</option>
                                <option value="0240">0240 - Servicios de apoyo a la silvicultura</option>
                                <option value="0311">0311 - Pesca marina</option>
                                <option value="0312">0312 - Pesca en agua dulce</option>
                                <option value="0321">0321 - Acuicultura marina</option>
                                <option value="0322">0322 - Acuicultura en agua dulce</option>
                                <option value="0510">0510 - Extracción de antracita y hulla</option>
                                <option value="0520">0520 - Extracción de lignito</option>
                                <option value="0610">0610 - Extracción de crudo de petróleo</option>
                                <option value="0620">0620 - Extracción de gas natural</option>
                                <option value="0710">0710 - Extracción de minerales de hierro</option>
                                <option value="0721">0721 - Extracción de minerales de uranio y torio</option>
                                <option value="0729">0729 - Extracción de otros minerales metálicos no férreos</option>
                                <option value="0811">0811 - Extracción de piedra ornamental y para la construcción, piedra caliza, yeso, creta y pizarra</option>
                                <option value="0812">0812 - Extracción de gravas y arenas; extracción de arcilla y caolín</option>
                                <option value="0891">0891 - Extracción de minerales para productos químicos y fertilizantes</option>
                                <option value="0892">0892 - Extracción de turba</option>
                                <option value="0893">0893 - Extracción de sal</option>
                                <option value="0899">0899 - Otras industrias extractivas n.c.o.p.</option>
                                <option value="0910">0910 - Actividades de apoyo a la extracción de petróleo y gas natural</option>
                                <option value="0990">0990 - Actividades de apoyo a otras industrias extractivas</option>
                                <option value="1011">1011 - Procesado y conservación de carne</option>
                                <option value="1012">1012 - Procesado y conservación de volatería</option>
                                <option value="1013">1013 - Elaboración de productos cárnicos y de volatería</option>
                                <option value="1021">1021 - Procesado de pescados, crustáceos y moluscos</option>
                                <option value="1022">1022 - Fabricación de conservas de pescado</option>
                                <option value="1031">1031 - Procesado y conservación de patatas</option>
                                <option value="1032">1032 - Elaboración de zumos de frutas y hortalizas</option>
                                <option value="1039">1039 - Otro procesado y conservación de frutas y hortalizas</option>
                                <option value="1042">1042 - Fabricación de margarina y grasas comestibles similares</option>
                                <option value="1043">1043 - Fabricación de aceite de oliva</option>
                                <option value="1044">1044 - Fabricación de otros aceites y grasas</option>
                                <option value="1052">1052 - Elaboración de helados</option>
                                <option value="1053">1053 - Fabricación de quesos</option>
                                <option value="1054">1054 - Preparación de leche y otros productos lácteos</option>
                                <option value="1061">1061 - Fabricación de productos de molinería</option>
                                <option value="1062">1062 - Fabricación de almidones y productos amiláceos</option>
                                <option value="1071">1071 - Fabricación de pan y de productos frescos de panadería y pastelería</option>
                                <option value="1072">1072 - Fabricación de galletas y productos de panadería y pastelería de larga duración</option>
                                <option value="1073">1073 - Fabricación de pastas alimenticias, cuscús y productos similares</option>
                                <option value="1081">1081 - Fabricación de azúcar</option>
                                <option value="1082">1082 - Fabricación de cacao, chocolate y productos de confitería</option>
                                <option value="1083">1083 - Elaboración de café, té e infusiones</option>
                                <option value="1084">1084 - Elaboración de especias, salsas y condimentos</option>
                                <option value="1085">1085 - Elaboración de platos y comidas preparados</option>
                                <option value="1086">1086 - Elaboración de preparados alimenticios homogeneizados y alimentos dietéticos</option>
                                <option value="1089">1089 - Elaboración de otros productos alimenticios n.c.o.p.</option>
                                <option value="1091">1091 - Fabricación de productos para la alimentación de animales de granja</option>
                                <option value="1092">1092 - Fabricación de productos para la alimentación de animales de compañía</option>
                                <option value="1101">1101 - Destilación, rectificación y mezcla de bebidas alcohólicas</option>
                                <option value="1102">1102 - Elaboración de vinos</option>
                                <option value="1103">1103 - Elaboración de sidra y otras bebidas fermentadas a partir de frutas</option>
                                <option value="1104">1104 - Elaboración de otras bebidas no destiladas, procedentes de la fermentación</option>
                                <option value="1105">1105 - Fabricación de cerveza</option>
                                <option value="1106">1106 - Fabricación de malta</option>
                                <option value="1107">1107 - Fabricación de bebidas no alcohólicas; producción de aguas minerales y otras aguas embotelladas</option>
                                <option value="1200">1200 - Industria del tabaco</option>
                                <option value="1310">1310 - Preparación e hilado de fibras textiles</option>
                                <option value="1320">1320 - Fabricación de tejidos textiles</option>
                                <option value="1330">1330 - Acabado de textiles</option>
                                <option value="1391">1391 - Fabricación de tejidos de punto</option>
                                <option value="1392">1392 - Fabricación de artículos confeccionados con textiles, excepto prendas de vestir</option>
                                <option value="1393">1393 - Fabricación de alfombras y moquetas</option>
                                <option value="1394">1394 - Fabricación de cuerdas, cordeles, bramantes y redes</option>
                                <option value="1395">1395 - Fabricación de telas no tejidas y artículos confeccionados con ellas, excepto prendas de vestir</option>
                                <option value="1396">1396 - Fabricación de otros productos textiles de uso técnico e industrial</option>
                                <option value="1399">1399 - Fabricación de otros productos textiles n.c.o.p.</option>
                                <option value="1411">1411 - Confección de prendas de vestir de cuero</option>
                                <option value="1412">1412 - Confección de ropa de trabajo</option>
                                <option value="1413">1413 - Confección de otras prendas de vestir exteriores</option>
                                <option value="1414">1414 - Confección de ropa interior</option>
                                <option value="1419">1419 - Confección de otras prendas de vestir y accesorios</option>
                                <option value="1420">1420 - Fabricación de artículos de peletería</option>
                                <option value="1431">1431 - Confección de calcetería</option>
                                <option value="1439">1439 - Confección de otras prendas de vestir de punto</option>
                                <option value="1511">1511 - Preparación, curtido y acabado del cuero; preparación y teñido de pieles</option>
                                <option value="1512">1512 - Fabricación de artículos de marroquinería, viaje y de guarnicionería y talabartería</option>
                                <option value="1520">1520 - Fabricación de calzado</option>
                                <option value="1610">1610 - Aserrado y cepillado de la madera</option>
                                <option value="1621">1621 - Fabricación de chapas y tableros de madera</option>
                                <option value="1622">1622 - Fabricación de suelos de madera ensamblados</option>
                                <option value="1623">1623 - Fabricación de otras estructuras de madera y piezas de carpintería y ebanistería para la construcción</option>
                                <option value="1624">1624 - Fabricación de envases y embalajes de madera</option>
                                <option value="1629">1629 - Fabricación de otros productos de madera; artículos de corcho, cestería y espartería</option>
                                <option value="1711">1711 - Fabricación de pasta papelera</option>
                                <option value="1712">1712 - Fabricación de papel y cartón</option>
                                <option value="1721">1721 - Fabricación de papel y cartón ondulados; fabricación de envases y embalajes de papel y cartón</option>
                                <option value="1722">1722 - Fabricación de artículos de papel y cartón para uso doméstico, sanitario e higiénico</option>
                                <option value="1723">1723 - Fabricación de artículos de papelería</option>
                                <option value="1724">1724 - Fabricación de papeles pintados</option>
                                <option value="1729">1729 - Fabricación de otros artículos de papel y cartón</option>
                                <option value="1811">1811 - Artes gráficas y servicios relacionados con las mismas</option>
                                <option value="1812">1812 - Otras actividades de impresión y artes gráficas</option>
                                <option value="1813">1813 - Servicios de preimpresión y preparación de soportes</option>
                                <option value="1814">1814 - Encuadernación y servicios relacionados con la misma</option>
                                <option value="1820">1820 - Reproducción de soportes grabados</option>
                                <option value="1910">1910 - Coquerías</option>
                                <option value="1920">1920 - Refino de petróleo</option>
                                <option value="2011">2011 - Fabricación de gases industriales</option>
                                <option value="2012">2012 - Fabricación de colorantes y pigmentos</option>
                                <option value="2013">2013 - Fabricación de otros productos básicos de química inorgánica</option>
                                <option value="2014">2014 - Fabricación de otros productos básicos de química orgánica</option>
                                <option value="2015">2015 - Fabricación de fertilizantes y compuestos nitrogenados</option>
                                <option value="2016">2016 - Fabricación de plásticos en formas primarias</option>
                                <option value="2017">2017 - Fabricación de caucho sintético en formas primarias</option>
                                <option value="2020">2020 - Fabricación de pesticidas y otros productos agroquímicos</option>
                                <option value="2030">2030 - Fabricación de pinturas, barnices y revestimientos similares; tintas de imprenta y masillas</option>
                                <option value="2041">2041 - Fabricación de jabones, detergentes y otros artículos de limpieza y abrillantamiento</option>
                                <option value="2042">2042 - Fabricación de perfumes y cosméticos</option>
                                <option value="2051">2051 - Fabricación de explosivos</option>
                                <option value="2052">2052 - Fabricación de colas</option>
                                <option value="2053">2053 - Fabricación de aceites esenciales</option>
                                <option value="2059">2059 - Fabricación de otros productos químicos n.c.o.p.</option>
                                <option value="2060">2060 - Fabricación de fibras artificiales y sintéticas</option>
                                <option value="2110">2110 - Fabricación de productos farmacéuticos de base</option>
                                <option value="2120">2120 - Fabricación de especialidades farmacéuticas</option>
                                <option value="2211">2211 - Fabricación de neumáticos y cámaras de caucho; reconstrucción y recauchutado de neumáticos</option>
                                <option value="2219">2219 - Fabricación de otros productos de caucho</option>
                                <option value="2221">2221 - Fabricación de placas, hojas, tubos y perfiles de plástico</option>
                                <option value="2222">2222 - Fabricación de envases y embalajes de plástico</option>
                                <option value="2223">2223 - Fabricación de productos de plástico para la construcción</option>
                                <option value="2229">2229 - Fabricación de otros productos de plástico</option>
                                <option value="2311">2311 - Fabricación de vidrio plano</option>
                                <option value="2312">2312 - Manipulado y transformación de vidrio plano</option>
                                <option value="2313">2313 - Fabricación de vidrio hueco</option>
                                <option value="2314">2314 - Fabricación de fibra de vidrio</option>
                                <option value="2319">2319 - Fabricación y manipulado de otro vidrio, incluido el vidrio técnico</option>
                                <option value="2320">2320 - Fabricación de productos cerámicos refractarios</option>
                                <option value="2331">2331 - Fabricación de azulejos y baldosas de cerámica</option>
                                <option value="2332">2332 - Fabricación de ladrillos, tejas y productos de tierras cocidas para la construcción</option>
                                <option value="2341">2341 - Fabricación de artículos cerámicos de uso doméstico y ornamental</option>
                                <option value="2342">2342 - Fabricación de aparatos sanitarios cerámicos</option>
                                <option value="2343">2343 - Fabricación de aisladores y piezas aislantes de material cerámico</option>
                                <option value="2344">2344 - Fabricación de otros productos cerámicos de uso técnico</option>
                                <option value="2349">2349 - Fabricación de otros productos cerámicos</option>
                                <option value="2351">2351 - Fabricación de cemento</option>
                                <option value="2352">2352 - Fabricación de cal y yeso</option>
                                <option value="2361">2361 - Fabricación de elementos de hormigón para la construcción</option>
                                <option value="2362">2362 - Fabricación de elementos de yeso para la construcción</option>
                                <option value="2363">2363 - Fabricación de hormigón fresco</option>
                                <option value="2364">2364 - Fabricación de mortero</option>
                                <option value="2365">2365 - Fabricación de fibrocemento</option>
                                <option value="2369">2369 - Fabricación de otros productos de hormigón, yeso y cemento</option>
                                <option value="2370">2370 - Corte, tallado y acabado de la piedra</option>
                                <option value="2391">2391 - Fabricación de productos abrasivos</option>
                                <option value="2399">2399 - Fabricación de otros productos minerales no metálicos n.c.o.p.</option>
                                <option value="2410">2410 - Fabricación de productos básicos de hierro, acero y ferroaleaciones</option>
                                <option value="2420">2420 - Fabricación de tubos, tuberías, perfiles huecos y sus accesorios, de acero</option>
                                <option value="2431">2431 - Estirado en frío</option>
                                <option value="2432">2432 - Laminación en frío</option>
                                <option value="2433">2433 - Producción de perfiles en frío por conformación con plegado</option>
                                <option value="2434">2434 - Trefilado en frío</option>
                                <option value="2441">2441 - Producción de metales preciosos</option>
                                <option value="2442">2442 - Producción de aluminio</option>
                                <option value="2443">2443 - Producción de plomo, zinc y estaño</option>
                                <option value="2444">2444 - Producción de cobre</option>
                                <option value="2445">2445 - Producción de otros metales no férreos</option>
                                <option value="2446">2446 - Procesamiento de combustibles nucleares</option>
                                <option value="2451">2451 - Fundición de hierro</option>
                                <option value="2452">2452 - Fundición de acero</option>
                                <option value="2453">2453 - Fundición de metales ligeros</option>
                                <option value="2454">2454 - Fundición de otros metales no férreos</option>
                                <option value="2511">2511 - Fabricación de estructuras metálicas y sus componentes</option>
                                <option value="2512">2512 - Fabricación de carpintería metálica</option>
                                <option value="2521">2521 - Fabricación de radiadores y calderas para calefacción central</option>
                                <option value="2529">2529 - Fabricación de otras cisternas, grandes depósitos y contenedores de metal</option>
                                <option value="2530">2530 - Fabricación de generadores de vapor, excepto calderas de calefacción central</option>
                                <option value="2540">2540 - Fabricación de armas y municiones</option>
                                <option value="2550">2550 - Forja, estampación y embutición de metales; metalurgia de polvos</option>
                                <option value="2561">2561 - Tratamiento y revestimiento de metales</option>
                                <option value="2562">2562 - Ingeniería mecánica por cuenta de terceros</option>
                                <option value="2571">2571 - Fabricación de artículos de cuchillería y cubertería</option>
                                <option value="2572">2572 - Fabricación de cerraduras y herrajes</option>
                                <option value="2573">2573 - Fabricación de herramientas</option>
                                <option value="2591">2591 - Fabricación de bidones y toneles de hierro o acero</option>
                                <option value="2592">2592 - Fabricación de envases y embalajes metálicos ligeros</option>
                                <option value="2593">2593 - Fabricación de productos de alambre, cadenas y muelles</option>
                                <option value="2594">2594 - Fabricación de pernos y productos de tornillería</option>
                                <option value="2599">2599 - Fabricación de otros productos metálicos n.c.o.p.</option>
                                <option value="2611">2611 - Fabricación de componentes electrónicos</option>
                                <option value="2612">2612 - Fabricación de circuitos impresos ensamblados</option>
                                <option value="2620">2620 - Fabricación de ordenadores y equipos periféricos</option>
                                <option value="2630">2630 - Fabricación de equipos de telecomunicaciones</option>
                                <option value="2640">2640 - Fabricación de productos electrónicos de consumo</option>
                                <option value="2651">2651 - Fabricación de instrumentos y aparatos de medida, verificación y navegación</option>
                                <option value="2652">2652 - Fabricación de relojes</option>
                                <option value="2660">2660 - Fabricación de equipos de radiación, electromédicos y electroterapéuticos</option>
                                <option value="2670">2670 - Fabricación de instrumentos de óptica y equipo fotográfico</option>
                                <option value="2680">2680 - Fabricación de soportes magnéticos y ópticos</option>
                                <option value="2711">2711 - Fabricación de motores, generadores y transformadores eléctricos</option>
                                <option value="2712">2712 - Fabricación de aparatos de distribución y control eléctrico</option>
                                <option value="2720">2720 - Fabricación de pilas y acumuladores eléctricos</option>
                                <option value="2731">2731 - Fabricación de cables de fibra óptica</option>
                                <option value="2732">2732 - Fabricación de otros hilos y cables electrónicos y eléctricos</option>
                                <option value="2733">2733 - Fabricación de dispositivos de cableado</option>
                                <option value="2740">2740 - Fabricación de lámparas y aparatos eléctricos de iluminación</option>
                                <option value="2751">2751 - Fabricación de electrodomésticos</option>
                                <option value="2752">2752 - Fabricación de aparatos domésticos no eléctricos</option>
                                <option value="2790">2790 - Fabricación de otro material y equipo eléctrico</option>
                                <option value="2811">2811 - Fabricación de motores y turbinas, excepto los destinados a aeronaves, vehículos automóviles y ciclomotores</option>
                                <option value="2812">2812 - Fabricación de equipos de transmisión hidráulica y neumática</option>
                                <option value="2813">2813 - Fabricación de otras bombas y compresores</option>
                                <option value="2814">2814 - Fabricación de otra grifería y válvulas</option>
                                <option value="2815">2815 - Fabricación de cojinetes, engranajes y órganos mecánicos de transmisión</option>
                                <option value="2821">2821 - Fabricación de hornos y quemadores</option>
                                <option value="2822">2822 - Fabricación de maquinaria de elevación y manipulación</option>
                                <option value="2823">2823 - Fabricación de máquinas y equipos de oficina, excepto equipos informáticos</option>
                                <option value="2824">2824 - Fabricación de herramientas eléctricas manuales</option>
                                <option value="2825">2825 - Fabricación de maquinaria de ventilación y refrigeración no doméstica</option>
                                <option value="2829">2829 - Fabricación de otra maquinaria de uso general n.c.o.p.</option>
                                <option value="2830">2830 - Fabricación de maquinaria agraria y forestal</option>
                                <option value="2841">2841 - Fabricación de máquinas herramienta para trabajar el metal</option>
                                <option value="2849">2849 - Fabricación de otras máquinas herramienta</option>
                                <option value="2891">2891 - Fabricación de maquinaria para la industria metalúrgica</option>
                                <option value="2892">2892 - Fabricación de maquinaria para las industrias extractivas y de la construcción</option>
                                <option value="2893">2893 - Fabricación de maquinaria para la industria de la alimentación, bebidas y tabaco</option>
                                <option value="2894">2894 - Fabricación de maquinaria para las industrias textil, de la confección y del cuero</option>
                                <option value="2895">2895 - Fabricación de maquinaria para la industria del papel y del cartón</option>
                                <option value="2896">2896 - Fabricación de maquinaria para la industria del plástico y el caucho</option>
                                <option value="2899">2899 - Fabricación de otra maquinaria para usos específicos n.c.o.p.</option>
                                <option value="2910">2910 - Fabricación de vehículos de motor</option>
                                <option value="2920">2920 - Fabricación de carrocerías para vehículos de motor; fabricación de remolques y semirremolques</option>
                                <option value="2931">2931 - Fabricación de equipos eléctricos y electrónicos para vehículos de motor</option>
                                <option value="2932">2932 - Fabricación de otros componentes, piezas y accesorios para vehículos de motor</option>
                                <option value="3011">3011 - Construcción de barcos y estructuras flotantes</option>
                                <option value="3012">3012 - Construcción de embarcaciones de recreo y deporte</option>
                                <option value="3020">3020 - Fabricación de locomotoras y material ferroviario</option>
                                <option value="3030">3030 - Construcción aeronáutica y espacial y su maquinaria</option>
                                <option value="3040">3040 - Fabricación de vehículos militares de combate</option>
                                <option value="3091">3091 - Fabricación de motocicletas</option>
                                <option value="3092">3092 - Fabricación de bicicletas y de vehículos para personas con discapacidad</option>
                                <option value="3099">3099 - Fabricación de otro material de transporte n.c.o.p.</option>
                                <option value="3101">3101 - Fabricación de muebles de oficina y de establecimientos comerciales</option>
                                <option value="3102">3102 - Fabricación de muebles de cocina</option>
                                <option value="3103">3103 - Fabricación de colchones</option>
                                <option value="3109">3109 - Fabricación de otros muebles</option>
                                <option value="3211">3211 - Fabricación de monedas</option>
                                <option value="3212">3212 - Fabricación de artículos de joyería y artículos similares</option>
                                <option value="3213">3213 - Fabricación de artículos de bisutería y artículos similares</option>
                                <option value="3220">3220 - Fabricación de instrumentos musicales</option>
                                <option value="3230">3230 - Fabricación de artículos de deporte</option>
                                <option value="3240">3240 - Fabricación de juegos y juguetes</option>
                                <option value="3250">3250 - Fabricación de instrumentos y suministros médicos y odontológicos</option>
                                <option value="3291">3291 - Fabricación de escobas, brochas y cepillos</option>
                                <option value="3299">3299 - Otras industrias manufactureras n.c.o.p.</option>
                                <option value="3311">3311 - Reparación de productos metálicos</option>
                                <option value="3312">3312 - Reparación de maquinaria</option>
                                <option value="3313">3313 - Reparación de equipos electrónicos y ópticos</option>
                                <option value="3314">3314 - Reparación de equipos eléctricos</option>
                                <option value="3315">3315 - Reparación y mantenimiento naval</option>
                                <option value="3316">3316 - Reparación y mantenimiento aeronáutico y espacial</option>
                                <option value="3317">3317 - Reparación y mantenimiento de otro material de transporte</option>
                                <option value="3319">3319 - Reparación de otros equipos</option>
                                <option value="3320">3320 - Instalación de máquinas y equipos industriales</option>
                                <option value="3512">3512 - Transporte de energía eléctrica</option>
                                <option value="3513">3513 - Distribución de energía eléctrica</option>
                                <option value="3514">3514 - Comercio de energía eléctrica</option>
                                <option value="3515">3515 - Producción de energía hidroeléctrica</option>
                                <option value="3516">3516 - Producción de energía eléctrica de origen térmico convencional</option>
                                <option value="3517">3517 - Producción de energía eléctrica de origen nuclear</option>
                                <option value="3518">3518 - Producción de energía eléctrica de origen eólico</option>
                                <option value="3519">3519 - Producción de energía eléctrica de otros tipos</option>
                                <option value="3521">3521 - Producción de gas</option>
                                <option value="3522">3522 - Distribución por tubería de combustibles gaseosos</option>
                                <option value="3523">3523 - Comercio de gas por tubería</option>
                                <option value="3530">3530 - Suministro de vapor y aire acondicionado</option>
                                <option value="3600">3600 - Captación, depuración y distribución de agua</option>
                                <option value="3700">3700 - Recogida y tratamiento de aguas residuales</option>
                                <option value="3811">3811 - Recogida de residuos no peligrosos</option>
                                <option value="3812">3812 - Recogida de residuos peligrosos</option>
                                <option value="3821">3821 - Tratamiento y eliminación de residuos no peligrosos</option>
                                <option value="3822">3822 - Tratamiento y eliminación de residuos peligrosos</option>
                                <option value="3831">3831 - Separación y clasificación de materiales</option>
                                <option value="3832">3832 - Valorización de materiales ya clasificados</option>
                                <option value="3900">3900 - Actividades de descontaminación y otros servicios de gestión de residuos</option>
                                <option value="4110">4110 - Promoción inmobiliaria</option>
                                <option value="4121">4121 - Construcción de edificios residenciales</option>
                                <option value="4122">4122 - Construcción de edificios no residenciales</option>
                                <option value="4211">4211 - Construcción de carreteras y autopistas</option>
                                <option value="4212">4212 - Construcción de vías férreas de superficie y subterráneas</option>
                                <option value="4213">4213 - Construcción de puentes y túneles</option>
                                <option value="4221">4221 - Construcción de redes para fluidos</option>
                                <option value="4222">4222 - Construcción de redes eléctricas y de telecomunicaciones</option>
                                <option value="4291">4291 - Obras hidráulicas</option>
                                <option value="4299">4299 - Construcción de otros proyectos de ingeniería civil n.c.o.p.</option>
                                <option value="4311">4311 - Demolición</option>
                                <option value="4312">4312 - Preparación de terrenos</option>
                                <option value="4313">4313 - Perforaciones y sondeos</option>
                                <option value="4321">4321 - Instalaciones eléctricas</option>
                                <option value="4322">4322 - Fontanería, instalaciones de sistemas de calefacción y aire acondicionado</option>
                                <option value="4329">4329 - Otras instalaciones en obras de construcción</option>
                                <option value="4331">4331 - Revocamiento</option>
                                <option value="4332">4332 - Instalación de carpintería</option>
                                <option value="4333">4333 - Revestimiento de suelos y paredes</option>
                                <option value="4334">4334 - Pintura y acristalamiento</option>
                                <option value="4339">4339 - Otro acabado de edificios</option>
                                <option value="4391">4391 - Construcción de cubiertas</option>
                                <option value="4399">4399 - Otras actividades de construcción especializada n.c.o.p.</option>
                                <option value="4511">4511 - Venta de automóviles y vehículos de motor ligeros</option>
                                <option value="4519">4519 - Venta de otros vehículos de motor</option>
                                <option value="4520">4520 - Mantenimiento y reparación de vehículos de motor</option>
                                <option value="4531">4531 - Comercio al por mayor de repuestos y accesorios de vehículos de motor</option>
                                <option value="4532">4532 - Comercio al por menor de repuestos y accesorios de vehículos de motor</option>
                                <option value="4540">4540 - Venta, mantenimiento y reparación de motocicletas y de sus repuestos y accesorios</option>
                                <option value="4611">4611 - Intermediarios del comercio de materias primas agrarias, animales vivos, materias primas textiles y productos semielaborados</option>
                                <option value="4612">4612 - Intermediarios del comercio de combustibles, minerales, metales y productos químicos industriales</option>
                                <option value="4613">4613 - Intermediarios del comercio de la madera y materiales de construcción</option>
                                <option value="4614">4614 - Intermediarios del comercio de maquinaria, equipo industrial, embarcaciones y aeronaves</option>
                                <option value="4615">4615 - Intermediarios del comercio de muebles, artículos para el hogar y ferretería</option>
                                <option value="4616">4616 - Intermediarios del comercio de textiles, prendas de vestir, peletería, calzado y artículos de cuero</option>
                                <option value="4617">4617 - Intermediarios del comercio de productos alimenticios, bebidas y tabaco</option>
                                <option value="4618">4618 - Intermediarios del comercio especializados en la venta de otros productos específicos</option>
                                <option value="4619">4619 - Intermediarios del comercio de productos diversos</option>
                                <option value="4621">4621 - Comercio al por mayor de cereales, tabaco en rama, simientes y alimentos para animales</option>
                                <option value="4622">4622 - Comercio al por mayor de flores y plantas</option>
                                <option value="4623">4623 - Comercio al por mayor de animales vivos</option>
                                <option value="4624">4624 - Comercio al por mayor de cueros y pieles</option>
                                <option value="4631">4631 - Comercio al por mayor de frutas y hortalizas</option>
                                <option value="4632">4632 - Comercio al por mayor de carne y productos cárnicos</option>
                                <option value="4633">4633 - Comercio al por mayor de productos lácteos, huevos, aceites y grasas comestibles</option>
                                <option value="4634">4634 - Comercio al por mayor de bebidas</option>
                                <option value="4635">4635 - Comercio al por mayor de productos del tabaco</option>
                                <option value="4636">4636 - Comercio al por mayor de azúcar, chocolate y confitería</option>
                                <option value="4637">4637 - Comercio al por mayor de café, té, cacao y especias</option>
                                <option value="4638">4638 - Comercio al por mayor de pescados y mariscos y otros productos alimenticios</option>
                                <option value="4639">4639 - Comercio al por mayor, no especializado, de productos alimenticios, bebidas y tabaco</option>
                                <option value="4641">4641 - Comercio al por mayor de textiles</option>
                                <option value="4642">4642 - Comercio al por mayor de prendas de vestir y calzado</option>
                                <option value="4643">4643 - Comercio al por mayor de aparatos electrodomésticos</option>
                                <option value="4644">4644 - Comercio al por mayor de porcelana, cristalería y artículos de limpieza</option>
                                <option value="4645">4645 - Comercio al por mayor de productos perfumería y cosmética</option>
                                <option value="4646">4646 - Comercio al por mayor de productos farmacéuticos</option>
                                <option value="4647">4647 - Comercio al por mayor de muebles, alfombras y aparatos de iluminación</option>
                                <option value="4648">4648 - Comercio al por mayor de artículos de relojería y joyería</option>
                                <option value="4649">4649 - Comercio al por mayor de otros artículos de uso doméstico</option>
                                <option value="4651">4651 - Comercio al por mayor de ordenadores, equipos periféricos y programas informáticos</option>
                                <option value="4652">4652 - Comercio al por mayor de equipos electrónicos y de telecomunicaciones y sus componentes</option>
                                <option value="4661">4661 - Comercio al por mayor de maquinaria, equipos y suministros agrícolas</option>
                                <option value="4662">4662 - Comercio al por mayor de máquinas herramienta</option>
                                <option value="4663">4663 - Comercio al por mayor de maquinaria para la minería, la construcción y la ingeniería civil</option>
                                <option value="4664">4664 - Comercio al por mayor de maquinaria para la industria textil y de máquinas de coser y tricotar</option>
                                <option value="4665">4665 - Comercio al por mayor de muebles de oficina</option>
                                <option value="4666">4666 - Comercio al por mayor de otra maquinaria y equipo de oficina</option>
                                <option value="4669">4669 - Comercio al por mayor de otra maquinaria y equipo</option>
                                <option value="4671">4671 - Comercio al por mayor de combustibles sólidos, líquidos y gaseosos, y productos similares</option>
                                <option value="4672">4672 - Comercio al por mayor de metales y minerales metálicos</option>
                                <option value="4673">4673 - Comercio al por mayor de madera, materiales de construcción y aparatos sanitarios</option>
                                <option value="4674">4674 - Comercio al por mayor de ferretería, fontanería y calefacción</option>
                                <option value="4675">4675 - Comercio al por mayor de productos químicos</option>
                                <option value="4676">4676 - Comercio al por mayor de otros productos semielaborados</option>
                                <option value="4677">4677 - Comercio al por mayor de chatarra y productos de desecho</option>
                                <option value="4690">4690 - Comercio al por mayor no especializado</option>
                                <option value="4711">4711 - Comercio al por menor en establecimientos no especializados, con predominio en productos alimenticios, bebidas y tabaco</option>
                                <option value="4719">4719 - Otro comercio al por menor en establecimientos no especializados</option>
                                <option value="4721">4721 - Comercio al por menor de frutas y hortalizas en establecimientos especializados</option>
                                <option value="4722">4722 - Comercio al por menor de carne y productos cárnicos en establecimientos especializados</option>
                                <option value="4723">4723 - Comercio al por menor de pescados y mariscos en establecimientos especializados</option>
                                <option value="4724">4724 - Comercio al por menor de pan y productos de panadería, confitería y pastelería en establecimientos especializados</option>
                                <option value="4725">4725 - Comercio al por menor de bebidas en establecimientos especializados</option>
                                <option value="4726">4726 - Comercio al por menor de productos de tabaco en establecimientos especializados</option>
                                <option value="4729">4729 - Otro comercio al por menor de productos alimenticios en establecimientos especializados</option>
                                <option value="4730">4730 - Comercio al por menor de combustible para la automoción en establecimientos especializados</option>
                                <option value="4741">4741 - Comercio al por menor de ordenadores, equipos periféricos y programas informáticos en establecimientos especializados</option>
                                <option value="4742">4742 - Comercio al por menor de equipos de telecomunicaciones en establecimientos especializados</option>
                                <option value="4743">4743 - Comercio al por menor de equipos de audio y vídeo en establecimientos especializados</option>
                                <option value="4751">4751 - Comercio al por menor de textiles en establecimientos especializados</option>
                                <option value="4752">4752 - Comercio al por menor de ferretería, pintura y vidrio en establecimientos especializados</option>
                                <option value="4753">4753 - Comercio al por menor de alfombras, moquetas y revestimientos de paredes y suelos en establecimientos especializados</option>
                                <option value="4754">4754 - Comercio al por menor de aparatos electrodomésticos en establecimientos especializados</option>
                                <option value="4759">4759 - Comercio al por menor de muebles, aparatos de iluminación y otros artículos de uso doméstico en establecimientos especializados</option>
                                <option value="4761">4761 - Comercio al por menor de libros en establecimientos especializados</option>
                                <option value="4762">4762 - Comercio al por menor de periódicos y artículos de papelería en establecimientos especializados</option>
                                <option value="4763">4763 - Comercio al por menor de grabaciones de música y vídeo en establecimientos especializados</option>
                                <option value="4764">4764 - Comercio al por menor de artículos deportivos en establecimientos especializados</option>
                                <option value="4765">4765 - Comercio al por menor de juegos y juguetes en establecimientos especializados</option>
                                <option value="4771">4771 - Comercio al por menor de prendas de vestir en establecimientos especializados</option>
                                <option value="4772">4772 - Comercio al por menor de calzado y artículos de cuero en establecimientos especializados</option>
                                <option value="4773">4773 - Comercio al por menor de productos farmacéuticos en establecimientos especializados</option>
                                <option value="4774">4774 - Comercio al por menor de artículos médicos y ortopédicos en establecimientos especializados</option>
                                <option value="4775">4775 - Comercio al por menor de productos cosméticos e higiénicos en establecimientos especializados</option>
                                <option value="4776">4776 - Comercio al por menor de flores, plantas, semillas, fertilizantes, animales de compañía y alimentos para los mismos en establecimientos especializados</option>
                                <option value="4777">4777 - Comercio al por menor de artículos de relojería y joyería en establecimientos especializados</option>
                                <option value="4778">4778 - Otro comercio al por menor de artículos nuevos en establecimientos especializados</option>
                                <option value="4779">4779 - Comercio al por menor de artículos de segunda mano en establecimientos</option>
                                <option value="4781">4781 - Comercio al por menor de productos alimenticios, bebidas y tabaco en puestos de venta y en mercadillos</option>
                                <option value="4782">4782 - Comercio al por menor de productos textiles, prendas de vestir y calzado en puestos de venta y en mercadillos</option>
                                <option value="4789">4789 - Comercio al por menor de otros productos en puestos de venta y en mercadillos</option>
                                <option value="4791">4791 - Comercio al por menor por correspondencia o Internet</option>
                                <option value="4799">4799 - Otro comercio al por menor no realizado ni en establecimientos, ni en puestos de venta ni en mercadillos</option>
                                <option value="4910">4910 - Transporte interurbano de pasajeros por ferrocarril</option>
                                <option value="4920">4920 - Transporte de mercancías por ferrocarril</option>
                                <option value="4931">4931 - Transporte terrestre urbano y suburbano de pasajeros</option>
                                <option value="4932">4932 - Transporte por taxi</option>
                                <option value="4939">4939 - tipos de transporte terrestre de pasajeros n.c.o.p.</option>
                                <option value="4941">4941 - Transporte de mercancías por carretera</option>
                                <option value="4942">4942 - Servicios de mudanza</option>
                                <option value="4950">4950 - Transporte por tubería</option>
                                <option value="5010">5010 - Transporte marítimo de pasajeros</option>
                                <option value="5020">5020 - Transporte marítimo de mercancías</option>
                                <option value="5030">5030 - Transporte de pasajeros por vías navegables interiores</option>
                                <option value="5040">5040 - Transporte de mercancías por vías navegables interiores</option>
                                <option value="5110">5110 - Transporte aéreo de pasajeros</option>
                                <option value="5121">5121 - Transporte aéreo de mercancías</option>
                                <option value="5122">5122 - Transporte espacial</option>
                                <option value="5210">5210 - Depósito y almacenamiento</option>
                                <option value="5221">5221 - Actividades anexas al transporte terrestre</option>
                                <option value="5222">5222 - Actividades anexas al transporte marítimo y por vías navegables interiores</option>
                                <option value="5223">5223 - Actividades anexas al transporte aéreo</option>
                                <option value="5224">5224 - Manipulación de mercancías</option>
                                <option value="5229">5229 - Otras actividades anexas al transporte</option>
                                <option value="5310">5310 - Actividades postales sometidas a la obligación del servicio universal</option>
                                <option value="5320">5320 - Otras actividades postales y de correos</option>
                                <option value="5510">5510 - Hoteles y alojamientos similares</option>
                                <option value="5520">5520 - Alojamientos turísticos y otros alojamientos de corta estancia</option>
                                <option value="5530">5530 - Campings y aparcamientos para caravanas</option>
                                <option value="5590">5590 - Otros alojamientos</option>
                                <option value="5610">5610 - Restaurantes y puestos de comidas</option>
                                <option value="5621">5621 - Provisión de comidas preparadas para eventos</option>
                                <option value="5629">5629 - Otros servicios de comidas</option>
                                <option value="5630">5630 - Establecimientos de bebidas</option>
                                <option value="5811">5811 - Edición de libros</option>
                                <option value="5812">5812 - Edición de directorios y guías de direcciones postales</option>
                                <option value="5813">5813 - Edición de periódicos</option>
                                <option value="5814">5814 - Edición de revistas</option>
                                <option value="5819">5819 - Otras actividades editoriales</option>
                                <option value="5821">5821 - Edición de videojuegos</option>
                                <option value="5829">5829 - Edición de otros programas informáticos</option>
                                <option value="5912">5912 - Actividades de postproducción cinematográfica, de vídeo y de programas de televisión</option>
                                <option value="5914">5914 - Actividades de exhibición cinematográfica</option>
                                <option value="5915">5915 - Actividades de producción cinematográfica y de vídeo</option>
                                <option value="5916">5916 - Actividades de producciones de programas de televisión</option>
                                <option value="5917">5917 - Actividades de distribución cinematográfica y de vídeo</option>
                                <option value="5918">5918 - Actividades de distribución de programas de televisión</option>
                                <option value="5920">5920 - Actividades de grabación de sonido y edición musical</option>
                                <option value="6010">6010 - Actividades de radiodifusión</option>
                                <option value="6020">6020 - Actividades de programación y emisión de televisión</option>
                                <option value="6110">6110 - Telecomunicaciones por cable</option>
                                <option value="6120">6120 - Telecomunicaciones inalámbricas</option>
                                <option value="6130">6130 - Telecomunicaciones por satélite</option>
                                <option value="6190">6190 - Otras actividades de telecomunicaciones</option>
                                <option value="6201">6201 - Actividades de programación informática</option>
                                <option value="6202">6202 - Actividades de consultoría informática</option>
                                <option value="6203">6203 - Gestión de recursos informáticos</option>
                                <option value="6209">6209 - Otros servicios relacionados con las tecnologías de la información y la informática</option>
                                <option value="6311">6311 - Proceso de datos, hosting y actividades relacionadas</option>
                                <option value="6312">6312 - Portales web</option>
                                <option value="6391">6391 - Actividades de las agencias de noticias</option>
                                <option value="6399">6399 - Otros servicios de información n.c.o.p.</option>
                                <option value="6411">6411 - Banco central</option>
                                <option value="6419">6419 - Otra intermediación monetaria</option>
                                <option value="6420">6420 - Actividades de las sociedades holding</option>
                                <option value="6430">6430 - Inversión colectiva, fondos y entidades financieras similares</option>
                                <option value="6491">6491 - Arrendamiento financiero</option>
                                <option value="6492">6492 - Otras actividades crediticias</option>
                                <option value="6499">6499 - Otros servicios financieros, excepto seguros y fondos de pensiones n.c.o.p.</option>
                                <option value="6511">6511 - Seguros de vida</option>
                                <option value="6512">6512 - Seguros distintos de los seguros de vida</option>
                                <option value="6520">6520 - Reaseguros</option>
                                <option value="6530">6530 - Fondos de pensiones</option>
                                <option value="6611">6611 - Administración de mercados financieros</option>
                                <option value="6612">6612 - Actividades de intermediación en operaciones con valores y otros activos</option>
                                <option value="6619">6619 - Otras actividades auxiliares a los servicios financieros, excepto seguros y fondos de pensiones</option>
                                <option value="6621">6621 - Evaluación de riesgos y daños</option>
                                <option value="6622">6622 - Actividades de agentes y corredores de seguros</option>
                                <option value="6629">6629 - Otras actividades auxiliares a seguros y fondos de pensiones</option>
                                <option value="6630">6630 - Actividades de gestión de fondos</option>
                                <option value="6810">6810 - Compraventa de bienes inmobiliarios por cuenta propia</option>
                                <option value="6820">6820 - Alquiler de bienes inmobiliarios por cuenta propia</option>
                                <option value="6831">6831 - Agentes de la propiedad inmobiliaria</option>
                                <option value="6832">6832 - Gestión y administración de la propiedad inmobiliaria</option>
                                <option value="6910">6910 - Actividades jurídicas</option>
                                <option value="6920">6920 - Actividades de contabilidad, teneduría de libros, auditoría y asesoría fiscal</option>
                                <option value="7010">7010 - Actividades de las sedes centrales</option>
                                <option value="7021">7021 - Relaciones públicas y comunicación</option>
                                <option value="7022">7022 - Otras actividades de consultoría de gestión empresarial</option>
                                <option value="7111">7111 - Servicios técnicos de arquitectura</option>
                                <option value="7112">7112 - Servicios técnicos de ingeniería y otras actividades relacionadas con el asesoramiento técnico</option>
                                <option value="7120">7120 - Ensayos y análisis técnicos</option>
                                <option value="7211">7211 - Investigación y desarrollo experimental en biotecnología</option>
                                <option value="7219">7219 - Otra investigación y desarrollo experimental en ciencias naturales y técnicas</option>
                                <option value="7220">7220 - Investigación y desarrollo experimental en ciencias sociales y humanidades</option>
                                <option value="7311">7311 - Agencias de publicidad</option>
                                <option value="7312">7312 - Servicios de representación de medios de comunicación</option>
                                <option value="7320">7320 - Estudio de mercado y realización de encuestas de opinión pública</option>
                                <option value="7410">7410 - Actividades de diseño especializado</option>
                                <option value="7420">7420 - Actividades de fotografía</option>
                                <option value="7430">7430 - Actividades de traducción e interpretación</option>
                                <option value="7490">7490 - Otras actividades profesionales, científicas y técnicas n.c.o.p.</option>
                                <option value="7500">7500 - Actividades veterinarias</option>
                                <option value="7711">7711 - Alquiler de automóviles y vehículos de motor ligeros</option>
                                <option value="7712">7712 - Alquiler de camiones</option>
                                <option value="7721">7721 - Alquiler de artículos de ocio y deportivos</option>
                                <option value="7722">7722 - Alquiler de cintas de vídeo y discos</option>
                                <option value="7729">7729 - Alquiler de otros efectos personales y artículos de uso doméstico</option>
                                <option value="7731">7731 - Alquiler de maquinaria y equipo de uso agrícola</option>
                                <option value="7732">7732 - Alquiler de maquinaria y equipo para la construcción e ingeniería civil</option>
                                <option value="7733">7733 - Alquiler de maquinaria y equipo de oficina, incluidos ordenadores</option>
                                <option value="7734">7734 - Alquiler de medios de navegación</option>
                                <option value="7735">7735 - Alquiler de medios de transporte aéreo</option>
                                <option value="7739">7739 - Alquiler de otra maquinaria, equipos y bienes tangibles n.c.o.p.</option>
                                <option value="7740">7740 - Arrendamiento de la propiedad intelectual y productos similares, excepto trabajos protegidos por los derechos de autor</option>
                                <option value="7810">7810 - Actividades de las agencias de colocación</option>
                                <option value="7820">7820 - Actividades de las empresas de trabajo temporal</option>
                                <option value="7830">7830 - Otra provisión de recursos humanos</option>
                                <option value="7911">7911 - Actividades de las agencias de viajes</option>
                                <option value="7912">7912 - Actividades de los operadores turísticos</option>
                                <option value="7990">7990 - Otros servicios de reservas y actividades relacionadas con los mismos</option>
                                <option value="8010">8010 - Actividades de seguridad privada</option>
                                <option value="8020">8020 - Servicios de sistemas de seguridad</option>
                                <option value="8030">8030 - Actividades de investigación</option>
                                <option value="8110">8110 - Servicios integrales a edificios e instalaciones</option>
                                <option value="8121">8121 - Limpieza general de edificios</option>
                                <option value="8122">8122 - Otras actividades de limpieza industrial y de edificios</option>
                                <option value="8129">8129 - Otras actividades de limpieza</option>
                                <option value="8130">8130 - Actividades de jardinería</option>
                                <option value="8211">8211 - Servicios administrativos combinados</option>
                                <option value="8219">8219 - Actividades de fotocopiado, preparación de documentos y otras actividades especializadas de oficina</option>
                                <option value="8220">8220 - Actividades de los centros de llamadas</option>
                                <option value="8230">8230 - Organización de convenciones y ferias de muestras</option>
                                <option value="8291">8291 - Actividades de las agencias de cobros y de información comercial</option>
                                <option value="8292">8292 - Actividades de envasado y empaquetado</option>
                                <option value="8299">8299 - Otras actividades de apoyo a las empresas n.c.o.p.</option>
                                <option value="8411">8411 - Actividades generales de la Administración Pública</option>
                                <option value="8412">8412 - Regulación de las actividades sanitarias, educativas y culturales y otros servicios sociales, excepto Seguridad Social</option>
                                <option value="8413">8413 - Regulación de la actividad económica y contribución a su mayor eficiencia</option>
                                <option value="8421">8421 - Asuntos exteriores</option>
                                <option value="8422">8422 - Defensa</option>
                                <option value="8423">8423 - Justicia</option>
                                <option value="8424">8424 - Orden público y seguridad</option>
                                <option value="8425">8425 - Protección civil</option>
                                <option value="8430">8430 - Seguridad Social obligatoria</option>
                                <option value="8510">8510 - Educación preprimaria</option>
                                <option value="8520">8520 - Educación primaria</option>
                                <option value="8531">8531 - Educación secundaria general</option>
                                <option value="8532">8532 - Educación secundaria técnica y profesional</option>
                                <option value="8541">8541 - Educación postsecundaria no terciaria</option>
                                <option value="8543">8543 - Educación universitaria</option>
                                <option value="8544">8544 - Educación terciaria no universitaria</option>
                                <option value="8551">8551 - Educación deportiva y recreativa</option>
                                <option value="8552">8552 - Educación cultural</option>
                                <option value="8553">8553 - Actividades de las escuelas de conducción y pilotaje</option>
                                <option value="8559">8559 - Otra educación n.c.o.p.</option>
                                <option value="8560">8560 - Actividades auxiliares a la educación</option>
                                <option value="8610">8610 - Actividades hospitalarias</option>
                                <option value="8621">8621 - Actividades de medicina general</option>
                                <option value="8622">8622 - Actividades de medicina especializada</option>
                                <option value="8623">8623 - Actividades odontológicas</option>
                                <option value="8690">8690 - Otras actividades sanitarias</option>
                                <option value="8710">8710 - Asistencia en establecimientos residenciales con cuidados sanitarios</option>
                                <option value="8720">8720 - Asistencia en establecimientos residenciales para personas con discapacidad intelectual, enfermedad mental y drogodependencia</option>
                                <option value="8731">8731 - Asistencia en establecimientos residenciales para personas mayores</option>
                                <option value="8732">8732 - Asistencia en establecimientos residenciales para personas con discapacidad física</option>
                                <option value="8790">8790 - Otras actividades de asistencia en establecimientos residenciales</option>
                                <option value="8811">8811 - Actividades de servicios sociales sin alojamiento para personas mayores</option>
                                <option value="8812">8812 - Actividades de servicios sociales sin alojamiento para personas con discapacidad</option>
                                <option value="8891">8891 - Actividades de cuidado diurno de niños</option>
                                <option value="8899">8899 - Otros actividades de servicios sociales sin alojamiento n.c.o.p.</option>
                                <option value="9001">9001 - Artes escénicas</option>
                                <option value="9002">9002 - Actividades auxiliares a las artes escénicas</option>
                                <option value="9003">9003 - Creación artística y literaria</option>
                                <option value="9004">9004 - Gestión de salas de espectáculos</option>
                                <option value="9102">9102 - Actividades de museos</option>
                                <option value="9103">9103 - Gestión de lugares y edificios históricos</option>
                                <option value="9104">9104 - Actividades de los jardines botánicos, parques zoológicos y reservas naturales</option>
                                <option value="9105">9105 - Actividades de bibliotecas</option>
                                <option value="9106">9106 - Actividades de archivos</option>
                                <option value="9200">9200 - Actividades de juegos de azar y apuestas</option>
                                <option value="9311">9311 - Gestión de instalaciones deportivas</option>
                                <option value="9312">9312 - Actividades de los clubes deportivos</option>
                                <option value="9313">9313 - Actividades de los gimnasios</option>
                                <option value="9319">9319 - Otras actividades deportivas</option>
                                <option value="9321">9321 - Actividades de los parques de atracciones y los parques temáticos</option>
                                <option value="9329">9329 - Otras actividades recreativas y de entretenimiento</option>
                                <option value="9411">9411 - Actividades de organizaciones empresariales y patronales</option>
                                <option value="9412">9412 - Actividades de organizaciones profesionales</option>
                                <option value="9420">9420 - Actividades sindicales</option>
                                <option value="9491">9491 - Actividades de organizaciones religiosas</option>
                                <option value="9492">9492 - Actividades de organizaciones políticas</option>
                                <option value="9499">9499 - Otras actividades asociativas n.c.o.p.</option>
                                <option value="9511">9511 - Reparación de ordenadores y equipos periféricos</option>
                                <option value="9512">9512 - Reparación de equipos de comunicación</option>
                                <option value="9521">9521 - Reparación de aparatos electrónicos de audio y vídeo de uso doméstico</option>
                                <option value="9522">9522 - Reparación de aparatos electrodomésticos y de equipos para el hogar y el jardín</option>
                                <option value="9523">9523 - Reparación de calzado y artículos de cuero</option>
                                <option value="9524">9524 - Reparación de muebles y artículos de menaje</option>
                                <option value="9525">9525 - Reparación de relojes y joyería</option>
                                <option value="9529">9529 - Reparación de otros efectos personales y artículos de uso doméstico</option>
                                <option value="9601">9601 - Lavado y limpieza de prendas textiles y de piel</option>
                                <option value="9602">9602 - Peluquería y otros tratamientos de belleza</option>
                                <option value="9603">9603 - Pompas fúnebres y actividades relacionadas</option>
                                <option value="9604">9604 - Actividades de mantenimiento físico</option>
                                <option value="9609">9609 - Otras servicios personales n.c.o.p.</option>
                                <option value="9700">9700 - Actividades de los hogares como empleadores de personal doméstico</option>
                                <option value="9810">9810 - Actividades de los hogares como productores de bienes para uso propio</option>
                                <option value="9820">9820 - Actividades de los hogares como productores de servicios para uso propio</option>
                                <option value="9900">9900 - Actividades de organizaciones y organismos extraterritoriales</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><strong>Número de empleados</strong></label><br>
                            Desde
                            <select class="form form-control" id="eval_num_empleadosDesde">
                                <option value="0">Min</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65">65</option>
                                <option value="66">66</option>
                                <option value="67">67</option>
                                <option value="68">68</option>
                                <option value="69">69</option>
                                <option value="70">70</option>
                                <option value="71">71</option>
                                <option value="72">72</option>
                                <option value="73">73</option>
                                <option value="74">74</option>
                                <option value="75">75</option>
                                <option value="76">76</option>
                                <option value="77">77</option>
                                <option value="78">78</option>
                                <option value="79">79</option>
                                <option value="80">80</option>
                                <option value="81">81</option>
                                <option value="82">82</option>
                                <option value="83">83</option>
                                <option value="84">84</option>
                                <option value="85">85</option>
                                <option value="86">86</option>
                                <option value="87">87</option>
                                <option value="88">88</option>
                                <option value="89">89</option>
                                <option value="90">90</option>
                                <option value="91">91</option>
                                <option value="92">92</option>
                                <option value="93">93</option>
                                <option value="94">94</option>
                                <option value="95">95</option>
                                <option value="96">96</option>
                                <option value="97">97</option>
                                <option value="98">98</option>
                                <option value="99">99</option>
                                <option value="100">100</option>
                                <option value="101">101</option>
                                <option value="102">102</option>
                                <option value="103">103</option>
                                <option value="104">104</option>
                                <option value="105">105</option>
                                <option value="106">106</option>
                                <option value="107">107</option>
                                <option value="108">108</option>
                                <option value="109">109</option>
                                <option value="110">110</option>
                                <option value="111">111</option>
                                <option value="112">112</option>
                                <option value="113">113</option>
                                <option value="114">114</option>
                                <option value="115">115</option>
                                <option value="116">116</option>
                                <option value="117">117</option>
                                <option value="118">118</option>
                                <option value="119">119</option>
                                <option value="120">120</option>
                                <option value="121">121</option>
                                <option value="122">122</option>
                                <option value="123">123</option>
                                <option value="124">124</option>
                                <option value="125">125</option>
                                <option value="126">126</option>
                                <option value="127">127</option>
                                <option value="128">128</option>
                                <option value="129">129</option>
                                <option value="130">130</option>
                                <option value="131">131</option>
                                <option value="132">132</option>
                                <option value="133">133</option>
                                <option value="134">134</option>
                                <option value="135">135</option>
                                <option value="136">136</option>
                                <option value="137">137</option>
                                <option value="138">138</option>
                                <option value="139">139</option>
                                <option value="140">140</option>
                                <option value="141">141</option>
                                <option value="142">142</option>
                                <option value="143">143</option>
                                <option value="144">144</option>
                                <option value="145">145</option>
                                <option value="146">146</option>
                                <option value="147">147</option>
                                <option value="148">148</option>
                                <option value="149">149</option>
                                <option value="150">150</option>
                                <option value="151">151</option>
                                <option value="152">152</option>
                                <option value="153">153</option>
                                <option value="154">154</option>
                                <option value="155">155</option>
                                <option value="156">156</option>
                                <option value="157">157</option>
                                <option value="158">158</option>
                                <option value="159">159</option>
                                <option value="160">160</option>
                                <option value="161">161</option>
                                <option value="162">162</option>
                                <option value="163">163</option>
                                <option value="164">164</option>
                                <option value="165">165</option>
                                <option value="166">166</option>
                                <option value="167">167</option>
                                <option value="168">168</option>
                                <option value="169">169</option>
                                <option value="170">170</option>
                                <option value="171">171</option>
                                <option value="172">172</option>
                                <option value="173">173</option>
                                <option value="174">174</option>
                                <option value="175">175</option>
                                <option value="176">176</option>
                                <option value="177">177</option>
                                <option value="178">178</option>
                                <option value="179">179</option>
                                <option value="180">180</option>
                                <option value="181">181</option>
                                <option value="182">182</option>
                                <option value="183">183</option>
                                <option value="184">184</option>
                                <option value="185">185</option>
                                <option value="186">186</option>
                                <option value="187">187</option>
                                <option value="188">188</option>
                                <option value="189">189</option>
                                <option value="190">190</option>
                                <option value="191">191</option>
                                <option value="192">192</option>
                                <option value="193">193</option>
                                <option value="194">194</option>
                                <option value="195">195</option>
                                <option value="196">196</option>
                                <option value="197">197</option>
                                <option value="198">198</option>
                                <option value="199">199</option>
                                <option value="200">200</option>
                                <option value="201">201</option>
                                <option value="202">202</option>
                                <option value="203">203</option>
                                <option value="204">204</option>
                                <option value="205">205</option>
                                <option value="206">206</option>
                                <option value="207">207</option>
                                <option value="208">208</option>
                                <option value="209">209</option>
                                <option value="210">210</option>
                                <option value="211">211</option>
                                <option value="212">212</option>
                                <option value="213">213</option>
                                <option value="214">214</option>
                                <option value="215">215</option>
                                <option value="216">216</option>
                                <option value="217">217</option>
                                <option value="218">218</option>
                                <option value="219">219</option>
                                <option value="220">220</option>
                                <option value="221">221</option>
                                <option value="222">222</option>
                                <option value="223">223</option>
                                <option value="224">224</option>
                                <option value="225">225</option>
                                <option value="226">226</option>
                                <option value="227">227</option>
                                <option value="228">228</option>
                                <option value="229">229</option>
                                <option value="230">230</option>
                                <option value="231">231</option>
                                <option value="232">232</option>
                                <option value="233">233</option>
                                <option value="234">234</option>
                                <option value="235">235</option>
                                <option value="236">236</option>
                                <option value="237">237</option>
                                <option value="238">238</option>
                                <option value="239">239</option>
                                <option value="240">240</option>
                                <option value="241">241</option>
                                <option value="242">242</option>
                                <option value="243">243</option>
                                <option value="244">244</option>
                                <option value="245">245</option>
                                <option value="246">246</option>
                                <option value="247">247</option>
                                <option value="248">248</option>
                                <option value="249">249</option>
                                <option value="250">250</option>
                            </select>
                            Hasta
                            <select class="form form-control" id="eval_num_empleadosHasta">
                                <option value="250">Max</option>
                                <option value="249">249</option>
                                <option value="248">248</option>
                                <option value="247">247</option>
                                <option value="246">246</option>
                                <option value="245">245</option>
                                <option value="244">244</option>
                                <option value="243">243</option>
                                <option value="242">242</option>
                                <option value="241">241</option>
                                <option value="240">240</option>
                                <option value="239">239</option>
                                <option value="238">238</option>
                                <option value="237">237</option>
                                <option value="236">236</option>
                                <option value="235">235</option>
                                <option value="234">234</option>
                                <option value="233">233</option>
                                <option value="232">232</option>
                                <option value="231">231</option>
                                <option value="230">230</option>
                                <option value="229">229</option>
                                <option value="228">228</option>
                                <option value="227">227</option>
                                <option value="226">226</option>
                                <option value="225">225</option>
                                <option value="224">224</option>
                                <option value="223">223</option>
                                <option value="222">222</option>
                                <option value="221">221</option>
                                <option value="220">220</option>
                                <option value="219">219</option>
                                <option value="218">218</option>
                                <option value="217">217</option>
                                <option value="216">216</option>
                                <option value="215">215</option>
                                <option value="214">214</option>
                                <option value="213">213</option>
                                <option value="212">212</option>
                                <option value="211">211</option>
                                <option value="210">210</option>
                                <option value="209">209</option>
                                <option value="208">208</option>
                                <option value="207">207</option>
                                <option value="206">206</option>
                                <option value="205">205</option>
                                <option value="204">204</option>
                                <option value="203">203</option>
                                <option value="202">202</option>
                                <option value="201">201</option>
                                <option value="200">200</option>
                                <option value="199">199</option>
                                <option value="198">198</option>
                                <option value="197">197</option>
                                <option value="196">196</option>
                                <option value="195">195</option>
                                <option value="194">194</option>
                                <option value="193">193</option>
                                <option value="192">192</option>
                                <option value="191">191</option>
                                <option value="190">190</option>
                                <option value="189">189</option>
                                <option value="188">188</option>
                                <option value="187">187</option>
                                <option value="186">186</option>
                                <option value="185">185</option>
                                <option value="184">184</option>
                                <option value="183">183</option>
                                <option value="182">182</option>
                                <option value="181">181</option>
                                <option value="180">180</option>
                                <option value="179">179</option>
                                <option value="178">178</option>
                                <option value="177">177</option>
                                <option value="176">176</option>
                                <option value="175">175</option>
                                <option value="174">174</option>
                                <option value="173">173</option>
                                <option value="172">172</option>
                                <option value="171">171</option>
                                <option value="170">170</option>
                                <option value="169">169</option>
                                <option value="168">168</option>
                                <option value="167">167</option>
                                <option value="166">166</option>
                                <option value="165">165</option>
                                <option value="164">164</option>
                                <option value="163">163</option>
                                <option value="162">162</option>
                                <option value="161">161</option>
                                <option value="160">160</option>
                                <option value="159">159</option>
                                <option value="158">158</option>
                                <option value="157">157</option>
                                <option value="156">156</option>
                                <option value="155">155</option>
                                <option value="154">154</option>
                                <option value="153">153</option>
                                <option value="152">152</option>
                                <option value="151">151</option>
                                <option value="150">150</option>
                                <option value="149">149</option>
                                <option value="148">148</option>
                                <option value="147">147</option>
                                <option value="146">146</option>
                                <option value="145">145</option>
                                <option value="144">144</option>
                                <option value="143">143</option>
                                <option value="142">142</option>
                                <option value="141">141</option>
                                <option value="140">140</option>
                                <option value="139">139</option>
                                <option value="138">138</option>
                                <option value="137">137</option>
                                <option value="136">136</option>
                                <option value="135">135</option>
                                <option value="134">134</option>
                                <option value="133">133</option>
                                <option value="132">132</option>
                                <option value="131">131</option>
                                <option value="130">130</option>
                                <option value="129">129</option>
                                <option value="128">128</option>
                                <option value="127">127</option>
                                <option value="126">126</option>
                                <option value="125">125</option>
                                <option value="124">124</option>
                                <option value="123">123</option>
                                <option value="122">122</option>
                                <option value="121">121</option>
                                <option value="120">120</option>
                                <option value="119">119</option>
                                <option value="118">118</option>
                                <option value="117">117</option>
                                <option value="116">116</option>
                                <option value="115">115</option>
                                <option value="114">114</option>
                                <option value="113">113</option>
                                <option value="112">112</option>
                                <option value="111">111</option>
                                <option value="110">110</option>
                                <option value="109">109</option>
                                <option value="108">108</option>
                                <option value="107">107</option>
                                <option value="106">106</option>
                                <option value="105">105</option>
                                <option value="104">104</option>
                                <option value="103">103</option>
                                <option value="102">102</option>
                                <option value="101">101</option>
                                <option value="100">100</option>
                                <option value="99">99</option>
                                <option value="98">98</option>
                                <option value="97">97</option>
                                <option value="96">96</option>
                                <option value="95">95</option>
                                <option value="94">94</option>
                                <option value="93">93</option>
                                <option value="92">92</option>
                                <option value="91">91</option>
                                <option value="90">90</option>
                                <option value="89">89</option>
                                <option value="88">88</option>
                                <option value="87">87</option>
                                <option value="86">86</option>
                                <option value="85">85</option>
                                <option value="84">84</option>
                                <option value="83">83</option>
                                <option value="82">82</option>
                                <option value="81">81</option>
                                <option value="80">80</option>
                                <option value="79">79</option>
                                <option value="78">78</option>
                                <option value="77">77</option>
                                <option value="76">76</option>
                                <option value="75">75</option>
                                <option value="74">74</option>
                                <option value="73">73</option>
                                <option value="72">72</option>
                                <option value="71">71</option>
                                <option value="70">70</option>
                                <option value="69">69</option>
                                <option value="68">68</option>
                                <option value="67">67</option>
                                <option value="66">66</option>
                                <option value="65">65</option>
                                <option value="64">64</option>
                                <option value="63">63</option>
                                <option value="62">62</option>
                                <option value="61">61</option>
                                <option value="60">60</option>
                                <option value="59">59</option>
                                <option value="58">58</option>
                                <option value="57">57</option>
                                <option value="56">56</option>
                                <option value="55">55</option>
                                <option value="54">54</option>
                                <option value="53">53</option>
                                <option value="52">52</option>
                                <option value="51">51</option>
                                <option value="50">50</option>
                                <option value="49">49</option>
                                <option value="48">48</option>
                                <option value="47">47</option>
                                <option value="46">46</option>
                                <option value="45">45</option>
                                <option value="44">44</option>
                                <option value="43">43</option>
                                <option value="42">42</option>
                                <option value="41">41</option>
                                <option value="40">40</option>
                                <option value="39">39</option>
                                <option value="38">38</option>
                                <option value="37">37</option>
                                <option value="36">36</option>
                                <option value="35">35</option>
                                <option value="34">34</option>
                                <option value="33">33</option>
                                <option value="32">32</option>
                                <option value="31">31</option>
                                <option value="30">30</option>
                                <option value="29">29</option>
                                <option value="28">28</option>
                                <option value="27">27</option>
                                <option value="26">26</option>
                                <option value="25">25</option>
                                <option value="24">24</option>
                                <option value="23">23</option>
                                <option value="22">22</option>
                                <option value="21">21</option>
                                <option value="20">20</option>
                                <option value="19">19</option>
                                <option value="18">18</option>
                                <option value="17">17</option>
                                <option value="16">16</option>
                                <option value="15">15</option>
                                <option value="14">14</option>
                                <option value="13">13</option>
                                <option value="12">12</option>
                                <option value="11">11</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button name="button" type="button" class="btn btn-primary" onclick="verEstadisticas(1)">Ver
                            estadísticas</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container bg-light">

            <div class="row">
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <p class="text-center">Valor de su empresa</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" size="7" readonly id="valorPersonal" class="card card-deck bg-secondary text-center" />
                        </div>
                        <div class="col-md-3">
                            <p class="text-center">Percentil</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" size="7" readonly id="percentilPersonal" class="card card-deck bg-secondary text-center" />
                        </div>
                    </div>
                    <br>
                    <h6 class="text-center">Porcentaje de personal en I+D+i sobre el número total de empleados en el
                        último año</h6>
                    <canvas id="porcentajePersonal" height="250"></canvas>
                    <p class="text-muted text-center small">
                        Personal I+D+i sobre el total (%)
                    </p>
                    <br><br>
                </div>
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <p class="text-center">Valor de su empresa</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" size="7" readonly id="valorGastos" class="card card-deck bg-secondary text-center" />
                        </div>
                        <div class="col-md-3">
                            <p class="text-center">Percentil</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" size="7" readonly id="percentilGastos" class="card card-deck bg-secondary text-center" />
                        </div>
                    </div>
                    <br>
                    <h6 class="text-center">Porcentaje de gasto en I+D+i sobre la facturación total de media en los
                        últimos tres años</h6>
                    <canvas id="porcentajeGastos" height="250"></canvas>
                    <p class="text-muted text-center small">
                        Gasto en I+D+i sobre la facturación total (%)
                    </p>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <p class="text-center">Valor de su empresa</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text " size="7" readonly id="valorContratacion" class="card card-deck bg-secondary text-center" />
                        </div>
                        <div class="col-md-3">
                            <p class="text-center">Percentil</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" size="7" readonly id="percentilContratacion" class="card card-deck bg-secondary text-center" />
                        </div>
                    </div>
                    <br>
                    <h6 class="text-center">Porcentaje de contrataciones en I+D+i sobre la media total de empleados en
                        los últimos tres años</h6>
                    <canvas id="porcentajeContratacion" height="250">></canvas>
                    <p class="text-muted text-center small">
                        Contrataciones en +D+i sobre el total (%)
                    </p>
                    <br><br>
                </div>
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <p class="text-center">Valor de su empresa</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" size="7" readonly id="valorVentas" class="card card-deck bg-secondary text-center" />
                        </div>
                        <div class="col-md-3">
                            <p class="text-center">Percentil</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" size="7" readonly id="percentilVentas" class="card card-deck bg-secondary text-center" />
                        </div>
                    </div>
                    <br>
                    <h6 class="text-center">Porcentaje de ventas debidas a productos innovadores sobre las ventas
                        totales</h6>
                    <canvas id="porcentajeVentas" height="250"></canvas>
                    <p class="text-muted text-center small">
                        Ventas productos innovadores sobre el total (%)
                    </p>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <p class="text-center">Valor de su empresa</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" size="7" readonly id="valorPuntuacion" class="card card-deck bg-secondary text-center" />
                        </div>
                        <div class="col-md-3">
                            <p class="text-center">Percentil</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" size="7" readonly id="percentilPuntuacion" class="card card-deck bg-secondary text-center" />
                        </div>
                    </div>
                    <br>
                    <h6 class=" text-center">Ponderáción del carácter innovador en base a los criterios de la especificación
                        AENOR EA 0047</h6>
                    <canvas id="porcentajePuntuacion" height="250"></canvas>
                    <p class="text-muted text-center small">
                        Puntuación total según los criterios de AENOR (EA 0047)
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de Pagina -->
    <footer class="footer py-4 bg-info">
        <div class="container-fluid px-5">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left ">Herramienta de autoevaluación del carácter innovador de las PYMES
                    según la norma de AENOR EA0047</div>

                <div class="col-lg-4 offset-lg-4 text-lg-right"> <b> Álvaro Cuesta García </b><br> @2021 - UPM </div>
            </div>
        </div>
    </footer>


    <!-- Librerías de jquery y de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.1/bootbox.js" integrity="sha512-1oBRa/4SUiqjkyl0940/yFwzpGByv7v1hdyX4dHPi1PoKmCLswjbRE7j2Rtq2f2hvSrxu6HEGPOL12TRACy+kg==" crossorigin="anonymous"></script>
    <!-- Liberia para gráficas chart.js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/stats.js"></script>
    <script language="javascript">
        verEstadisticas(1);
    </script>
</body>

</html>