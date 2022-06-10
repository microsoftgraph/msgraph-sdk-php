<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ExchangeIdFormat extends Enum {
    public const ENTRY_ID = 'entryId';
    public const EWS_ID = 'ewsId';
    public const IMMUTABLE_ENTRY_ID = 'immutableEntryId';
    public const REST_ID = 'restId';
    public const REST_IMMUTABLE_ENTRY_ID = 'restImmutableEntryId';
}
