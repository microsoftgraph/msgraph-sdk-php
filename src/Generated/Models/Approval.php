<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Approval extends Entity implements Parsable 
{
    /**
     * @var array<ApprovalStage>|null $stages Used for the approvalStages property of approval settings in the requestApprovalSettings property of an access package assignment policy. Specifies the primary, fallback, and escalation approvers of each stage.
    */
    private ?array $stages = null;
    
    /**
     * Instantiates a new approval and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Approval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Approval {
        return new Approval();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'stages' => function (ParseNode $n) use ($o) { $o->setStages($n->getCollectionOfObjectValues(array(ApprovalStage::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the stages property value. Used for the approvalStages property of approval settings in the requestApprovalSettings property of an access package assignment policy. Specifies the primary, fallback, and escalation approvers of each stage.
     * @return array<ApprovalStage>|null
    */
    public function getStages(): ?array {
        return $this->stages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('stages', $this->stages);
    }

    /**
     * Sets the stages property value. Used for the approvalStages property of approval settings in the requestApprovalSettings property of an access package assignment policy. Specifies the primary, fallback, and escalation approvers of each stage.
     *  @param array<ApprovalStage>|null $value Value to set for the stages property.
    */
    public function setStages(?array $value ): void {
        $this->stages = $value;
    }

}
