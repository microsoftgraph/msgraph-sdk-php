<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AppListType extends Enum {
    public const NONE = 'none';
    public const APPS_IN_LIST_COMPLIANT = 'appsInListCompliant';
    public const APPS_NOT_IN_LIST_COMPLIANT = 'appsNotInListCompliant';
}
