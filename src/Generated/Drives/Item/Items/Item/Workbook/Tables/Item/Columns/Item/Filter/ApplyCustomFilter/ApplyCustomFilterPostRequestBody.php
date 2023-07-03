<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\Item\Filter\ApplyCustomFilter;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplyCustomFilterPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new applyCustomFilterPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplyCustomFilterPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplyCustomFilterPostRequestBody {
        return new ApplyCustomFilterPostRequestBody();
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the criteria1 property value. The criteria1 property
     * @return string|null
    */
    public function getCriteria1(): ?string {
        $val = $this->getBackingStore()->get('criteria1');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'criteria1'");
    }

    /**
     * Gets the criteria2 property value. The criteria2 property
     * @return string|null
    */
    public function getCriteria2(): ?string {
        $val = $this->getBackingStore()->get('criteria2');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'criteria2'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'criteria1' => fn(ParseNode $n) => $o->setCriteria1($n->getStringValue()),
            'criteria2' => fn(ParseNode $n) => $o->setCriteria2($n->getStringValue()),
            'oper' => fn(ParseNode $n) => $o->setOper($n->getStringValue()),
        ];
    }

    /**
     * Gets the oper property value. The oper property
     * @return string|null
    */
    public function getOper(): ?string {
        $val = $this->getBackingStore()->get('oper');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oper'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('criteria1', $this->getCriteria1());
        $writer->writeStringValue('criteria2', $this->getCriteria2());
        $writer->writeStringValue('oper', $this->getOper());
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
     * Sets the criteria1 property value. The criteria1 property
     * @param string|null $value Value to set for the criteria1 property.
    */
    public function setCriteria1(?string $value): void {
        $this->getBackingStore()->set('criteria1', $value);
    }

    /**
     * Sets the criteria2 property value. The criteria2 property
     * @param string|null $value Value to set for the criteria2 property.
    */
    public function setCriteria2(?string $value): void {
        $this->getBackingStore()->set('criteria2', $value);
    }

    /**
     * Sets the oper property value. The oper property
     * @param string|null $value Value to set for the oper property.
    */
    public function setOper(?string $value): void {
        $this->getBackingStore()->set('oper', $value);
    }

}
