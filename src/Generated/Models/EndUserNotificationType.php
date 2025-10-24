<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EndUserNotificationType extends Enum {
    public const UNKNOWN = "unknown";
    public const POSITIVE_REINFORCEMENT = "positiveReinforcement";
    public const NO_TRAINING = "noTraining";
    public const TRAINING_ASSIGNMENT = "trainingAssignment";
    public const TRAINING_REMINDER = "trainingReminder";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
