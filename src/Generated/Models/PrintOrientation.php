<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PrintOrientation extends Enum {
    public const PORTRAIT = 'portrait';
    public const LANDSCAPE = 'landscape';
    public const REVERSE_LANDSCAPE = 'reverseLandscape';
    public const REVERSE_PORTRAIT = 'reversePortrait';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
