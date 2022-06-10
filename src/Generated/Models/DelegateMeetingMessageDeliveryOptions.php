<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DelegateMeetingMessageDeliveryOptions extends Enum {
    public const SEND_TO_DELEGATE_AND_INFORMATION_TO_PRINCIPAL = 'sendToDelegateAndInformationToPrincipal';
    public const SEND_TO_DELEGATE_AND_PRINCIPAL = 'sendToDelegateAndPrincipal';
    public const SEND_TO_DELEGATE_ONLY = 'sendToDelegateOnly';
}
