<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AlterationResponse implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new alterationResponse and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlterationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlterationResponse {
        return new AlterationResponse();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'originalQueryString' => fn(ParseNode $n) => $o->setOriginalQueryString($n->getStringValue()),
            'queryAlteration' => fn(ParseNode $n) => $o->setQueryAlteration($n->getObjectValue([SearchAlteration::class, 'createFromDiscriminatorValue'])),
            'queryAlterationType' => fn(ParseNode $n) => $o->setQueryAlterationType($n->getEnumValue(SearchAlterationType::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the originalQueryString property value. Defines the original user query string.
     * @return string|null
    */
    public function getOriginalQueryString(): ?string {
        return $this->getBackingStore()->get('originalQueryString');
    }

    /**
     * Gets the queryAlteration property value. Defines the details of the alteration information for the spelling correction.
     * @return SearchAlteration|null
    */
    public function getQueryAlteration(): ?SearchAlteration {
        return $this->getBackingStore()->get('queryAlteration');
    }

    /**
     * Gets the queryAlterationType property value. Defines the type of the spelling correction. Possible values are: suggestion, modification.
     * @return SearchAlterationType|null
    */
    public function getQueryAlterationType(): ?SearchAlterationType {
        return $this->getBackingStore()->get('queryAlterationType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('originalQueryString', $this->getOriginalQueryString());
        $writer->writeObjectValue('queryAlteration', $this->getQueryAlteration());
        $writer->writeEnumValue('queryAlterationType', $this->getQueryAlterationType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the originalQueryString property value. Defines the original user query string.
     *  @param string|null $value Value to set for the originalQueryString property.
    */
    public function setOriginalQueryString(?string $value): void {
        $this->getBackingStore()->set('originalQueryString', $value);
    }

    /**
     * Sets the queryAlteration property value. Defines the details of the alteration information for the spelling correction.
     *  @param SearchAlteration|null $value Value to set for the queryAlteration property.
    */
    public function setQueryAlteration(?SearchAlteration $value): void {
        $this->getBackingStore()->set('queryAlteration', $value);
    }

    /**
     * Sets the queryAlterationType property value. Defines the type of the spelling correction. Possible values are: suggestion, modification.
     *  @param SearchAlterationType|null $value Value to set for the queryAlterationType property.
    */
    public function setQueryAlterationType(?SearchAlterationType $value): void {
        $this->getBackingStore()->set('queryAlterationType', $value);
    }

}
