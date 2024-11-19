<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationMethodsPolicyMigrationState extends Enum {
    public const PRE_MIGRATION = "preMigration";
    public const MIGRATION_IN_PROGRESS = "migrationInProgress";
    public const MIGRATION_COMPLETE = "migrationComplete";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
