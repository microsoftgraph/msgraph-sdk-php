<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class QuarantineReason extends Enum {
    public const ENCOUNTERED_BASE_ESCROW_THRESHOLD = "EncounteredBaseEscrowThreshold";
    public const ENCOUNTERED_TOTAL_ESCROW_THRESHOLD = "EncounteredTotalEscrowThreshold";
    public const ENCOUNTERED_ESCROW_PROPORTION_THRESHOLD = "EncounteredEscrowProportionThreshold";
    public const ENCOUNTERED_QUARANTINE_EXCEPTION = "EncounteredQuarantineException";
    public const UNKNOWN = "Unknown";
    public const QUARANTINED_ON_DEMAND = "QuarantinedOnDemand";
    public const TOO_MANY_DELETES = "TooManyDeletes";
    public const INGESTION_INTERRUPTED = "IngestionInterrupted";
}
