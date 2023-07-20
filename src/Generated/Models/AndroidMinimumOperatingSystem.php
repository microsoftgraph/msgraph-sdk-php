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
 * Contains properties for the minimum operating system required for an Android mobile app.
*/
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'v10_0' => fn(ParseNode $n) => $o->setV100($n->getBooleanValue()),
            'v11_0' => fn(ParseNode $n) => $o->setV110($n->getBooleanValue()),
            'v4_0' => fn(ParseNode $n) => $o->setV40($n->getBooleanValue()),
            'v4_0_3' => fn(ParseNode $n) => $o->setV403($n->getBooleanValue()),
            'v4_1' => fn(ParseNode $n) => $o->setV41($n->getBooleanValue()),
            'v4_2' => fn(ParseNode $n) => $o->setV42($n->getBooleanValue()),
            'v4_3' => fn(ParseNode $n) => $o->setV43($n->getBooleanValue()),
            'v4_4' => fn(ParseNode $n) => $o->setV44($n->getBooleanValue()),
            'v5_0' => fn(ParseNode $n) => $o->setV50($n->getBooleanValue()),
            'v5_1' => fn(ParseNode $n) => $o->setV51($n->getBooleanValue()),
            'v6_0' => fn(ParseNode $n) => $o->setV60($n->getBooleanValue()),
            'v7_0' => fn(ParseNode $n) => $o->setV70($n->getBooleanValue()),
            'v7_1' => fn(ParseNode $n) => $o->setV71($n->getBooleanValue()),
            'v8_0' => fn(ParseNode $n) => $o->setV80($n->getBooleanValue()),
            'v8_1' => fn(ParseNode $n) => $o->setV81($n->getBooleanValue()),
            'v9_0' => fn(ParseNode $n) => $o->setV90($n->getBooleanValue()),
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
     * Gets the v10_0 property value. When TRUE, only Version 10.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV100(): ?bool {
        $val = $this->getBackingStore()->get('v10_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_0'");
    }

    /**
     * Gets the v11_0 property value. When TRUE, only Version 11.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
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
     * Gets the v4_0 property value. When TRUE, only Version 4.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV40(): ?bool {
        $val = $this->getBackingStore()->get('v4_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v4_0'");
    }

    /**
     * Gets the v4_0_3 property value. When TRUE, only Version 4.0.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV403(): ?bool {
        $val = $this->getBackingStore()->get('v4_0_3');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v4_0_3'");
    }

    /**
     * Gets the v4_1 property value. When TRUE, only Version 4.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV41(): ?bool {
        $val = $this->getBackingStore()->get('v4_1');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v4_1'");
    }

    /**
     * Gets the v4_2 property value. When TRUE, only Version 4.2 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV42(): ?bool {
        $val = $this->getBackingStore()->get('v4_2');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v4_2'");
    }

    /**
     * Gets the v4_3 property value. When TRUE, only Version 4.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV43(): ?bool {
        $val = $this->getBackingStore()->get('v4_3');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v4_3'");
    }

    /**
     * Gets the v4_4 property value. When TRUE, only Version 4.4 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV44(): ?bool {
        $val = $this->getBackingStore()->get('v4_4');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v4_4'");
    }

    /**
     * Gets the v5_0 property value. When TRUE, only Version 5.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV50(): ?bool {
        $val = $this->getBackingStore()->get('v5_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v5_0'");
    }

    /**
     * Gets the v5_1 property value. When TRUE, only Version 5.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV51(): ?bool {
        $val = $this->getBackingStore()->get('v5_1');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v5_1'");
    }

    /**
     * Gets the v6_0 property value. When TRUE, only Version 6.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV60(): ?bool {
        $val = $this->getBackingStore()->get('v6_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v6_0'");
    }

    /**
     * Gets the v7_0 property value. When TRUE, only Version 7.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV70(): ?bool {
        $val = $this->getBackingStore()->get('v7_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v7_0'");
    }

    /**
     * Gets the v7_1 property value. When TRUE, only Version 7.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV71(): ?bool {
        $val = $this->getBackingStore()->get('v7_1');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v7_1'");
    }

    /**
     * Gets the v8_0 property value. When TRUE, only Version 8.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV80(): ?bool {
        $val = $this->getBackingStore()->get('v8_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v8_0'");
    }

    /**
     * Gets the v8_1 property value. When TRUE, only Version 8.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV81(): ?bool {
        $val = $this->getBackingStore()->get('v8_1');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v8_1'");
    }

    /**
     * Gets the v9_0 property value. When TRUE, only Version 9.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV90(): ?bool {
        $val = $this->getBackingStore()->get('v9_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v9_0'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('v10_0', $this->getV100());
        $writer->writeBooleanValue('v11_0', $this->getV110());
        $writer->writeBooleanValue('v4_0', $this->getV40());
        $writer->writeBooleanValue('v4_0_3', $this->getV403());
        $writer->writeBooleanValue('v4_1', $this->getV41());
        $writer->writeBooleanValue('v4_2', $this->getV42());
        $writer->writeBooleanValue('v4_3', $this->getV43());
        $writer->writeBooleanValue('v4_4', $this->getV44());
        $writer->writeBooleanValue('v5_0', $this->getV50());
        $writer->writeBooleanValue('v5_1', $this->getV51());
        $writer->writeBooleanValue('v6_0', $this->getV60());
        $writer->writeBooleanValue('v7_0', $this->getV70());
        $writer->writeBooleanValue('v7_1', $this->getV71());
        $writer->writeBooleanValue('v8_0', $this->getV80());
        $writer->writeBooleanValue('v8_1', $this->getV81());
        $writer->writeBooleanValue('v9_0', $this->getV90());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the v10_0 property value. When TRUE, only Version 10.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v10_0 property.
    */
    public function setV100(?bool $value): void {
        $this->getBackingStore()->set('v10_0', $value);
    }

    /**
     * Sets the v11_0 property value. When TRUE, only Version 11.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v11_0 property.
    */
    public function setV110(?bool $value): void {
        $this->getBackingStore()->set('v11_0', $value);
    }

    /**
     * Sets the v4_0 property value. When TRUE, only Version 4.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v4_0 property.
    */
    public function setV40(?bool $value): void {
        $this->getBackingStore()->set('v4_0', $value);
    }

    /**
     * Sets the v4_0_3 property value. When TRUE, only Version 4.0.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v4_0_3 property.
    */
    public function setV403(?bool $value): void {
        $this->getBackingStore()->set('v4_0_3', $value);
    }

    /**
     * Sets the v4_1 property value. When TRUE, only Version 4.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v4_1 property.
    */
    public function setV41(?bool $value): void {
        $this->getBackingStore()->set('v4_1', $value);
    }

    /**
     * Sets the v4_2 property value. When TRUE, only Version 4.2 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v4_2 property.
    */
    public function setV42(?bool $value): void {
        $this->getBackingStore()->set('v4_2', $value);
    }

    /**
     * Sets the v4_3 property value. When TRUE, only Version 4.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v4_3 property.
    */
    public function setV43(?bool $value): void {
        $this->getBackingStore()->set('v4_3', $value);
    }

    /**
     * Sets the v4_4 property value. When TRUE, only Version 4.4 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v4_4 property.
    */
    public function setV44(?bool $value): void {
        $this->getBackingStore()->set('v4_4', $value);
    }

    /**
     * Sets the v5_0 property value. When TRUE, only Version 5.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v5_0 property.
    */
    public function setV50(?bool $value): void {
        $this->getBackingStore()->set('v5_0', $value);
    }

    /**
     * Sets the v5_1 property value. When TRUE, only Version 5.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v5_1 property.
    */
    public function setV51(?bool $value): void {
        $this->getBackingStore()->set('v5_1', $value);
    }

    /**
     * Sets the v6_0 property value. When TRUE, only Version 6.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v6_0 property.
    */
    public function setV60(?bool $value): void {
        $this->getBackingStore()->set('v6_0', $value);
    }

    /**
     * Sets the v7_0 property value. When TRUE, only Version 7.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v7_0 property.
    */
    public function setV70(?bool $value): void {
        $this->getBackingStore()->set('v7_0', $value);
    }

    /**
     * Sets the v7_1 property value. When TRUE, only Version 7.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v7_1 property.
    */
    public function setV71(?bool $value): void {
        $this->getBackingStore()->set('v7_1', $value);
    }

    /**
     * Sets the v8_0 property value. When TRUE, only Version 8.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v8_0 property.
    */
    public function setV80(?bool $value): void {
        $this->getBackingStore()->set('v8_0', $value);
    }

    /**
     * Sets the v8_1 property value. When TRUE, only Version 8.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v8_1 property.
    */
    public function setV81(?bool $value): void {
        $this->getBackingStore()->set('v8_1', $value);
    }

    /**
     * Sets the v9_0 property value. When TRUE, only Version 9.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v9_0 property.
    */
    public function setV90(?bool $value): void {
        $this->getBackingStore()->set('v9_0', $value);
    }

}
