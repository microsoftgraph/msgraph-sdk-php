<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class VerifiedIdUsageConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new VerifiedIdUsageConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifiedIdUsageConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifiedIdUsageConfiguration {
        return new VerifiedIdUsageConfiguration();
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
            'isEnabledForTestOnly' => fn(ParseNode $n) => $o->setIsEnabledForTestOnly($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'purpose' => fn(ParseNode $n) => $o->setPurpose($n->getEnumValue(VerifiedIdUsageConfigurationPurpose::class)),
        ];
    }

    /**
     * Gets the isEnabledForTestOnly property value. Sets profile usage for evaluation (test-only) or production.
     * @return bool|null
    */
    public function getIsEnabledForTestOnly(): ?bool {
        $val = $this->getBackingStore()->get('isEnabledForTestOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabledForTestOnly'");
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
     * Gets the purpose property value. The purpose property
     * @return VerifiedIdUsageConfigurationPurpose|null
    */
    public function getPurpose(): ?VerifiedIdUsageConfigurationPurpose {
        $val = $this->getBackingStore()->get('purpose');
        if (is_null($val) || $val instanceof VerifiedIdUsageConfigurationPurpose) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'purpose'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isEnabledForTestOnly', $this->getIsEnabledForTestOnly());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('purpose', $this->getPurpose());
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
     * Sets the isEnabledForTestOnly property value. Sets profile usage for evaluation (test-only) or production.
     * @param bool|null $value Value to set for the isEnabledForTestOnly property.
    */
    public function setIsEnabledForTestOnly(?bool $value): void {
        $this->getBackingStore()->set('isEnabledForTestOnly', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the purpose property value. The purpose property
     * @param VerifiedIdUsageConfigurationPurpose|null $value Value to set for the purpose property.
    */
    public function setPurpose(?VerifiedIdUsageConfigurationPurpose $value): void {
        $this->getBackingStore()->set('purpose', $value);
    }

}
