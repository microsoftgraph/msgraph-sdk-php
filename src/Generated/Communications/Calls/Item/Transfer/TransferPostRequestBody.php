<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Transfer;

use Microsoft\Graph\Generated\Models\InvitationParticipantInfo;
use Microsoft\Graph\Generated\Models\ParticipantInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TransferPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TransferPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
            'transferee' => fn(ParseNode $n) => $o->setTransferee($n->getObjectValue([ParticipantInfo::class, 'createFromDiscriminatorValue'])),
            'transferTarget' => fn(ParseNode $n) => $o->setTransferTarget($n->getObjectValue([InvitationParticipantInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the transferee property value. The transferee property
     * @return ParticipantInfo|null
    */
    public function getTransferee(): ?ParticipantInfo {
        $val = $this->getBackingStore()->get('transferee');
        if (is_null($val) || $val instanceof ParticipantInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transferee'");
    }

    /**
     * Gets the transferTarget property value. The transferTarget property
     * @return InvitationParticipantInfo|null
    */
    public function getTransferTarget(): ?InvitationParticipantInfo {
        $val = $this->getBackingStore()->get('transferTarget');
        if (is_null($val) || $val instanceof InvitationParticipantInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transferTarget'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('transferee', $this->getTransferee());
        $writer->writeObjectValue('transferTarget', $this->getTransferTarget());
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
     * Sets the transferee property value. The transferee property
     * @param ParticipantInfo|null $value Value to set for the transferee property.
    */
    public function setTransferee(?ParticipantInfo $value): void {
        $this->getBackingStore()->set('transferee', $value);
    }

    /**
     * Sets the transferTarget property value. The transferTarget property
     * @param InvitationParticipantInfo|null $value Value to set for the transferTarget property.
    */
    public function setTransferTarget(?InvitationParticipantInfo $value): void {
        $this->getBackingStore()->set('transferTarget', $value);
    }

}
