<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidos
 *
 * @ORM\Table(name="pedidos", indexes={@ORM\Index(name="id_cliente", columns={"id_cliente"})})
 * @ORM\Entity
 */
class Pedidos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pedido", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedido;

    /**
     * @var \AppBundle\Entity\Clientes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id_cliente")
     * })
     */
    private $idCliente;


    /**
     * Set importe
     *
     * @param integer $importe
     *
     * @return Pedidos
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Pedidos
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Get idPedido
     *
     * @return integer
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set idCliente
     *
     * @param \AppBundle\Entity\Clientes $idCliente
     *
     * @return Pedidos
     */
    public function setIdCliente(\AppBundle\Entity\Clientes $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \AppBundle\Entity\Clientes
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }
}
