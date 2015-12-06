<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProductRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="priceht", type="float")
     */
    private $priceht;

    /**
     * @var float
     *
     * @ORM\Column(name="pricettc", type="float")
     */
    private $pricettc;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="new", type="boolean")
     */
    private $new;

    /**
     * @var boolean
     *
     * @ORM\Column(name="promo", type="boolean")
     */
    private $promo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vip", type="boolean")
     */
    private $vip;

    /**
     * @ORM\ManyToOne(targetEntity="Sub_category", inversedBy="products")
     * @ORM\JoinColumn(name="sub_category_id", referencedColumnName="id")
     */
    private $sub_category;

    /**
     * @ORM\ManyToOne(targetEntity="TVA", inversedBy="products")
     * @ORM\JoinColumn(name="tva_id", referencedColumnName="id")
     */
    private $tva;

    /**
     * @ORM\ManyToOne(targetEntity="Color", inversedBy="products")
     * @ORM\JoinColumn(name="color_id", referencedColumnName="id")
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity="Size", inversedBy="products")
     * @ORM\JoinColumn(name="size_id", referencedColumnName="id")
     */
    private $size;

    /**
     * @ORM\ManyToOne(targetEntity="Supplier", inversedBy="products")
     * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id")
     */
    private $supplier;

    /**
     * @ORM\ManyToMany(targetEntity="Command", mappedBy="products")
     */
    private $commands;

    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\User", mappedBy="favorites")
     */
    private $favorite_of;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @Assert\File(maxSize=6000000)
     */
    private $file;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    public function __construct()
    {
        $this->commands     = new ArrayCollection();
        $this->favorite_of  = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set priceht
     *
     * @param float $priceht
     *
     * @return Product
     */
    public function setPriceht($priceht)
    {
        $this->priceht = $priceht;

        return $this;
    }

    /**
     * Get priceht
     *
     * @return float
     */
    public function getPriceht()
    {
        return $this->priceht;
    }

    /**
     * Set pricettc
     *
     * @param float $pricettc
     *
     * @return Product
     */
    public function setPricettc($pricettc)
    {
        $this->pricettc = $pricettc;

        return $this;
    }

    /**
     * Get pricettc
     *
     * @return float
     */
    public function getPricettc()
    {
        return $this->pricettc;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Product
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set subCategory
     *
     * @param \AppBundle\Entity\Sub_category $subCategory
     *
     * @return Product
     */
    public function setSubCategory(\AppBundle\Entity\Sub_category $subCategory = null)
    {
        $this->sub_category = $subCategory;

        return $this;
    }

    /**
     * Get subCategory
     *
     * @return \AppBundle\Entity\Sub_category
     */
    public function getSubCategory()
    {
        return $this->sub_category;
    }

    /**
     * Set tva
     *
     * @param \AppBundle\Entity\TVA $tva
     *
     * @return Product
     */
    public function setTva(\AppBundle\Entity\TVA $tva = null)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return \AppBundle\Entity\TVA
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set color
     *
     * @param \AppBundle\Entity\Color $color
     *
     * @return Product
     */
    public function setColor(\AppBundle\Entity\Color $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return \AppBundle\Entity\Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set size
     *
     * @param \AppBundle\Entity\Size $size
     *
     * @return Product
     */
    public function setSize(\AppBundle\Entity\Size $size = null)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return \AppBundle\Entity\Size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set supplier
     *
     * @param \AppBundle\Entity\Supplier $supplier
     *
     * @return Product
     */
    public function setSupplier(\AppBundle\Entity\Supplier $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \AppBundle\Entity\Supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Add command
     *
     * @param \AppBundle\Entity\Command $command
     *
     * @return Product
     */
    public function addCommand(\AppBundle\Entity\Command $command)
    {
        $this->commands[] = $command;

        return $this;
    }

    /**
     * Remove command
     *
     * @param \AppBundle\Entity\Command $command
     */
    public function removeCommand(\AppBundle\Entity\Command $command)
    {
        $this->commands->removeElement($command);
    }

    /**
     * Get commands
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * Add favoriteOf
     *
     * @param \AppBundle\Entity\User $favoriteOf
     *
     * @return Product
     */
    public function addFavoriteOf(\AppBundle\Entity\User $favoriteOf)
    {
        $this->favorite_of[] = $favoriteOf;

        return $this;
    }

    /**
     * Remove favoriteOf
     *
     * @param \AppBundle\Entity\User $favoriteOf
     */
    public function removeFavoriteOf(\AppBundle\Entity\User $favoriteOf)
    {
        $this->favorite_of->removeElement($favoriteOf);
    }

    /**
     * Get favoriteOf
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavoriteOf()
    {
        return $this->favorite_of;
    }

    public function getAbsolutePath()
    {
        return null === $this->path
                ? null
                : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
                ? null
                : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'images';
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Product
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    public function upload()
    {
        if(null === $this->getFile()){
            return;
        }
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->getFile()->getClientOriginalName()
        );
        $this->path = $this->getFile()->getClientOriginalName();
        $this->file = null;
    }

    /**
     * Set new
     *
     * @param boolean $new
     *
     * @return Product
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return boolean
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set promo
     *
     * @param boolean $promo
     *
     * @return Product
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return boolean
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set vip
     *
     * @param boolean $vip
     *
     * @return Product
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return boolean
     */
    public function getVip()
    {
        return $this->vip;
    }
}
