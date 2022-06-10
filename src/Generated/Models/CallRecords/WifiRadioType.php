<?php

namespace Microsoft\Graph\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Enum;

class WifiRadioType extends Enum {
    public const UNKNOWN = 'unknown';
    public const WIFI80211A = 'wifi80211a';
    public const WIFI80211B = 'wifi80211b';
    public const WIFI80211G = 'wifi80211g';
    public const WIFI80211N = 'wifi80211n';
    public const WIFI80211AC = 'wifi80211ac';
    public const WIFI80211AX = 'wifi80211ax';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
