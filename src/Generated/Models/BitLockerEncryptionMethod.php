<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BitLockerEncryptionMethod extends Enum {
    public const AES_CBC128 = 'aesCbc128';
    public const AES_CBC256 = 'aesCbc256';
    public const XTS_AES128 = 'xtsAes128';
    public const XTS_AES256 = 'xtsAes256';
}
