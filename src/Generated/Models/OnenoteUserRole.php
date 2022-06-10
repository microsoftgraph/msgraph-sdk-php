<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OnenoteUserRole extends Enum {
    public const NONE = 'None';
    public const OWNER = 'Owner';
    public const CONTRIBUTOR = 'Contributor';
    public const READER = 'Reader';
}
