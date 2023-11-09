<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerTenantType extends Enum {
    public const MICROSOFT_SUPPORT = 'microsoftSupport';
    public const SYNDICATE_PARTNER = 'syndicatePartner';
    public const BREADTH_PARTNER = 'breadthPartner';
    public const BREADTH_PARTNER_DELEGATED_ADMIN = 'breadthPartnerDelegatedAdmin';
    public const RESELLER_PARTNER_DELEGATED_ADMIN = 'resellerPartnerDelegatedAdmin';
    public const VALUE_ADDED_RESELLER_PARTNER_DELEGATED_ADMIN = 'valueAddedResellerPartnerDelegatedAdmin';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
