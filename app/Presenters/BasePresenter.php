<?php namespace App\Presenters;

class BasePresenter extends Presenter
{

    /**
     * @var \App\Models\Base
     */
    protected $entity;

    /**
     * @param \App\Models\Base $entity
     */
    function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * @param  string $property
     * @return mixed
     */
    public function __get($property)
    {
        if (method_exists($this, $property))
        {
            return $this->$property();
        }
        return $this->entity->$property;
    }

}
