<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new FileEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileEvidence {
        return new FileEvidence();
    }

    /**
     * Gets the detectionStatus property value. The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
     * @return DetectionStatus|null
    */
    public function getDetectionStatus(): ?DetectionStatus {
        return $this->getBackingStore()->get('detectionStatus');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionStatus' => fn(ParseNode $n) => $o->setDetectionStatus($n->getEnumValue(DetectionStatus::class)),
            'fileDetails' => fn(ParseNode $n) => $o->setFileDetails($n->getObjectValue([FileDetails::class, 'createFromDiscriminatorValue'])),
            'mdeDeviceId' => fn(ParseNode $n) => $o->setMdeDeviceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileDetails property value. The file details.
     * @return FileDetails|null
    */
    public function getFileDetails(): ?FileDetails {
        return $this->getBackingStore()->get('fileDetails');
    }

    /**
     * Gets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     * @return string|null
    */
    public function getMdeDeviceId(): ?string {
        return $this->getBackingStore()->get('mdeDeviceId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('detectionStatus', $this->getDetectionStatus());
        $writer->writeObjectValue('fileDetails', $this->getFileDetails());
        $writer->writeStringValue('mdeDeviceId', $this->getMdeDeviceId());
    }

    /**
     * Sets the detectionStatus property value. The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
     * @param DetectionStatus|null $value Value to set for the detectionStatus property.
    */
    public function setDetectionStatus(?DetectionStatus $value): void {
        $this->getBackingStore()->set('detectionStatus', $value);
    }

    /**
     * Sets the fileDetails property value. The file details.
     * @param FileDetails|null $value Value to set for the fileDetails property.
    */
    public function setFileDetails(?FileDetails $value): void {
        $this->getBackingStore()->set('fileDetails', $value);
    }

    /**
     * Sets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     * @param string|null $value Value to set for the mdeDeviceId property.
    */
    public function setMdeDeviceId(?string $value): void {
        $this->getBackingStore()->set('mdeDeviceId', $value);
    }

}
