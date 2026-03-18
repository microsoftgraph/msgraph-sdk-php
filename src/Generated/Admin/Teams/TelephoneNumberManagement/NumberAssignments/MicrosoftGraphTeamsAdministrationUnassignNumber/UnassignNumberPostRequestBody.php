<?php

namespace Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\NumberAssignments\MicrosoftGraphTeamsAdministrationUnassignNumber;

use Microsoft\Graph\Generated\Models\TeamsAdministration\NumberType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UnassignNumberPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UnassignNumberPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnassignNumberPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnassignNumberPostRequestBody {
        return new UnassignNumberPostRequestBody();
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
            'numberType' => fn(ParseNode $n) => $o->setNumberType($n->getEnumValue(NumberType::class)),
            'telephoneNumber' => fn(ParseNode $n) => $o->setTelephoneNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the numberType property value. The numberType property
     * @return NumberType|null
    */
    public function getNumberType(): ?NumberType {
        $val = $this->getBackingStore()->get('numberType');
        if (is_null($val) || $val instanceof NumberType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberType'");
    }

    /**
     * Gets the telephoneNumber property value. The telephoneNumber property
     * @return string|null
    */
    public function getTelephoneNumber(): ?string {
        $val = $this->getBackingStore()->get('telephoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'telephoneNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('numberType', $this->getNumberType());
        $writer->writeStringValue('telephoneNumber', $this->getTelephoneNumber());
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
     * Sets the numberType property value. The numberType property
     * @param NumberType|null $value Value to set for the numberType property.
    */
    public function setNumberType(?NumberType $value): void {
        $this->getBackingStore()->set('numberType', $value);
    }

    /**
     * Sets the telephoneNumber property value. The telephoneNumber property
     * @param string|null $value Value to set for the telephoneNumber property.
    */
    public function setTelephoneNumber(?string $value): void {
        $this->getBackingStore()->set('telephoneNumber', $value);
    }

}
