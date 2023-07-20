<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataPolicyOperation extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'progress' => fn(ParseNode $n) => $o->setProgress($n->getFloatValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DataPolicyOperationStatus::class)),
            'storageLocation' => fn(ParseNode $n) => $o->setStorageLocation($n->getStringValue()),
            'submittedDateTime' => fn(ParseNode $n) => $o->setSubmittedDateTime($n->getDateTimeValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the progress property value. Specifies the progress of an operation.
     * @return float|null
    */
    public function getProgress(): ?float {
        $val = $this->getBackingStore()->get('progress');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'progress'");
    }

    /**
     * Gets the status property value. Possible values are: notStarted, running, complete, failed, unknownFutureValue.
     * @return DataPolicyOperationStatus|null
    */
    public function getStatus(): ?DataPolicyOperationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DataPolicyOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the storageLocation property value. The URL location to where data is being exported for export requests.
     * @return string|null
    */
    public function getStorageLocation(): ?string {
        $val = $this->getBackingStore()->get('storageLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageLocation'");
    }

    /**
     * Gets the submittedDateTime property value. Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getSubmittedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('submittedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submittedDateTime'");
    }

    /**
     * Gets the userId property value. The id for the user on whom the operation is performed.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeFloatValue('progress', $this->getProgress());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('storageLocation', $this->getStorageLocation());
        $writer->writeDateTimeValue('submittedDateTime', $this->getSubmittedDateTime());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the completedDateTime property value. Represents when the request for this data policy operation was completed, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Null until the operation completes.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the progress property value. Specifies the progress of an operation.
     * @param float|null $value Value to set for the progress property.
    */
    public function setProgress(?float $value): void {
        $this->getBackingStore()->set('progress', $value);
    }

    /**
     * Sets the status property value. Possible values are: notStarted, running, complete, failed, unknownFutureValue.
     * @param DataPolicyOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DataPolicyOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the storageLocation property value. The URL location to where data is being exported for export requests.
     * @param string|null $value Value to set for the storageLocation property.
    */
    public function setStorageLocation(?string $value): void {
        $this->getBackingStore()->set('storageLocation', $value);
    }

    /**
     * Sets the submittedDateTime property value. Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the submittedDateTime property.
    */
    public function setSubmittedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('submittedDateTime', $value);
    }

    /**
     * Sets the userId property value. The id for the user on whom the operation is performed.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
