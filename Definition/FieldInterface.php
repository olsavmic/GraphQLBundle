<?php

namespace Overblog\GraphQLBundle\Definition;

interface FieldInterface
{
    /**
     * @param array $config
     * @return array
     */
    public function toFieldDefinition(array $config);
}