<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class NotificationDeliveryPreference extends Enum {
    public const UNKNOWN = "unknown";
    public const DELIVER_IMMEDIETLY = "deliverImmedietly";
    public const DELIVER_AFTER_CAMPAIGN_END = "deliverAfterCampaignEnd";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
