<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class InstallIntent extends Enum {
    public const AVAILABLE = 'available';
    public const REQUIRED = 'required';
    public const UNINSTALL = 'uninstall';
    public const AVAILABLE_WITHOUT_ENROLLMENT = 'availableWithoutEnrollment';
}
