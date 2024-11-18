<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class B2bIdentityProvidersType extends Enum {
    public const AZURE_ACTIVE_DIRECTORY = "azureActiveDirectory";
    public const EXTERNAL_FEDERATION = "externalFederation";
    public const SOCIAL_IDENTITY_PROVIDERS = "socialIdentityProviders";
    public const EMAIL_ONE_TIME_PASSCODE = "emailOneTimePasscode";
    public const MICROSOFT_ACCOUNT = "microsoftAccount";
    public const DEFAULT_CONFIGURED_IDP = "defaultConfiguredIdp";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
