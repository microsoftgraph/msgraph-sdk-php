<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessPackageExternalUserLifecycleAction extends Enum {
    public const NONE = "none";
    public const BLOCK_SIGN_IN = "blockSignIn";
    public const BLOCK_SIGN_IN_AND_DELETE = "blockSignInAndDelete";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
