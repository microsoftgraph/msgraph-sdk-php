<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\CopyToDefaultContentLocation;

use Microsoft\Graph\Generated\Models\ItemReference;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CopyToDefaultContentLocationPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CopyToDefaultContentLocationPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopyToDefaultContentLocationPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopyToDefaultContentLocationPostRequestBody {
        return new CopyToDefaultContentLocationPostRequestBody();
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
     * Gets the destinationFileName property value. The destinationFileName property
     * @return string|null
    */
    public function getDestinationFileName(): ?string {
        $val = $this->getBackingStore()->get('destinationFileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationFileName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'destinationFileName' => fn(ParseNode $n) => $o->setDestinationFileName($n->getStringValue()),
            'sourceFile' => fn(ParseNode $n) => $o->setSourceFile($n->getObjectValue([ItemReference::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the sourceFile property value. The sourceFile property
     * @return ItemReference|null
    */
    public function getSourceFile(): ?ItemReference {
        $val = $this->getBackingStore()->get('sourceFile');
        if (is_null($val) || $val instanceof ItemReference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceFile'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('destinationFileName', $this->getDestinationFileName());
        $writer->writeObjectValue('sourceFile', $this->getSourceFile());
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
     * Sets the destinationFileName property value. The destinationFileName property
     * @param string|null $value Value to set for the destinationFileName property.
    */
    public function setDestinationFileName(?string $value): void {
        $this->getBackingStore()->set('destinationFileName', $value);
    }

    /**
     * Sets the sourceFile property value. The sourceFile property
     * @param ItemReference|null $value Value to set for the sourceFile property.
    */
    public function setSourceFile(?ItemReference $value): void {
        $this->getBackingStore()->set('sourceFile', $value);
    }

}
