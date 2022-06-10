<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsStartMenuAppListVisibilityType extends Enum {
    public const USER_DEFINED = 'userDefined';
    public const COLLAPSE = 'collapse';
    public const REMOVE = 'remove';
    public const DISABLE_SETTINGS_APP = 'disableSettingsApp';
}
