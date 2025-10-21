<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SimulationAttackTechnique extends Enum {
    public const UNKNOWN = "unknown";
    public const CREDENTIAL_HARVESTING = "credentialHarvesting";
    public const ATTACHMENT_MALWARE = "attachmentMalware";
    public const DRIVE_BY_URL = "driveByUrl";
    public const LINK_IN_ATTACHMENT = "linkInAttachment";
    public const LINK_TO_MALWARE_FILE = "linkToMalwareFile";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
