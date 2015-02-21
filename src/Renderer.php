<?php namespace App;

/**
 * Class Renderer
 *
 * @package App
 */
class Renderer
{
    /**
     * @var array
     */
    protected $shapes = array();

    /**
     * @param array $shapes
     */
    public function __construct(array $shapes = array())
    {
        $this->shapes = $shapes;
    }

    /**
     * @param Component $shape
     */
    public function addShape(Component $shape)
    {
        $this->shapes[] = $shape;
    }

    /**
     * Show shapes
     */
    public function show()
    {
        foreach ($this->shapes as $shape) {
            /** @var Component $shape */
            $shape->render();
        }
    }
} 