<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class FileHashType extends Enum {
    public const UNKNOWN = 'unknown';
    public const SHA1 = 'sha1';
    public const SHA256 = 'sha256';
    public const MD5 = 'md5';
    public const AUTHENTICODE_HASH256 = 'authenticodeHash256';
    public const LS_HASH = 'lsHash';
    public const CTPH = 'ctph';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
