<?php

declare(strict_types=1);

namespace Tactics\ISO3166;

use Tactics\ISO3166\Enum\ISO3166_1\Alpha2;
use Tactics\ISO3166\Enum\ISO3166_1\Alpha3;
use Tactics\ISO3166\Enum\ISO3166_1\Numeric;

interface CountryCode {
    public function asAlpha3(): Alpha3;
    public function asAlpha2(): Alpha2;
    public function asNumeric(): Numeric;
}
