<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AgreementAcceptance extends Entity implements Parsable 
{
    /**
     * Instantiates a new AgreementAcceptance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgreementAcceptance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgreementAcceptance {
        return new AgreementAcceptance();
    }

    /**
     * Gets the agreementFileId property value. The identifier of the agreement file accepted by the user.
     * @return string|null
    */
    public function getAgreementFileId(): ?string {
        return $this->getBackingStore()->get('agreementFileId');
    }

    /**
     * Gets the agreementId property value. The identifier of the agreement.
     * @return string|null
    */
    public function getAgreementId(): ?string {
        return $this->getBackingStore()->get('agreementId');
    }

    /**
     * Gets the deviceDisplayName property value. The display name of the device used for accepting the agreement.
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->getBackingStore()->get('deviceDisplayName');
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device used for accepting the agreement. Supports $filter (eq) and eq for null values.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceOSType property value. The operating system used to accept the agreement.
     * @return string|null
    */
    public function getDeviceOSType(): ?string {
        return $this->getBackingStore()->get('deviceOSType');
    }

    /**
     * Gets the deviceOSVersion property value. The operating system version of the device used to accept the agreement.
     * @return string|null
    */
    public function getDeviceOSVersion(): ?string {
        return $this->getBackingStore()->get('deviceOSVersion');
    }

    /**
     * Gets the expirationDateTime property value. The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ge, le) and eq for null values.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agreementFileId' => fn(ParseNode $n) => $o->setAgreementFileId($n->getStringValue()),
            'agreementId' => fn(ParseNode $n) => $o->setAgreementId($n->getStringValue()),
            'deviceDisplayName' => fn(ParseNode $n) => $o->setDeviceDisplayName($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceOSType' => fn(ParseNode $n) => $o->setDeviceOSType($n->getStringValue()),
            'deviceOSVersion' => fn(ParseNode $n) => $o->setDeviceOSVersion($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'recordedDateTime' => fn(ParseNode $n) => $o->setRecordedDateTime($n->getDateTimeValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AgreementAcceptanceState::class)),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userEmail' => fn(ParseNode $n) => $o->setUserEmail($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recordedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRecordedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('recordedDateTime');
    }

    /**
     * Gets the state property value. The state of the agreement acceptance. Possible values are: accepted, declined. Supports $filter (eq).
     * @return AgreementAcceptanceState|null
    */
    public function getState(): ?AgreementAcceptanceState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the userDisplayName property value. Display name of the user when the acceptance was recorded.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Gets the userEmail property value. Email of the user when the acceptance was recorded.
     * @return string|null
    */
    public function getUserEmail(): ?string {
        return $this->getBackingStore()->get('userEmail');
    }

    /**
     * Gets the userId property value. The identifier of the user who accepted the agreement. Supports $filter (eq).
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPrincipalName property value. UPN of the user when the acceptance was recorded.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agreementFileId', $this->getAgreementFileId());
        $writer->writeStringValue('agreementId', $this->getAgreementId());
        $writer->writeStringValue('deviceDisplayName', $this->getDeviceDisplayName());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceOSType', $this->getDeviceOSType());
        $writer->writeStringValue('deviceOSVersion', $this->getDeviceOSVersion());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('recordedDateTime', $this->getRecordedDateTime());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userEmail', $this->getUserEmail());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the agreementFileId property value. The identifier of the agreement file accepted by the user.
     * @param string|null $value Value to set for the agreementFileId property.
    */
    public function setAgreementFileId(?string $value): void {
        $this->getBackingStore()->set('agreementFileId', $value);
    }

    /**
     * Sets the agreementId property value. The identifier of the agreement.
     * @param string|null $value Value to set for the agreementId property.
    */
    public function setAgreementId(?string $value): void {
        $this->getBackingStore()->set('agreementId', $value);
    }

    /**
     * Sets the deviceDisplayName property value. The display name of the device used for accepting the agreement.
     * @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value): void {
        $this->getBackingStore()->set('deviceDisplayName', $value);
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device used for accepting the agreement. Supports $filter (eq) and eq for null values.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceOSType property value. The operating system used to accept the agreement.
     * @param string|null $value Value to set for the deviceOSType property.
    */
    public function setDeviceOSType(?string $value): void {
        $this->getBackingStore()->set('deviceOSType', $value);
    }

    /**
     * Sets the deviceOSVersion property value. The operating system version of the device used to accept the agreement.
     * @param string|null $value Value to set for the deviceOSVersion property.
    */
    public function setDeviceOSVersion(?string $value): void {
        $this->getBackingStore()->set('deviceOSVersion', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ge, le) and eq for null values.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the recordedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the recordedDateTime property.
    */
    public function setRecordedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('recordedDateTime', $value);
    }

    /**
     * Sets the state property value. The state of the agreement acceptance. Possible values are: accepted, declined. Supports $filter (eq).
     * @param AgreementAcceptanceState|null $value Value to set for the state property.
    */
    public function setState(?AgreementAcceptanceState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the userDisplayName property value. Display name of the user when the acceptance was recorded.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userEmail property value. Email of the user when the acceptance was recorded.
     * @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->getBackingStore()->set('userEmail', $value);
    }

    /**
     * Sets the userId property value. The identifier of the user who accepted the agreement. Supports $filter (eq).
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. UPN of the user when the acceptance was recorded.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
