<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProcessEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new ProcessEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProcessEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProcessEvidence {
        return new ProcessEvidence();
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
            'imageFile' => fn(ParseNode $n) => $o->setImageFile($n->getObjectValue([FileDetails::class, 'createFromDiscriminatorValue'])),
            'mdeDeviceId' => fn(ParseNode $n) => $o->setMdeDeviceId($n->getStringValue()),
            'parentProcessCreationDateTime' => fn(ParseNode $n) => $o->setParentProcessCreationDateTime($n->getDateTimeValue()),
            'parentProcessId' => fn(ParseNode $n) => $o->setParentProcessId($n->getIntegerValue()),
            'parentProcessImageFile' => fn(ParseNode $n) => $o->setParentProcessImageFile($n->getObjectValue([FileDetails::class, 'createFromDiscriminatorValue'])),
            'processCommandLine' => fn(ParseNode $n) => $o->setProcessCommandLine($n->getStringValue()),
            'processCreationDateTime' => fn(ParseNode $n) => $o->setProcessCreationDateTime($n->getDateTimeValue()),
            'processId' => fn(ParseNode $n) => $o->setProcessId($n->getIntegerValue()),
            'userAccount' => fn(ParseNode $n) => $o->setUserAccount($n->getObjectValue([UserAccount::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the imageFile property value. Image file details.
     * @return FileDetails|null
    */
    public function getImageFile(): ?FileDetails {
        return $this->getBackingStore()->get('imageFile');
    }

    /**
     * Gets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     * @return string|null
    */
    public function getMdeDeviceId(): ?string {
        return $this->getBackingStore()->get('mdeDeviceId');
    }

    /**
     * Gets the parentProcessCreationDateTime property value. Date and time when the parent of the process was created.
     * @return DateTime|null
    */
    public function getParentProcessCreationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('parentProcessCreationDateTime');
    }

    /**
     * Gets the parentProcessId property value. Process ID (PID) of the parent process that spawned the process.
     * @return int|null
    */
    public function getParentProcessId(): ?int {
        return $this->getBackingStore()->get('parentProcessId');
    }

    /**
     * Gets the parentProcessImageFile property value. Parent process image file details.
     * @return FileDetails|null
    */
    public function getParentProcessImageFile(): ?FileDetails {
        return $this->getBackingStore()->get('parentProcessImageFile');
    }

    /**
     * Gets the processCommandLine property value. Command line used to create the new process.
     * @return string|null
    */
    public function getProcessCommandLine(): ?string {
        return $this->getBackingStore()->get('processCommandLine');
    }

    /**
     * Gets the processCreationDateTime property value. Date and time the process was created.
     * @return DateTime|null
    */
    public function getProcessCreationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('processCreationDateTime');
    }

    /**
     * Gets the processId property value. Process ID (PID) of the newly created process.
     * @return int|null
    */
    public function getProcessId(): ?int {
        return $this->getBackingStore()->get('processId');
    }

    /**
     * Gets the userAccount property value. User details of the user that ran the process.
     * @return UserAccount|null
    */
    public function getUserAccount(): ?UserAccount {
        return $this->getBackingStore()->get('userAccount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('detectionStatus', $this->getDetectionStatus());
        $writer->writeObjectValue('imageFile', $this->getImageFile());
        $writer->writeStringValue('mdeDeviceId', $this->getMdeDeviceId());
        $writer->writeDateTimeValue('parentProcessCreationDateTime', $this->getParentProcessCreationDateTime());
        $writer->writeIntegerValue('parentProcessId', $this->getParentProcessId());
        $writer->writeObjectValue('parentProcessImageFile', $this->getParentProcessImageFile());
        $writer->writeStringValue('processCommandLine', $this->getProcessCommandLine());
        $writer->writeDateTimeValue('processCreationDateTime', $this->getProcessCreationDateTime());
        $writer->writeIntegerValue('processId', $this->getProcessId());
        $writer->writeObjectValue('userAccount', $this->getUserAccount());
    }

    /**
     * Sets the detectionStatus property value. The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
     * @param DetectionStatus|null $value Value to set for the detectionStatus property.
    */
    public function setDetectionStatus(?DetectionStatus $value): void {
        $this->getBackingStore()->set('detectionStatus', $value);
    }

    /**
     * Sets the imageFile property value. Image file details.
     * @param FileDetails|null $value Value to set for the imageFile property.
    */
    public function setImageFile(?FileDetails $value): void {
        $this->getBackingStore()->set('imageFile', $value);
    }

    /**
     * Sets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     * @param string|null $value Value to set for the mdeDeviceId property.
    */
    public function setMdeDeviceId(?string $value): void {
        $this->getBackingStore()->set('mdeDeviceId', $value);
    }

    /**
     * Sets the parentProcessCreationDateTime property value. Date and time when the parent of the process was created.
     * @param DateTime|null $value Value to set for the parentProcessCreationDateTime property.
    */
    public function setParentProcessCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('parentProcessCreationDateTime', $value);
    }

    /**
     * Sets the parentProcessId property value. Process ID (PID) of the parent process that spawned the process.
     * @param int|null $value Value to set for the parentProcessId property.
    */
    public function setParentProcessId(?int $value): void {
        $this->getBackingStore()->set('parentProcessId', $value);
    }

    /**
     * Sets the parentProcessImageFile property value. Parent process image file details.
     * @param FileDetails|null $value Value to set for the parentProcessImageFile property.
    */
    public function setParentProcessImageFile(?FileDetails $value): void {
        $this->getBackingStore()->set('parentProcessImageFile', $value);
    }

    /**
     * Sets the processCommandLine property value. Command line used to create the new process.
     * @param string|null $value Value to set for the processCommandLine property.
    */
    public function setProcessCommandLine(?string $value): void {
        $this->getBackingStore()->set('processCommandLine', $value);
    }

    /**
     * Sets the processCreationDateTime property value. Date and time the process was created.
     * @param DateTime|null $value Value to set for the processCreationDateTime property.
    */
    public function setProcessCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('processCreationDateTime', $value);
    }

    /**
     * Sets the processId property value. Process ID (PID) of the newly created process.
     * @param int|null $value Value to set for the processId property.
    */
    public function setProcessId(?int $value): void {
        $this->getBackingStore()->set('processId', $value);
    }

    /**
     * Sets the userAccount property value. User details of the user that ran the process.
     * @param UserAccount|null $value Value to set for the userAccount property.
    */
    public function setUserAccount(?UserAccount $value): void {
        $this->getBackingStore()->set('userAccount', $value);
    }

}
