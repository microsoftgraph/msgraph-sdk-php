<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecordOperation extends CommsOperation implements Parsable 
{
    /**
     * @var string|null $recordingAccessToken The access token required to retrieve the recording.
    */
    private ?string $recordingAccessToken = null;
    
    /**
     * @var string|null $recordingLocation The location where the recording is located.
    */
    private ?string $recordingLocation = null;
    
    /**
     * Instantiates a new RecordOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecordOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecordOperation {
        return new RecordOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recordingAccessToken' => function (ParseNode $n) use ($o) { $o->setRecordingAccessToken($n->getStringValue()); },
            'recordingLocation' => function (ParseNode $n) use ($o) { $o->setRecordingLocation($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the recordingAccessToken property value. The access token required to retrieve the recording.
     * @return string|null
    */
    public function getRecordingAccessToken(): ?string {
        return $this->recordingAccessToken;
    }

    /**
     * Gets the recordingLocation property value. The location where the recording is located.
     * @return string|null
    */
    public function getRecordingLocation(): ?string {
        return $this->recordingLocation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('recordingAccessToken', $this->recordingAccessToken);
        $writer->writeStringValue('recordingLocation', $this->recordingLocation);
    }

    /**
     * Sets the recordingAccessToken property value. The access token required to retrieve the recording.
     *  @param string|null $value Value to set for the recordingAccessToken property.
    */
    public function setRecordingAccessToken(?string $value ): void {
        $this->recordingAccessToken = $value;
    }

    /**
     * Sets the recordingLocation property value. The location where the recording is located.
     *  @param string|null $value Value to set for the recordingLocation property.
    */
    public function setRecordingLocation(?string $value ): void {
        $this->recordingLocation = $value;
    }

}
