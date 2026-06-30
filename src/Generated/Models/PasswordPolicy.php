<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PasswordPolicy extends Enum {
    public const NONE = "none";
    public const CHANGE_PASSWORD_PERIOD = "changePasswordPeriod";
    public const CHARACTERS_COMBINATION = "charactersCombination";
    public const PASSWORD_HISTORY_AND_REUSE = "passwordHistoryAndReuse";
    public const PASSWORD_LENGTH_LIMIT = "passwordLengthLimit";
    public const PERSONAL_INFORMATION_USE = "personalInformationUse";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
