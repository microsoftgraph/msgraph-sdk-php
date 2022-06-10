<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PromptLoginBehavior extends Enum {
    public const TRANSLATE_TO_FRESH_PASSWORD_AUTHENTICATION = 'translateToFreshPasswordAuthentication';
    public const NATIVE_SUPPORT = 'nativeSupport';
    public const DISABLED = 'disabled';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
