<?php

namespace Arkitecht\Gryphon\Classes;

class StatusCode
{
    const VALID = 0;
    const ERROR = 1;
    const UPDATED = 2;
    const IGNORED = 4;
    const DUPLICATE = 6;

    const SUCCESS = [0, 2, 6];
}
