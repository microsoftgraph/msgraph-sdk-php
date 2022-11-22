<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WindowsMinimumOperatingSystem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windowsMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsMinimumOperatingSystem {
        return new WindowsMinimumOperatingSystem();
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
            'v8_0' => fn(ParseNode $n) => $o->setV8_0($n->getBooleanValue()),
            'v8_1' => fn(ParseNode $n) => $o->setV8_1($n->getBooleanValue()),
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
     * Gets the v10_0 property value. Windows version 10.0 or later.
     * @return bool|null
    */
    public function getV10_0(): ?bool {
        return $this->getBackingStore()->get('v10_0');
    }

    /**
     * Gets the v8_0 property value. Windows version 8.0 or later.
     * @return bool|null
    */
    public function getV8_0(): ?bool {
        return $this->getBackingStore()->get('v8_0');
    }

    /**
     * Gets the v8_1 property value. Windows version 8.1 or later.
     * @return bool|null
    */
    public function getV8_1(): ?bool {
        return $this->getBackingStore()->get('v8_1');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('v10_0', $this->getV10_0());
        $writer->writeBooleanValue('v8_0', $this->getV8_0());
        $writer->writeBooleanValue('v8_1', $this->getV8_1());
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
     * Sets the v10_0 property value. Windows version 10.0 or later.
     *  @param bool|null $value Value to set for the v10_0 property.
    */
    public function setV10_0(?bool $value): void {
        $this->getBackingStore()->set('v10_0', $value);
    }

    /**
     * Sets the v8_0 property value. Windows version 8.0 or later.
     *  @param bool|null $value Value to set for the v8_0 property.
    */
    public function setV8_0(?bool $value): void {
        $this->getBackingStore()->set('v8_0', $value);
    }

    /**
     * Sets the v8_1 property value. Windows version 8.1 or later.
     *  @param bool|null $value Value to set for the v8_1 property.
    */
    public function setV8_1(?bool $value): void {
        $this->getBackingStore()->set('v8_1', $value);
    }

}
