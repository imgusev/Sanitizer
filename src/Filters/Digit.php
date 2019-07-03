<?php

namespace Imgusev\Sanitizer\Filters;

use Imgusev\Sanitizer\Contracts\Filter;

class Digit implements Filter
{
    /**
     *  Get only digit characters from the string.
     *
     *  @param  string  $value
     *  @return string
     */
    public function apply($value, $options = [])
    {
        return preg_replace('/[^0-9]/si', '', $value);
    }
}
