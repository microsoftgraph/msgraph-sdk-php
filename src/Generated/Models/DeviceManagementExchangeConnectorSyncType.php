<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementExchangeConnectorSyncType extends Enum {
    public const FULL_SYNC = 'fullSync';
    public const DELTA_SYNC = 'deltaSync';
}
