<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BaseDeltaFunctionResponse implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new BaseDeltaFunctionResponse and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseDeltaFunctionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseDeltaFunctionResponse {
        return new BaseDeltaFunctionResponse();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.deltaLink' => fn(ParseNode $n) => $o->setOdataDeltaLink($n->getStringValue()),
            '@odata.nextLink' => fn(ParseNode $n) => $o->setOdataNextLink($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.deltaLink property value. The OdataDeltaLink property
     * @return string|null
    */
    public function getOdataDeltaLink(): ?string {
        $val = $this->getBackingStore()->get('odataDeltaLink');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataDeltaLink'");
    }

    /**
     * Gets the @odata.nextLink property value. The OdataNextLink property
     * @return string|null
    */
    public function getOdataNextLink(): ?string {
        $val = $this->getBackingStore()->get('odataNextLink');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataNextLink'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.deltaLink', $this->getOdataDeltaLink());
        $writer->writeStringValue('@odata.nextLink', $this->getOdataNextLink());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.deltaLink property value. The OdataDeltaLink property
     * @param string|null $value Value to set for the @odata.deltaLink property.
    */
    public function setOdataDeltaLink(?string $value): void {
        $this->getBackingStore()->set('odataDeltaLink', $value);
    }

    /**
     * Sets the @odata.nextLink property value. The OdataNextLink property
     * @param string|null $value Value to set for the @odata.nextLink property.
    */
    public function setOdataNextLink(?string $value): void {
        $this->getBackingStore()->set('odataNextLink', $value);
    }

}
