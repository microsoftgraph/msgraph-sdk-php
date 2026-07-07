<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RestEncryptionType extends Enum {
    public const NONE = "none";
    public const AES = "aes";
    public const BITLOCKER = "bitlocker";
    public const BLOWFISH = "blowfish";
    public const DES = "des";
    public const RC4 = "rc4";
    public const RSA = "rsa";
    public const NOT_SUPPORTED = "notSupported";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
