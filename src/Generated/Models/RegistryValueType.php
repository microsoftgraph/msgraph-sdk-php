<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RegistryValueType extends Enum {
    public const UNKNOWN = "unknown";
    public const BINARY = "binary";
    public const DWORD = "dword";
    public const DWORD_LITTLE_ENDIAN = "dwordLittleEndian";
    public const DWORD_BIG_ENDIAN = "dwordBigEndian";
    public const EXPAND_SZ = "expandSz";
    public const LINK = "link";
    public const MULTI_SZ = "multiSz";
    public const NONE = "none";
    public const QWORD = "qword";
    public const QWORDLITTLE_ENDIAN = "qwordlittleEndian";
    public const SZ = "sz";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
