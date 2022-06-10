<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BookingType extends Enum {
    public const UNKNOWN = 'unknown';
    public const STANDARD = 'standard';
    public const RESERVED = 'reserved';
}
