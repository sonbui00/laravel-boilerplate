<?php namespace App\Async\Jobs;

class Job
{

    const ID_REGISTER = 1;

    /** @var integer $id */
    public $id;

    /**
     * @param array $jobs
     */
    public function __construct($jobs)
    {
        $this->id = array_get($jobs, 'id', 0);
        $this->_data = array_get($jobs, 'data', []);
    }

    /**
     * @param  string $key
     * @return mixed
     */
    public function __get($key)
    {
        return array_get($this->_data, $key, null);
    }

}
