<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CommsOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new commsOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.commsOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CommsOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CommsOperation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.addLargeGalleryViewOperation': return new AddLargeGalleryViewOperation();
                case '#microsoft.graph.cancelMediaProcessingOperation': return new CancelMediaProcessingOperation();
                case '#microsoft.graph.inviteParticipantsOperation': return new InviteParticipantsOperation();
                case '#microsoft.graph.muteParticipantOperation': return new MuteParticipantOperation();
                case '#microsoft.graph.playPromptOperation': return new PlayPromptOperation();
                case '#microsoft.graph.recordOperation': return new RecordOperation();
                case '#microsoft.graph.startHoldMusicOperation': return new StartHoldMusicOperation();
                case '#microsoft.graph.stopHoldMusicOperation': return new StopHoldMusicOperation();
                case '#microsoft.graph.subscribeToToneOperation': return new SubscribeToToneOperation();
                case '#microsoft.graph.unmuteParticipantOperation': return new UnmuteParticipantOperation();
                case '#microsoft.graph.updateRecordingStatusOperation': return new UpdateRecordingStatusOperation();
            }
        }
        return new CommsOperation();
    }

    /**
     * Gets the clientContext property value. Unique Client Context string. Max limit is 256 chars.
     * @return string|null
    */
    public function getClientContext(): ?string {
        return $this->getBackingStore()->get('clientContext');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientContext' => fn(ParseNode $n) => $o->setClientContext($n->getStringValue()),
            'resultInfo' => fn(ParseNode $n) => $o->setResultInfo($n->getObjectValue([ResultInfo::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OperationStatus::class)),
        ]);
    }

    /**
     * Gets the resultInfo property value. The result information. Read-only.
     * @return ResultInfo|null
    */
    public function getResultInfo(): ?ResultInfo {
        return $this->getBackingStore()->get('resultInfo');
    }

    /**
     * Gets the status property value. The status property
     * @return OperationStatus|null
    */
    public function getStatus(): ?OperationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientContext', $this->getClientContext());
        $writer->writeObjectValue('resultInfo', $this->getResultInfo());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the clientContext property value. Unique Client Context string. Max limit is 256 chars.
     *  @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value): void {
        $this->getBackingStore()->set('clientContext', $value);
    }

    /**
     * Sets the resultInfo property value. The result information. Read-only.
     *  @param ResultInfo|null $value Value to set for the resultInfo property.
    */
    public function setResultInfo(?ResultInfo $value): void {
        $this->getBackingStore()->set('resultInfo', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param OperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?OperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
