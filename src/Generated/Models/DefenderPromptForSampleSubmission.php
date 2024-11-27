<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DefenderPromptForSampleSubmission extends Enum {
    public const USER_DEFINED = "userDefined";
    public const ALWAYS_PROMPT = "alwaysPrompt";
    public const PROMPT_BEFORE_SENDING_PERSONAL_DATA = "promptBeforeSendingPersonalData";
    public const NEVER_SEND_DATA = "neverSendData";
    public const SEND_ALL_DATA_WITHOUT_PROMPTING = "sendAllDataWithoutPrompting";
}
