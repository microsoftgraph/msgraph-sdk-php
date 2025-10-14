<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ApplicationGuardBlockClipboardSharingType extends Enum {
    public const NOT_CONFIGURED = "notConfigured";
    public const BLOCK_BOTH = "blockBoth";
    public const BLOCK_HOST_TO_CONTAINER = "blockHostToContainer";
    public const BLOCK_CONTAINER_TO_HOST = "blockContainerToHost";
    public const BLOCK_NONE = "blockNone";
}
