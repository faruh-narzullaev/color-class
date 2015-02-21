<?php namespace App;

/**
 * Class Component
 *
 * @package App
 */
abstract class Component
{
    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var Color
     */
    protected $color;

    /**
     * Render shape
     */
    abstract public function render();

    /**
     * @param Color $color
     * @param int   $width
     * @param int   $height
     */
    public function __construct(Color $color, $width, $height)
    {
        $this->color  = $color;
        $this->width  = $width;
        $this->height = $height;
    }

    /**
     * View template
     *
     * @param $name
     */
    public function view($name)
    {
        include sprintf('view/%s.php', $name);
    }
} 