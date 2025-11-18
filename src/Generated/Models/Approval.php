<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Approval extends Entity implements Parsable 
{
    /**
     * Instantiates a new Approval and sets the default values.
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'stages' => fn(ParseNode $n) => $o->setStages($n->getCollectionOfObjectValues([ApprovalStage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the stages property value. A collection of stages in the approval decision.
     * @return array<ApprovalStage>|null
    */
    public function getStages(): ?array {
        $val = $this->getBackingStore()->get('stages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApprovalStage::class);
            /** @var array<ApprovalStage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stages'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('stages', $this->getStages());
    }

    /**
     * Sets the stages property value. A collection of stages in the approval decision.
     * @param array<ApprovalStage>|null $value Value to set for the stages property.
    */
    public function setStages(?array $value): void {
        $this->getBackingStore()->set('stages', $value);
    }

}
