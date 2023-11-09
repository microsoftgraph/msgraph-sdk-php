<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChatMessagePolicyViolationDlpActionTypes extends Enum {
    public const NONE = 'none';
    public const NOTIFY_SENDER = 'notifySender';
    public const BLOCK_ACCESS = 'blockAccess';
    public const BLOCK_ACCESS_EXTERNAL = 'blockAccessExternal';
}
