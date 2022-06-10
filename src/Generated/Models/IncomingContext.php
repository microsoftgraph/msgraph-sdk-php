<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IncomingContext implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $observedParticipantId The id of the participant that is under observation. Read-only.
    */
    private ?string $observedParticipantId = null;
    
    /**
     * @var IdentitySet|null $onBehalfOf The identity that the call is happening on behalf of.
    */
    private ?IdentitySet $onBehalfOf = null;
    
    /**
     * @var string|null $sourceParticipantId The id of the participant that triggered the incoming call. Read-only.
    */
    private ?string $sourceParticipantId = null;
    
    /**
     * @var IdentitySet|null $transferor The identity that transferred the call.
    */
    private ?IdentitySet $transferor = null;
    
    /**
     * Instantiates a new incomingContext and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
            'observedParticipantId' => function (ParseNode $n) use ($o) { $o->setObservedParticipantId($n->getStringValue()); },
            'onBehalfOf' => function (ParseNode $n) use ($o) { $o->setOnBehalfOf($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'sourceParticipantId' => function (ParseNode $n) use ($o) { $o->setSourceParticipantId($n->getStringValue()); },
            'transferor' => function (ParseNode $n) use ($o) { $o->setTransferor($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the observedParticipantId property value. The id of the participant that is under observation. Read-only.
     * @return string|null
    */
    public function getObservedParticipantId(): ?string {
        return $this->observedParticipantId;
    }

    /**
     * Gets the onBehalfOf property value. The identity that the call is happening on behalf of.
     * @return IdentitySet|null
    */
    public function getOnBehalfOf(): ?IdentitySet {
        return $this->onBehalfOf;
    }

    /**
     * Gets the sourceParticipantId property value. The id of the participant that triggered the incoming call. Read-only.
     * @return string|null
    */
    public function getSourceParticipantId(): ?string {
        return $this->sourceParticipantId;
    }

    /**
     * Gets the transferor property value. The identity that transferred the call.
     * @return IdentitySet|null
    */
    public function getTransferor(): ?IdentitySet {
        return $this->transferor;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('observedParticipantId', $this->observedParticipantId);
        $writer->writeObjectValue('onBehalfOf', $this->onBehalfOf);
        $writer->writeStringValue('sourceParticipantId', $this->sourceParticipantId);
        $writer->writeObjectValue('transferor', $this->transferor);
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
     * Sets the observedParticipantId property value. The id of the participant that is under observation. Read-only.
     *  @param string|null $value Value to set for the observedParticipantId property.
    */
    public function setObservedParticipantId(?string $value ): void {
        $this->observedParticipantId = $value;
    }

    /**
     * Sets the onBehalfOf property value. The identity that the call is happening on behalf of.
     *  @param IdentitySet|null $value Value to set for the onBehalfOf property.
    */
    public function setOnBehalfOf(?IdentitySet $value ): void {
        $this->onBehalfOf = $value;
    }

    /**
     * Sets the sourceParticipantId property value. The id of the participant that triggered the incoming call. Read-only.
     *  @param string|null $value Value to set for the sourceParticipantId property.
    */
    public function setSourceParticipantId(?string $value ): void {
        $this->sourceParticipantId = $value;
    }

    /**
     * Sets the transferor property value. The identity that transferred the call.
     *  @param IdentitySet|null $value Value to set for the transferor property.
    */
    public function setTransferor(?IdentitySet $value ): void {
        $this->transferor = $value;
    }

}
