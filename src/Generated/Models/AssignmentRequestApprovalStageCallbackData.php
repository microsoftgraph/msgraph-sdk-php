<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentRequestApprovalStageCallbackData extends AccessPackageAssignmentRequestCallbackData implements Parsable 
{
    /**
     * Instantiates a new AssignmentRequestApprovalStageCallbackData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.assignmentRequestApprovalStageCallbackData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentRequestApprovalStageCallbackData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentRequestApprovalStageCallbackData {
        return new AssignmentRequestApprovalStageCallbackData();
    }

    /**
     * Gets the approvalStage property value. The stage in the approval decision.
     * @return AccessPackageApprovalStage|null
    */
    public function getApprovalStage(): ?AccessPackageApprovalStage {
        $val = $this->getBackingStore()->get('approvalStage');
        if (is_null($val) || $val instanceof AccessPackageApprovalStage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalStage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalStage' => fn(ParseNode $n) => $o->setApprovalStage($n->getObjectValue([AccessPackageApprovalStage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('approvalStage', $this->getApprovalStage());
    }

    /**
     * Sets the approvalStage property value. The stage in the approval decision.
     * @param AccessPackageApprovalStage|null $value Value to set for the approvalStage property.
    */
    public function setApprovalStage(?AccessPackageApprovalStage $value): void {
        $this->getBackingStore()->set('approvalStage', $value);
    }

}
