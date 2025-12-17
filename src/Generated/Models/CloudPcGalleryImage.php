<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class CloudPcGalleryImage extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcGalleryImage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcGalleryImage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcGalleryImage {
        return new CloudPcGalleryImage();
    }

    /**
     * Gets the displayName property value. The display name of this gallery image. For example, Windows 11 Enterprise + Microsoft 365 Apps 22H2. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the endDate property value. The date when the status of the image becomes supportedWithWarning. Users can still provision new Cloud PCs if the current time is later than endDate and earlier than expirationDate. For example, assume the endDate of a gallery image is 2023-9-14 and expirationDate is 2024-3-14, users are able to provision new Cloud PCs if today is 2023-10-01. Read-only.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        $val = $this->getBackingStore()->get('endDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDate'");
    }

    /**
     * Gets the expirationDate property value. The date when the image is no longer available. Users are unable to provision new Cloud PCs if the current time is later than expirationDate. The value is usually endDate plus six months. For example, if the startDate is 2025-10-14, the expirationDate is usually 2026-04-14. Read-only.
     * @return Date|null
    */
    public function getExpirationDate(): ?Date {
        $val = $this->getBackingStore()->get('expirationDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getDateValue()),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getDateValue()),
            'offerName' => fn(ParseNode $n) => $o->setOfferName($n->getStringValue()),
            'publisherName' => fn(ParseNode $n) => $o->setPublisherName($n->getStringValue()),
            'sizeInGB' => fn(ParseNode $n) => $o->setSizeInGB($n->getIntegerValue()),
            'skuName' => fn(ParseNode $n) => $o->setSkuName($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcGalleryImageStatus::class)),
        ]);
    }

    /**
     * Gets the offerName property value. The offer name of this gallery image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only.
     * @return string|null
    */
    public function getOfferName(): ?string {
        $val = $this->getBackingStore()->get('offerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offerName'");
    }

    /**
     * Gets the publisherName property value. The publisher name of this gallery image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only.
     * @return string|null
    */
    public function getPublisherName(): ?string {
        $val = $this->getBackingStore()->get('publisherName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisherName'");
    }

    /**
     * Gets the sizeInGB property value. Indicates the size of this image in gigabytes. For example, 64. Read-only.
     * @return int|null
    */
    public function getSizeInGB(): ?int {
        $val = $this->getBackingStore()->get('sizeInGB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sizeInGB'");
    }

    /**
     * Gets the skuName property value. The SKU name of this image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only.
     * @return string|null
    */
    public function getSkuName(): ?string {
        $val = $this->getBackingStore()->get('skuName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuName'");
    }

    /**
     * Gets the startDate property value. The date when the Cloud PC image is available for provisioning new Cloud PCs. For example, 2022-09-20. Read-only.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        $val = $this->getBackingStore()->get('startDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Gets the status property value. The status of the gallery image on the Cloud PC. The possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. The default value is supported. Read-only.
     * @return CloudPcGalleryImageStatus|null
    */
    public function getStatus(): ?CloudPcGalleryImageStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CloudPcGalleryImageStatus) {
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
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateValue('endDate', $this->getEndDate());
        $writer->writeDateValue('expirationDate', $this->getExpirationDate());
        $writer->writeStringValue('offerName', $this->getOfferName());
        $writer->writeStringValue('publisherName', $this->getPublisherName());
        $writer->writeIntegerValue('sizeInGB', $this->getSizeInGB());
        $writer->writeStringValue('skuName', $this->getSkuName());
        $writer->writeDateValue('startDate', $this->getStartDate());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the displayName property value. The display name of this gallery image. For example, Windows 11 Enterprise + Microsoft 365 Apps 22H2. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDate property value. The date when the status of the image becomes supportedWithWarning. Users can still provision new Cloud PCs if the current time is later than endDate and earlier than expirationDate. For example, assume the endDate of a gallery image is 2023-9-14 and expirationDate is 2024-3-14, users are able to provision new Cloud PCs if today is 2023-10-01. Read-only.
     * @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the expirationDate property value. The date when the image is no longer available. Users are unable to provision new Cloud PCs if the current time is later than expirationDate. The value is usually endDate plus six months. For example, if the startDate is 2025-10-14, the expirationDate is usually 2026-04-14. Read-only.
     * @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value): void {
        $this->getBackingStore()->set('expirationDate', $value);
    }

    /**
     * Sets the offerName property value. The offer name of this gallery image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only.
     * @param string|null $value Value to set for the offerName property.
    */
    public function setOfferName(?string $value): void {
        $this->getBackingStore()->set('offerName', $value);
    }

    /**
     * Sets the publisherName property value. The publisher name of this gallery image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only.
     * @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value): void {
        $this->getBackingStore()->set('publisherName', $value);
    }

    /**
     * Sets the sizeInGB property value. Indicates the size of this image in gigabytes. For example, 64. Read-only.
     * @param int|null $value Value to set for the sizeInGB property.
    */
    public function setSizeInGB(?int $value): void {
        $this->getBackingStore()->set('sizeInGB', $value);
    }

    /**
     * Sets the skuName property value. The SKU name of this image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only.
     * @param string|null $value Value to set for the skuName property.
    */
    public function setSkuName(?string $value): void {
        $this->getBackingStore()->set('skuName', $value);
    }

    /**
     * Sets the startDate property value. The date when the Cloud PC image is available for provisioning new Cloud PCs. For example, 2022-09-20. Read-only.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the status property value. The status of the gallery image on the Cloud PC. The possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. The default value is supported. Read-only.
     * @param CloudPcGalleryImageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcGalleryImageStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
