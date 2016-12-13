<?php

namespace Lucid\Foundation;

use Illuminate\Foundation\Bus\DispatchesJobs;

abstract class Feature
{
    use MarshalTrait;
    use DispatchesJobs;
    use JobDispatcherTrait;
}
