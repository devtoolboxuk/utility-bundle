<?php

namespace devtoolboxuk\utilitybundle;

use devtoolboxuk\utilitybundle\handlers\XssClean;


class UtilityService
{

    protected $factory;

    public function __call($method, $arguments)
    {
        return $this->buildSecurity($method);
    }

    public function buildSecurity($ruleSpec)
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