<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DelegatedAdminRelationshipRequestAction extends Enum {
    public const LOCK_FOR_APPROVAL = 'lockForApproval';
    public const APPROVE = 'approve';
    public const TERMINATE = 'terminate';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const REJECT = 'reject';
}
