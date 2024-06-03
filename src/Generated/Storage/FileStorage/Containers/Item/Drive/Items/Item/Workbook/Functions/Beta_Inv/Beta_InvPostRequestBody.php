<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Functions\Beta_Inv;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Beta_InvPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Beta_InvPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Beta_InvPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Beta_InvPostRequestBody {
        return new Beta_InvPostRequestBody();
    }

    /**
     * Gets the A property value. The A property
     * @return Json|null
    */
    public function getA(): ?Json {
        $val = $this->getBackingStore()->get('a');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'a'");
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
     * Gets the alpha property value. The alpha property
     * @return Json|null
    */
    public function getAlpha(): ?Json {
        $val = $this->getBackingStore()->get('alpha');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alpha'");
    }

    /**
     * Gets the B property value. The B property
     * @return Json|null
    */
    public function getB(): ?Json {
        $val = $this->getBackingStore()->get('b');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the beta property value. The beta property
     * @return Json|null
    */
    public function getBeta(): ?Json {
        $val = $this->getBackingStore()->get('beta');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'beta'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'A' => fn(ParseNode $n) => $o->setA($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'alpha' => fn(ParseNode $n) => $o->setAlpha($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'B' => fn(ParseNode $n) => $o->setB($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'beta' => fn(ParseNode $n) => $o->setBeta($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'probability' => fn(ParseNode $n) => $o->setProbability($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the probability property value. The probability property
     * @return Json|null
    */
    public function getProbability(): ?Json {
        $val = $this->getBackingStore()->get('probability');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'probability'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('A', $this->getA());
        $writer->writeObjectValue('alpha', $this->getAlpha());
        $writer->writeObjectValue('B', $this->getB());
        $writer->writeObjectValue('beta', $this->getBeta());
        $writer->writeObjectValue('probability', $this->getProbability());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the A property value. The A property
     * @param Json|null $value Value to set for the A property.
    */
    public function setA(?Json $value): void {
        $this->getBackingStore()->set('a', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alpha property value. The alpha property
     * @param Json|null $value Value to set for the alpha property.
    */
    public function setAlpha(?Json $value): void {
        $this->getBackingStore()->set('alpha', $value);
    }

    /**
     * Sets the B property value. The B property
     * @param Json|null $value Value to set for the B property.
    */
    public function setB(?Json $value): void {
        $this->getBackingStore()->set('b', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the beta property value. The beta property
     * @param Json|null $value Value to set for the beta property.
    */
    public function setBeta(?Json $value): void {
        $this->getBackingStore()->set('beta', $value);
    }

    /**
     * Sets the probability property value. The probability property
     * @param Json|null $value Value to set for the probability property.
    */
    public function setProbability(?Json $value): void {
        $this->getBackingStore()->set('probability', $value);
    }

}
