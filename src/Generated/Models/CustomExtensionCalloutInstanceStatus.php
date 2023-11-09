<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CustomExtensionCalloutInstanceStatus extends Enum {
    public const CALLOUT_SENT = 'calloutSent';
    public const CALLBACK_RECEIVED = 'callbackReceived';
    public const CALLOUT_FAILED = 'calloutFailed';
    public const CALLBACK_TIMED_OUT = 'callbackTimedOut';
    public const WAITING_FOR_CALLBACK = 'waitingForCallback';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
