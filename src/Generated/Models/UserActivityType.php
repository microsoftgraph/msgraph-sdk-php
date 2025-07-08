<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserActivityType extends Enum {
    public const UPLOAD_TEXT = "uploadText";
    public const UPLOAD_FILE = "uploadFile";
    public const DOWNLOAD_TEXT = "downloadText";
    public const DOWNLOAD_FILE = "downloadFile";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
