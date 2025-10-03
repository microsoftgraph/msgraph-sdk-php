<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceHealthStatus extends Enum {
    public const ACTIVE = "active";
    public const INACTIVE = "inactive";
    public const IMPAIRED_COMMUNICATION = "impairedCommunication";
    public const NO_SENSOR_DATA = "noSensorData";
    public const NO_SENSOR_DATA_IMPAIRED_COMMUNICATION = "noSensorDataImpairedCommunication";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
