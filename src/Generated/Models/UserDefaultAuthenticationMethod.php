<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserDefaultAuthenticationMethod extends Enum {
    public const PUSH = 'push';
    public const OATH = 'oath';
    public const VOICE_MOBILE = 'voiceMobile';
    public const VOICE_ALTERNATE_MOBILE = 'voiceAlternateMobile';
    public const VOICE_OFFICE = 'voiceOffice';
    public const SMS = 'sms';
    public const NONE = 'none';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
