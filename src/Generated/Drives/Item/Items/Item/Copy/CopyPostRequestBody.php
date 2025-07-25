<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Copy;

use Microsoft\Graph\Generated\Models\ItemReference;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CopyPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CopyPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopyPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopyPostRequestBody {
        return new CopyPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the childrenOnly property value. The childrenOnly property
     * @return bool|null
    */
    public function getChildrenOnly(): ?bool {
        $val = $this->getBackingStore()->get('childrenOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'childrenOnly'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'childrenOnly' => fn(ParseNode $n) => $o->setChildrenOnly($n->getBooleanValue()),
            'includeAllVersionHistory' => fn(ParseNode $n) => $o->setIncludeAllVersionHistory($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'parentReference' => fn(ParseNode $n) => $o->setParentReference($n->getObjectValue([ItemReference::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the includeAllVersionHistory property value. The includeAllVersionHistory property
     * @return bool|null
    */
    public function getIncludeAllVersionHistory(): ?bool {
        $val = $this->getBackingStore()->get('includeAllVersionHistory');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeAllVersionHistory'");
    }

    /**
     * Gets the name property value. The name property
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
     * Gets the parentReference property value. The parentReference property
     * @return ItemReference|null
    */
    public function getParentReference(): ?ItemReference {
        $val = $this->getBackingStore()->get('parentReference');
        if (is_null($val) || $val instanceof ItemReference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentReference'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('childrenOnly', $this->getChildrenOnly());
        $writer->writeBooleanValue('includeAllVersionHistory', $this->getIncludeAllVersionHistory());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('parentReference', $this->getParentReference());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the childrenOnly property value. The childrenOnly property
     * @param bool|null $value Value to set for the childrenOnly property.
    */
    public function setChildrenOnly(?bool $value): void {
        $this->getBackingStore()->set('childrenOnly', $value);
    }

    /**
     * Sets the includeAllVersionHistory property value. The includeAllVersionHistory property
     * @param bool|null $value Value to set for the includeAllVersionHistory property.
    */
    public function setIncludeAllVersionHistory(?bool $value): void {
        $this->getBackingStore()->set('includeAllVersionHistory', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the parentReference property value. The parentReference property
     * @param ItemReference|null $value Value to set for the parentReference property.
    */
    public function setParentReference(?ItemReference $value): void {
        $this->getBackingStore()->set('parentReference', $value);
    }

}
