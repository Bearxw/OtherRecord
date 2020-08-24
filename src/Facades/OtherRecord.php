<?php

namespace Bearxw\OtherRecord\Facades;

use Illuminate\Support\Facades\Facade;

class OtherRecord  extends  Facade
{
    protected static function getFacadeAccessor()
      {
          return 'otherrecord';
     }
}
