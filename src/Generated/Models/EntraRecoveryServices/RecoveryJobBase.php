<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecoveryJobBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new RecoveryJobBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecoveryJobBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecoveryJobBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.entraRecoveryServices.recoveryJob': return new RecoveryJob();
                case '#microsoft.graph.entraRecoveryServices.recoveryPreviewJob': return new RecoveryPreviewJob();
            }
        }
        return new RecoveryJobBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'filteringCriteria' => fn(ParseNode $n) => $o->setFilteringCriteria($n->getObjectValue([RecoveryJobFilteringCriteriaBase::class, 'createFromDiscriminatorValue'])),
            'jobCompletionDateTime' => fn(ParseNode $n) => $o->setJobCompletionDateTime($n->getDateTimeValue()),
            'jobStartDateTime' => fn(ParseNode $n) => $o->setJobStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RecoveryStatus::class)),
            'targetStateDateTime' => fn(ParseNode $n) => $o->setTargetStateDateTime($n->getDateTimeValue()),
            'totalChangedLinksCalculated' => fn(ParseNode $n) => $o->setTotalChangedLinksCalculated($n->getIntegerValue()),
            'totalChangedObjectsCalculated' => fn(ParseNode $n) => $o->setTotalChangedObjectsCalculated($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the filteringCriteria property value. Optional filtering criteria used to scope the job to specific entity types or entity IDs.
     * @return RecoveryJobFilteringCriteriaBase|null
    */
    public function getFilteringCriteria(): ?RecoveryJobFilteringCriteriaBase {
        $val = $this->getBackingStore()->get('filteringCriteria');
        if (is_null($val) || $val instanceof RecoveryJobFilteringCriteriaBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filteringCriteria'");
    }

    /**
     * Gets the jobCompletionDateTime property value. The date and time when the job completed. Null if the job is still running.
     * @return DateTime|null
    */
    public function getJobCompletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('jobCompletionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobCompletionDateTime'");
    }

    /**
     * Gets the jobStartDateTime property value. The date and time when the job started.
     * @return DateTime|null
    */
    public function getJobStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('jobStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobStartDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return RecoveryStatus|null
    */
    public function getStatus(): ?RecoveryStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof RecoveryStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the targetStateDateTime property value. The target snapshot timestamp to which the tenant is being restored. Supports $filter (eq, ne).
     * @return DateTime|null
    */
    public function getTargetStateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('targetStateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetStateDateTime'");
    }

    /**
     * Gets the totalChangedLinksCalculated property value. The total count of changed directory object links (relationships) calculated by the job. null until the job completes calculation. Not all calculated link changes may be successfully applied; see totalLinksModified on derived types for the count of links that were actually modified.
     * @return int|null
    */
    public function getTotalChangedLinksCalculated(): ?int {
        $val = $this->getBackingStore()->get('totalChangedLinksCalculated');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalChangedLinksCalculated'");
    }

    /**
     * Gets the totalChangedObjectsCalculated property value. The total count of changed directory objects calculated by the job. null until the job completes calculation. Not all calculated object changes may be successfully applied; see totalObjectsModified on derived types for the count of objects that were actually modified.
     * @return int|null
    */
    public function getTotalChangedObjectsCalculated(): ?int {
        $val = $this->getBackingStore()->get('totalChangedObjectsCalculated');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalChangedObjectsCalculated'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('filteringCriteria', $this->getFilteringCriteria());
        $writer->writeDateTimeValue('jobCompletionDateTime', $this->getJobCompletionDateTime());
        $writer->writeDateTimeValue('jobStartDateTime', $this->getJobStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeDateTimeValue('targetStateDateTime', $this->getTargetStateDateTime());
        $writer->writeIntegerValue('totalChangedLinksCalculated', $this->getTotalChangedLinksCalculated());
        $writer->writeIntegerValue('totalChangedObjectsCalculated', $this->getTotalChangedObjectsCalculated());
    }

    /**
     * Sets the filteringCriteria property value. Optional filtering criteria used to scope the job to specific entity types or entity IDs.
     * @param RecoveryJobFilteringCriteriaBase|null $value Value to set for the filteringCriteria property.
    */
    public function setFilteringCriteria(?RecoveryJobFilteringCriteriaBase $value): void {
        $this->getBackingStore()->set('filteringCriteria', $value);
    }

    /**
     * Sets the jobCompletionDateTime property value. The date and time when the job completed. Null if the job is still running.
     * @param DateTime|null $value Value to set for the jobCompletionDateTime property.
    */
    public function setJobCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('jobCompletionDateTime', $value);
    }

    /**
     * Sets the jobStartDateTime property value. The date and time when the job started.
     * @param DateTime|null $value Value to set for the jobStartDateTime property.
    */
    public function setJobStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('jobStartDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param RecoveryStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RecoveryStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the targetStateDateTime property value. The target snapshot timestamp to which the tenant is being restored. Supports $filter (eq, ne).
     * @param DateTime|null $value Value to set for the targetStateDateTime property.
    */
    public function setTargetStateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('targetStateDateTime', $value);
    }

    /**
     * Sets the totalChangedLinksCalculated property value. The total count of changed directory object links (relationships) calculated by the job. null until the job completes calculation. Not all calculated link changes may be successfully applied; see totalLinksModified on derived types for the count of links that were actually modified.
     * @param int|null $value Value to set for the totalChangedLinksCalculated property.
    */
    public function setTotalChangedLinksCalculated(?int $value): void {
        $this->getBackingStore()->set('totalChangedLinksCalculated', $value);
    }

    /**
     * Sets the totalChangedObjectsCalculated property value. The total count of changed directory objects calculated by the job. null until the job completes calculation. Not all calculated object changes may be successfully applied; see totalObjectsModified on derived types for the count of objects that were actually modified.
     * @param int|null $value Value to set for the totalChangedObjectsCalculated property.
    */
    public function setTotalChangedObjectsCalculated(?int $value): void {
        $this->getBackingStore()->set('totalChangedObjectsCalculated', $value);
    }

}
