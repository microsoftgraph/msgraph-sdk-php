<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MobileThreatPartnerTenantState extends Enum {
    public const UNAVAILABLE = 'unavailable';
    public const AVAILABLE = 'available';
    public const ENABLED = 'enabled';
    public const UNRESPONSIVE = 'unresponsive';
}
