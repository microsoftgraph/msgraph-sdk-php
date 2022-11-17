<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ControlScore implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new controlScore and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.controlScore');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ControlScore
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ControlScore {
        return new ControlScore();
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
     * Gets the controlCategory property value. Control action category (Identity, Data, Device, Apps, Infrastructure).
     * @return string|null
    */
    public function getControlCategory(): ?string {
        return $this->getBackingStore()->get('controlCategory');
    }

    /**
     * Gets the controlName property value. Control unique name.
     * @return string|null
    */
    public function getControlName(): ?string {
        return $this->getBackingStore()->get('controlName');
    }

    /**
     * Gets the description property value. Description of the control.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'controlCategory' => fn(ParseNode $n) => $o->setControlCategory($n->getStringValue()),
            'controlName' => fn(ParseNode $n) => $o->setControlName($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'score' => fn(ParseNode $n) => $o->setScore($n->getFloatValue()),
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
     * Gets the score property value. Tenant achieved score for the control (it varies day by day depending on tenant operations on the control).
     * @return float|null
    */
    public function getScore(): ?float {
        return $this->getBackingStore()->get('score');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('controlCategory', $this->getControlCategory());
        $writer->writeStringValue('controlName', $this->getControlName());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('score', $this->getScore());
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
     * Sets the controlCategory property value. Control action category (Identity, Data, Device, Apps, Infrastructure).
     *  @param string|null $value Value to set for the controlCategory property.
    */
    public function setControlCategory(?string $value): void {
        $this->getBackingStore()->set('controlCategory', $value);
    }

    /**
     * Sets the controlName property value. Control unique name.
     *  @param string|null $value Value to set for the controlName property.
    */
    public function setControlName(?string $value): void {
        $this->getBackingStore()->set('controlName', $value);
    }

    /**
     * Sets the description property value. Description of the control.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the score property value. Tenant achieved score for the control (it varies day by day depending on tenant operations on the control).
     *  @param float|null $value Value to set for the score property.
    */
    public function setScore(?float $value): void {
        $this->getBackingStore()->set('score', $value);
    }

}
