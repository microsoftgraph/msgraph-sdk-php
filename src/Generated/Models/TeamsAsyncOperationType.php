<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamsAsyncOperationType extends Enum {
    public const INVALID = "invalid";
    public const CLONE_TEAM = "cloneTeam";
    public const ARCHIVE_TEAM = "archiveTeam";
    public const UNARCHIVE_TEAM = "unarchiveTeam";
    public const CREATE_TEAM = "createTeam";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const TEAMIFY_GROUP = "teamifyGroup";
    public const CREATE_CHANNEL = "createChannel";
    public const ARCHIVE_CHANNEL = "archiveChannel";
    public const UNARCHIVE_CHANNEL = "unarchiveChannel";
}
