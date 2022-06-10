<?php

namespace Microsoft\Graph\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Enum;

class IdentityType extends Enum {
    public const USER = 'user';
    public const GROUP = 'group';
    public const EXTERNAL_GROUP = 'externalGroup';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
