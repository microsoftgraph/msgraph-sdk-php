<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamworkApplicationIdentityType extends Enum {
    public const AAD_APPLICATION = 'aadApplication';
    public const BOT = 'bot';
    public const TENANT_BOT = 'tenantBot';
    public const OFFICE365_CONNECTOR = 'office365Connector';
    public const OUTGOING_WEBHOOK = 'outgoingWebhook';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
