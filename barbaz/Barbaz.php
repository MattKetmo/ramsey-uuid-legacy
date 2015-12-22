<?php

namespace Ketmo;

use Ramsey\Uuid\Uuid;

class Barbaz
{
    public function barbaz()
    {
        return \Ramsey\Uuid\Uuid::uuid4();
    }
}
