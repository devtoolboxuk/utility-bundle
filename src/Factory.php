<?php

namespace devtoolboxuk\utilitybundle;

use ReflectionClass;

class Factory
{
    protected $rulePrefixes = [
        'devtoolboxuk\\utilitybundle\\handlers\\',
    ];

    public function build($ruleName)
    {

        foreach ($this->getRulePrefixes() as $prefix) {

            $className = $prefix . ucfirst($ruleName);
            if (!class_exists($className)) {
                continue;
            }

            $reflection = new ReflectionClass($className);
            return $reflection->newInstance();
        }

        throw new \Exception(sprintf('"%s" is not a valid handler name', $ruleName));
    }

    public function getRulePrefixes()
    {
        return $this->rulePrefixes;
    }

}
