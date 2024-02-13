<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AccrInt;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccrIntPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AccrIntPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccrIntPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccrIntPostRequestBody {
        return new AccrIntPostRequestBody();
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
     * Gets the basis property value. The basis property
     * @return Json|null
    */
    public function getBasis(): ?Json {
        $val = $this->getBackingStore()->get('basis');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'basis'");
    }

    /**
     * Gets the calcMethod property value. The calcMethod property
     * @return Json|null
    */
    public function getCalcMethod(): ?Json {
        $val = $this->getBackingStore()->get('calcMethod');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calcMethod'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'basis' => fn(ParseNode $n) => $o->setBasis($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'calcMethod' => fn(ParseNode $n) => $o->setCalcMethod($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'firstInterest' => fn(ParseNode $n) => $o->setFirstInterest($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'frequency' => fn(ParseNode $n) => $o->setFrequency($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'issue' => fn(ParseNode $n) => $o->setIssue($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'par' => fn(ParseNode $n) => $o->setPar($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rate' => fn(ParseNode $n) => $o->setRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'settlement' => fn(ParseNode $n) => $o->setSettlement($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the firstInterest property value. The firstInterest property
     * @return Json|null
    */
    public function getFirstInterest(): ?Json {
        $val = $this->getBackingStore()->get('firstInterest');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstInterest'");
    }

    /**
     * Gets the frequency property value. The frequency property
     * @return Json|null
    */
    public function getFrequency(): ?Json {
        $val = $this->getBackingStore()->get('frequency');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'frequency'");
    }

    /**
     * Gets the issue property value. The issue property
     * @return Json|null
    */
    public function getIssue(): ?Json {
        $val = $this->getBackingStore()->get('issue');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issue'");
    }

    /**
     * Gets the par property value. The par property
     * @return Json|null
    */
    public function getPar(): ?Json {
        $val = $this->getBackingStore()->get('par');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'par'");
    }

    /**
     * Gets the rate property value. The rate property
     * @return Json|null
    */
    public function getRate(): ?Json {
        $val = $this->getBackingStore()->get('rate');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rate'");
    }

    /**
     * Gets the settlement property value. The settlement property
     * @return Json|null
    */
    public function getSettlement(): ?Json {
        $val = $this->getBackingStore()->get('settlement');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settlement'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('basis', $this->getBasis());
        $writer->writeObjectValue('calcMethod', $this->getCalcMethod());
        $writer->writeObjectValue('firstInterest', $this->getFirstInterest());
        $writer->writeObjectValue('frequency', $this->getFrequency());
        $writer->writeObjectValue('issue', $this->getIssue());
        $writer->writeObjectValue('par', $this->getPar());
        $writer->writeObjectValue('rate', $this->getRate());
        $writer->writeObjectValue('settlement', $this->getSettlement());
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
     * Sets the basis property value. The basis property
     * @param Json|null $value Value to set for the basis property.
    */
    public function setBasis(?Json $value): void {
        $this->getBackingStore()->set('basis', $value);
    }

    /**
     * Sets the calcMethod property value. The calcMethod property
     * @param Json|null $value Value to set for the calcMethod property.
    */
    public function setCalcMethod(?Json $value): void {
        $this->getBackingStore()->set('calcMethod', $value);
    }

    /**
     * Sets the firstInterest property value. The firstInterest property
     * @param Json|null $value Value to set for the firstInterest property.
    */
    public function setFirstInterest(?Json $value): void {
        $this->getBackingStore()->set('firstInterest', $value);
    }

    /**
     * Sets the frequency property value. The frequency property
     * @param Json|null $value Value to set for the frequency property.
    */
    public function setFrequency(?Json $value): void {
        $this->getBackingStore()->set('frequency', $value);
    }

    /**
     * Sets the issue property value. The issue property
     * @param Json|null $value Value to set for the issue property.
    */
    public function setIssue(?Json $value): void {
        $this->getBackingStore()->set('issue', $value);
    }

    /**
     * Sets the par property value. The par property
     * @param Json|null $value Value to set for the par property.
    */
    public function setPar(?Json $value): void {
        $this->getBackingStore()->set('par', $value);
    }

    /**
     * Sets the rate property value. The rate property
     * @param Json|null $value Value to set for the rate property.
    */
    public function setRate(?Json $value): void {
        $this->getBackingStore()->set('rate', $value);
    }

    /**
     * Sets the settlement property value. The settlement property
     * @param Json|null $value Value to set for the settlement property.
    */
    public function setSettlement(?Json $value): void {
        $this->getBackingStore()->set('settlement', $value);
    }

}
