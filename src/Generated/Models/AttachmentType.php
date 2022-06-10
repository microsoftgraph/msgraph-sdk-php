<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AttachmentType extends Enum {
    public const FILE = 'file';
    public const ITEM = 'item';
    public const REFERENCE = 'reference';
}
