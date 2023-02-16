<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EntityType extends Enum {
    public const EVENT = 'event';
    public const MESSAGE = 'message';
    public const DRIVE_ITEM = 'driveItem';
    public const EXTERNAL_ITEM = 'externalItem';
    public const SITE = 'site';
    public const ESCAPED_LIST = 'list';
    public const LIST_ITEM = 'listItem';
    public const DRIVE = 'drive';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const CHAT_MESSAGE = 'chatMessage';
}
