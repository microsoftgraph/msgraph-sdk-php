<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class CorrelationReason extends Enum {
    public const REPEATED_ALERT_OCCURRENCE = "repeatedAlertOccurrence";
    public const SAME_GEOGRAPHY = "sameGeography";
    public const SIMILAR_ARTIFACTS = "similarArtifacts";
    public const SAME_TARGETED_ASSET = "sameTargetedAsset";
    public const SAME_NETWORK_SEGMENT = "sameNetworkSegment";
    public const EVENT_SEQUENCE = "eventSequence";
    public const TIME_FRAME = "timeFrame";
    public const SAME_THREAT_SOURCE = "sameThreatSource";
    public const SIMILAR_T_T_PS_OR_BEHAVIOR = "similarTTPsOrBehavior";
    public const SAME_ACTOR = "sameActor";
    public const SAME_CAMPAIGN = "sameCampaign";
    public const SHARED_INDICATORS = "sharedIndicators";
    public const SAME_ASSET = "sameAsset";
    public const NETWORK_PROXIMITY = "networkProximity";
    public const EVENT_CASUAL_SEQUENCE = "eventCasualSequence";
    public const TEMPORAL_PROXIMITY = "temporalProximity";
    public const LATERAL_MOVEMENT_PATH = "lateralMovementPath";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
