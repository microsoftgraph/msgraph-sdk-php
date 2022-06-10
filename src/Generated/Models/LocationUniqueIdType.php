<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LocationUniqueIdType extends Enum {
    public const UNKNOWN = 'unknown';
    public const LOCATION_STORE = 'locationStore';
    public const DIRECTORY = 'directory';
    public const ESCAPED_PRIVATE = 'private';
    public const BING = 'bing';
}
