<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Participants\Invite;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\InvitationParticipantInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InviteRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $clientContext  */
    private ?string $clientContext = null;
    
    /** @var array<InvitationParticipantInfo>|null $participants  */
    private ?array $participants = null;
    
    /**
     * Instantiates a new inviteRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InviteRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): InviteRequestBody {
        return new InviteRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the clientContext property value. 
     * @return string|null
    */
    public function getClientContext(): ?string {
        return $this->clientContext;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'clientContext' => function (self $o, ParseNode $n) { $o->setClientContext($n->getStringValue()); },
            'participants' => function (self $o, ParseNode $n) { $o->setParticipants($n->getCollectionOfObjectValues(InvitationParticipantInfo::class)); },
        ];
    }

    /**
     * Gets the participants property value. 
     * @return array<InvitationParticipantInfo>|null
    */
    public function getParticipants(): ?array {
        return $this->participants;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientContext', $this->clientContext);
        $writer->writeCollectionOfObjectValues('participants', $this->participants);
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
     * Sets the clientContext property value. 
     *  @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value ): void {
        $this->clientContext = $value;
    }

    /**
     * Sets the participants property value. 
     *  @param array<InvitationParticipantInfo>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value ): void {
        $this->participants = $value;
    }

}
