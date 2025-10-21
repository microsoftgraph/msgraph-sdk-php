<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class EvidenceRole extends Enum {
    public const UNKNOWN = "unknown";
    public const CONTEXTUAL = "contextual";
    public const SCANNED = "scanned";
    public const SOURCE = "source";
    public const DESTINATION = "destination";
    public const CREATED = "created";
    public const ADDED = "added";
    public const COMPROMISED = "compromised";
    public const EDITED = "edited";
    public const ATTACKED = "attacked";
    public const ATTACKER = "attacker";
    public const COMMAND_AND_CONTROL = "commandAndControl";
    public const LOADED = "loaded";
    public const SUSPICIOUS = "suspicious";
    public const POLICY_VIOLATOR = "policyViolator";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
