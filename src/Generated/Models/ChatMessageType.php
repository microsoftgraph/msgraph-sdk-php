<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChatMessageType extends Enum {
    public const MESSAGE = 'message';
    public const CHAT_EVENT = 'chatEvent';
    public const TYPING = 'typing';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const SYSTEM_EVENT_MESSAGE = 'systemEventMessage';
}
