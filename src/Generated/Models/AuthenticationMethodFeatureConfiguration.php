<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationMethodFeatureConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var FeatureTarget|null $excludeTarget A single entity that is excluded from this feature.
    */
    private ?FeatureTarget $excludeTarget = null;
    
    /**
     * @var FeatureTarget|null $includeTarget A single entity that is included in this feature.
    */
    private ?FeatureTarget $includeTarget = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var AdvancedConfigState|null $state Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
    */
    private ?AdvancedConfigState $state = null;
    
    /**
     * Instantiates a new authenticationMethodFeatureConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.authenticationMethodFeatureConfiguration');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeTarget property value. A single entity that is excluded from this feature.
     * @return FeatureTarget|null
    */
    public function getExcludeTarget(): ?FeatureTarget {
        return $this->excludeTarget;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->includeTarget;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the state property value. Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
     * @return AdvancedConfigState|null
    */
    public function getState(): ?AdvancedConfigState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('excludeTarget', $this->excludeTarget);
        $writer->writeObjectValue('includeTarget', $this->includeTarget);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the excludeTarget property value. A single entity that is excluded from this feature.
     *  @param FeatureTarget|null $value Value to set for the excludeTarget property.
    */
    public function setExcludeTarget(?FeatureTarget $value ): void {
        $this->excludeTarget = $value;
    }

    /**
     * Sets the includeTarget property value. A single entity that is included in this feature.
     *  @param FeatureTarget|null $value Value to set for the includeTarget property.
    */
    public function setIncludeTarget(?FeatureTarget $value ): void {
        $this->includeTarget = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the state property value. Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
     *  @param AdvancedConfigState|null $value Value to set for the state property.
    */
    public function setState(?AdvancedConfigState $value ): void {
        $this->state = $value;
    }

}
