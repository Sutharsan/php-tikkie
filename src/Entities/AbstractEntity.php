<?php
namespace PHPTikkie\Entities;

use PHPTikkie\PHPTikkie;

abstract class AbstractEntity
{
    /**
     * @var PHPTikkie
     */
    private $tikkie;

    /**
     * @var array
     */
    protected $fillableAttributes = [];

    public function __construct(PHPTikkie $tikkie)
    {
        $this->tikkie = $tikkie;
    }

    protected function getTikkie()
    {
        return $this->tikkie;
    }

    public function setAttributes(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            if (in_array($key, $this->fillableAttributes)) {
                $this->{$key} = $value;
            }
        }
    }
}
