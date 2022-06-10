<?php

namespace Microsoft\Graph\Models\TermStore;

use Microsoft\Kiota\Abstractions\Enum;

class TermGroupScope extends Enum {
    public const ESCAPED_GLOBAL = 'global';
    public const SYSTEM = 'system';
    public const SITE_COLLECTION = 'siteCollection';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
