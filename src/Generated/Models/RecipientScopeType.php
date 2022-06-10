<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RecipientScopeType extends Enum {
    public const NONE = 'none';
    public const INTERNAL = 'internal';
    public const EXTERNAL = 'external';
    public const EXTERNAL_PARTNER = 'externalPartner';
    public const EXTERNAL_NON_PARTNER = 'externalNonPartner';
}
