<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AgreementAcceptance extends Entity 
{
    /** @var string|null $agreementFileId The identifier of the agreement file accepted by the user. */
    private ?string $agreementFileId = null;
    
    /** @var string|null $agreementId The identifier of the agreement. */
    private ?string $agreementId = null;
    
    /** @var string|null $deviceDisplayName The display name of the device used for accepting the agreement. */
    private ?string $deviceDisplayName = null;
    
    /** @var string|null $deviceId The unique identifier of the device used for accepting the agreement. */
    private ?string $deviceId = null;
    
    /** @var string|null $deviceOSType The operating system used to accept the agreement. */
    private ?string $deviceOSType = null;
    
    /** @var string|null $deviceOSVersion The operating system version of the device used to accept the agreement. */
    private ?string $deviceOSVersion = null;
    
    /** @var DateTime|null $expirationDateTime The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $expirationDateTime = null;
    
    /** @var DateTime|null $recordedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $recordedDateTime = null;
    
    /** @var AgreementAcceptanceState|null $state The state of the agreement acceptance. Possible values are: accepted, declined. Supports $filter (eq). */
    private ?AgreementAcceptanceState $state = null;
    
    /** @var string|null $userDisplayName Display name of the user when the acceptance was recorded. */
    private ?string $userDisplayName = null;
    
    /** @var string|null $userEmail Email of the user when the acceptance was recorded. */
    private ?string $userEmail = null;
    
    /** @var string|null $userId The identifier of the user who accepted the agreement. */
    private ?string $userId = null;
    
    /** @var string|null $userPrincipalName UPN of the user when the acceptance was recorded. */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new agreementAcceptance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgreementAcceptance
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AgreementAcceptance {
        return new AgreementAcceptance();
    }

    /**
     * Gets the agreementFileId property value. The identifier of the agreement file accepted by the user.
     * @return string|null
    */
    public function getAgreementFileId(): ?string {
        return $this->agreementFileId;
    }

    /**
     * Gets the agreementId property value. The identifier of the agreement.
     * @return string|null
    */
    public function getAgreementId(): ?string {
        return $this->agreementId;
    }

    /**
     * Gets the deviceDisplayName property value. The display name of the device used for accepting the agreement.
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->deviceDisplayName;
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device used for accepting the agreement.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceOSType property value. The operating system used to accept the agreement.
     * @return string|null
    */
    public function getDeviceOSType(): ?string {
        return $this->deviceOSType;
    }

    /**
     * Gets the deviceOSVersion property value. The operating system version of the device used to accept the agreement.
     * @return string|null
    */
    public function getDeviceOSVersion(): ?string {
        return $this->deviceOSVersion;
    }

    /**
     * Gets the expirationDateTime property value. The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'agreementFileId' => function (self $o, ParseNode $n) { $o->setAgreementFileId($n->getStringValue()); },
            'agreementId' => function (self $o, ParseNode $n) { $o->setAgreementId($n->getStringValue()); },
            'deviceDisplayName' => function (self $o, ParseNode $n) { $o->setDeviceDisplayName($n->getStringValue()); },
            'deviceId' => function (self $o, ParseNode $n) { $o->setDeviceId($n->getStringValue()); },
            'deviceOSType' => function (self $o, ParseNode $n) { $o->setDeviceOSType($n->getStringValue()); },
            'deviceOSVersion' => function (self $o, ParseNode $n) { $o->setDeviceOSVersion($n->getStringValue()); },
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'recordedDateTime' => function (self $o, ParseNode $n) { $o->setRecordedDateTime($n->getDateTimeValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(AgreementAcceptanceState::class)); },
            'userDisplayName' => function (self $o, ParseNode $n) { $o->setUserDisplayName($n->getStringValue()); },
            'userEmail' => function (self $o, ParseNode $n) { $o->setUserEmail($n->getStringValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the recordedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRecordedDateTime(): ?DateTime {
        return $this->recordedDateTime;
    }

    /**
     * Gets the state property value. The state of the agreement acceptance. Possible values are: accepted, declined. Supports $filter (eq).
     * @return AgreementAcceptanceState|null
    */
    public function getState(): ?AgreementAcceptanceState {
        return $this->state;
    }

    /**
     * Gets the userDisplayName property value. Display name of the user when the acceptance was recorded.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userEmail property value. Email of the user when the acceptance was recorded.
     * @return string|null
    */
    public function getUserEmail(): ?string {
        return $this->userEmail;
    }

    /**
     * Gets the userId property value. The identifier of the user who accepted the agreement.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. UPN of the user when the acceptance was recorded.
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
        $writer->writeStringValue('agreementFileId', $this->agreementFileId);
        $writer->writeStringValue('agreementId', $this->agreementId);
        $writer->writeStringValue('deviceDisplayName', $this->deviceDisplayName);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceOSType', $this->deviceOSType);
        $writer->writeStringValue('deviceOSVersion', $this->deviceOSVersion);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeDateTimeValue('recordedDateTime', $this->recordedDateTime);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userEmail', $this->userEmail);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the agreementFileId property value. The identifier of the agreement file accepted by the user.
     *  @param string|null $value Value to set for the agreementFileId property.
    */
    public function setAgreementFileId(?string $value ): void {
        $this->agreementFileId = $value;
    }

    /**
     * Sets the agreementId property value. The identifier of the agreement.
     *  @param string|null $value Value to set for the agreementId property.
    */
    public function setAgreementId(?string $value ): void {
        $this->agreementId = $value;
    }

    /**
     * Sets the deviceDisplayName property value. The display name of the device used for accepting the agreement.
     *  @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value ): void {
        $this->deviceDisplayName = $value;
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device used for accepting the agreement.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceOSType property value. The operating system used to accept the agreement.
     *  @param string|null $value Value to set for the deviceOSType property.
    */
    public function setDeviceOSType(?string $value ): void {
        $this->deviceOSType = $value;
    }

    /**
     * Sets the deviceOSVersion property value. The operating system version of the device used to accept the agreement.
     *  @param string|null $value Value to set for the deviceOSVersion property.
    */
    public function setDeviceOSVersion(?string $value ): void {
        $this->deviceOSVersion = $value;
    }

    /**
     * Sets the expirationDateTime property value. The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the recordedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the recordedDateTime property.
    */
    public function setRecordedDateTime(?DateTime $value ): void {
        $this->recordedDateTime = $value;
    }

    /**
     * Sets the state property value. The state of the agreement acceptance. Possible values are: accepted, declined. Supports $filter (eq).
     *  @param AgreementAcceptanceState|null $value Value to set for the state property.
    */
    public function setState(?AgreementAcceptanceState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the userDisplayName property value. Display name of the user when the acceptance was recorded.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userEmail property value. Email of the user when the acceptance was recorded.
     *  @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value ): void {
        $this->userEmail = $value;
    }

    /**
     * Sets the userId property value. The identifier of the user who accepted the agreement.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. UPN of the user when the acceptance was recorded.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
