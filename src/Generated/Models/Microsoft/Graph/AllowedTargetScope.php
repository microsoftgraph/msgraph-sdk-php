<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class AllowedTargetScope extends Enum {
    public const NOT_SPECIFIED = 'notSpecified';
    public const SPECIFIC_DIRECTORY_USERS = 'specificDirectoryUsers';
    public const SPECIFIC_CONNECTED_ORGANIZATION_USERS = 'specificConnectedOrganizationUsers';
    public const SPECIFIC_DIRECTORY_SERVICE_PRINCIPALS = 'specificDirectoryServicePrincipals';
    public const ALL_MEMBER_USERS = 'allMemberUsers';
    public const ALL_DIRECTORY_USERS = 'allDirectoryUsers';
    public const ALL_DIRECTORY_SERVICE_PRINCIPALS = 'allDirectoryServicePrincipals';
    public const ALL_CONFIGURED_CONNECTED_ORGANIZATION_USERS = 'allConfiguredConnectedOrganizationUsers';
    public const ALL_EXTERNAL_USERS = 'allExternalUsers';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
