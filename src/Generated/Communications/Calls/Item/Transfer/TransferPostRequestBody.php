<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Transfer;

use Microsoft\Graph\Generated\Models\InvitationParticipantInfo;
use Microsoft\Graph\Generated\Models\ParticipantInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TransferPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ParticipantInfo|null $transferee The transferee property
    */
    private ?ParticipantInfo $transferee = null;
    
    /**
     * @var InvitationParticipantInfo|null $transferTarget The transferTarget property
    */
    private ?InvitationParticipantInfo $transferTarget = null;
    
    /**
     * Instantiates a new transferPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TransferPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TransferPostRequestBody {
        return new TransferPostRequestBody();
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
            'transferee' => fn(ParseNode $n) => $o->setTransferee($n->getObjectValue([ParticipantInfo::class, 'createFromDiscriminatorValue'])),
            'transferTarget' => fn(ParseNode $n) => $o->setTransferTarget($n->getObjectValue([InvitationParticipantInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the transferee property value. The transferee property
     * @return ParticipantInfo|null
    */
    public function getTransferee(): ?ParticipantInfo {
        return $this->transferee;
    }

    /**
     * Gets the transferTarget property value. The transferTarget property
     * @return InvitationParticipantInfo|null
    */
    public function getTransferTarget(): ?InvitationParticipantInfo {
        return $this->transferTarget;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('transferee', $this->transferee);
        $writer->writeObjectValue('transferTarget', $this->transferTarget);
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
     * Sets the transferee property value. The transferee property
     *  @param ParticipantInfo|null $value Value to set for the transferee property.
    */
    public function setTransferee(?ParticipantInfo $value ): void {
        $this->transferee = $value;
    }

    /**
     * Sets the transferTarget property value. The transferTarget property
     *  @param InvitationParticipantInfo|null $value Value to set for the transferTarget property.
    */
    public function setTransferTarget(?InvitationParticipantInfo $value ): void {
        $this->transferTarget = $value;
    }

}
