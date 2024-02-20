<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Find;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FindPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FindPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FindPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FindPostRequestBody {
        return new FindPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'findText' => fn(ParseNode $n) => $o->setFindText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startNum' => fn(ParseNode $n) => $o->setStartNum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'withinText' => fn(ParseNode $n) => $o->setWithinText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the findText property value. The findText property
     * @return Json|null
    */
    public function getFindText(): ?Json {
        $val = $this->getBackingStore()->get('findText');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'findText'");
    }

    /**
     * Gets the startNum property value. The startNum property
     * @return Json|null
    */
    public function getStartNum(): ?Json {
        $val = $this->getBackingStore()->get('startNum');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startNum'");
    }

    /**
     * Gets the withinText property value. The withinText property
     * @return Json|null
    */
    public function getWithinText(): ?Json {
        $val = $this->getBackingStore()->get('withinText');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'withinText'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('findText', $this->getFindText());
        $writer->writeObjectValue('startNum', $this->getStartNum());
        $writer->writeObjectValue('withinText', $this->getWithinText());
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
     * Sets the findText property value. The findText property
     * @param Json|null $value Value to set for the findText property.
    */
    public function setFindText(?Json $value): void {
        $this->getBackingStore()->set('findText', $value);
    }

    /**
     * Sets the startNum property value. The startNum property
     * @param Json|null $value Value to set for the startNum property.
    */
    public function setStartNum(?Json $value): void {
        $this->getBackingStore()->set('startNum', $value);
    }

    /**
     * Sets the withinText property value. The withinText property
     * @param Json|null $value Value to set for the withinText property.
    */
    public function setWithinText(?Json $value): void {
        $this->getBackingStore()->set('withinText', $value);
    }

}
