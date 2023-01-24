<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\IdentitySet;
use Microsoft\Graph\Generated\Models\ResultInfo;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CaseOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new caseOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaseOperation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.ediscoveryAddToReviewSetOperation': return new EdiscoveryAddToReviewSetOperation();
                case '#microsoft.graph.security.ediscoveryEstimateOperation': return new EdiscoveryEstimateOperation();
                case '#microsoft.graph.security.ediscoveryHoldOperation': return new EdiscoveryHoldOperation();
                case '#microsoft.graph.security.ediscoveryIndexOperation': return new EdiscoveryIndexOperation();
                case '#microsoft.graph.security.ediscoveryPurgeDataOperation': return new EdiscoveryPurgeDataOperation();
                case '#microsoft.graph.security.ediscoveryTagOperation': return new EdiscoveryTagOperation();
            }
        }
        return new CaseOperation();
    }

    /**
     * Gets the action property value. The type of action the operation represents. Possible values are: addToReviewSet,applyTags,contentExport,convertToPdf,estimateStatistics, purgeData
     * @return CaseAction|null
    */
    public function getAction(): ?CaseAction {
        return $this->getBackingStore()->get('action');
    }

    /**
     * Gets the completedDateTime property value. The date and time the operation was completed.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completedDateTime');
    }

    /**
     * Gets the createdBy property value. The user that created the operation.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The date and time the operation was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(CaseAction::class)),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'percentProgress' => fn(ParseNode $n) => $o->setPercentProgress($n->getIntegerValue()),
            'resultInfo' => fn(ParseNode $n) => $o->setResultInfo($n->getObjectValue([ResultInfo::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CaseOperationStatus::class)),
        ]);
    }

    /**
     * Gets the percentProgress property value. The progress of the operation.
     * @return int|null
    */
    public function getPercentProgress(): ?int {
        return $this->getBackingStore()->get('percentProgress');
    }

    /**
     * Gets the resultInfo property value. Contains success and failure-specific result information.
     * @return ResultInfo|null
    */
    public function getResultInfo(): ?ResultInfo {
        return $this->getBackingStore()->get('resultInfo');
    }

    /**
     * Gets the status property value. The status of the case operation. Possible values are: notStarted, submissionFailed, running, succeeded, partiallySucceeded, failed.
     * @return CaseOperationStatus|null
    */
    public function getStatus(): ?CaseOperationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('percentProgress', $this->getPercentProgress());
        $writer->writeObjectValue('resultInfo', $this->getResultInfo());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the action property value. The type of action the operation represents. Possible values are: addToReviewSet,applyTags,contentExport,convertToPdf,estimateStatistics, purgeData
     * @param CaseAction|null $value Value to set for the action property.
    */
    public function setAction(?CaseAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the completedDateTime property value. The date and time the operation was completed.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdBy property value. The user that created the operation.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the operation was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the percentProgress property value. The progress of the operation.
     * @param int|null $value Value to set for the percentProgress property.
    */
    public function setPercentProgress(?int $value): void {
        $this->getBackingStore()->set('percentProgress', $value);
    }

    /**
     * Sets the resultInfo property value. Contains success and failure-specific result information.
     * @param ResultInfo|null $value Value to set for the resultInfo property.
    */
    public function setResultInfo(?ResultInfo $value): void {
        $this->getBackingStore()->set('resultInfo', $value);
    }

    /**
     * Sets the status property value. The status of the case operation. Possible values are: notStarted, submissionFailed, running, succeeded, partiallySucceeded, failed.
     * @param CaseOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CaseOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
