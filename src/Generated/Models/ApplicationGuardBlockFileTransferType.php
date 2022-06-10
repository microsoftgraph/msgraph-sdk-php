<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ApplicationGuardBlockFileTransferType extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const BLOCK_IMAGE_AND_TEXT_FILE = 'blockImageAndTextFile';
    public const BLOCK_IMAGE_FILE = 'blockImageFile';
    public const BLOCK_NONE = 'blockNone';
    public const BLOCK_TEXT_FILE = 'blockTextFile';
}
