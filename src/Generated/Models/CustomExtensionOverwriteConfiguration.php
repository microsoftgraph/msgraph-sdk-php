<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CustomExtensionOverwriteConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CustomExtensionOverwriteConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomExtensionOverwriteConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomExtensionOverwriteConfiguration {
        return new CustomExtensionOverwriteConfiguration();
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
     * Gets the behaviorOnError property value. The behaviorOnError property
     * @return CustomExtensionBehaviorOnError|null
    */
    public function getBehaviorOnError(): ?CustomExtensionBehaviorOnError {
        $val = $this->getBackingStore()->get('behaviorOnError');
        if (is_null($val) || $val instanceof CustomExtensionBehaviorOnError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'behaviorOnError'");
    }

    /**
     * Gets the clientConfiguration property value. Configuration regarding properties of the custom extension which can be overwritten per event listener. If no values are provided, the properties on the custom extension are used.
     * @return CustomExtensionClientConfiguration|null
    */
    public function getClientConfiguration(): ?CustomExtensionClientConfiguration {
        $val = $this->getBackingStore()->get('clientConfiguration');
        if (is_null($val) || $val instanceof CustomExtensionClientConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'behaviorOnError' => fn(ParseNode $n) => $o->setBehaviorOnError($n->getObjectValue([CustomExtensionBehaviorOnError::class, 'createFromDiscriminatorValue'])),
            'clientConfiguration' => fn(ParseNode $n) => $o->setClientConfiguration($n->getObjectValue([CustomExtensionClientConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('behaviorOnError', $this->getBehaviorOnError());
        $writer->writeObjectValue('clientConfiguration', $this->getClientConfiguration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the behaviorOnError property value. The behaviorOnError property
     * @param CustomExtensionBehaviorOnError|null $value Value to set for the behaviorOnError property.
    */
    public function setBehaviorOnError(?CustomExtensionBehaviorOnError $value): void {
        $this->getBackingStore()->set('behaviorOnError', $value);
    }

    /**
     * Sets the clientConfiguration property value. Configuration regarding properties of the custom extension which can be overwritten per event listener. If no values are provided, the properties on the custom extension are used.
     * @param CustomExtensionClientConfiguration|null $value Value to set for the clientConfiguration property.
    */
    public function setClientConfiguration(?CustomExtensionClientConfiguration $value): void {
        $this->getBackingStore()->set('clientConfiguration', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
