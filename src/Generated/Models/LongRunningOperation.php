<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LongRunningOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new longRunningOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LongRunningOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LongRunningOperation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.richLongRunningOperation': return new RichLongRunningOperation();
            }
        }
        return new LongRunningOperation();
    }

    /**
     * Gets the createdDateTime property value. The start time of the operation.
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
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'resourceLocation' => fn(ParseNode $n) => $o->setResourceLocation($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(LongRunningOperationStatus::class)),
            'statusDetail' => fn(ParseNode $n) => $o->setStatusDetail($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastActionDateTime property value. The time of the last action in the operation.
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastActionDateTime');
    }

    /**
     * Gets the resourceLocation property value. URI of the resource that the operation is performed on.
     * @return string|null
    */
    public function getResourceLocation(): ?string {
        return $this->getBackingStore()->get('resourceLocation');
    }

    /**
     * Gets the status property value. The status of the operation. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue.
     * @return LongRunningOperationStatus|null
    */
    public function getStatus(): ?LongRunningOperationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the statusDetail property value. Details about the status of the operation.
     * @return string|null
    */
    public function getStatusDetail(): ?string {
        return $this->getBackingStore()->get('statusDetail');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeStringValue('resourceLocation', $this->getResourceLocation());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusDetail', $this->getStatusDetail());
    }

    /**
     * Sets the createdDateTime property value. The start time of the operation.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The time of the last action in the operation.
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the resourceLocation property value. URI of the resource that the operation is performed on.
     *  @param string|null $value Value to set for the resourceLocation property.
    */
    public function setResourceLocation(?string $value): void {
        $this->getBackingStore()->set('resourceLocation', $value);
    }

    /**
     * Sets the status property value. The status of the operation. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue.
     *  @param LongRunningOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LongRunningOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusDetail property value. Details about the status of the operation.
     *  @param string|null $value Value to set for the statusDetail property.
    */
    public function setStatusDetail(?string $value): void {
        $this->getBackingStore()->set('statusDetail', $value);
    }

}
