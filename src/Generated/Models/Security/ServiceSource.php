<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class ServiceSource extends Enum {
    public const UNKNOWN = 'unknown';
    public const MICROSOFT_DEFENDER_FOR_ENDPOINT = 'microsoftDefenderForEndpoint';
    public const MICROSOFT_DEFENDER_FOR_IDENTITY = 'microsoftDefenderForIdentity';
    public const MICROSOFT_DEFENDER_FOR_CLOUD_APPS = 'microsoftDefenderForCloudApps';
    public const MICROSOFT_DEFENDER_FOR_OFFICE365 = 'microsoftDefenderForOffice365';
    public const MICROSOFT365_DEFENDER = 'microsoft365Defender';
    public const AZURE_AD_IDENTITY_PROTECTION = 'azureAdIdentityProtection';
    public const MICROSOFT_APP_GOVERNANCE = 'microsoftAppGovernance';
    public const DATA_LOSS_PREVENTION = 'dataLossPrevention';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const MICROSOFT_DEFENDER_FOR_CLOUD = 'microsoftDefenderForCloud';
    public const MICROSOFT_SENTINEL = 'microsoftSentinel';
}
