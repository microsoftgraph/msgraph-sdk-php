<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ServiceAppStatus extends Enum {
    public const INACTIVE = 'inactive';
    public const ACTIVE = 'active';
    public const PENDING_ACTIVE = 'pendingActive';
    public const PENDING_INACTIVE = 'pendingInactive';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
