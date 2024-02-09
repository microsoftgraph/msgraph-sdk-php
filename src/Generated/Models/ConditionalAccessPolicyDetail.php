<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessPolicyDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConditionalAccessPolicyDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessPolicyDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessPolicyDetail {
        return new ConditionalAccessPolicyDetail();
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
     * Gets the conditions property value. The conditions property
     * @return ConditionalAccessConditionSet|null
    */
    public function getConditions(): ?ConditionalAccessConditionSet {
        $val = $this->getBackingStore()->get('conditions');
        if (is_null($val) || $val instanceof ConditionalAccessConditionSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conditions' => fn(ParseNode $n) => $o->setConditions($n->getObjectValue([ConditionalAccessConditionSet::class, 'createFromDiscriminatorValue'])),
            'grantControls' => fn(ParseNode $n) => $o->setGrantControls($n->getObjectValue([ConditionalAccessGrantControls::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sessionControls' => fn(ParseNode $n) => $o->setSessionControls($n->getObjectValue([ConditionalAccessSessionControls::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the grantControls property value. Represents grant controls that must be fulfilled for the policy.
     * @return ConditionalAccessGrantControls|null
    */
    public function getGrantControls(): ?ConditionalAccessGrantControls {
        $val = $this->getBackingStore()->get('grantControls');
        if (is_null($val) || $val instanceof ConditionalAccessGrantControls) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grantControls'");
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
     * Gets the sessionControls property value. Represents a complex type of session controls that is enforced after sign-in.
     * @return ConditionalAccessSessionControls|null
    */
    public function getSessionControls(): ?ConditionalAccessSessionControls {
        $val = $this->getBackingStore()->get('sessionControls');
        if (is_null($val) || $val instanceof ConditionalAccessSessionControls) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionControls'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('conditions', $this->getConditions());
        $writer->writeObjectValue('grantControls', $this->getGrantControls());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('sessionControls', $this->getSessionControls());
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
     * Sets the conditions property value. The conditions property
     * @param ConditionalAccessConditionSet|null $value Value to set for the conditions property.
    */
    public function setConditions(?ConditionalAccessConditionSet $value): void {
        $this->getBackingStore()->set('conditions', $value);
    }

    /**
     * Sets the grantControls property value. Represents grant controls that must be fulfilled for the policy.
     * @param ConditionalAccessGrantControls|null $value Value to set for the grantControls property.
    */
    public function setGrantControls(?ConditionalAccessGrantControls $value): void {
        $this->getBackingStore()->set('grantControls', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sessionControls property value. Represents a complex type of session controls that is enforced after sign-in.
     * @param ConditionalAccessSessionControls|null $value Value to set for the sessionControls property.
    */
    public function setSessionControls(?ConditionalAccessSessionControls $value): void {
        $this->getBackingStore()->set('sessionControls', $value);
    }

}
