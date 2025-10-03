<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class InvitationParticipantInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new InvitationParticipantInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitationParticipantInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitationParticipantInfo {
        return new InvitationParticipantInfo();
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
            'hidden' => fn(ParseNode $n) => $o->setHidden($n->getBooleanValue()),
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'participantId' => fn(ParseNode $n) => $o->setParticipantId($n->getStringValue()),
            'removeFromDefaultAudioRoutingGroup' => fn(ParseNode $n) => $o->setRemoveFromDefaultAudioRoutingGroup($n->getBooleanValue()),
            'replacesCallId' => fn(ParseNode $n) => $o->setReplacesCallId($n->getStringValue()),
        ];
    }

    /**
     * Gets the hidden property value. Optional. Whether to hide the participant from the roster.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        $val = $this->getBackingStore()->get('hidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hidden'");
    }

    /**
     * Gets the identity property value. The identity property
     * @return IdentitySet|null
    */
    public function getIdentity(): ?IdentitySet {
        $val = $this->getBackingStore()->get('identity');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identity'");
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
     * Gets the participantId property value. Optional. The ID of the target participant.
     * @return string|null
    */
    public function getParticipantId(): ?string {
        $val = $this->getBackingStore()->get('participantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'participantId'");
    }

    /**
     * Gets the removeFromDefaultAudioRoutingGroup property value. Optional. Whether to remove them from the main mixer.
     * @return bool|null
    */
    public function getRemoveFromDefaultAudioRoutingGroup(): ?bool {
        $val = $this->getBackingStore()->get('removeFromDefaultAudioRoutingGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removeFromDefaultAudioRoutingGroup'");
    }

    /**
     * Gets the replacesCallId property value. Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully.
     * @return string|null
    */
    public function getReplacesCallId(): ?string {
        $val = $this->getBackingStore()->get('replacesCallId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replacesCallId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('hidden', $this->getHidden());
        $writer->writeObjectValue('identity', $this->getIdentity());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('participantId', $this->getParticipantId());
        $writer->writeBooleanValue('removeFromDefaultAudioRoutingGroup', $this->getRemoveFromDefaultAudioRoutingGroup());
        $writer->writeStringValue('replacesCallId', $this->getReplacesCallId());
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
     * Sets the hidden property value. Optional. Whether to hide the participant from the roster.
     * @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value): void {
        $this->getBackingStore()->set('hidden', $value);
    }

    /**
     * Sets the identity property value. The identity property
     * @param IdentitySet|null $value Value to set for the identity property.
    */
    public function setIdentity(?IdentitySet $value): void {
        $this->getBackingStore()->set('identity', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the participantId property value. Optional. The ID of the target participant.
     * @param string|null $value Value to set for the participantId property.
    */
    public function setParticipantId(?string $value): void {
        $this->getBackingStore()->set('participantId', $value);
    }

    /**
     * Sets the removeFromDefaultAudioRoutingGroup property value. Optional. Whether to remove them from the main mixer.
     * @param bool|null $value Value to set for the removeFromDefaultAudioRoutingGroup property.
    */
    public function setRemoveFromDefaultAudioRoutingGroup(?bool $value): void {
        $this->getBackingStore()->set('removeFromDefaultAudioRoutingGroup', $value);
    }

    /**
     * Sets the replacesCallId property value. Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully.
     * @param string|null $value Value to set for the replacesCallId property.
    */
    public function setReplacesCallId(?string $value): void {
        $this->getBackingStore()->set('replacesCallId', $value);
    }

}
