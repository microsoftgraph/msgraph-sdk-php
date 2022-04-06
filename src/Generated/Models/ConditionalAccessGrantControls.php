<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessGrantControls implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<ConditionalAccessGrantControl>|null $builtInControls List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue. */
    private ?array $builtInControls = null;
    
    /** @var array<string>|null $customAuthenticationFactors List of custom controls IDs required by the policy. For more information, see Custom controls. */
    private ?array $customAuthenticationFactors = null;
    
    /** @var string|null $operator Defines the relationship of the grant controls. Possible values: AND, OR. */
    private ?string $operator = null;
    
    /** @var array<string>|null $termsOfUse List of terms of use IDs required by the policy. */
    private ?array $termsOfUse = null;
    
    /**
     * Instantiates a new conditionalAccessGrantControls and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessGrantControls
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessGrantControls {
        return new ConditionalAccessGrantControls();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the builtInControls property value. List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     * @return array<ConditionalAccessGrantControl>|null
    */
    public function getBuiltInControls(): ?array {
        return $this->builtInControls;
    }

    /**
     * Gets the customAuthenticationFactors property value. List of custom controls IDs required by the policy. For more information, see Custom controls.
     * @return array<string>|null
    */
    public function getCustomAuthenticationFactors(): ?array {
        return $this->customAuthenticationFactors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'builtInControls' => function (self $o, ParseNode $n) { $o->setBuiltInControls($n->getCollectionOfEnumValues(ConditionalAccessGrantControl::class)); },
            'customAuthenticationFactors' => function (self $o, ParseNode $n) { $o->setCustomAuthenticationFactors($n->getCollectionOfPrimitiveValues()); },
            'operator' => function (self $o, ParseNode $n) { $o->setOperator($n->getStringValue()); },
            'termsOfUse' => function (self $o, ParseNode $n) { $o->setTermsOfUse($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the operator property value. Defines the relationship of the grant controls. Possible values: AND, OR.
     * @return string|null
    */
    public function getOperator(): ?string {
        return $this->operator;
    }

    /**
     * Gets the termsOfUse property value. List of terms of use IDs required by the policy.
     * @return array<string>|null
    */
    public function getTermsOfUse(): ?array {
        return $this->termsOfUse;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('builtInControls', $this->builtInControls);
        $writer->writeCollectionOfPrimitiveValues('customAuthenticationFactors', $this->customAuthenticationFactors);
        $writer->writeStringValue('operator', $this->operator);
        $writer->writeCollectionOfPrimitiveValues('termsOfUse', $this->termsOfUse);
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
     * Sets the builtInControls property value. List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     *  @param array<ConditionalAccessGrantControl>|null $value Value to set for the builtInControls property.
    */
    public function setBuiltInControls(?array $value ): void {
        $this->builtInControls = $value;
    }

    /**
     * Sets the customAuthenticationFactors property value. List of custom controls IDs required by the policy. For more information, see Custom controls.
     *  @param array<string>|null $value Value to set for the customAuthenticationFactors property.
    */
    public function setCustomAuthenticationFactors(?array $value ): void {
        $this->customAuthenticationFactors = $value;
    }

    /**
     * Sets the operator property value. Defines the relationship of the grant controls. Possible values: AND, OR.
     *  @param string|null $value Value to set for the operator property.
    */
    public function setOperator(?string $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the termsOfUse property value. List of terms of use IDs required by the policy.
     *  @param array<string>|null $value Value to set for the termsOfUse property.
    */
    public function setTermsOfUse(?array $value ): void {
        $this->termsOfUse = $value;
    }

}
