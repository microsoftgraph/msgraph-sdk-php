<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use Microsoft\Kiota\Abstractions\Enum;

class ResourceTypeName extends Enum {
    public const USER = "user";
    public const GROUP = "group";
    public const CONDITIONAL_ACCESS_POLICY = "conditionalAccessPolicy";
    public const NAMED_LOCATION_POLICY = "namedLocationPolicy";
    public const AUTHENTICATION_METHOD_POLICY = "authenticationMethodPolicy";
    public const AUTHORIZATION_POLICY = "authorizationPolicy";
    public const AUTHENTICATION_STRENGTH_POLICY = "authenticationStrengthPolicy";
    public const APPLICATION = "application";
    public const SERVICE_PRINCIPAL = "servicePrincipal";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const O_AUTH2_PERMISSION_GRANT = "oAuth2PermissionGrant";
    public const APP_ROLE_ASSIGNMENT = "appRoleAssignment";
    public const ORGANIZATION = "organization";
}
