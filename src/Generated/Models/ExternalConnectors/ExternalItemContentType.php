<?php

namespace Microsoft\Graph\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Enum;

class ExternalItemContentType extends Enum {
    public const TEXT = 'text';
    public const HTML = 'html';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
