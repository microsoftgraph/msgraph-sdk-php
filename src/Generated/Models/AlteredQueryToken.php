<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AlteredQueryToken implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AlteredQueryToken and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlteredQueryToken
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlteredQueryToken {
        return new AlteredQueryToken();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'length' => fn(ParseNode $n) => $o->setLength($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'suggestion' => fn(ParseNode $n) => $o->setSuggestion($n->getStringValue()),
        ];
    }

    /**
     * Gets the length property value. Defines the length of a changed segment.
     * @return int|null
    */
    public function getLength(): ?int {
        return $this->getBackingStore()->get('length');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the offset property value. Defines the offset of a changed segment.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->getBackingStore()->get('offset');
    }

    /**
     * Gets the suggestion property value. Represents the corrected segment string.
     * @return string|null
    */
    public function getSuggestion(): ?string {
        return $this->getBackingStore()->get('suggestion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('length', $this->getLength());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('suggestion', $this->getSuggestion());
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
     * Sets the length property value. Defines the length of a changed segment.
     * @param int|null $value Value to set for the length property.
    */
    public function setLength(?int $value): void {
        $this->getBackingStore()->set('length', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offset property value. Defines the offset of a changed segment.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->getBackingStore()->set('offset', $value);
    }

    /**
     * Sets the suggestion property value. Represents the corrected segment string.
     * @param string|null $value Value to set for the suggestion property.
    */
    public function setSuggestion(?string $value): void {
        $this->getBackingStore()->set('suggestion', $value);
    }

}
