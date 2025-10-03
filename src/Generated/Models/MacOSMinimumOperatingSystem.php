<?php

namespace Microsoft\\Graph\\Generated\Models;

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
     * Instantiates a new MacOSMinimumOperatingSystem and sets the default values.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'v10_10' => fn(ParseNode $n) => $o->setV1010($n->getBooleanValue()),
            'v10_11' => fn(ParseNode $n) => $o->setV1011($n->getBooleanValue()),
            'v10_12' => fn(ParseNode $n) => $o->setV1012($n->getBooleanValue()),
            'v10_13' => fn(ParseNode $n) => $o->setV1013($n->getBooleanValue()),
            'v10_14' => fn(ParseNode $n) => $o->setV1014($n->getBooleanValue()),
            'v10_15' => fn(ParseNode $n) => $o->setV1015($n->getBooleanValue()),
            'v10_7' => fn(ParseNode $n) => $o->setV107($n->getBooleanValue()),
            'v10_8' => fn(ParseNode $n) => $o->setV108($n->getBooleanValue()),
            'v10_9' => fn(ParseNode $n) => $o->setV109($n->getBooleanValue()),
            'v11_0' => fn(ParseNode $n) => $o->setV110($n->getBooleanValue()),
            'v12_0' => fn(ParseNode $n) => $o->setV120($n->getBooleanValue()),
            'v13_0' => fn(ParseNode $n) => $o->setV130($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the v10_10 property value. When TRUE, indicates OS X 10.10 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV1010(): ?bool {
        $val = $this->getBackingStore()->get('v10_10');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_10'");
    }

    /**
     * Gets the v10_11 property value. When TRUE, indicates OS X 10.11 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV1011(): ?bool {
        $val = $this->getBackingStore()->get('v10_11');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_11'");
    }

    /**
     * Gets the v10_12 property value. When TRUE, indicates macOS 10.12 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV1012(): ?bool {
        $val = $this->getBackingStore()->get('v10_12');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_12'");
    }

    /**
     * Gets the v10_13 property value. When TRUE, indicates macOS 10.13 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV1013(): ?bool {
        $val = $this->getBackingStore()->get('v10_13');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_13'");
    }

    /**
     * Gets the v10_14 property value. When TRUE, indicates macOS 10.14 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV1014(): ?bool {
        $val = $this->getBackingStore()->get('v10_14');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_14'");
    }

    /**
     * Gets the v10_15 property value. When TRUE, indicates macOS 10.15 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV1015(): ?bool {
        $val = $this->getBackingStore()->get('v10_15');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_15'");
    }

    /**
     * Gets the v10_7 property value. When TRUE, indicates Mac OS X 10.7 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV107(): ?bool {
        $val = $this->getBackingStore()->get('v10_7');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_7'");
    }

    /**
     * Gets the v10_8 property value. When TRUE, indicates OS X 10.8 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV108(): ?bool {
        $val = $this->getBackingStore()->get('v10_8');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_8'");
    }

    /**
     * Gets the v10_9 property value. When TRUE, indicates OS X 10.9 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV109(): ?bool {
        $val = $this->getBackingStore()->get('v10_9');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_9'");
    }

    /**
     * Gets the v11_0 property value. When TRUE, indicates macOS 11.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV110(): ?bool {
        $val = $this->getBackingStore()->get('v11_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v11_0'");
    }

    /**
     * Gets the v12_0 property value. When TRUE, indicates macOS 12.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV120(): ?bool {
        $val = $this->getBackingStore()->get('v12_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v12_0'");
    }

    /**
     * Gets the v13_0 property value. When TRUE, indicates macOS 13.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @return bool|null
    */
    public function getV130(): ?bool {
        $val = $this->getBackingStore()->get('v13_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v13_0'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('v10_10', $this->getV1010());
        $writer->writeBooleanValue('v10_11', $this->getV1011());
        $writer->writeBooleanValue('v10_12', $this->getV1012());
        $writer->writeBooleanValue('v10_13', $this->getV1013());
        $writer->writeBooleanValue('v10_14', $this->getV1014());
        $writer->writeBooleanValue('v10_15', $this->getV1015());
        $writer->writeBooleanValue('v10_7', $this->getV107());
        $writer->writeBooleanValue('v10_8', $this->getV108());
        $writer->writeBooleanValue('v10_9', $this->getV109());
        $writer->writeBooleanValue('v11_0', $this->getV110());
        $writer->writeBooleanValue('v12_0', $this->getV120());
        $writer->writeBooleanValue('v13_0', $this->getV130());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the v10_10 property value. When TRUE, indicates OS X 10.10 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_10 property.
    */
    public function setV1010(?bool $value): void {
        $this->getBackingStore()->set('v10_10', $value);
    }

    /**
     * Sets the v10_11 property value. When TRUE, indicates OS X 10.11 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_11 property.
    */
    public function setV1011(?bool $value): void {
        $this->getBackingStore()->set('v10_11', $value);
    }

    /**
     * Sets the v10_12 property value. When TRUE, indicates macOS 10.12 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_12 property.
    */
    public function setV1012(?bool $value): void {
        $this->getBackingStore()->set('v10_12', $value);
    }

    /**
     * Sets the v10_13 property value. When TRUE, indicates macOS 10.13 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_13 property.
    */
    public function setV1013(?bool $value): void {
        $this->getBackingStore()->set('v10_13', $value);
    }

    /**
     * Sets the v10_14 property value. When TRUE, indicates macOS 10.14 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_14 property.
    */
    public function setV1014(?bool $value): void {
        $this->getBackingStore()->set('v10_14', $value);
    }

    /**
     * Sets the v10_15 property value. When TRUE, indicates macOS 10.15 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_15 property.
    */
    public function setV1015(?bool $value): void {
        $this->getBackingStore()->set('v10_15', $value);
    }

    /**
     * Sets the v10_7 property value. When TRUE, indicates Mac OS X 10.7 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_7 property.
    */
    public function setV107(?bool $value): void {
        $this->getBackingStore()->set('v10_7', $value);
    }

    /**
     * Sets the v10_8 property value. When TRUE, indicates OS X 10.8 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_8 property.
    */
    public function setV108(?bool $value): void {
        $this->getBackingStore()->set('v10_8', $value);
    }

    /**
     * Sets the v10_9 property value. When TRUE, indicates OS X 10.9 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v10_9 property.
    */
    public function setV109(?bool $value): void {
        $this->getBackingStore()->set('v10_9', $value);
    }

    /**
     * Sets the v11_0 property value. When TRUE, indicates macOS 11.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v11_0 property.
    */
    public function setV110(?bool $value): void {
        $this->getBackingStore()->set('v11_0', $value);
    }

    /**
     * Sets the v12_0 property value. When TRUE, indicates macOS 12.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v12_0 property.
    */
    public function setV120(?bool $value): void {
        $this->getBackingStore()->set('v12_0', $value);
    }

    /**
     * Sets the v13_0 property value. When TRUE, indicates macOS 13.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     * @param bool|null $value Value to set for the v13_0 property.
    */
    public function setV130(?bool $value): void {
        $this->getBackingStore()->set('v13_0', $value);
    }

}
