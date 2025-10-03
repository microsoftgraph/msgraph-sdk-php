<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UpdateAllowedCombinationsResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateAllowedCombinationsResult and sets the default values.
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
     * Gets the additionalInformation property value. Information about why the updateAllowedCombinations action was successful or failed.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        $val = $this->getBackingStore()->get('additionalInformation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInformation'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the conditionalAccessReferences property value. References to existing Conditional Access policies that use this authentication strength.
     * @return array<string>|null
    */
    public function getConditionalAccessReferences(): ?array {
        $val = $this->getBackingStore()->get('conditionalAccessReferences');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessReferences'");
    }

    /**
     * Gets the currentCombinations property value. The list of current authentication method combinations allowed by the authentication strength.
     * @return array<AuthenticationMethodModes>|null
    */
    public function getCurrentCombinations(): ?array {
        $val = $this->getBackingStore()->get('currentCombinations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationMethodModes::class);
            /** @var array<AuthenticationMethodModes>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentCombinations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getStringValue()),
            'conditionalAccessReferences' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setConditionalAccessReferences($val);
            },
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
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the previousCombinations property value. The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action.
     * @return array<AuthenticationMethodModes>|null
    */
    public function getPreviousCombinations(): ?array {
        $val = $this->getBackingStore()->get('previousCombinations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationMethodModes::class);
            /** @var array<AuthenticationMethodModes>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousCombinations'");
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the additionalInformation property value. Information about why the updateAllowedCombinations action was successful or failed.
     * @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the conditionalAccessReferences property value. References to existing Conditional Access policies that use this authentication strength.
     * @param array<string>|null $value Value to set for the conditionalAccessReferences property.
    */
    public function setConditionalAccessReferences(?array $value): void {
        $this->getBackingStore()->set('conditionalAccessReferences', $value);
    }

    /**
     * Sets the currentCombinations property value. The list of current authentication method combinations allowed by the authentication strength.
     * @param array<AuthenticationMethodModes>|null $value Value to set for the currentCombinations property.
    */
    public function setCurrentCombinations(?array $value): void {
        $this->getBackingStore()->set('currentCombinations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the previousCombinations property value. The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action.
     * @param array<AuthenticationMethodModes>|null $value Value to set for the previousCombinations property.
    */
    public function setPreviousCombinations(?array $value): void {
        $this->getBackingStore()->set('previousCombinations', $value);
    }

}
