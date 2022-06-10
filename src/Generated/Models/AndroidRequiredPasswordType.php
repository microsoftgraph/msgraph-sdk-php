<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AndroidRequiredPasswordType extends Enum {
    public const DEVICE_DEFAULT = 'deviceDefault';
    public const ALPHABETIC = 'alphabetic';
    public const ALPHANUMERIC = 'alphanumeric';
    public const ALPHANUMERIC_WITH_SYMBOLS = 'alphanumericWithSymbols';
    public const LOW_SECURITY_BIOMETRIC = 'lowSecurityBiometric';
    public const NUMERIC = 'numeric';
    public const NUMERIC_COMPLEX = 'numericComplex';
    public const ANY = 'any';
}
