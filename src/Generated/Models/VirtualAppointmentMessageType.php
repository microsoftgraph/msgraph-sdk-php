<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VirtualAppointmentMessageType extends Enum {
    public const CONFIRMATION = 'confirmation';
    public const RESCHEDULE = 'reschedule';
    public const CANCELLATION = 'cancellation';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
