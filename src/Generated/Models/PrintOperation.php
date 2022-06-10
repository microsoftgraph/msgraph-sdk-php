<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintOperation extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The DateTimeOffset when the operation was created. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var PrintOperationStatus|null $status The status property
    */
    private ?PrintOperationStatus $status = null;
    
    /**
     * Instantiates a new printOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintOperation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.printerCreateOperation': return new PrinterCreateOperation();
            }
        }
        return new PrintOperation();
    }

    /**
     * Gets the createdDateTime property value. The DateTimeOffset when the operation was created. Read-only.
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
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getObjectValue(array(PrintOperationStatus::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the status property value. The status property
     * @return PrintOperationStatus|null
    */
    public function getStatus(): ?PrintOperationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('status', $this->status);
    }

    /**
     * Sets the createdDateTime property value. The DateTimeOffset when the operation was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param PrintOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PrintOperationStatus $value ): void {
        $this->status = $value;
    }

}
