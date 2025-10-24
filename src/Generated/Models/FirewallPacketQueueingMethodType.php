<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FirewallPacketQueueingMethodType extends Enum {
    public const DEVICE_DEFAULT = "deviceDefault";
    public const DISABLED = "disabled";
    public const QUEUE_INBOUND = "queueInbound";
    public const QUEUE_OUTBOUND = "queueOutbound";
    public const QUEUE_BOTH = "queueBoth";
}
