<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ClonableTeamParts extends Enum {
    public const APPS = 'apps';
    public const TABS = 'tabs';
    public const SETTINGS = 'settings';
    public const CHANNELS = 'channels';
    public const MEMBERS = 'members';
}
