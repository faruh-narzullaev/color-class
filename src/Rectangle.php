<?php namespace App;

/**
 * Class Rectangle
 *
 * @package App
 */
class Rectangle extends Component
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Color $color, $width, $height)
    {
        parent::__construct($color, $width, $height);
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->view('rectangle');
    }
}