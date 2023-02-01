<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The minimum operating system required for a macOS app.
*/
class MacOSMinimumOperatingSystem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new macOSMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSMinimumOperatingSystem {
        return new MacOSMinimumOperatingSystem();
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
            'v10_10' => fn(ParseNode $n) => $o->setV10_10($n->getBooleanValue()),
            'v10_11' => fn(ParseNode $n) => $o->setV10_11($n->getBooleanValue()),
            'v10_12' => fn(ParseNode $n) => $o->setV10_12($n->getBooleanValue()),
            'v10_13' => fn(ParseNode $n) => $o->setV10_13($n->getBooleanValue()),
            'v10_14' => fn(ParseNode $n) => $o->setV10_14($n->getBooleanValue()),
            'v10_15' => fn(ParseNode $n) => $o->setV10_15($n->getBooleanValue()),
            'v10_7' => fn(ParseNode $n) => $o->setV10_7($n->getBooleanValue()),
            'v10_8' => fn(ParseNode $n) => $o->setV10_8($n->getBooleanValue()),
            'v10_9' => fn(ParseNode $n) => $o->setV10_9($n->getBooleanValue()),
            'v11_0' => fn(ParseNode $n) => $o->setV11_0($n->getBooleanValue()),
            'v12_0' => fn(ParseNode $n) => $o->setV12_0($n->getBooleanValue()),
            'v13_0' => fn(ParseNode $n) => $o->setV13_0($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the v10_10 property value. When TRUE, indicates OS X 10.10 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_10(): ?bool {
        return $this->getBackingStore()->get('v10_10');
    }

    /**
     * Gets the v10_11 property value. When TRUE, indicates OS X 10.11 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_11(): ?bool {
        return $this->getBackingStore()->get('v10_11');
    }

    /**
     * Gets the v10_12 property value. When TRUE, indicates macOS 10.12 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_12(): ?bool {
        return $this->getBackingStore()->get('v10_12');
    }

    /**
     * Gets the v10_13 property value. When TRUE, indicates macOS 10.13 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_13(): ?bool {
        return $this->getBackingStore()->get('v10_13');
    }

    /**
     * Gets the v10_14 property value. When TRUE, indicates macOS 10.14 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_14(): ?bool {
        return $this->getBackingStore()->get('v10_14');
    }

    /**
     * Gets the v10_15 property value. When TRUE, indicates macOS 10.15 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_15(): ?bool {
        return $this->getBackingStore()->get('v10_15');
    }

    /**
     * Gets the v10_7 property value. When TRUE, indicates Mac OS X 10.7 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_7(): ?bool {
        return $this->getBackingStore()->get('v10_7');
    }

    /**
     * Gets the v10_8 property value. When TRUE, indicates OS X 10.8 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_8(): ?bool {
        return $this->getBackingStore()->get('v10_8');
    }

    /**
     * Gets the v10_9 property value. When TRUE, indicates OS X 10.9 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV10_9(): ?bool {
        return $this->getBackingStore()->get('v10_9');
    }

    /**
     * Gets the v11_0 property value. When TRUE, indicates macOS 11.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV11_0(): ?bool {
        return $this->getBackingStore()->get('v11_0');
    }

    /**
     * Gets the v12_0 property value. When TRUE, indicates macOS 12.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV12_0(): ?bool {
        return $this->getBackingStore()->get('v12_0');
    }

    /**
     * Gets the v13_0 property value. When TRUE, indicates macOS 13.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV13_0(): ?bool {
        return $this->getBackingStore()->get('v13_0');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('v10_10', $this->getV10_10());
        $writer->writeBooleanValue('v10_11', $this->getV10_11());
        $writer->writeBooleanValue('v10_12', $this->getV10_12());
        $writer->writeBooleanValue('v10_13', $this->getV10_13());
        $writer->writeBooleanValue('v10_14', $this->getV10_14());
        $writer->writeBooleanValue('v10_15', $this->getV10_15());
        $writer->writeBooleanValue('v10_7', $this->getV10_7());
        $writer->writeBooleanValue('v10_8', $this->getV10_8());
        $writer->writeBooleanValue('v10_9', $this->getV10_9());
        $writer->writeBooleanValue('v11_0', $this->getV11_0());
        $writer->writeBooleanValue('v12_0', $this->getV12_0());
        $writer->writeBooleanValue('v13_0', $this->getV13_0());
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
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the v10_10 property value. When TRUE, indicates OS X 10.10 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_10 property.
    */
    public function setV10_10(?bool $value): void {
        $this->getBackingStore()->set('v10_10', $value);
    }

    /**
     * Sets the v10_11 property value. When TRUE, indicates OS X 10.11 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_11 property.
    */
    public function setV10_11(?bool $value): void {
        $this->getBackingStore()->set('v10_11', $value);
    }

    /**
     * Sets the v10_12 property value. When TRUE, indicates macOS 10.12 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_12 property.
    */
    public function setV10_12(?bool $value): void {
        $this->getBackingStore()->set('v10_12', $value);
    }

    /**
     * Sets the v10_13 property value. When TRUE, indicates macOS 10.13 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_13 property.
    */
    public function setV10_13(?bool $value): void {
        $this->getBackingStore()->set('v10_13', $value);
    }

    /**
     * Sets the v10_14 property value. When TRUE, indicates macOS 10.14 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_14 property.
    */
    public function setV10_14(?bool $value): void {
        $this->getBackingStore()->set('v10_14', $value);
    }

    /**
     * Sets the v10_15 property value. When TRUE, indicates macOS 10.15 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_15 property.
    */
    public function setV10_15(?bool $value): void {
        $this->getBackingStore()->set('v10_15', $value);
    }

    /**
     * Sets the v10_7 property value. When TRUE, indicates Mac OS X 10.7 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_7 property.
    */
    public function setV10_7(?bool $value): void {
        $this->getBackingStore()->set('v10_7', $value);
    }

    /**
     * Sets the v10_8 property value. When TRUE, indicates OS X 10.8 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_8 property.
    */
    public function setV10_8(?bool $value): void {
        $this->getBackingStore()->set('v10_8', $value);
    }

    /**
     * Sets the v10_9 property value. When TRUE, indicates OS X 10.9 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_9 property.
    */
    public function setV10_9(?bool $value): void {
        $this->getBackingStore()->set('v10_9', $value);
    }

    /**
     * Sets the v11_0 property value. When TRUE, indicates macOS 11.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v11_0 property.
    */
    public function setV11_0(?bool $value): void {
        $this->getBackingStore()->set('v11_0', $value);
    }

    /**
     * Sets the v12_0 property value. When TRUE, indicates macOS 12.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v12_0 property.
    */
    public function setV12_0(?bool $value): void {
        $this->getBackingStore()->set('v12_0', $value);
    }

    /**
     * Sets the v13_0 property value. When TRUE, indicates macOS 13.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v13_0 property.
    */
    public function setV13_0(?bool $value): void {
        $this->getBackingStore()->set('v13_0', $value);
    }

}
