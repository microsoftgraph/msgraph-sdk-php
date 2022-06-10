<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementExchangeConnectorType extends Enum {
    public const ON_PREMISES = 'onPremises';
    public const HOSTED = 'hosted';
    public const SERVICE_TO_SERVICE = 'serviceToService';
    public const DEDICATED = 'dedicated';
}
