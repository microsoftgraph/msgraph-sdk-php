<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OnenotePatchActionType extends Enum {
    public const REPLACE = 'Replace';
    public const APPEND = 'Append';
    public const DELETE = 'Delete';
    public const INSERT = 'Insert';
    public const PREPEND = 'Prepend';
}
