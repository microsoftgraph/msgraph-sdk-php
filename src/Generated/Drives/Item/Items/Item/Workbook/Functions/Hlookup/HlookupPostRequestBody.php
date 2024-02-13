<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Hlookup;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class HlookupPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new HlookupPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HlookupPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HlookupPostRequestBody {
        return new HlookupPostRequestBody();
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
            'lookupValue' => fn(ParseNode $n) => $o->setLookupValue($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rangeLookup' => fn(ParseNode $n) => $o->setRangeLookup($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rowIndexNum' => fn(ParseNode $n) => $o->setRowIndexNum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'tableArray' => fn(ParseNode $n) => $o->setTableArray($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lookupValue property value. The lookupValue property
     * @return Json|null
    */
    public function getLookupValue(): ?Json {
        $val = $this->getBackingStore()->get('lookupValue');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lookupValue'");
    }

    /**
     * Gets the rangeLookup property value. The rangeLookup property
     * @return Json|null
    */
    public function getRangeLookup(): ?Json {
        $val = $this->getBackingStore()->get('rangeLookup');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rangeLookup'");
    }

    /**
     * Gets the rowIndexNum property value. The rowIndexNum property
     * @return Json|null
    */
    public function getRowIndexNum(): ?Json {
        $val = $this->getBackingStore()->get('rowIndexNum');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rowIndexNum'");
    }

    /**
     * Gets the tableArray property value. The tableArray property
     * @return Json|null
    */
    public function getTableArray(): ?Json {
        $val = $this->getBackingStore()->get('tableArray');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tableArray'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('lookupValue', $this->getLookupValue());
        $writer->writeObjectValue('rangeLookup', $this->getRangeLookup());
        $writer->writeObjectValue('rowIndexNum', $this->getRowIndexNum());
        $writer->writeObjectValue('tableArray', $this->getTableArray());
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
     * Sets the lookupValue property value. The lookupValue property
     * @param Json|null $value Value to set for the lookupValue property.
    */
    public function setLookupValue(?Json $value): void {
        $this->getBackingStore()->set('lookupValue', $value);
    }

    /**
     * Sets the rangeLookup property value. The rangeLookup property
     * @param Json|null $value Value to set for the rangeLookup property.
    */
    public function setRangeLookup(?Json $value): void {
        $this->getBackingStore()->set('rangeLookup', $value);
    }

    /**
     * Sets the rowIndexNum property value. The rowIndexNum property
     * @param Json|null $value Value to set for the rowIndexNum property.
    */
    public function setRowIndexNum(?Json $value): void {
        $this->getBackingStore()->set('rowIndexNum', $value);
    }

    /**
     * Sets the tableArray property value. The tableArray property
     * @param Json|null $value Value to set for the tableArray property.
    */
    public function setTableArray(?Json $value): void {
        $this->getBackingStore()->set('tableArray', $value);
    }

}
