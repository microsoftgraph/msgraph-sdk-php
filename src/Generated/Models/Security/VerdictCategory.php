<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class VerdictCategory extends Enum {
    public const NONE = "none";
    public const MALWARE = "malware";
    public const PHISH = "phish";
    public const SITE_UNAVAILABLE = "siteUnavailable";
    public const SPAM = "spam";
    public const DECRYPTION_FAILED = "decryptionFailed";
    public const UNSUPPORTED_URI_SCHEME = "unsupportedUriScheme";
    public const UNSUPPORTED_FILE_TYPE = "unsupportedFileType";
    public const UNDEFINED = "undefined";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
