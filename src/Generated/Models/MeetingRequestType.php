<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MeetingRequestType extends Enum {
    public const NONE = "none";
    public const NEW_MEETING_REQUEST = "newMeetingRequest";
    public const FULL_UPDATE = "fullUpdate";
    public const INFORMATIONAL_UPDATE = "informationalUpdate";
    public const SILENT_UPDATE = "silentUpdate";
    public const OUTDATED = "outdated";
    public const PRINCIPAL_WANTS_COPY = "principalWantsCopy";
}
