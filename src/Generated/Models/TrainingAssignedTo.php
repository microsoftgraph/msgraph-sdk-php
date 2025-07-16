<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TrainingAssignedTo extends Enum {
    public const NONE = "none";
    public const ALL_USERS = "allUsers";
    public const CLICKED_PAYLOAD = "clickedPayload";
    public const COMPROMISED = "compromised";
    public const REPORTED_PHISH = "reportedPhish";
    public const READ_BUT_NOT_CLICKED = "readButNotClicked";
    public const DID_NOTHING = "didNothing";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
