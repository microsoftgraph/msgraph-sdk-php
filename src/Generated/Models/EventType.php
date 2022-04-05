<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EventType extends Enum {
    public const SINGLE_INSTANCE = 'singleInstance';
    public const OCCURRENCE = 'occurrence';
    public const EXCEPTION = 'exception';
    public const SERIES_MASTER = 'seriesMaster';
}
