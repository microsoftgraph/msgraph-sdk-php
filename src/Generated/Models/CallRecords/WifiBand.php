<?php

namespace Microsoft\Graph\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Enum;

class WifiBand extends Enum {
    public const UNKNOWN = 'unknown';
    public const FREQUENCY24_G_HZ = 'frequency24GHz';
    public const FREQUENCY50_G_HZ = 'frequency50GHz';
    public const FREQUENCY60_G_HZ = 'frequency60GHz';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
