<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SynchronizationJobRestartScope extends Enum {
    public const NONE = "None";
    public const CONNECTOR_DATA_STORE = "ConnectorDataStore";
    public const ESCROWS = "Escrows";
    public const WATERMARK = "Watermark";
    public const QUARANTINE_STATE = "QuarantineState";
    public const FULL = "Full";
    public const FORCE_DELETES = "ForceDeletes";
}
