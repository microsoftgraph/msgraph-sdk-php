<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IncomingContext implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IncomingContext and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IncomingContext
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IncomingContext {
        return new IncomingContext();
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
            'observedParticipantId' => fn(ParseNode $n) => $o->setObservedParticipantId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onBehalfOf' => fn(ParseNode $n) => $o->setOnBehalfOf($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'sourceParticipantId' => fn(ParseNode $n) => $o->setSourceParticipantId($n->getStringValue()),
            'transferor' => fn(ParseNode $n) => $o->setTransferor($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the observedParticipantId property value. The ID of the participant that is under observation. Read-only.
     * @return string|null
    */
    public function getObservedParticipantId(): ?string {
        $val = $this->getBackingStore()->get('observedParticipantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'observedParticipantId'");
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
     * Gets the onBehalfOf property value. The identity that the call is happening on behalf of.
     * @return IdentitySet|null
    */
    public function getOnBehalfOf(): ?IdentitySet {
        $val = $this->getBackingStore()->get('onBehalfOf');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onBehalfOf'");
    }

    /**
     * Gets the sourceParticipantId property value. The ID of the participant that triggered the incoming call. Read-only.
     * @return string|null
    */
    public function getSourceParticipantId(): ?string {
        $val = $this->getBackingStore()->get('sourceParticipantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceParticipantId'");
    }

    /**
     * Gets the transferor property value. The identity that transferred the call.
     * @return IdentitySet|null
    */
    public function getTransferor(): ?IdentitySet {
        $val = $this->getBackingStore()->get('transferor');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transferor'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('observedParticipantId', $this->getObservedParticipantId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('onBehalfOf', $this->getOnBehalfOf());
        $writer->writeStringValue('sourceParticipantId', $this->getSourceParticipantId());
        $writer->writeObjectValue('transferor', $this->getTransferor());
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
     * Sets the observedParticipantId property value. The ID of the participant that is under observation. Read-only.
     * @param string|null $value Value to set for the observedParticipantId property.
    */
    public function setObservedParticipantId(?string $value): void {
        $this->getBackingStore()->set('observedParticipantId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onBehalfOf property value. The identity that the call is happening on behalf of.
     * @param IdentitySet|null $value Value to set for the onBehalfOf property.
    */
    public function setOnBehalfOf(?IdentitySet $value): void {
        $this->getBackingStore()->set('onBehalfOf', $value);
    }

    /**
     * Sets the sourceParticipantId property value. The ID of the participant that triggered the incoming call. Read-only.
     * @param string|null $value Value to set for the sourceParticipantId property.
    */
    public function setSourceParticipantId(?string $value): void {
        $this->getBackingStore()->set('sourceParticipantId', $value);
    }

    /**
     * Sets the transferor property value. The identity that transferred the call.
     * @param IdentitySet|null $value Value to set for the transferor property.
    */
    public function setTransferor(?IdentitySet $value): void {
        $this->getBackingStore()->set('transferor', $value);
    }

}
