<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPriceMat;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PriceMatPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new priceMatPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PriceMatPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PriceMatPostRequestBody {
        return new PriceMatPostRequestBody();
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
     * Gets the basis property value. The basis property
     * @return Json|null
    */
    public function getBasis(): ?Json {
        return $this->getBackingStore()->get('basis');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'basis' => fn(ParseNode $n) => $o->setBasis($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'issue' => fn(ParseNode $n) => $o->setIssue($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'maturity' => fn(ParseNode $n) => $o->setMaturity($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rate' => fn(ParseNode $n) => $o->setRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'settlement' => fn(ParseNode $n) => $o->setSettlement($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'yld' => fn(ParseNode $n) => $o->setYld($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the issue property value. The issue property
     * @return Json|null
    */
    public function getIssue(): ?Json {
        return $this->getBackingStore()->get('issue');
    }

    /**
     * Gets the maturity property value. The maturity property
     * @return Json|null
    */
    public function getMaturity(): ?Json {
        return $this->getBackingStore()->get('maturity');
    }

    /**
     * Gets the rate property value. The rate property
     * @return Json|null
    */
    public function getRate(): ?Json {
        return $this->getBackingStore()->get('rate');
    }

    /**
     * Gets the settlement property value. The settlement property
     * @return Json|null
    */
    public function getSettlement(): ?Json {
        return $this->getBackingStore()->get('settlement');
    }

    /**
     * Gets the yld property value. The yld property
     * @return Json|null
    */
    public function getYld(): ?Json {
        return $this->getBackingStore()->get('yld');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('basis', $this->getBasis());
        $writer->writeObjectValue('issue', $this->getIssue());
        $writer->writeObjectValue('maturity', $this->getMaturity());
        $writer->writeObjectValue('rate', $this->getRate());
        $writer->writeObjectValue('settlement', $this->getSettlement());
        $writer->writeObjectValue('yld', $this->getYld());
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
     * Sets the basis property value. The basis property
     * @param Json|null $value Value to set for the basis property.
    */
    public function setBasis(?Json $value): void {
        $this->getBackingStore()->set('basis', $value);
    }

    /**
     * Sets the issue property value. The issue property
     * @param Json|null $value Value to set for the issue property.
    */
    public function setIssue(?Json $value): void {
        $this->getBackingStore()->set('issue', $value);
    }

    /**
     * Sets the maturity property value. The maturity property
     * @param Json|null $value Value to set for the maturity property.
    */
    public function setMaturity(?Json $value): void {
        $this->getBackingStore()->set('maturity', $value);
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

    /**
     * Sets the yld property value. The yld property
     * @param Json|null $value Value to set for the yld property.
    */
    public function setYld(?Json $value): void {
        $this->getBackingStore()->set('yld', $value);
    }

}
