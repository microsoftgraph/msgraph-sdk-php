<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CallDirection extends Enum {
    public const INCOMING = 'incoming';
    public const OUTGOING = 'outgoing';
}
