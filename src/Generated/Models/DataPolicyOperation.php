<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataPolicyOperation extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $completedDateTime Represents when the request for this data policy operation was completed, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Null until the operation completes.
    */
    private ?DateTime $completedDateTime = null;
    
    /**
     * @var float|null $progress Specifies the progress of an operation.
    */
    private ?float $progress = null;
    
    /**
     * @var DataPolicyOperationStatus|null $status Possible values are: notStarted, running, complete, failed, unknownFutureValue.
    */
    private ?DataPolicyOperationStatus $status = null;
    
    /**
     * @var string|null $storageLocation The URL location to where data is being exported for export requests.
    */
    private ?string $storageLocation = null;
    
    /**
     * @var DateTime|null $submittedDateTime Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $submittedDateTime = null;
    
    /**
     * @var string|null $userId The id for the user on whom the operation is performed.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new dataPolicyOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataPolicyOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataPolicyOperation {
        return new DataPolicyOperation();
    }

    /**
     * Gets the completedDateTime property value. Represents when the request for this data policy operation was completed, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Null until the operation completes.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => function (ParseNode $n) use ($o) { $o->setCompletedDateTime($n->getDateTimeValue()); },
            'progress' => function (ParseNode $n) use ($o) { $o->setProgress($n->getFloatValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DataPolicyOperationStatus::class)); },
            'storageLocation' => function (ParseNode $n) use ($o) { $o->setStorageLocation($n->getStringValue()); },
            'submittedDateTime' => function (ParseNode $n) use ($o) { $o->setSubmittedDateTime($n->getDateTimeValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the progress property value. Specifies the progress of an operation.
     * @return float|null
    */
    public function getProgress(): ?float {
        return $this->progress;
    }

    /**
     * Gets the status property value. Possible values are: notStarted, running, complete, failed, unknownFutureValue.
     * @return DataPolicyOperationStatus|null
    */
    public function getStatus(): ?DataPolicyOperationStatus {
        return $this->status;
    }

    /**
     * Gets the storageLocation property value. The URL location to where data is being exported for export requests.
     * @return string|null
    */
    public function getStorageLocation(): ?string {
        return $this->storageLocation;
    }

    /**
     * Gets the submittedDateTime property value. Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getSubmittedDateTime(): ?DateTime {
        return $this->submittedDateTime;
    }

    /**
     * Gets the userId property value. The id for the user on whom the operation is performed.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeFloatValue('progress', $this->progress);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('storageLocation', $this->storageLocation);
        $writer->writeDateTimeValue('submittedDateTime', $this->submittedDateTime);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the completedDateTime property value. Represents when the request for this data policy operation was completed, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Null until the operation completes.
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the progress property value. Specifies the progress of an operation.
     *  @param float|null $value Value to set for the progress property.
    */
    public function setProgress(?float $value ): void {
        $this->progress = $value;
    }

    /**
     * Sets the status property value. Possible values are: notStarted, running, complete, failed, unknownFutureValue.
     *  @param DataPolicyOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DataPolicyOperationStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the storageLocation property value. The URL location to where data is being exported for export requests.
     *  @param string|null $value Value to set for the storageLocation property.
    */
    public function setStorageLocation(?string $value ): void {
        $this->storageLocation = $value;
    }

    /**
     * Sets the submittedDateTime property value. Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the submittedDateTime property.
    */
    public function setSubmittedDateTime(?DateTime $value ): void {
        $this->submittedDateTime = $value;
    }

    /**
     * Sets the userId property value. The id for the user on whom the operation is performed.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
