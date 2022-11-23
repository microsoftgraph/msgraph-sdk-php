<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AndroidMinimumOperatingSystem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new androidMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidMinimumOperatingSystem {
        return new AndroidMinimumOperatingSystem();
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
            'v10_0' => fn(ParseNode $n) => $o->setV10_0($n->getBooleanValue()),
            'v11_0' => fn(ParseNode $n) => $o->setV11_0($n->getBooleanValue()),
            'v4_0' => fn(ParseNode $n) => $o->setV4_0($n->getBooleanValue()),
            'v4_0_3' => fn(ParseNode $n) => $o->setV4_0_3($n->getBooleanValue()),
            'v4_1' => fn(ParseNode $n) => $o->setV4_1($n->getBooleanValue()),
            'v4_2' => fn(ParseNode $n) => $o->setV4_2($n->getBooleanValue()),
            'v4_3' => fn(ParseNode $n) => $o->setV4_3($n->getBooleanValue()),
            'v4_4' => fn(ParseNode $n) => $o->setV4_4($n->getBooleanValue()),
            'v5_0' => fn(ParseNode $n) => $o->setV5_0($n->getBooleanValue()),
            'v5_1' => fn(ParseNode $n) => $o->setV5_1($n->getBooleanValue()),
            'v6_0' => fn(ParseNode $n) => $o->setV6_0($n->getBooleanValue()),
            'v7_0' => fn(ParseNode $n) => $o->setV7_0($n->getBooleanValue()),
            'v7_1' => fn(ParseNode $n) => $o->setV7_1($n->getBooleanValue()),
            'v8_0' => fn(ParseNode $n) => $o->setV8_0($n->getBooleanValue()),
            'v8_1' => fn(ParseNode $n) => $o->setV8_1($n->getBooleanValue()),
            'v9_0' => fn(ParseNode $n) => $o->setV9_0($n->getBooleanValue()),
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
     * Gets the v10_0 property value. Version 10.0 or later.
     * @return bool|null
    */
    public function getV10_0(): ?bool {
        return $this->getBackingStore()->get('v10_0');
    }

    /**
     * Gets the v11_0 property value. Version 11.0 or later.
     * @return bool|null
    */
    public function getV11_0(): ?bool {
        return $this->getBackingStore()->get('v11_0');
    }

    /**
     * Gets the v4_0 property value. Version 4.0 or later.
     * @return bool|null
    */
    public function getV4_0(): ?bool {
        return $this->getBackingStore()->get('v4_0');
    }

    /**
     * Gets the v4_0_3 property value. Version 4.0.3 or later.
     * @return bool|null
    */
    public function getV4_0_3(): ?bool {
        return $this->getBackingStore()->get('v4_0_3');
    }

    /**
     * Gets the v4_1 property value. Version 4.1 or later.
     * @return bool|null
    */
    public function getV4_1(): ?bool {
        return $this->getBackingStore()->get('v4_1');
    }

    /**
     * Gets the v4_2 property value. Version 4.2 or later.
     * @return bool|null
    */
    public function getV4_2(): ?bool {
        return $this->getBackingStore()->get('v4_2');
    }

    /**
     * Gets the v4_3 property value. Version 4.3 or later.
     * @return bool|null
    */
    public function getV4_3(): ?bool {
        return $this->getBackingStore()->get('v4_3');
    }

    /**
     * Gets the v4_4 property value. Version 4.4 or later.
     * @return bool|null
    */
    public function getV4_4(): ?bool {
        return $this->getBackingStore()->get('v4_4');
    }

    /**
     * Gets the v5_0 property value. Version 5.0 or later.
     * @return bool|null
    */
    public function getV5_0(): ?bool {
        return $this->getBackingStore()->get('v5_0');
    }

    /**
     * Gets the v5_1 property value. Version 5.1 or later.
     * @return bool|null
    */
    public function getV5_1(): ?bool {
        return $this->getBackingStore()->get('v5_1');
    }

    /**
     * Gets the v6_0 property value. Version 6.0 or later.
     * @return bool|null
    */
    public function getV6_0(): ?bool {
        return $this->getBackingStore()->get('v6_0');
    }

    /**
     * Gets the v7_0 property value. Version 7.0 or later.
     * @return bool|null
    */
    public function getV7_0(): ?bool {
        return $this->getBackingStore()->get('v7_0');
    }

    /**
     * Gets the v7_1 property value. Version 7.1 or later.
     * @return bool|null
    */
    public function getV7_1(): ?bool {
        return $this->getBackingStore()->get('v7_1');
    }

    /**
     * Gets the v8_0 property value. Version 8.0 or later.
     * @return bool|null
    */
    public function getV8_0(): ?bool {
        return $this->getBackingStore()->get('v8_0');
    }

    /**
     * Gets the v8_1 property value. Version 8.1 or later.
     * @return bool|null
    */
    public function getV8_1(): ?bool {
        return $this->getBackingStore()->get('v8_1');
    }

    /**
     * Gets the v9_0 property value. Version 9.0 or later.
     * @return bool|null
    */
    public function getV9_0(): ?bool {
        return $this->getBackingStore()->get('v9_0');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('v10_0', $this->getV10_0());
        $writer->writeBooleanValue('v11_0', $this->getV11_0());
        $writer->writeBooleanValue('v4_0', $this->getV4_0());
        $writer->writeBooleanValue('v4_0_3', $this->getV4_0_3());
        $writer->writeBooleanValue('v4_1', $this->getV4_1());
        $writer->writeBooleanValue('v4_2', $this->getV4_2());
        $writer->writeBooleanValue('v4_3', $this->getV4_3());
        $writer->writeBooleanValue('v4_4', $this->getV4_4());
        $writer->writeBooleanValue('v5_0', $this->getV5_0());
        $writer->writeBooleanValue('v5_1', $this->getV5_1());
        $writer->writeBooleanValue('v6_0', $this->getV6_0());
        $writer->writeBooleanValue('v7_0', $this->getV7_0());
        $writer->writeBooleanValue('v7_1', $this->getV7_1());
        $writer->writeBooleanValue('v8_0', $this->getV8_0());
        $writer->writeBooleanValue('v8_1', $this->getV8_1());
        $writer->writeBooleanValue('v9_0', $this->getV9_0());
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
     * Sets the v10_0 property value. Version 10.0 or later.
     *  @param bool|null $value Value to set for the v10_0 property.
    */
    public function setV10_0(?bool $value): void {
        $this->getBackingStore()->set('v10_0', $value);
    }

    /**
     * Sets the v11_0 property value. Version 11.0 or later.
     *  @param bool|null $value Value to set for the v11_0 property.
    */
    public function setV11_0(?bool $value): void {
        $this->getBackingStore()->set('v11_0', $value);
    }

    /**
     * Sets the v4_0 property value. Version 4.0 or later.
     *  @param bool|null $value Value to set for the v4_0 property.
    */
    public function setV4_0(?bool $value): void {
        $this->getBackingStore()->set('v4_0', $value);
    }

    /**
     * Sets the v4_0_3 property value. Version 4.0.3 or later.
     *  @param bool|null $value Value to set for the v4_0_3 property.
    */
    public function setV4_0_3(?bool $value): void {
        $this->getBackingStore()->set('v4_0_3', $value);
    }

    /**
     * Sets the v4_1 property value. Version 4.1 or later.
     *  @param bool|null $value Value to set for the v4_1 property.
    */
    public function setV4_1(?bool $value): void {
        $this->getBackingStore()->set('v4_1', $value);
    }

    /**
     * Sets the v4_2 property value. Version 4.2 or later.
     *  @param bool|null $value Value to set for the v4_2 property.
    */
    public function setV4_2(?bool $value): void {
        $this->getBackingStore()->set('v4_2', $value);
    }

    /**
     * Sets the v4_3 property value. Version 4.3 or later.
     *  @param bool|null $value Value to set for the v4_3 property.
    */
    public function setV4_3(?bool $value): void {
        $this->getBackingStore()->set('v4_3', $value);
    }

    /**
     * Sets the v4_4 property value. Version 4.4 or later.
     *  @param bool|null $value Value to set for the v4_4 property.
    */
    public function setV4_4(?bool $value): void {
        $this->getBackingStore()->set('v4_4', $value);
    }

    /**
     * Sets the v5_0 property value. Version 5.0 or later.
     *  @param bool|null $value Value to set for the v5_0 property.
    */
    public function setV5_0(?bool $value): void {
        $this->getBackingStore()->set('v5_0', $value);
    }

    /**
     * Sets the v5_1 property value. Version 5.1 or later.
     *  @param bool|null $value Value to set for the v5_1 property.
    */
    public function setV5_1(?bool $value): void {
        $this->getBackingStore()->set('v5_1', $value);
    }

    /**
     * Sets the v6_0 property value. Version 6.0 or later.
     *  @param bool|null $value Value to set for the v6_0 property.
    */
    public function setV6_0(?bool $value): void {
        $this->getBackingStore()->set('v6_0', $value);
    }

    /**
     * Sets the v7_0 property value. Version 7.0 or later.
     *  @param bool|null $value Value to set for the v7_0 property.
    */
    public function setV7_0(?bool $value): void {
        $this->getBackingStore()->set('v7_0', $value);
    }

    /**
     * Sets the v7_1 property value. Version 7.1 or later.
     *  @param bool|null $value Value to set for the v7_1 property.
    */
    public function setV7_1(?bool $value): void {
        $this->getBackingStore()->set('v7_1', $value);
    }

    /**
     * Sets the v8_0 property value. Version 8.0 or later.
     *  @param bool|null $value Value to set for the v8_0 property.
    */
    public function setV8_0(?bool $value): void {
        $this->getBackingStore()->set('v8_0', $value);
    }

    /**
     * Sets the v8_1 property value. Version 8.1 or later.
     *  @param bool|null $value Value to set for the v8_1 property.
    */
    public function setV8_1(?bool $value): void {
        $this->getBackingStore()->set('v8_1', $value);
    }

    /**
     * Sets the v9_0 property value. Version 9.0 or later.
     *  @param bool|null $value Value to set for the v9_0 property.
    */
    public function setV9_0(?bool $value): void {
        $this->getBackingStore()->set('v9_0', $value);
    }

}
