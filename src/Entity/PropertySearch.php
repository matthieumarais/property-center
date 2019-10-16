<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch
{

    /**
     * @var int|null
     **/
    private $maxPrice;

    /**
     * @var int|null
     * @Assert\Range(min=10, max=400)
     **/
    private $minSurface;

    /**
     * @param mixed $maxPrice
     * @return PropertySearch
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @return mixed
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * @param mixed $minSurface
     * @return PropertySearch
     */
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;
        return $this;
    }


}