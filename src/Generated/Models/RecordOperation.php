<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecordOperation extends CommsOperation implements Parsable 
{
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recordingAccessToken' => fn(ParseNode $n) => $o->setRecordingAccessToken($n->getStringValue()),
            'recordingLocation' => fn(ParseNode $n) => $o->setRecordingLocation($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recordingAccessToken property value. The access token required to retrieve the recording.
     * @return string|null
    */
    public function getRecordingAccessToken(): ?string {
        $val = $this->getBackingStore()->get('recordingAccessToken');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordingAccessToken'");
    }

    /**
     * Gets the recordingLocation property value. The location where the recording is located.
     * @return string|null
    */
    public function getRecordingLocation(): ?string {
        $val = $this->getBackingStore()->get('recordingLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordingLocation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('recordingAccessToken', $this->getRecordingAccessToken());
        $writer->writeStringValue('recordingLocation', $this->getRecordingLocation());
    }

    /**
     * Sets the recordingAccessToken property value. The access token required to retrieve the recording.
     * @param string|null $value Value to set for the recordingAccessToken property.
    */
    public function setRecordingAccessToken(?string $value): void {
        $this->getBackingStore()->set('recordingAccessToken', $value);
    }

    /**
     * Sets the recordingLocation property value. The location where the recording is located.
     * @param string|null $value Value to set for the recordingLocation property.
    */
    public function setRecordingLocation(?string $value): void {
        $this->getBackingStore()->set('recordingLocation', $value);
    }

}
