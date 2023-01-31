<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFixed;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FixedPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new fixedPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FixedPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FixedPostRequestBody {
        return new FixedPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * Gets the decimals property value. 
     * @return Json|null
    */
    public function getDecimals(): ?Json {
        return $this->getBackingStore()->get('decimals');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'decimals' => fn(ParseNode $n) => $o->setDecimals($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'noCommas' => fn(ParseNode $n) => $o->setNoCommas($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the noCommas property value. 
     * @return Json|null
    */
    public function getNoCommas(): ?Json {
        return $this->getBackingStore()->get('noCommas');
    }

    /**
     * Gets the number property value. 
     * @return Json|null
    */
    public function getNumber(): ?Json {
        return $this->getBackingStore()->get('number');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('decimals', $this->getDecimals());
        $writer->writeObjectValue('noCommas', $this->getNoCommas());
        $writer->writeObjectValue('number', $this->getNumber());
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
     * Sets the decimals property value. 
     * @param Json|null $value Value to set for the decimals property.
    */
    public function setDecimals(?Json $value): void {
        $this->getBackingStore()->set('decimals', $value);
    }

    /**
     * Sets the noCommas property value. 
     * @param Json|null $value Value to set for the noCommas property.
    */
    public function setNoCommas(?Json $value): void {
        $this->getBackingStore()->set('noCommas', $value);
    }

    /**
     * Sets the number property value. 
     * @param Json|null $value Value to set for the number property.
    */
    public function setNumber(?Json $value): void {
        $this->getBackingStore()->set('number', $value);
    }

}
