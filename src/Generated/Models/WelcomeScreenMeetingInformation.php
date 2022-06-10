<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WelcomeScreenMeetingInformation extends Enum {
    public const USER_DEFINED = 'userDefined';
    public const SHOW_ORGANIZER_AND_TIME_ONLY = 'showOrganizerAndTimeOnly';
    public const SHOW_ORGANIZER_AND_TIME_AND_SUBJECT = 'showOrganizerAndTimeAndSubject';
}
