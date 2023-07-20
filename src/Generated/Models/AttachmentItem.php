<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AttachmentItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new attachmentItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentItem {
        return new AttachmentItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the attachmentType property value. The type of attachment. Possible values are: file, item, reference. Required.
     * @return AttachmentType|null
    */
    public function getAttachmentType(): ?AttachmentType {
        $val = $this->getBackingStore()->get('attachmentType');
        if (is_null($val) || $val instanceof AttachmentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachmentType'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contentId property value. The CID or Content-Id of the attachment for referencing in case of in-line attachments using <img src='cid:contentId'> tag in HTML messages. Optional.
     * @return string|null
    */
    public function getContentId(): ?string {
        $val = $this->getBackingStore()->get('contentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentId'");
    }

    /**
     * Gets the contentType property value. The nature of the data in the attachment. Optional.
     * @return string|null
    */
    public function getContentType(): ?string {
        $val = $this->getBackingStore()->get('contentType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attachmentType' => fn(ParseNode $n) => $o->setAttachmentType($n->getEnumValue(AttachmentType::class)),
            'contentId' => fn(ParseNode $n) => $o->setContentId($n->getStringValue()),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'isInline' => fn(ParseNode $n) => $o->setIsInline($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the isInline property value. true if the attachment is an inline attachment; otherwise, false. Optional.
     * @return bool|null
    */
    public function getIsInline(): ?bool {
        $val = $this->getBackingStore()->get('isInline');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInline'");
    }

    /**
     * Gets the name property value. The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the size property value. The length of the attachment in bytes. Required.
     * @return int|null
    */
    public function getSize(): ?int {
        $val = $this->getBackingStore()->get('size');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'size'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('attachmentType', $this->getAttachmentType());
        $writer->writeStringValue('contentId', $this->getContentId());
        $writer->writeStringValue('contentType', $this->getContentType());
        $writer->writeBooleanValue('isInline', $this->getIsInline());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attachmentType property value. The type of attachment. Possible values are: file, item, reference. Required.
     * @param AttachmentType|null $value Value to set for the attachmentType property.
    */
    public function setAttachmentType(?AttachmentType $value): void {
        $this->getBackingStore()->set('attachmentType', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contentId property value. The CID or Content-Id of the attachment for referencing in case of in-line attachments using <img src='cid:contentId'> tag in HTML messages. Optional.
     * @param string|null $value Value to set for the contentId property.
    */
    public function setContentId(?string $value): void {
        $this->getBackingStore()->set('contentId', $value);
    }

    /**
     * Sets the contentType property value. The nature of the data in the attachment. Optional.
     * @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the isInline property value. true if the attachment is an inline attachment; otherwise, false. Optional.
     * @param bool|null $value Value to set for the isInline property.
    */
    public function setIsInline(?bool $value): void {
        $this->getBackingStore()->set('isInline', $value);
    }

    /**
     * Sets the name property value. The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the size property value. The length of the attachment in bytes. Required.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

}
