<?php

namespace devtoolboxuk\utilitybundle;

use devtoolboxuk\utilitybundle\handlers\XssClean;


class UtilityService
{

    protected $factory;

    public function __call($method, $arguments)
    {
        return $this->buildService($method);
    }

    public function buildService($ruleSpec)
    {
        try {
            return $this->getFactory()->build($ruleSpec);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }

    protected function getFactory()
    {
        if (!$this->factory instanceof Factory) {
            $this->factory = new Factory();
        }
        return $this->factory;
    }
}