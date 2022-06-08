<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Operation extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The start time of the operation.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The time of the last action of the operation.
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var OperationStatus|null $status Possible values are: notStarted, running, completed, failed. Read-only.
    */
    private ?OperationStatus $status = null;
    
    /**
     * Instantiates a new operation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Operation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Operation {
        $mappingValueNode = ParseNode::getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.operation': return new Operation();
            }
        }
        return new Operation();
    }

    /**
     * Gets the createdDateTime property value. The start time of the operation.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'lastActionDateTime' => function (ParseNode $n) use ($o) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(OperationStatus::class)); },
        ]);
    }

    /**
     * Gets the lastActionDateTime property value. The time of the last action of the operation.
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the status property value. Possible values are: notStarted, running, completed, failed. Read-only.
     * @return OperationStatus|null
    */
    public function getStatus(): ?OperationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the createdDateTime property value. The start time of the operation.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastActionDateTime property value. The time of the last action of the operation.
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the status property value. Possible values are: notStarted, running, completed, failed. Read-only.
     *  @param OperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?OperationStatus $value ): void {
        $this->status = $value;
    }

}
