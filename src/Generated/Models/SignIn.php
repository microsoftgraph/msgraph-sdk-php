<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignIn extends Entity implements Parsable 
{
    /**
     * @var string|null $appDisplayName The application name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var string|null $appId The application identifier in Azure Active Directory. Supports $filter (eq operator only).
    */
    private ?string $appId = null;
    
    /**
     * @var array<AppliedConditionalAccessPolicy>|null $appliedConditionalAccessPolicies A list of conditional access policies that are triggered by the corresponding sign-in activity.
    */
    private ?array $appliedConditionalAccessPolicies = null;
    
    /**
     * @var string|null $clientAppUsed The legacy client used for sign-in activity. For example: Browser, Exchange ActiveSync, Modern clients, IMAP, MAPI, SMTP, or POP. Supports $filter (eq operator only).
    */
    private ?string $clientAppUsed = null;
    
    /**
     * @var ConditionalAccessStatus|null $conditionalAccessStatus The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue. Supports $filter (eq operator only).
    */
    private ?ConditionalAccessStatus $conditionalAccessStatus = null;
    
    /**
     * @var string|null $correlationId The identifier that's sent from the client when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support. Supports $filter (eq operator only).
    */
    private ?string $correlationId = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DeviceDetail|null $deviceDetail The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSystem properties.
    */
    private ?DeviceDetail $deviceDetail = null;
    
    /**
     * @var string|null $ipAddress The IP address of the client from where the sign-in occurred. Supports $filter (eq and startsWith operators only).
    */
    private ?string $ipAddress = null;
    
    /**
     * @var bool|null $isInteractive Indicates whether a user sign in is interactive. In interactive sign in, the user provides an authentication factor to Azure AD. These factors include passwords, responses to MFA challenges, biometric factors, or QR codes that a user provides to Azure AD or an associated app. In non-interactive sign in, the user doesn't provide an authentication factor. Instead, the client app uses a token or code to authenticate or access a resource on behalf of a user. Non-interactive sign ins are commonly used for a client to sign in on a user's behalf in a process transparent to the user.
    */
    private ?bool $isInteractive = null;
    
    /**
     * @var SignInLocation|null $location The city, state, and 2 letter country code from where the sign-in occurred. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
    */
    private ?SignInLocation $location = null;
    
    /**
     * @var string|null $resourceDisplayName The name of the resource that the user signed in to. Supports $filter (eq operator only).
    */
    private ?string $resourceDisplayName = null;
    
    /**
     * @var string|null $resourceId The identifier of the resource that the user signed in to. Supports $filter (eq operator only).
    */
    private ?string $resourceId = null;
    
    /**
     * @var RiskDetail|null $riskDetail The reason behind a specific state of a risky user, sign-in, or a risk event. Possible values: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, or unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    */
    private ?RiskDetail $riskDetail = null;
    
    /**
     * @var array<string>|null $riskEventTypes Risk event types associated with the sign-in. The possible values are: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, and unknownFutureValue. Supports $filter (eq operator only).
    */
    private ?array $riskEventTypes = null;
    
    /**
     * @var array<string>|null $riskEventTypes_v2 The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
    */
    private ?array $riskEventTypes_v2 = null;
    
    /**
     * @var RiskLevel|null $riskLevelAggregated The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    */
    private ?RiskLevel $riskLevelAggregated = null;
    
    /**
     * @var RiskLevel|null $riskLevelDuringSignIn The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    */
    private ?RiskLevel $riskLevelDuringSignIn = null;
    
    /**
     * @var RiskState|null $riskState The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue. Supports $filter (eq operator only).
    */
    private ?RiskState $riskState = null;
    
    /**
     * @var SignInStatus|null $status The sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
    */
    private ?SignInStatus $status = null;
    
    /**
     * @var string|null $userDisplayName The display name of the user. Supports $filter (eq and startsWith operators only).
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userId The identifier of the user. Supports $filter (eq operator only).
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName The UPN of the user. Supports $filter (eq and startsWith operators only).
    */
    private ?string $userPrincipalName = null;
    
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
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.restrictedSignIn': return new RestrictedSignIn();
            }
        }
        return new SignIn();
    }

    /**
     * Gets the appDisplayName property value. The application name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the appId property value. The application identifier in Azure Active Directory. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the appliedConditionalAccessPolicies property value. A list of conditional access policies that are triggered by the corresponding sign-in activity.
     * @return array<AppliedConditionalAccessPolicy>|null
    */
    public function getAppliedConditionalAccessPolicies(): ?array {
        return $this->appliedConditionalAccessPolicies;
    }

    /**
     * Gets the clientAppUsed property value. The legacy client used for sign-in activity. For example: Browser, Exchange ActiveSync, Modern clients, IMAP, MAPI, SMTP, or POP. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getClientAppUsed(): ?string {
        return $this->clientAppUsed;
    }

    /**
     * Gets the conditionalAccessStatus property value. The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue. Supports $filter (eq operator only).
     * @return ConditionalAccessStatus|null
    */
    public function getConditionalAccessStatus(): ?ConditionalAccessStatus {
        return $this->conditionalAccessStatus;
    }

    /**
     * Gets the correlationId property value. The identifier that's sent from the client when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the createdDateTime property value. The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deviceDetail property value. The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSystem properties.
     * @return DeviceDetail|null
    */
    public function getDeviceDetail(): ?DeviceDetail {
        return $this->deviceDetail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => function (ParseNode $n) use ($o) { $o->setAppDisplayName($n->getStringValue()); },
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'appliedConditionalAccessPolicies' => function (ParseNode $n) use ($o) { $o->setAppliedConditionalAccessPolicies($n->getCollectionOfObjectValues(array(AppliedConditionalAccessPolicy::class, 'createFromDiscriminatorValue'))); },
            'clientAppUsed' => function (ParseNode $n) use ($o) { $o->setClientAppUsed($n->getStringValue()); },
            'conditionalAccessStatus' => function (ParseNode $n) use ($o) { $o->setConditionalAccessStatus($n->getEnumValue(ConditionalAccessStatus::class)); },
            'correlationId' => function (ParseNode $n) use ($o) { $o->setCorrelationId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deviceDetail' => function (ParseNode $n) use ($o) { $o->setDeviceDetail($n->getObjectValue(array(DeviceDetail::class, 'createFromDiscriminatorValue'))); },
            'ipAddress' => function (ParseNode $n) use ($o) { $o->setIpAddress($n->getStringValue()); },
            'isInteractive' => function (ParseNode $n) use ($o) { $o->setIsInteractive($n->getBooleanValue()); },
            'location' => function (ParseNode $n) use ($o) { $o->setLocation($n->getObjectValue(array(SignInLocation::class, 'createFromDiscriminatorValue'))); },
            'resourceDisplayName' => function (ParseNode $n) use ($o) { $o->setResourceDisplayName($n->getStringValue()); },
            'resourceId' => function (ParseNode $n) use ($o) { $o->setResourceId($n->getStringValue()); },
            'riskDetail' => function (ParseNode $n) use ($o) { $o->setRiskDetail($n->getEnumValue(RiskDetail::class)); },
            'riskEventTypes' => function (ParseNode $n) use ($o) { $o->setRiskEventTypes($n->getCollectionOfPrimitiveValues()); },
            'riskEventTypes_v2' => function (ParseNode $n) use ($o) { $o->setRiskEventTypes_v2($n->getCollectionOfPrimitiveValues()); },
            'riskLevelAggregated' => function (ParseNode $n) use ($o) { $o->setRiskLevelAggregated($n->getEnumValue(RiskLevel::class)); },
            'riskLevelDuringSignIn' => function (ParseNode $n) use ($o) { $o->setRiskLevelDuringSignIn($n->getEnumValue(RiskLevel::class)); },
            'riskState' => function (ParseNode $n) use ($o) { $o->setRiskState($n->getEnumValue(RiskState::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getObjectValue(array(SignInStatus::class, 'createFromDiscriminatorValue'))); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the ipAddress property value. The IP address of the client from where the sign-in occurred. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the isInteractive property value. Indicates whether a user sign in is interactive. In interactive sign in, the user provides an authentication factor to Azure AD. These factors include passwords, responses to MFA challenges, biometric factors, or QR codes that a user provides to Azure AD or an associated app. In non-interactive sign in, the user doesn't provide an authentication factor. Instead, the client app uses a token or code to authenticate or access a resource on behalf of a user. Non-interactive sign ins are commonly used for a client to sign in on a user's behalf in a process transparent to the user.
     * @return bool|null
    */
    public function getIsInteractive(): ?bool {
        return $this->isInteractive;
    }

    /**
     * Gets the location property value. The city, state, and 2 letter country code from where the sign-in occurred. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
     * @return SignInLocation|null
    */
    public function getLocation(): ?SignInLocation {
        return $this->location;
    }

    /**
     * Gets the resourceDisplayName property value. The name of the resource that the user signed in to. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getResourceDisplayName(): ?string {
        return $this->resourceDisplayName;
    }

    /**
     * Gets the resourceId property value. The identifier of the resource that the user signed in to. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the riskDetail property value. The reason behind a specific state of a risky user, sign-in, or a risk event. Possible values: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, or unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     * @return RiskDetail|null
    */
    public function getRiskDetail(): ?RiskDetail {
        return $this->riskDetail;
    }

    /**
     * Gets the riskEventTypes property value. Risk event types associated with the sign-in. The possible values are: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, and unknownFutureValue. Supports $filter (eq operator only).
     * @return array<string>|null
    */
    public function getRiskEventTypes(): ?array {
        return $this->riskEventTypes;
    }

    /**
     * Gets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
     * @return array<string>|null
    */
    public function getRiskEventTypes_v2(): ?array {
        return $this->riskEventTypes_v2;
    }

    /**
     * Gets the riskLevelAggregated property value. The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelAggregated(): ?RiskLevel {
        return $this->riskLevelAggregated;
    }

    /**
     * Gets the riskLevelDuringSignIn property value. The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelDuringSignIn(): ?RiskLevel {
        return $this->riskLevelDuringSignIn;
    }

    /**
     * Gets the riskState property value. The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue. Supports $filter (eq operator only).
     * @return RiskState|null
    */
    public function getRiskState(): ?RiskState {
        return $this->riskState;
    }

    /**
     * Gets the status property value. The sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
     * @return SignInStatus|null
    */
    public function getStatus(): ?SignInStatus {
        return $this->status;
    }

    /**
     * Gets the userDisplayName property value. The display name of the user. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userId property value. The identifier of the user. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. The UPN of the user. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeCollectionOfObjectValues('appliedConditionalAccessPolicies', $this->appliedConditionalAccessPolicies);
        $writer->writeStringValue('clientAppUsed', $this->clientAppUsed);
        $writer->writeEnumValue('conditionalAccessStatus', $this->conditionalAccessStatus);
        $writer->writeStringValue('correlationId', $this->correlationId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('deviceDetail', $this->deviceDetail);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeBooleanValue('isInteractive', $this->isInteractive);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeStringValue('resourceDisplayName', $this->resourceDisplayName);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeEnumValue('riskDetail', $this->riskDetail);
        $writer->writeCollectionOfPrimitiveValues('riskEventTypes', $this->riskEventTypes);
        $writer->writeCollectionOfPrimitiveValues('riskEventTypes_v2', $this->riskEventTypes_v2);
        $writer->writeEnumValue('riskLevelAggregated', $this->riskLevelAggregated);
        $writer->writeEnumValue('riskLevelDuringSignIn', $this->riskLevelDuringSignIn);
        $writer->writeEnumValue('riskState', $this->riskState);
        $writer->writeObjectValue('status', $this->status);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the appDisplayName property value. The application name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the appId property value. The application identifier in Azure Active Directory. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the appliedConditionalAccessPolicies property value. A list of conditional access policies that are triggered by the corresponding sign-in activity.
     *  @param array<AppliedConditionalAccessPolicy>|null $value Value to set for the appliedConditionalAccessPolicies property.
    */
    public function setAppliedConditionalAccessPolicies(?array $value ): void {
        $this->appliedConditionalAccessPolicies = $value;
    }

    /**
     * Sets the clientAppUsed property value. The legacy client used for sign-in activity. For example: Browser, Exchange ActiveSync, Modern clients, IMAP, MAPI, SMTP, or POP. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the clientAppUsed property.
    */
    public function setClientAppUsed(?string $value ): void {
        $this->clientAppUsed = $value;
    }

    /**
     * Sets the conditionalAccessStatus property value. The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue. Supports $filter (eq operator only).
     *  @param ConditionalAccessStatus|null $value Value to set for the conditionalAccessStatus property.
    */
    public function setConditionalAccessStatus(?ConditionalAccessStatus $value ): void {
        $this->conditionalAccessStatus = $value;
    }

    /**
     * Sets the correlationId property value. The identifier that's sent from the client when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value ): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deviceDetail property value. The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSystem properties.
     *  @param DeviceDetail|null $value Value to set for the deviceDetail property.
    */
    public function setDeviceDetail(?DeviceDetail $value ): void {
        $this->deviceDetail = $value;
    }

    /**
     * Sets the ipAddress property value. The IP address of the client from where the sign-in occurred. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the isInteractive property value. Indicates whether a user sign in is interactive. In interactive sign in, the user provides an authentication factor to Azure AD. These factors include passwords, responses to MFA challenges, biometric factors, or QR codes that a user provides to Azure AD or an associated app. In non-interactive sign in, the user doesn't provide an authentication factor. Instead, the client app uses a token or code to authenticate or access a resource on behalf of a user. Non-interactive sign ins are commonly used for a client to sign in on a user's behalf in a process transparent to the user.
     *  @param bool|null $value Value to set for the isInteractive property.
    */
    public function setIsInteractive(?bool $value ): void {
        $this->isInteractive = $value;
    }

    /**
     * Sets the location property value. The city, state, and 2 letter country code from where the sign-in occurred. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
     *  @param SignInLocation|null $value Value to set for the location property.
    */
    public function setLocation(?SignInLocation $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the resourceDisplayName property value. The name of the resource that the user signed in to. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the resourceDisplayName property.
    */
    public function setResourceDisplayName(?string $value ): void {
        $this->resourceDisplayName = $value;
    }

    /**
     * Sets the resourceId property value. The identifier of the resource that the user signed in to. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the riskDetail property value. The reason behind a specific state of a risky user, sign-in, or a risk event. Possible values: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, or unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     *  @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value ): void {
        $this->riskDetail = $value;
    }

    /**
     * Sets the riskEventTypes property value. Risk event types associated with the sign-in. The possible values are: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, and unknownFutureValue. Supports $filter (eq operator only).
     *  @param array<string>|null $value Value to set for the riskEventTypes property.
    */
    public function setRiskEventTypes(?array $value ): void {
        $this->riskEventTypes = $value;
    }

    /**
     * Sets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
     *  @param array<string>|null $value Value to set for the riskEventTypes_v2 property.
    */
    public function setRiskEventTypes_v2(?array $value ): void {
        $this->riskEventTypes_v2 = $value;
    }

    /**
     * Sets the riskLevelAggregated property value. The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     *  @param RiskLevel|null $value Value to set for the riskLevelAggregated property.
    */
    public function setRiskLevelAggregated(?RiskLevel $value ): void {
        $this->riskLevelAggregated = $value;
    }

    /**
     * Sets the riskLevelDuringSignIn property value. The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     *  @param RiskLevel|null $value Value to set for the riskLevelDuringSignIn property.
    */
    public function setRiskLevelDuringSignIn(?RiskLevel $value ): void {
        $this->riskLevelDuringSignIn = $value;
    }

    /**
     * Sets the riskState property value. The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue. Supports $filter (eq operator only).
     *  @param RiskState|null $value Value to set for the riskState property.
    */
    public function setRiskState(?RiskState $value ): void {
        $this->riskState = $value;
    }

    /**
     * Sets the status property value. The sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
     *  @param SignInStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SignInStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the userDisplayName property value. The display name of the user. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userId property value. The identifier of the user. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. The UPN of the user. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
