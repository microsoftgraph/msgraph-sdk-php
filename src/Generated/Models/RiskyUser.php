<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskyUser extends Entity implements Parsable 
{
    /**
     * @var array<RiskyUserHistoryItem>|null $history The activity related to user risk level change
    */
    private ?array $history = null;
    
    /**
     * @var bool|null $isDeleted Indicates whether the user is deleted. Possible values are: true, false.
    */
    private ?bool $isDeleted = null;
    
    /**
     * @var bool|null $isProcessing Indicates whether a user's risky state is being processed by the backend.
    */
    private ?bool $isProcessing = null;
    
    /**
     * @var RiskDetail|null $riskDetail The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
    */
    private ?RiskDetail $riskDetail = null;
    
    /**
     * @var DateTime|null $riskLastUpdatedDateTime The date and time that the risky user was last updated.  The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $riskLastUpdatedDateTime = null;
    
    /**
     * @var RiskLevel|null $riskLevel Level of the detected risky user. The possible values are low, medium, high, hidden, none, unknownFutureValue.
    */
    private ?RiskLevel $riskLevel = null;
    
    /**
     * @var RiskState|null $riskState State of the user's risk. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
    */
    private ?RiskState $riskState = null;
    
    /**
     * @var string|null $userDisplayName Risky user display name.
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userPrincipalName Risky user principal name.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new riskyUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskyUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskyUser {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.riskyUserHistoryItem': return new RiskyUserHistoryItem();
            }
        }
        return new RiskyUser();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'history' => function (ParseNode $n) use ($o) { $o->setHistory($n->getCollectionOfObjectValues(array(RiskyUserHistoryItem::class, 'createFromDiscriminatorValue'))); },
            'isDeleted' => function (ParseNode $n) use ($o) { $o->setIsDeleted($n->getBooleanValue()); },
            'isProcessing' => function (ParseNode $n) use ($o) { $o->setIsProcessing($n->getBooleanValue()); },
            'riskDetail' => function (ParseNode $n) use ($o) { $o->setRiskDetail($n->getEnumValue(RiskDetail::class)); },
            'riskLastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setRiskLastUpdatedDateTime($n->getDateTimeValue()); },
            'riskLevel' => function (ParseNode $n) use ($o) { $o->setRiskLevel($n->getEnumValue(RiskLevel::class)); },
            'riskState' => function (ParseNode $n) use ($o) { $o->setRiskState($n->getEnumValue(RiskState::class)); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the history property value. The activity related to user risk level change
     * @return array<RiskyUserHistoryItem>|null
    */
    public function getHistory(): ?array {
        return $this->history;
    }

    /**
     * Gets the isDeleted property value. Indicates whether the user is deleted. Possible values are: true, false.
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        return $this->isDeleted;
    }

    /**
     * Gets the isProcessing property value. Indicates whether a user's risky state is being processed by the backend.
     * @return bool|null
    */
    public function getIsProcessing(): ?bool {
        return $this->isProcessing;
    }

    /**
     * Gets the riskDetail property value. The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
     * @return RiskDetail|null
    */
    public function getRiskDetail(): ?RiskDetail {
        return $this->riskDetail;
    }

    /**
     * Gets the riskLastUpdatedDateTime property value. The date and time that the risky user was last updated.  The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRiskLastUpdatedDateTime(): ?DateTime {
        return $this->riskLastUpdatedDateTime;
    }

    /**
     * Gets the riskLevel property value. Level of the detected risky user. The possible values are low, medium, high, hidden, none, unknownFutureValue.
     * @return RiskLevel|null
    */
    public function getRiskLevel(): ?RiskLevel {
        return $this->riskLevel;
    }

    /**
     * Gets the riskState property value. State of the user's risk. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     * @return RiskState|null
    */
    public function getRiskState(): ?RiskState {
        return $this->riskState;
    }

    /**
     * Gets the userDisplayName property value. Risky user display name.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userPrincipalName property value. Risky user principal name.
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
        $writer->writeCollectionOfObjectValues('history', $this->history);
        $writer->writeBooleanValue('isDeleted', $this->isDeleted);
        $writer->writeBooleanValue('isProcessing', $this->isProcessing);
        $writer->writeEnumValue('riskDetail', $this->riskDetail);
        $writer->writeDateTimeValue('riskLastUpdatedDateTime', $this->riskLastUpdatedDateTime);
        $writer->writeEnumValue('riskLevel', $this->riskLevel);
        $writer->writeEnumValue('riskState', $this->riskState);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the history property value. The activity related to user risk level change
     *  @param array<RiskyUserHistoryItem>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value ): void {
        $this->history = $value;
    }

    /**
     * Sets the isDeleted property value. Indicates whether the user is deleted. Possible values are: true, false.
     *  @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value ): void {
        $this->isDeleted = $value;
    }

    /**
     * Sets the isProcessing property value. Indicates whether a user's risky state is being processed by the backend.
     *  @param bool|null $value Value to set for the isProcessing property.
    */
    public function setIsProcessing(?bool $value ): void {
        $this->isProcessing = $value;
    }

    /**
     * Sets the riskDetail property value. The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
     *  @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value ): void {
        $this->riskDetail = $value;
    }

    /**
     * Sets the riskLastUpdatedDateTime property value. The date and time that the risky user was last updated.  The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the riskLastUpdatedDateTime property.
    */
    public function setRiskLastUpdatedDateTime(?DateTime $value ): void {
        $this->riskLastUpdatedDateTime = $value;
    }

    /**
     * Sets the riskLevel property value. Level of the detected risky user. The possible values are low, medium, high, hidden, none, unknownFutureValue.
     *  @param RiskLevel|null $value Value to set for the riskLevel property.
    */
    public function setRiskLevel(?RiskLevel $value ): void {
        $this->riskLevel = $value;
    }

    /**
     * Sets the riskState property value. State of the user's risk. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     *  @param RiskState|null $value Value to set for the riskState property.
    */
    public function setRiskState(?RiskState $value ): void {
        $this->riskState = $value;
    }

    /**
     * Sets the userDisplayName property value. Risky user display name.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userPrincipalName property value. Risky user principal name.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
