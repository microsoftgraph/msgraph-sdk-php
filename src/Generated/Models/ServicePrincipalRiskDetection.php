<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ServicePrincipalRiskDetection extends Entity implements Parsable 
{
    /**
     * Instantiates a new ServicePrincipalRiskDetection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalRiskDetection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalRiskDetection {
        return new ServicePrincipalRiskDetection();
    }

    /**
     * Gets the activity property value. Indicates the activity type the detected risk is linked to.  The possible values are: signin, servicePrincipal. Use the Prefer: include-unknown-enum-members request header to get the following members in this evolvable enum: servicePrincipal.
     * @return ActivityType|null
    */
    public function getActivity(): ?ActivityType {
        $val = $this->getBackingStore()->get('activity');
        if (is_null($val) || $val instanceof ActivityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activity'");
    }

    /**
     * Gets the activityDateTime property value. Date and time when the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('activityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDateTime'");
    }

    /**
     * Gets the additionalInfo property value. Additional information associated with the risk detection. This string value is represented as a JSON object with the quotations escaped.
     * @return string|null
    */
    public function getAdditionalInfo(): ?string {
        $val = $this->getBackingStore()->get('additionalInfo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInfo'");
    }

    /**
     * Gets the appId property value. The unique identifier for the associated application.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the correlationId property value. Correlation ID of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('correlationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationId'");
    }

    /**
     * Gets the detectedDateTime property value. Date and time when the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getDetectedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('detectedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectedDateTime'");
    }

    /**
     * Gets the detectionTimingType property value. Timing of the detected risk , whether real-time or offline. The possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
     * @return RiskDetectionTimingType|null
    */
    public function getDetectionTimingType(): ?RiskDetectionTimingType {
        $val = $this->getBackingStore()->get('detectionTimingType');
        if (is_null($val) || $val instanceof RiskDetectionTimingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionTimingType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getEnumValue(ActivityType::class)),
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'additionalInfo' => fn(ParseNode $n) => $o->setAdditionalInfo($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'detectedDateTime' => fn(ParseNode $n) => $o->setDetectedDateTime($n->getDateTimeValue()),
            'detectionTimingType' => fn(ParseNode $n) => $o->setDetectionTimingType($n->getEnumValue(RiskDetectionTimingType::class)),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'keyIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setKeyIds($val);
            },
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([SignInLocation::class, 'createFromDiscriminatorValue'])),
            'requestId' => fn(ParseNode $n) => $o->setRequestId($n->getStringValue()),
            'riskDetail' => fn(ParseNode $n) => $o->setRiskDetail($n->getEnumValue(RiskDetail::class)),
            'riskEventType' => fn(ParseNode $n) => $o->setRiskEventType($n->getStringValue()),
            'riskLevel' => fn(ParseNode $n) => $o->setRiskLevel($n->getEnumValue(RiskLevel::class)),
            'riskState' => fn(ParseNode $n) => $o->setRiskState($n->getEnumValue(RiskState::class)),
            'servicePrincipalDisplayName' => fn(ParseNode $n) => $o->setServicePrincipalDisplayName($n->getStringValue()),
            'servicePrincipalId' => fn(ParseNode $n) => $o->setServicePrincipalId($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'tokenIssuerType' => fn(ParseNode $n) => $o->setTokenIssuerType($n->getEnumValue(TokenIssuerType::class)),
        ]);
    }

    /**
     * Gets the ipAddress property value. Provides the IP address of the client from where the risk occurred.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the keyIds property value. The unique identifier for the key credential associated with the risk detection.
     * @return array<string>|null
    */
    public function getKeyIds(): ?array {
        $val = $this->getBackingStore()->get('keyIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyIds'");
    }

    /**
     * Gets the lastUpdatedDateTime property value. Date and time when the risk detection was last updated.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the location property value. Location from where the sign-in was initiated.
     * @return SignInLocation|null
    */
    public function getLocation(): ?SignInLocation {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || $val instanceof SignInLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
    }

    /**
     * Gets the requestId property value. Request identifier of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity. Supports $filter (eq).
     * @return string|null
    */
    public function getRequestId(): ?string {
        $val = $this->getBackingStore()->get('requestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestId'");
    }

    /**
     * Gets the riskDetail property value. Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden.
     * @return RiskDetail|null
    */
    public function getRiskDetail(): ?RiskDetail {
        $val = $this->getBackingStore()->get('riskDetail');
        if (is_null($val) || $val instanceof RiskDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskDetail'");
    }

    /**
     * Gets the riskEventType property value. The type of risk event detected. The possible values are: investigationsThreatIntelligence, generic, adminConfirmedServicePrincipalCompromised, suspiciousSignins, leakedCredentials, anomalousServicePrincipalActivity, maliciousApplication, suspiciousApplication.
     * @return string|null
    */
    public function getRiskEventType(): ?string {
        $val = $this->getBackingStore()->get('riskEventType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskEventType'");
    }

    /**
     * Gets the riskLevel property value. Level of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: low, medium, high, hidden, none.
     * @return RiskLevel|null
    */
    public function getRiskLevel(): ?RiskLevel {
        $val = $this->getBackingStore()->get('riskLevel');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskLevel'");
    }

    /**
     * Gets the riskState property value. The state of a detected risky service principal or sign-in activity. The possible values are: none, dismissed, atRisk, confirmedCompromised.
     * @return RiskState|null
    */
    public function getRiskState(): ?RiskState {
        $val = $this->getBackingStore()->get('riskState');
        if (is_null($val) || $val instanceof RiskState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskState'");
    }

    /**
     * Gets the servicePrincipalDisplayName property value. The display name for the service principal.
     * @return string|null
    */
    public function getServicePrincipalDisplayName(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalDisplayName'");
    }

    /**
     * Gets the servicePrincipalId property value. The unique identifier for the service principal. Supports $filter (eq).
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalId'");
    }

    /**
     * Gets the source property value. Source of the risk detection. For example, identityProtection.
     * @return string|null
    */
    public function getSource(): ?string {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the tokenIssuerType property value. Indicates the type of token issuer for the detected sign-in risk. The possible values are: AzureAD.
     * @return TokenIssuerType|null
    */
    public function getTokenIssuerType(): ?TokenIssuerType {
        $val = $this->getBackingStore()->get('tokenIssuerType');
        if (is_null($val) || $val instanceof TokenIssuerType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenIssuerType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('activity', $this->getActivity());
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeStringValue('additionalInfo', $this->getAdditionalInfo());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('detectedDateTime', $this->getDetectedDateTime());
        $writer->writeEnumValue('detectionTimingType', $this->getDetectionTimingType());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeCollectionOfPrimitiveValues('keyIds', $this->getKeyIds());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeStringValue('requestId', $this->getRequestId());
        $writer->writeEnumValue('riskDetail', $this->getRiskDetail());
        $writer->writeStringValue('riskEventType', $this->getRiskEventType());
        $writer->writeEnumValue('riskLevel', $this->getRiskLevel());
        $writer->writeEnumValue('riskState', $this->getRiskState());
        $writer->writeStringValue('servicePrincipalDisplayName', $this->getServicePrincipalDisplayName());
        $writer->writeStringValue('servicePrincipalId', $this->getServicePrincipalId());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeEnumValue('tokenIssuerType', $this->getTokenIssuerType());
    }

    /**
     * Sets the activity property value. Indicates the activity type the detected risk is linked to.  The possible values are: signin, servicePrincipal. Use the Prefer: include-unknown-enum-members request header to get the following members in this evolvable enum: servicePrincipal.
     * @param ActivityType|null $value Value to set for the activity property.
    */
    public function setActivity(?ActivityType $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the activityDateTime property value. Date and time when the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the additionalInfo property value. Additional information associated with the risk detection. This string value is represented as a JSON object with the quotations escaped.
     * @param string|null $value Value to set for the additionalInfo property.
    */
    public function setAdditionalInfo(?string $value): void {
        $this->getBackingStore()->set('additionalInfo', $value);
    }

    /**
     * Sets the appId property value. The unique identifier for the associated application.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the correlationId property value. Correlation ID of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity.
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the detectedDateTime property value. Date and time when the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the detectedDateTime property.
    */
    public function setDetectedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('detectedDateTime', $value);
    }

    /**
     * Sets the detectionTimingType property value. Timing of the detected risk , whether real-time or offline. The possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
     * @param RiskDetectionTimingType|null $value Value to set for the detectionTimingType property.
    */
    public function setDetectionTimingType(?RiskDetectionTimingType $value): void {
        $this->getBackingStore()->set('detectionTimingType', $value);
    }

    /**
     * Sets the ipAddress property value. Provides the IP address of the client from where the risk occurred.
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the keyIds property value. The unique identifier for the key credential associated with the risk detection.
     * @param array<string>|null $value Value to set for the keyIds property.
    */
    public function setKeyIds(?array $value): void {
        $this->getBackingStore()->set('keyIds', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. Date and time when the risk detection was last updated.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the location property value. Location from where the sign-in was initiated.
     * @param SignInLocation|null $value Value to set for the location property.
    */
    public function setLocation(?SignInLocation $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the requestId property value. Request identifier of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity. Supports $filter (eq).
     * @param string|null $value Value to set for the requestId property.
    */
    public function setRequestId(?string $value): void {
        $this->getBackingStore()->set('requestId', $value);
    }

    /**
     * Sets the riskDetail property value. Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden.
     * @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value): void {
        $this->getBackingStore()->set('riskDetail', $value);
    }

    /**
     * Sets the riskEventType property value. The type of risk event detected. The possible values are: investigationsThreatIntelligence, generic, adminConfirmedServicePrincipalCompromised, suspiciousSignins, leakedCredentials, anomalousServicePrincipalActivity, maliciousApplication, suspiciousApplication.
     * @param string|null $value Value to set for the riskEventType property.
    */
    public function setRiskEventType(?string $value): void {
        $this->getBackingStore()->set('riskEventType', $value);
    }

    /**
     * Sets the riskLevel property value. Level of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: low, medium, high, hidden, none.
     * @param RiskLevel|null $value Value to set for the riskLevel property.
    */
    public function setRiskLevel(?RiskLevel $value): void {
        $this->getBackingStore()->set('riskLevel', $value);
    }

    /**
     * Sets the riskState property value. The state of a detected risky service principal or sign-in activity. The possible values are: none, dismissed, atRisk, confirmedCompromised.
     * @param RiskState|null $value Value to set for the riskState property.
    */
    public function setRiskState(?RiskState $value): void {
        $this->getBackingStore()->set('riskState', $value);
    }

    /**
     * Sets the servicePrincipalDisplayName property value. The display name for the service principal.
     * @param string|null $value Value to set for the servicePrincipalDisplayName property.
    */
    public function setServicePrincipalDisplayName(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalDisplayName', $value);
    }

    /**
     * Sets the servicePrincipalId property value. The unique identifier for the service principal. Supports $filter (eq).
     * @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalId', $value);
    }

    /**
     * Sets the source property value. Source of the risk detection. For example, identityProtection.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the tokenIssuerType property value. Indicates the type of token issuer for the detected sign-in risk. The possible values are: AzureAD.
     * @param TokenIssuerType|null $value Value to set for the tokenIssuerType property.
    */
    public function setTokenIssuerType(?TokenIssuerType $value): void {
        $this->getBackingStore()->set('tokenIssuerType', $value);
    }

}
