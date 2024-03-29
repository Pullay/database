<?php

namespace Pullay\Database\Query\Predicate;

class IsNotNull extends IsNull
{
    /**
     * {@inheritdoc}
     */
    public function getExpression()
    {
        return sprintf('%1$s IS NOT NULL', $this->column);
    }
}
