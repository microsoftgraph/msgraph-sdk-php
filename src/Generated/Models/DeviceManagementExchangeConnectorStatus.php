<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementExchangeConnectorStatus extends Enum {
    public const NONE = 'none';
    public const CONNECTION_PENDING = 'connectionPending';
    public const CONNECTED = 'connected';
    public const DISCONNECTED = 'disconnected';
}
