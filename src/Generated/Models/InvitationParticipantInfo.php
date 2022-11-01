<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InvitationParticipantInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $hidden Optional. Whether to hide the participant from the roster.
    */
    private ?bool $hidden = null;
    
    /**
     * @var IdentitySet|null $identity The identity property
    */
    private ?IdentitySet $identity = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $participantId Optional. The ID of the target participant.
    */
    private ?string $participantId = null;
    
    /**
     * @var bool|null $removeFromDefaultAudioRoutingGroup Optional. Whether to remove them from the main mixer.
    */
    private ?bool $removeFromDefaultAudioRoutingGroup = null;
    
    /**
     * @var string|null $replacesCallId Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully.
    */
    private ?string $replacesCallId = null;
    
    /**
     * Instantiates a new invitationParticipantInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.invitationParticipantInfo');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->hidden;
    }

    /**
     * Gets the identity property value. The identity property
     * @return IdentitySet|null
    */
    public function getIdentity(): ?IdentitySet {
        return $this->identity;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the participantId property value. Optional. The ID of the target participant.
     * @return string|null
    */
    public function getParticipantId(): ?string {
        return $this->participantId;
    }

    /**
     * Gets the removeFromDefaultAudioRoutingGroup property value. Optional. Whether to remove them from the main mixer.
     * @return bool|null
    */
    public function getRemoveFromDefaultAudioRoutingGroup(): ?bool {
        return $this->removeFromDefaultAudioRoutingGroup;
    }

    /**
     * Gets the replacesCallId property value. Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully.
     * @return string|null
    */
    public function getReplacesCallId(): ?string {
        return $this->replacesCallId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('hidden', $this->hidden);
        $writer->writeObjectValue('identity', $this->identity);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('participantId', $this->participantId);
        $writer->writeBooleanValue('removeFromDefaultAudioRoutingGroup', $this->removeFromDefaultAudioRoutingGroup);
        $writer->writeStringValue('replacesCallId', $this->replacesCallId);
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
     * Sets the hidden property value. Optional. Whether to hide the participant from the roster.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value ): void {
        $this->hidden = $value;
    }

    /**
     * Sets the identity property value. The identity property
     *  @param IdentitySet|null $value Value to set for the identity property.
    */
    public function setIdentity(?IdentitySet $value ): void {
        $this->identity = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the participantId property value. Optional. The ID of the target participant.
     *  @param string|null $value Value to set for the participantId property.
    */
    public function setParticipantId(?string $value ): void {
        $this->participantId = $value;
    }

    /**
     * Sets the removeFromDefaultAudioRoutingGroup property value. Optional. Whether to remove them from the main mixer.
     *  @param bool|null $value Value to set for the removeFromDefaultAudioRoutingGroup property.
    */
    public function setRemoveFromDefaultAudioRoutingGroup(?bool $value ): void {
        $this->removeFromDefaultAudioRoutingGroup = $value;
    }

    /**
     * Sets the replacesCallId property value. Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully.
     *  @param string|null $value Value to set for the replacesCallId property.
    */
    public function setReplacesCallId(?string $value ): void {
        $this->replacesCallId = $value;
    }

}
