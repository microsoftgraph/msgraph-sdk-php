<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class CalendarRoleType extends Enum {
    public const NONE = 'none';
    public const FREE_BUSY_READ = 'freeBusyRead';
    public const LIMITED_READ = 'limitedRead';
    public const READ = 'read';
    public const WRITE = 'write';
    public const DELEGATE_WITHOUT_PRIVATE_EVENT_ACCESS = 'delegateWithoutPrivateEventAccess';
    public const DELEGATE_WITH_PRIVATE_EVENT_ACCESS = 'delegateWithPrivateEventAccess';
    public const CUSTOM = 'custom';
}
