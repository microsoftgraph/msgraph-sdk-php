<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MdmAuthority extends Enum {
    public const UNKNOWN = 'unknown';
    public const INTUNE = 'intune';
    public const SCCM = 'sccm';
    public const OFFICE365 = 'office365';
}
