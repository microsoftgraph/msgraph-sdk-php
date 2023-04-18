<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateAllowedCombinationsResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new updateAllowedCombinationsResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAllowedCombinationsResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAllowedCombinationsResult {
        return new UpdateAllowedCombinationsResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the additionalInformation property value. The additionalInformation property
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        return $this->getBackingStore()->get('additionalInformation');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the conditionalAccessReferences property value. The conditionalAccessReferences property
     * @return array<string>|null
    */
    public function getConditionalAccessReferences(): ?array {
        return $this->getBackingStore()->get('conditionalAccessReferences');
    }

    /**
     * Gets the currentCombinations property value. The currentCombinations property
     * @return array<AuthenticationMethodModes>|null
    */
    public function getCurrentCombinations(): ?array {
        return $this->getBackingStore()->get('currentCombinations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getStringValue()),
            'conditionalAccessReferences' => fn(ParseNode $n) => $o->setConditionalAccessReferences($n->getCollectionOfPrimitiveValues()),
            'currentCombinations' => fn(ParseNode $n) => $o->setCurrentCombinations($n->getCollectionOfEnumValues(AuthenticationMethodModes::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'previousCombinations' => fn(ParseNode $n) => $o->setPreviousCombinations($n->getCollectionOfEnumValues(AuthenticationMethodModes::class)),
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
     * Gets the previousCombinations property value. The previousCombinations property
     * @return array<AuthenticationMethodModes>|null
    */
    public function getPreviousCombinations(): ?array {
        return $this->getBackingStore()->get('previousCombinations');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalInformation', $this->getAdditionalInformation());
        $writer->writeCollectionOfPrimitiveValues('conditionalAccessReferences', $this->getConditionalAccessReferences());
        $writer->writeCollectionOfEnumValues('currentCombinations', $this->getCurrentCombinations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfEnumValues('previousCombinations', $this->getPreviousCombinations());
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
     * Sets the additionalInformation property value. The additionalInformation property
     * @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the conditionalAccessReferences property value. The conditionalAccessReferences property
     * @param array<string>|null $value Value to set for the conditionalAccessReferences property.
    */
    public function setConditionalAccessReferences(?array $value): void {
        $this->getBackingStore()->set('conditionalAccessReferences', $value);
    }

    /**
     * Sets the currentCombinations property value. The currentCombinations property
     * @param array<AuthenticationMethodModes>|null $value Value to set for the currentCombinations property.
    */
    public function setCurrentCombinations(?array $value): void {
        $this->getBackingStore()->set('currentCombinations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the previousCombinations property value. The previousCombinations property
     * @param array<AuthenticationMethodModes>|null $value Value to set for the previousCombinations property.
    */
    public function setPreviousCombinations(?array $value): void {
        $this->getBackingStore()->set('previousCombinations', $value);
    }

}
