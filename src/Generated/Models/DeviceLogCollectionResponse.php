<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows Log Collection request entity.
*/
class DeviceLogCollectionResponse extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceLogCollectionResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceLogCollectionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceLogCollectionResponse {
        return new DeviceLogCollectionResponse();
    }

    /**
     * Gets the enrolledByUser property value. The User Principal Name (UPN) of the user that enrolled the device.
     * @return string|null
    */
    public function getEnrolledByUser(): ?string {
        $val = $this->getBackingStore()->get('enrolledByUser');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrolledByUser'");
    }

    /**
     * Gets the expirationDateTimeUTC property value. The DateTime of the expiration of the logs.
     * @return DateTime|null
    */
    public function getExpirationDateTimeUTC(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTimeUTC');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTimeUTC'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enrolledByUser' => fn(ParseNode $n) => $o->setEnrolledByUser($n->getStringValue()),
            'expirationDateTimeUTC' => fn(ParseNode $n) => $o->setExpirationDateTimeUTC($n->getDateTimeValue()),
            'initiatedByUserPrincipalName' => fn(ParseNode $n) => $o->setInitiatedByUserPrincipalName($n->getStringValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'receivedDateTimeUTC' => fn(ParseNode $n) => $o->setReceivedDateTimeUTC($n->getDateTimeValue()),
            'requestedDateTimeUTC' => fn(ParseNode $n) => $o->setRequestedDateTimeUTC($n->getDateTimeValue()),
            'sizeInKB' => fn(ParseNode $n) => $o->setSizeInKB($n->getFloatValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AppLogUploadState::class)),
        ]);
    }

    /**
     * Gets the initiatedByUserPrincipalName property value. The UPN for who initiated the request.
     * @return string|null
    */
    public function getInitiatedByUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('initiatedByUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatedByUserPrincipalName'");
    }

    /**
     * Gets the managedDeviceId property value. Indicates Intune device unique identifier.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceId'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the receivedDateTimeUTC property value. The DateTime the request was received.
     * @return DateTime|null
    */
    public function getReceivedDateTimeUTC(): ?DateTime {
        $val = $this->getBackingStore()->get('receivedDateTimeUTC');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivedDateTimeUTC'");
    }

    /**
     * Gets the requestedDateTimeUTC property value. The DateTime of the request.
     * @return DateTime|null
    */
    public function getRequestedDateTimeUTC(): ?DateTime {
        $val = $this->getBackingStore()->get('requestedDateTimeUTC');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedDateTimeUTC'");
    }

    /**
     * Gets the sizeInKB property value. The size of the logs in KB. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getSizeInKB(): ?float {
        $val = $this->getBackingStore()->get('sizeInKB');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sizeInKB'");
    }

    /**
     * Gets the status property value. AppLogUploadStatus
     * @return AppLogUploadState|null
    */
    public function getStatus(): ?AppLogUploadState {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof AppLogUploadState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('enrolledByUser', $this->getEnrolledByUser());
        $writer->writeDateTimeValue('expirationDateTimeUTC', $this->getExpirationDateTimeUTC());
        $writer->writeStringValue('initiatedByUserPrincipalName', $this->getInitiatedByUserPrincipalName());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('receivedDateTimeUTC', $this->getReceivedDateTimeUTC());
        $writer->writeDateTimeValue('requestedDateTimeUTC', $this->getRequestedDateTimeUTC());
        $writer->writeFloatValue('sizeInKB', $this->getSizeInKB());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the enrolledByUser property value. The User Principal Name (UPN) of the user that enrolled the device.
     * @param string|null $value Value to set for the enrolledByUser property.
    */
    public function setEnrolledByUser(?string $value): void {
        $this->getBackingStore()->set('enrolledByUser', $value);
    }

    /**
     * Sets the expirationDateTimeUTC property value. The DateTime of the expiration of the logs.
     * @param DateTime|null $value Value to set for the expirationDateTimeUTC property.
    */
    public function setExpirationDateTimeUTC(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTimeUTC', $value);
    }

    /**
     * Sets the initiatedByUserPrincipalName property value. The UPN for who initiated the request.
     * @param string|null $value Value to set for the initiatedByUserPrincipalName property.
    */
    public function setInitiatedByUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('initiatedByUserPrincipalName', $value);
    }

    /**
     * Sets the managedDeviceId property value. Indicates Intune device unique identifier.
     * @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the receivedDateTimeUTC property value. The DateTime the request was received.
     * @param DateTime|null $value Value to set for the receivedDateTimeUTC property.
    */
    public function setReceivedDateTimeUTC(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTimeUTC', $value);
    }

    /**
     * Sets the requestedDateTimeUTC property value. The DateTime of the request.
     * @param DateTime|null $value Value to set for the requestedDateTimeUTC property.
    */
    public function setRequestedDateTimeUTC(?DateTime $value): void {
        $this->getBackingStore()->set('requestedDateTimeUTC', $value);
    }

    /**
     * Sets the sizeInKB property value. The size of the logs in KB. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the sizeInKB property.
    */
    public function setSizeInKB(?float $value): void {
        $this->getBackingStore()->set('sizeInKB', $value);
    }

    /**
     * Sets the status property value. AppLogUploadStatus
     * @param AppLogUploadState|null $value Value to set for the status property.
    */
    public function setStatus(?AppLogUploadState $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
