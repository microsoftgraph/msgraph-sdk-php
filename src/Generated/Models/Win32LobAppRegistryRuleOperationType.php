<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Win32LobAppRegistryRuleOperationType extends Enum {
    public const NOT_CONFIGURED = "notConfigured";
    public const EXISTS = "exists";
    public const DOES_NOT_EXIST = "doesNotExist";
    public const STRING = "string";
    public const INTEGER = "integer";
    public const VERSION = "version";
}
