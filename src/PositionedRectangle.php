<?php namespace App;

/**
 * Class PositionedRectangle
 *
 * @package App
 */
class PositionedRectangle extends Rectangle
{
    /**
     * @var int
     */
    protected $top;

    /**
     * @var int
     */
    protected $left;

    /**
     * @param Color $color
     * @param int   $width
     * @param int   $height
     * @param int   $top
     * @param int   $left
     */
    public function __construct(Color $color, $width, $height, $top, $left)
    {
        parent::__construct($color, $width, $height);
        $this->top  = $top;
        $this->left = $left;
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->view('positioned-rectangle');
    }
} 