<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SharePointMigrationObjectType extends Enum {
    public const SITE = "site";
    public const WEB = "web";
    public const FOLDER = "folder";
    public const LIST = "list";
    public const LIST_ITEM = "listItem";
    public const FILE = "file";
    public const ALERT = "alert";
    public const SHARED_WITH_OBJECT = "sharedWithObject";
    public const INVALID = "invalid";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
