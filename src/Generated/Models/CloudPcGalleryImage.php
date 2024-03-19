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
     * Gets the displayName property value. The displayName property
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
     * Gets the endDate property value. The endDate property
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
     * Gets the expirationDate property value. The expirationDate property
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
     * Gets the offerName property value. The offerName property
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
     * Gets the publisherName property value. The publisherName property
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
     * Gets the sizeInGB property value. The sizeInGB property
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
     * Gets the skuName property value. The skuName property
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
     * Gets the startDate property value. The startDate property
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
     * Gets the status property value. The status property
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
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDate property value. The endDate property
     * @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the expirationDate property value. The expirationDate property
     * @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value): void {
        $this->getBackingStore()->set('expirationDate', $value);
    }

    /**
     * Sets the offerName property value. The offerName property
     * @param string|null $value Value to set for the offerName property.
    */
    public function setOfferName(?string $value): void {
        $this->getBackingStore()->set('offerName', $value);
    }

    /**
     * Sets the publisherName property value. The publisherName property
     * @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value): void {
        $this->getBackingStore()->set('publisherName', $value);
    }

    /**
     * Sets the sizeInGB property value. The sizeInGB property
     * @param int|null $value Value to set for the sizeInGB property.
    */
    public function setSizeInGB(?int $value): void {
        $this->getBackingStore()->set('sizeInGB', $value);
    }

    /**
     * Sets the skuName property value. The skuName property
     * @param string|null $value Value to set for the skuName property.
    */
    public function setSkuName(?string $value): void {
        $this->getBackingStore()->set('skuName', $value);
    }

    /**
     * Sets the startDate property value. The startDate property
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CloudPcGalleryImageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcGalleryImageStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
