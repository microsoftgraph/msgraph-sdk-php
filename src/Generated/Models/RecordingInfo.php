<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecordingInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var IdentitySet|null $initiator The identities of the recording initiator. */
    private ?IdentitySet $initiator = null;
    
    /** @var RecordingStatus|null $recordingStatus Possible values are: unknown, notRecording, recording, or failed. */
    private ?RecordingStatus $recordingStatus = null;
    
    /**
     * Instantiates a new recordingInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecordingInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RecordingInfo {
        return new RecordingInfo();
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
        return  [
            'initiator' => function (self $o, ParseNode $n) { $o->setInitiator($n->getObjectValue(IdentitySet::class)); },
            'recordingStatus' => function (self $o, ParseNode $n) { $o->setRecordingStatus($n->getEnumValue(RecordingStatus::class)); },
        ];
    }

    /**
     * Gets the initiator property value. The identities of the recording initiator.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        return $this->initiator;
    }

    /**
     * Gets the recordingStatus property value. Possible values are: unknown, notRecording, recording, or failed.
     * @return RecordingStatus|null
    */
    public function getRecordingStatus(): ?RecordingStatus {
        return $this->recordingStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('initiator', $this->initiator);
        $writer->writeEnumValue('recordingStatus', $this->recordingStatus);
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
     * Sets the initiator property value. The identities of the recording initiator.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

    /**
     * Sets the recordingStatus property value. Possible values are: unknown, notRecording, recording, or failed.
     *  @param RecordingStatus|null $value Value to set for the recordingStatus property.
    */
    public function setRecordingStatus(?RecordingStatus $value ): void {
        $this->recordingStatus = $value;
    }

}
