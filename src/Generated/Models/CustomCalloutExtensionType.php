<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CustomCalloutExtensionType extends Enum {
    public const PRE_APPROVAL = "preApproval";
    public const POST_APPROVAL = "postApproval";
    public const GRANT = "grant";
    public const REVOKE = "revoke";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
