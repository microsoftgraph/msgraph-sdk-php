<?php

namespace Microsoft\\Graph\\Generated\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Enum;

class AclType extends Enum {
    public const USER = "user";
    public const GROUP = "group";
    public const EVERYONE = "everyone";
    public const EVERYONE_EXCEPT_GUESTS = "everyoneExceptGuests";
    public const EXTERNAL_GROUP = "externalGroup";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
