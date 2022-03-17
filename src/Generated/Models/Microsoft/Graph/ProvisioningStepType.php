<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ProvisioningStepType extends Enum {
    public const IMPORT = 'import';
    public const SCOPING = 'scoping';
    public const MATCHING = 'matching';
    public const PROCESSING = 'processing';
    public const REFERENCE_RESOLUTION = 'referenceResolution';
    public const EXPORT = 'export';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
