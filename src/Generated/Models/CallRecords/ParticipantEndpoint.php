<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Graph\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParticipantEndpoint extends Endpoint implements Parsable 
{
    /**
     * @var UserFeedback|null $feedback The feedback provided by the user of this endpoint about the quality of the session.
    */
    private ?UserFeedback $feedback = null;
    
    /**
     * @var IdentitySet|null $identity Identity associated with the endpoint.
    */
    private ?IdentitySet $identity = null;
    
    /**
     * Instantiates a new ParticipantEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callRecords.participantEndpoint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParticipantEndpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParticipantEndpoint {
        return new ParticipantEndpoint();
    }

    /**
     * Gets the feedback property value. The feedback provided by the user of this endpoint about the quality of the session.
     * @return UserFeedback|null
    */
    public function getFeedback(): ?UserFeedback {
        return $this->feedback;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'feedback' => function (ParseNode $n) use ($o) { $o->setFeedback($n->getObjectValue(array(UserFeedback::class, 'createFromDiscriminatorValue'))); },
            'identity' => function (ParseNode $n) use ($o) { $o->setIdentity($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the identity property value. Identity associated with the endpoint.
     * @return IdentitySet|null
    */
    public function getIdentity(): ?IdentitySet {
        return $this->identity;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('feedback', $this->feedback);
        $writer->writeObjectValue('identity', $this->identity);
    }

    /**
     * Sets the feedback property value. The feedback provided by the user of this endpoint about the quality of the session.
     *  @param UserFeedback|null $value Value to set for the feedback property.
    */
    public function setFeedback(?UserFeedback $value ): void {
        $this->feedback = $value;
    }

    /**
     * Sets the identity property value. Identity associated with the endpoint.
     *  @param IdentitySet|null $value Value to set for the identity property.
    */
    public function setIdentity(?IdentitySet $value ): void {
        $this->identity = $value;
    }

}
