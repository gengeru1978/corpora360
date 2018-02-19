<?php

/* base.html.twig */
class __TwigTemplate_86772047284e53516357911e5f667eafa7a7a01ef5aee93d237fd57d276efa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84f5f3b92d4ef83fa8c09c6ad44fd6b5725e6b62663f2712a7663ffabc4413a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f5f3b92d4ef83fa8c09c6ad44fd6b5725e6b62663f2712a7663ffabc4413a8->enter($__internal_84f5f3b92d4ef83fa8c09c6ad44fd6b5725e6b62663f2712a7663ffabc4413a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7b4b4b5606c2e10e043f43ce43868bfbbeb53c3d1356e301309f0f3fd657be15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4b4b5606c2e10e043f43ce43868bfbbeb53c3d1356e301309f0f3fd657be15->enter($__internal_7b4b4b5606c2e10e043f43ce43868bfbbeb53c3d1356e301309f0f3fd657be15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Listado de pedidos</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"/assets/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"/assets/plugins/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- DataTables CSS -->
    <link href=\"/assets/plugins/datatables-plugins/dataTables.bootstrap.css\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"/assets/plugins/datatables-responsive/dataTables.responsive.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"/assets/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"/assets/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Corpora360</a>
            </div>            

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">

                        <li>
                            <a href=\"/pedidos\"><i class=\"fa fa-dashboard fa-fw\"></i> Pedidos</a>
                        </li>
              
                        <li>
                            <a href=\"/productos\"><i class=\"fa fa-table fa-fw\"></i> Productos</a>
                        </li>
                        <li>
                            <a href=\"/clientes\"><i class=\"fa fa-edit fa-fw\"></i> Clientes</a>
                        </li>
            
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\"><span style=\"font-size:4rem;\">Pedidos</span></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Información sobre los pedidos
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>#Pedido</th>
                                        <th>Cliente</th>
                                        <th>Importe €</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class=\"odd gradeX\">
                                        <td>PED1</td>
                                        <td>UsuarioTest</td>
                                        <td>200.45</td>
                                        <td class=\"center\">2018-01-18 19:18:20</td>
                                        <td class=\"center\">Borrar</td>
                                    </tr>
                                    <tr class=\"even gradeC\">
                                        <td>PED2</td>
                                        <td>Usuario2</td>
                                        <td>45</td>
                                        <td class=\"center\">2018-01-18 15:18:25</td>
                                        <td class=\"center\">Borrar</td>
                                    </tr>
                                    <tr class=\"odd gradeA\">
                                        <td>PED3</td>
                                        <td>Usuario2</td>
                                        <td>1253.98</td>
                                        <td class=\"center\">2018-01-19 16:18:00</td>
                                        <td class=\"center\">Borrar</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class=\"well\">
                                <h4>Como utilizar este listado</h4>
                                <p>Haz clic sobre el pedido para ver sus detalles. En la columna de acciones pueden aparecer difrentes opciones para cada pedido</p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Últimos productos
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Producto</th>
                                            <th>Precio €</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Monitor</td>
                                            <td>290</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Teclado</td>
                                            <td>24.90</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ratón</td>
                                            <td>8.95</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Ùltimos clientes
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"/assets/plugins/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"/assets/plugins/bootstrap/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"/assets/plugins/metisMenu/metisMenu.min.js\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"/assets/plugins/datatables/js/jquery.dataTables.min.js\"></script>
    <script src=\"/assets/plugins/datatables-plugins/dataTables.bootstrap.min.js\"></script>
    <script src=\"/assets/plugins/datatables-responsive/dataTables.responsive.js\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"/assets/js/sb-admin-2.js\"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
";
        
        $__internal_84f5f3b92d4ef83fa8c09c6ad44fd6b5725e6b62663f2712a7663ffabc4413a8->leave($__internal_84f5f3b92d4ef83fa8c09c6ad44fd6b5725e6b62663f2712a7663ffabc4413a8_prof);

        
        $__internal_7b4b4b5606c2e10e043f43ce43868bfbbeb53c3d1356e301309f0f3fd657be15->leave($__internal_7b4b4b5606c2e10e043f43ce43868bfbbeb53c3d1356e301309f0f3fd657be15_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Listado de pedidos</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"/assets/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"/assets/plugins/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- DataTables CSS -->
    <link href=\"/assets/plugins/datatables-plugins/dataTables.bootstrap.css\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"/assets/plugins/datatables-responsive/dataTables.responsive.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"/assets/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"/assets/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Corpora360</a>
            </div>            

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">

                        <li>
                            <a href=\"/pedidos\"><i class=\"fa fa-dashboard fa-fw\"></i> Pedidos</a>
                        </li>
              
                        <li>
                            <a href=\"/productos\"><i class=\"fa fa-table fa-fw\"></i> Productos</a>
                        </li>
                        <li>
                            <a href=\"/clientes\"><i class=\"fa fa-edit fa-fw\"></i> Clientes</a>
                        </li>
            
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\"><span style=\"font-size:4rem;\">Pedidos</span></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Información sobre los pedidos
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>#Pedido</th>
                                        <th>Cliente</th>
                                        <th>Importe €</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class=\"odd gradeX\">
                                        <td>PED1</td>
                                        <td>UsuarioTest</td>
                                        <td>200.45</td>
                                        <td class=\"center\">2018-01-18 19:18:20</td>
                                        <td class=\"center\">Borrar</td>
                                    </tr>
                                    <tr class=\"even gradeC\">
                                        <td>PED2</td>
                                        <td>Usuario2</td>
                                        <td>45</td>
                                        <td class=\"center\">2018-01-18 15:18:25</td>
                                        <td class=\"center\">Borrar</td>
                                    </tr>
                                    <tr class=\"odd gradeA\">
                                        <td>PED3</td>
                                        <td>Usuario2</td>
                                        <td>1253.98</td>
                                        <td class=\"center\">2018-01-19 16:18:00</td>
                                        <td class=\"center\">Borrar</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class=\"well\">
                                <h4>Como utilizar este listado</h4>
                                <p>Haz clic sobre el pedido para ver sus detalles. En la columna de acciones pueden aparecer difrentes opciones para cada pedido</p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Últimos productos
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Producto</th>
                                            <th>Precio €</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Monitor</td>
                                            <td>290</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Teclado</td>
                                            <td>24.90</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ratón</td>
                                            <td>8.95</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Ùltimos clientes
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"/assets/plugins/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"/assets/plugins/bootstrap/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"/assets/plugins/metisMenu/metisMenu.min.js\"></script>

    <!-- DataTables JavaScript -->
    <script src=\"/assets/plugins/datatables/js/jquery.dataTables.min.js\"></script>
    <script src=\"/assets/plugins/datatables-plugins/dataTables.bootstrap.min.js\"></script>
    <script src=\"/assets/plugins/datatables-responsive/dataTables.responsive.js\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"/assets/js/sb-admin-2.js\"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
", "base.html.twig", "C:\\xampp\\htdocs\\corpora360\\app\\Resources\\views\\base.html.twig");
    }
}
