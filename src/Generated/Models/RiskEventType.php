<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RiskEventType extends Enum {
    public const UNLIKELY_TRAVEL = 'unlikelyTravel';
    public const ANONYMIZED_I_P_ADDRESS = 'anonymizedIPAddress';
    public const MALICIOUS_I_P_ADDRESS = 'maliciousIPAddress';
    public const UNFAMILIAR_FEATURES = 'unfamiliarFeatures';
    public const MALWARE_INFECTED_I_P_ADDRESS = 'malwareInfectedIPAddress';
    public const SUSPICIOUS_I_P_ADDRESS = 'suspiciousIPAddress';
    public const LEAKED_CREDENTIALS = 'leakedCredentials';
    public const INVESTIGATIONS_THREAT_INTELLIGENCE = 'investigationsThreatIntelligence';
    public const GENERIC = 'generic';
    public const ADMIN_CONFIRMED_USER_COMPROMISED = 'adminConfirmedUserCompromised';
    public const MCAS_IMPOSSIBLE_TRAVEL = 'mcasImpossibleTravel';
    public const MCAS_SUSPICIOUS_INBOX_MANIPULATION_RULES = 'mcasSuspiciousInboxManipulationRules';
    public const INVESTIGATIONS_THREAT_INTELLIGENCE_SIGNIN_LINKED = 'investigationsThreatIntelligenceSigninLinked';
    public const MALICIOUS_I_P_ADDRESS_VALID_CREDENTIALS_BLOCKED_I_P = 'maliciousIPAddressValidCredentialsBlockedIP';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
