<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BookingPriceType extends Enum {
    public const UNDEFINED = "undefined";
    public const FIXED_PRICE = "fixedPrice";
    public const STARTING_AT = "startingAt";
    public const HOURLY = "hourly";
    public const FREE = "free";
    public const PRICE_VARIES = "priceVaries";
    public const CALL_US = "callUs";
    public const NOT_SET = "notSet";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
