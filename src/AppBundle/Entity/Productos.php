<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos")
 * @ORM\Entity
 */
class Productos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=128, nullable=false)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=false)
     */
    private $precio;

    /**
     * @var \AppBundle\Entity\Ped2prod
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Ped2prod")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id_producto")
     * })
     */
    private $idProducto;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Productos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Productos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set idProducto
     *
     * @param \AppBundle\Entity\Ped2prod $idProducto
     *
     * @return Productos
     */
    public function setIdProducto(\AppBundle\Entity\Ped2prod $idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \AppBundle\Entity\Ped2prod
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }
}
