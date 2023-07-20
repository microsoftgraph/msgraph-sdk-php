<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SignIn extends Entity implements Parsable 
{
    /**
     * Instantiates a new signIn and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignIn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignIn {
        return new SignIn();
    }

    /**
     * Gets the appDisplayName property value. App name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the appId property value. Unique GUID representing the app ID in the Azure Active Directory. Supports $filter (eq operator only).
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
     * Gets the appliedConditionalAccessPolicies property value. Provides a list of conditional access policies that are triggered by the corresponding sign-in activity.
     * @return array<AppliedConditionalAccessPolicy>|null
    */
    public function getAppliedConditionalAccessPolicies(): ?array {
        $val = $this->getBackingStore()->get('appliedConditionalAccessPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppliedConditionalAccessPolicy::class);
            /** @var array<AppliedConditionalAccessPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedConditionalAccessPolicies'");
    }

    /**
     * Gets the clientAppUsed property value. Identifies the client used for the sign-in activity. Modern authentication clients include Browser and modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getClientAppUsed(): ?string {
        $val = $this->getBackingStore()->get('clientAppUsed');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientAppUsed'");
    }

    /**
     * Gets the conditionalAccessStatus property value. Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue. Supports $filter (eq operator only).
     * @return ConditionalAccessStatus|null
    */
    public function getConditionalAccessStatus(): ?ConditionalAccessStatus {
        $val = $this->getBackingStore()->get('conditionalAccessStatus');
        if (is_null($val) || $val instanceof ConditionalAccessStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessStatus'");
    }

    /**
     * Gets the correlationId property value. The request ID sent from the client when the sign-in is initiated; used to troubleshoot sign-in activity. Supports $filter (eq operator only).
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
     * Gets the createdDateTime property value. Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the deviceDetail property value. Device information from where the sign-in occurred; includes device ID, operating system, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSytem properties.
     * @return DeviceDetail|null
    */
    public function getDeviceDetail(): ?DeviceDetail {
        $val = $this->getBackingStore()->get('deviceDetail');
        if (is_null($val) || $val instanceof DeviceDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceDetail'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'appliedConditionalAccessPolicies' => fn(ParseNode $n) => $o->setAppliedConditionalAccessPolicies($n->getCollectionOfObjectValues([AppliedConditionalAccessPolicy::class, 'createFromDiscriminatorValue'])),
            'clientAppUsed' => fn(ParseNode $n) => $o->setClientAppUsed($n->getStringValue()),
            'conditionalAccessStatus' => fn(ParseNode $n) => $o->setConditionalAccessStatus($n->getEnumValue(ConditionalAccessStatus::class)),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deviceDetail' => fn(ParseNode $n) => $o->setDeviceDetail($n->getObjectValue([DeviceDetail::class, 'createFromDiscriminatorValue'])),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'isInteractive' => fn(ParseNode $n) => $o->setIsInteractive($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([SignInLocation::class, 'createFromDiscriminatorValue'])),
            'resourceDisplayName' => fn(ParseNode $n) => $o->setResourceDisplayName($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'riskDetail' => fn(ParseNode $n) => $o->setRiskDetail($n->getEnumValue(RiskDetail::class)),
            'riskEventTypes' => fn(ParseNode $n) => $o->setRiskEventTypes($n->getCollectionOfEnumValues(RiskEventType::class)),
            'riskEventTypes_v2' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRiskEventTypesV2($val);
            },
            'riskLevelAggregated' => fn(ParseNode $n) => $o->setRiskLevelAggregated($n->getEnumValue(RiskLevel::class)),
            'riskLevelDuringSignIn' => fn(ParseNode $n) => $o->setRiskLevelDuringSignIn($n->getEnumValue(RiskLevel::class)),
            'riskState' => fn(ParseNode $n) => $o->setRiskState($n->getEnumValue(RiskState::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([SignInStatus::class, 'createFromDiscriminatorValue'])),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the ipAddress property value. IP address of the client used to sign in. Supports $filter (eq and startsWith operators only).
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
     * Gets the isInteractive property value. Indicates if a sign-in is interactive or not.
     * @return bool|null
    */
    public function getIsInteractive(): ?bool {
        $val = $this->getBackingStore()->get('isInteractive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInteractive'");
    }

    /**
     * Gets the location property value. Provides the city, state, and country code where the sign-in originated. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
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
     * Gets the resourceDisplayName property value. Name of the resource the user signed into. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getResourceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('resourceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceDisplayName'");
    }

    /**
     * Gets the resourceId property value. ID of the resource that the user signed into. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the riskDetail property value. Provides the 'reason' behind a specific state of a risky user, sign-in or a risk event. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far.  Supports $filter (eq operator only).Note: Details for this property require an Azure AD Premium P2 license. Other licenses return the value hidden.
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
     * Gets the riskEventTypes property value. Risk event types associated with the sign-in. The possible values are: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, and unknownFutureValue. Supports $filter (eq operator only).
     * @return array<RiskEventType>|null
    */
    public function getRiskEventTypes(): ?array {
        $val = $this->getBackingStore()->get('riskEventTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RiskEventType::class);
            /** @var array<RiskEventType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskEventTypes'");
    }

    /**
     * Gets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
     * @return array<string>|null
    */
    public function getRiskEventTypesV2(): ?array {
        $val = $this->getBackingStore()->get('riskEventTypes_v2');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskEventTypes_v2'");
    }

    /**
     * Gets the riskLevelAggregated property value. Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only).  Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelAggregated(): ?RiskLevel {
        $val = $this->getBackingStore()->get('riskLevelAggregated');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskLevelAggregated'");
    }

    /**
     * Gets the riskLevelDuringSignIn property value. Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection.  Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelDuringSignIn(): ?RiskLevel {
        $val = $this->getBackingStore()->get('riskLevelDuringSignIn');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskLevelDuringSignIn'");
    }

    /**
     * Gets the riskState property value. Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. Supports $filter (eq operator only).
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
     * Gets the status property value. Sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
     * @return SignInStatus|null
    */
    public function getStatus(): ?SignInStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SignInStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the userDisplayName property value. Display name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('userDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDisplayName'");
    }

    /**
     * Gets the userId property value. ID of the user that initiated the sign-in. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPrincipalName property value. User principal name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeCollectionOfObjectValues('appliedConditionalAccessPolicies', $this->getAppliedConditionalAccessPolicies());
        $writer->writeStringValue('clientAppUsed', $this->getClientAppUsed());
        $writer->writeEnumValue('conditionalAccessStatus', $this->getConditionalAccessStatus());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('deviceDetail', $this->getDeviceDetail());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeBooleanValue('isInteractive', $this->getIsInteractive());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeStringValue('resourceDisplayName', $this->getResourceDisplayName());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeEnumValue('riskDetail', $this->getRiskDetail());
        $writer->writeCollectionOfEnumValues('riskEventTypes', $this->getRiskEventTypes());
        $writer->writeCollectionOfPrimitiveValues('riskEventTypes_v2', $this->getRiskEventTypesV2());
        $writer->writeEnumValue('riskLevelAggregated', $this->getRiskLevelAggregated());
        $writer->writeEnumValue('riskLevelDuringSignIn', $this->getRiskLevelDuringSignIn());
        $writer->writeEnumValue('riskState', $this->getRiskState());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the appDisplayName property value. App name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appId property value. Unique GUID representing the app ID in the Azure Active Directory. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the appliedConditionalAccessPolicies property value. Provides a list of conditional access policies that are triggered by the corresponding sign-in activity.
     * @param array<AppliedConditionalAccessPolicy>|null $value Value to set for the appliedConditionalAccessPolicies property.
    */
    public function setAppliedConditionalAccessPolicies(?array $value): void {
        $this->getBackingStore()->set('appliedConditionalAccessPolicies', $value);
    }

    /**
     * Sets the clientAppUsed property value. Identifies the client used for the sign-in activity. Modern authentication clients include Browser and modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the clientAppUsed property.
    */
    public function setClientAppUsed(?string $value): void {
        $this->getBackingStore()->set('clientAppUsed', $value);
    }

    /**
     * Sets the conditionalAccessStatus property value. Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue. Supports $filter (eq operator only).
     * @param ConditionalAccessStatus|null $value Value to set for the conditionalAccessStatus property.
    */
    public function setConditionalAccessStatus(?ConditionalAccessStatus $value): void {
        $this->getBackingStore()->set('conditionalAccessStatus', $value);
    }

    /**
     * Sets the correlationId property value. The request ID sent from the client when the sign-in is initiated; used to troubleshoot sign-in activity. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deviceDetail property value. Device information from where the sign-in occurred; includes device ID, operating system, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSytem properties.
     * @param DeviceDetail|null $value Value to set for the deviceDetail property.
    */
    public function setDeviceDetail(?DeviceDetail $value): void {
        $this->getBackingStore()->set('deviceDetail', $value);
    }

    /**
     * Sets the ipAddress property value. IP address of the client used to sign in. Supports $filter (eq and startsWith operators only).
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the isInteractive property value. Indicates if a sign-in is interactive or not.
     * @param bool|null $value Value to set for the isInteractive property.
    */
    public function setIsInteractive(?bool $value): void {
        $this->getBackingStore()->set('isInteractive', $value);
    }

    /**
     * Sets the location property value. Provides the city, state, and country code where the sign-in originated. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
     * @param SignInLocation|null $value Value to set for the location property.
    */
    public function setLocation(?SignInLocation $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the resourceDisplayName property value. Name of the resource the user signed into. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the resourceDisplayName property.
    */
    public function setResourceDisplayName(?string $value): void {
        $this->getBackingStore()->set('resourceDisplayName', $value);
    }

    /**
     * Sets the resourceId property value. ID of the resource that the user signed into. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the riskDetail property value. Provides the 'reason' behind a specific state of a risky user, sign-in or a risk event. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far.  Supports $filter (eq operator only).Note: Details for this property require an Azure AD Premium P2 license. Other licenses return the value hidden.
     * @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value): void {
        $this->getBackingStore()->set('riskDetail', $value);
    }

    /**
     * Sets the riskEventTypes property value. Risk event types associated with the sign-in. The possible values are: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, and unknownFutureValue. Supports $filter (eq operator only).
     * @param array<RiskEventType>|null $value Value to set for the riskEventTypes property.
    */
    public function setRiskEventTypes(?array $value): void {
        $this->getBackingStore()->set('riskEventTypes', $value);
    }

    /**
     * Sets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
     * @param array<string>|null $value Value to set for the riskEventTypes_v2 property.
    */
    public function setRiskEventTypesV2(?array $value): void {
        $this->getBackingStore()->set('riskEventTypes_v2', $value);
    }

    /**
     * Sets the riskLevelAggregated property value. Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only).  Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
     * @param RiskLevel|null $value Value to set for the riskLevelAggregated property.
    */
    public function setRiskLevelAggregated(?RiskLevel $value): void {
        $this->getBackingStore()->set('riskLevelAggregated', $value);
    }

    /**
     * Sets the riskLevelDuringSignIn property value. Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection.  Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
     * @param RiskLevel|null $value Value to set for the riskLevelDuringSignIn property.
    */
    public function setRiskLevelDuringSignIn(?RiskLevel $value): void {
        $this->getBackingStore()->set('riskLevelDuringSignIn', $value);
    }

    /**
     * Sets the riskState property value. Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. Supports $filter (eq operator only).
     * @param RiskState|null $value Value to set for the riskState property.
    */
    public function setRiskState(?RiskState $value): void {
        $this->getBackingStore()->set('riskState', $value);
    }

    /**
     * Sets the status property value. Sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
     * @param SignInStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SignInStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userDisplayName property value. Display name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. ID of the user that initiated the sign-in. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principal name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
