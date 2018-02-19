<?php
/**
 * Created by PhpStorm.
 * User: Carlos Nieto
 * Date: 18/02/2018
 * Time: 10:57
 * PedidosController manejará los listados de los pedidos
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Pedidos;

class PedidosController extends Controller
{
    /**
     * @Route("/admin/nuevo-pedido",)
     */

    public function createAction()
    {
        $pedidos = new Pedidos();
        $pedidos->setImporte(100.5);
        $pedidos->setCliente('9999');
        $pedidos->setSlug('pedidos');
        $pedidos->setFechaCreacion(date('Y-m-d H:i:s'));
        $em = $this->getDoctrine()->getManager();
        // Indicamos que queremos guardar este registro.
        $em->persist($pedidos);
        // Ejecuta las querys de las operaciones indicadas.
        $em->flush();
        return new Response('Generado $pedidos con ID '.$pedidos->getId());
    }
    // Código del paginado
    /**
     * @Route("/pedidos/{page}", name="blog_list", requirements={"page": "\d+"})
     */
    public function listAction($page=1)
    {
        return new Response(
            '<html><body>Mostrar página: '.$page.'</body></html>'
        );
    }


    /**
     * @Route("/mostrar/")
     */

    public function mostrarPedidos(){
        $pedidos = $this->getDoctrine()
            ->getRepository('AppBundle:Pedidos')
            ->findAll();
        if (!$pedidos) {
            throw $this->createNotFoundException(
                'No se encontraron entradas'
            );
        } else {
            return new Response($pedidos);
        }
    }
}
