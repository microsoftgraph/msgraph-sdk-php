<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AuthenticationMethodFeatureConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new authenticationMethodFeatureConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodFeatureConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodFeatureConfiguration {
        return new AuthenticationMethodFeatureConfiguration();
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
     * Gets the excludeTarget property value. A single entity that is excluded from this feature.
     * @return FeatureTarget|null
    */
    public function getExcludeTarget(): ?FeatureTarget {
        $val = $this->getBackingStore()->get('excludeTarget');
        if (is_null($val) || $val instanceof FeatureTarget) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeTarget'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeTarget' => fn(ParseNode $n) => $o->setExcludeTarget($n->getObjectValue([FeatureTarget::class, 'createFromDiscriminatorValue'])),
            'includeTarget' => fn(ParseNode $n) => $o->setIncludeTarget($n->getObjectValue([FeatureTarget::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AdvancedConfigState::class)),
        ];
    }

    /**
     * Gets the includeTarget property value. A single entity that is included in this feature.
     * @return FeatureTarget|null
    */
    public function getIncludeTarget(): ?FeatureTarget {
        $val = $this->getBackingStore()->get('includeTarget');
        if (is_null($val) || $val instanceof FeatureTarget) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeTarget'");
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
     * Gets the state property value. Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
     * @return AdvancedConfigState|null
    */
    public function getState(): ?AdvancedConfigState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof AdvancedConfigState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('excludeTarget', $this->getExcludeTarget());
        $writer->writeObjectValue('includeTarget', $this->getIncludeTarget());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('state', $this->getState());
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
     * Sets the excludeTarget property value. A single entity that is excluded from this feature.
     * @param FeatureTarget|null $value Value to set for the excludeTarget property.
    */
    public function setExcludeTarget(?FeatureTarget $value): void {
        $this->getBackingStore()->set('excludeTarget', $value);
    }

    /**
     * Sets the includeTarget property value. A single entity that is included in this feature.
     * @param FeatureTarget|null $value Value to set for the includeTarget property.
    */
    public function setIncludeTarget(?FeatureTarget $value): void {
        $this->getBackingStore()->set('includeTarget', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the state property value. Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
     * @param AdvancedConfigState|null $value Value to set for the state property.
    */
    public function setState(?AdvancedConfigState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
