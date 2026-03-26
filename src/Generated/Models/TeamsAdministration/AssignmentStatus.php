<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Kiota\Abstractions\Enum;

class AssignmentStatus extends Enum {
    public const UNASSIGNED = "unassigned";
    public const INTERNAL_ERROR = "internalError";
    public const USER_ASSIGNED = "userAssigned";
    public const CONFERENCE_ASSIGNED = "conferenceAssigned";
    public const VOICE_APPLICATION_ASSIGNED = "voiceApplicationAssigned";
    public const THIRD_PARTY_APP_ASSIGNED = "thirdPartyAppAssigned";
    public const POLICY_ASSIGNED = "policyAssigned";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
