<?php namespace App;

/**
 * Class BorderedRectangle
 *
 * @package App
 */
class BorderedRectangle extends Rectangle
{
    /**
     * @var string
     */
    protected $borderColor;

    /**
     * @param Color  $color
     * @param int    $width
     * @param int    $height
     * @param string $borderColor
     */
    public function __construct(Color $color, $width, $height, $borderColor)
    {
        parent::__construct($color, $width, $height);
        $this->borderColor = $borderColor;
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->view('bordered-rectangle');
    }
} 