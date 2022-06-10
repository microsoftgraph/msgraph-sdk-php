<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamsAsyncOperationType extends Enum {
    public const INVALID = 'invalid';
    public const CLONE_TEAM = 'cloneTeam';
    public const ARCHIVE_TEAM = 'archiveTeam';
    public const UNARCHIVE_TEAM = 'unarchiveTeam';
    public const CREATE_TEAM = 'createTeam';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
