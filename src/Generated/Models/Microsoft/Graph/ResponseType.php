<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ResponseType extends Enum {
    public const NONE = 'none';
    public const ORGANIZER = 'organizer';
    public const TENTATIVELY_ACCEPTED = 'tentativelyAccepted';
    public const ACCEPTED = 'accepted';
    public const DECLINED = 'declined';
    public const NOT_RESPONDED = 'notResponded';
}
