<?php namespace App;

/**
 * Class Color
 *
 * @package App
 */
class Color
{
    /**
     * @var int
     */
    protected $red;

    /**
     * @var int
     */
    protected $green;

    /**
     * @var int
     */
    protected $blue;

    /**
     * @param int $red
     * @param int $green
     * @param int $blue
     */
    public function __construct($red = 0, $green = 0, $blue = 0)
    {
        $this->red   = $red;
        $this->green = $green;
        $this->blue  = $blue;
    }

    /**
     * @return int
     */
    public function getBlue()
    {
        return $this->blue;
    }

    /**
     * @return int
     */
    public function getGreen()
    {
        return $this->green;
    }

    /**
     * @return int
     */
    public function getRed()
    {
        return $this->red;
    }
} 