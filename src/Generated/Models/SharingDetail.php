<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharingDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new sharingDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharingDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharingDetail {
        return new SharingDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sharedBy' => fn(ParseNode $n) => $o->setSharedBy($n->getObjectValue([InsightIdentity::class, 'createFromDiscriminatorValue'])),
            'sharedDateTime' => fn(ParseNode $n) => $o->setSharedDateTime($n->getDateTimeValue()),
            'sharingReference' => fn(ParseNode $n) => $o->setSharingReference($n->getObjectValue([ResourceReference::class, 'createFromDiscriminatorValue'])),
            'sharingSubject' => fn(ParseNode $n) => $o->setSharingSubject($n->getStringValue()),
            'sharingType' => fn(ParseNode $n) => $o->setSharingType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the sharedBy property value. The user who shared the document.
     * @return InsightIdentity|null
    */
    public function getSharedBy(): ?InsightIdentity {
        return $this->getBackingStore()->get('sharedBy');
    }

    /**
     * Gets the sharedDateTime property value. The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getSharedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('sharedDateTime');
    }

    /**
     * Gets the sharingReference property value. The sharingReference property
     * @return ResourceReference|null
    */
    public function getSharingReference(): ?ResourceReference {
        return $this->getBackingStore()->get('sharingReference');
    }

    /**
     * Gets the sharingSubject property value. The subject with which the document was shared.
     * @return string|null
    */
    public function getSharingSubject(): ?string {
        return $this->getBackingStore()->get('sharingSubject');
    }

    /**
     * Gets the sharingType property value. Determines the way the document was shared, can be by a 'Link', 'Attachment', 'Group', 'Site'.
     * @return string|null
    */
    public function getSharingType(): ?string {
        return $this->getBackingStore()->get('sharingType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('sharedBy', $this->getSharedBy());
        $writer->writeDateTimeValue('sharedDateTime', $this->getSharedDateTime());
        $writer->writeStringValue('sharingSubject', $this->getSharingSubject());
        $writer->writeStringValue('sharingType', $this->getSharingType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sharedBy property value. The user who shared the document.
     * @param InsightIdentity|null $value Value to set for the sharedBy property.
    */
    public function setSharedBy(?InsightIdentity $value): void {
        $this->getBackingStore()->set('sharedBy', $value);
    }

    /**
     * Sets the sharedDateTime property value. The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the sharedDateTime property.
    */
    public function setSharedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('sharedDateTime', $value);
    }

    /**
     * Sets the sharingReference property value. The sharingReference property
     * @param ResourceReference|null $value Value to set for the sharingReference property.
    */
    public function setSharingReference(?ResourceReference $value): void {
        $this->getBackingStore()->set('sharingReference', $value);
    }

    /**
     * Sets the sharingSubject property value. The subject with which the document was shared.
     * @param string|null $value Value to set for the sharingSubject property.
    */
    public function setSharingSubject(?string $value): void {
        $this->getBackingStore()->set('sharingSubject', $value);
    }

    /**
     * Sets the sharingType property value. Determines the way the document was shared, can be by a 'Link', 'Attachment', 'Group', 'Site'.
     * @param string|null $value Value to set for the sharingType property.
    */
    public function setSharingType(?string $value): void {
        $this->getBackingStore()->set('sharingType', $value);
    }

}
