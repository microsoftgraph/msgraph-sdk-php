<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DataSourceScopes extends Enum {
    public const NONE = "none";
    public const ALL_TENANT_MAILBOXES = "allTenantMailboxes";
    public const ALL_TENANT_SITES = "allTenantSites";
    public const ALL_CASE_CUSTODIANS = "allCaseCustodians";
    public const ALL_CASE_NONCUSTODIAL_DATA_SOURCES = "allCaseNoncustodialDataSources";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
