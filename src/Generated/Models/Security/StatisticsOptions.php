<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class StatisticsOptions extends Enum {
    public const INCLUDE_REFINERS = "includeRefiners";
    public const INCLUDE_QUERY_STATS = "includeQueryStats";
    public const INCLUDE_UNINDEXED_STATS = "includeUnindexedStats";
    public const ADVANCED_INDEXING = "advancedIndexing";
    public const LOCATIONS_WITHOUT_HITS = "locationsWithoutHits";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
