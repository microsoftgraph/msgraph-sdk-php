<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class RetentionTrigger extends Enum {
    public const DATE_LABELED = "dateLabeled";
    public const DATE_CREATED = "dateCreated";
    public const DATE_MODIFIED = "dateModified";
    public const DATE_OF_EVENT = "dateOfEvent";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
