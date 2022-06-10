<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FederatedIdpMfaBehavior extends Enum {
    public const ACCEPT_IF_MFA_DONE_BY_FEDERATED_IDP = 'acceptIfMfaDoneByFederatedIdp';
    public const ENFORCE_MFA_BY_FEDERATED_IDP = 'enforceMfaByFederatedIdp';
    public const REJECT_MFA_BY_FEDERATED_IDP = 'rejectMfaByFederatedIdp';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
