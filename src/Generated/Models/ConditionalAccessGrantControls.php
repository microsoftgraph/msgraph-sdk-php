<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessGrantControls implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessGrantControls and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessGrantControls
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessGrantControls {
        return new ConditionalAccessGrantControls();
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
     * Gets the builtInControls property value. List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     * @return array<ConditionalAccessGrantControl>|null
    */
    public function getBuiltInControls(): ?array {
        return $this->getBackingStore()->get('builtInControls');
    }

    /**
     * Gets the customAuthenticationFactors property value. List of custom controls IDs required by the policy. For more information, see Custom controls.
     * @return array<string>|null
    */
    public function getCustomAuthenticationFactors(): ?array {
        return $this->getBackingStore()->get('customAuthenticationFactors');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'builtInControls' => fn(ParseNode $n) => $o->setBuiltInControls($n->getCollectionOfEnumValues(ConditionalAccessGrantControl::class)),
            'customAuthenticationFactors' => fn(ParseNode $n) => $o->setCustomAuthenticationFactors($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getStringValue()),
            'termsOfUse' => fn(ParseNode $n) => $o->setTermsOfUse($n->getCollectionOfPrimitiveValues()),
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
     * Gets the operator property value. Defines the relationship of the grant controls. Possible values: AND, OR.
     * @return string|null
    */
    public function getOperator(): ?string {
        return $this->getBackingStore()->get('operator');
    }

    /**
     * Gets the termsOfUse property value. List of terms of use IDs required by the policy.
     * @return array<string>|null
    */
    public function getTermsOfUse(): ?array {
        return $this->getBackingStore()->get('termsOfUse');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('builtInControls', $this->getBuiltInControls());
        $writer->writeCollectionOfPrimitiveValues('customAuthenticationFactors', $this->getCustomAuthenticationFactors());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operator', $this->getOperator());
        $writer->writeCollectionOfPrimitiveValues('termsOfUse', $this->getTermsOfUse());
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
     * Sets the builtInControls property value. List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     *  @param array<ConditionalAccessGrantControl>|null $value Value to set for the builtInControls property.
    */
    public function setBuiltInControls(?array $value): void {
        $this->getBackingStore()->set('builtInControls', $value);
    }

    /**
     * Sets the customAuthenticationFactors property value. List of custom controls IDs required by the policy. For more information, see Custom controls.
     *  @param array<string>|null $value Value to set for the customAuthenticationFactors property.
    */
    public function setCustomAuthenticationFactors(?array $value): void {
        $this->getBackingStore()->set('customAuthenticationFactors', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operator property value. Defines the relationship of the grant controls. Possible values: AND, OR.
     *  @param string|null $value Value to set for the operator property.
    */
    public function setOperator(?string $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the termsOfUse property value. List of terms of use IDs required by the policy.
     *  @param array<string>|null $value Value to set for the termsOfUse property.
    */
    public function setTermsOfUse(?array $value): void {
        $this->getBackingStore()->set('termsOfUse', $value);
    }

}
