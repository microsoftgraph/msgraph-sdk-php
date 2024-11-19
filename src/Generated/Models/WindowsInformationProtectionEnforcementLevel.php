<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsInformationProtectionEnforcementLevel extends Enum {
    public const NO_PROTECTION = "noProtection";
    public const ENCRYPT_AND_AUDIT_ONLY = "encryptAndAuditOnly";
    public const ENCRYPT_AUDIT_AND_PROMPT = "encryptAuditAndPrompt";
    public const ENCRYPT_AUDIT_AND_BLOCK = "encryptAuditAndBlock";
}
