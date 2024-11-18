<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MeetingMessageType extends Enum {
    public const NONE = "none";
    public const MEETING_REQUEST = "meetingRequest";
    public const MEETING_CANCELLED = "meetingCancelled";
    public const MEETING_ACCEPTED = "meetingAccepted";
    public const MEETING_TENATIVELY_ACCEPTED = "meetingTenativelyAccepted";
    public const MEETING_DECLINED = "meetingDeclined";
}
