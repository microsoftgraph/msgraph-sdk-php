<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Modality extends Enum {
    public const AUDIO = 'audio';
    public const VIDEO = 'video';
    public const VIDEO_BASED_SCREEN_SHARING = 'videoBasedScreenSharing';
    public const DATA = 'data';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
