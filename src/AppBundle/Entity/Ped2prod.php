<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ped2prod
 *
 * @ORM\Table(name="ped2prod", indexes={@ORM\Index(name="id_pedido", columns={"id_pedido"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 */
class Ped2prod
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pedido", type="integer", nullable=false)
     */
    private $idPedido;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_producto", type="integer", nullable=false)
     */
    private $idProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idrel", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrel;


}

