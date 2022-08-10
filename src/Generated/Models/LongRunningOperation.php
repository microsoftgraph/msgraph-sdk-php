<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LongRunningOperation extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The lastActionDateTime property
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var string|null $resourceLocation The resourceLocation property
    */
    private ?string $resourceLocation = null;
    
    /**
     * @var LongRunningOperationStatus|null $status The status property
    */
    private ?LongRunningOperationStatus $status = null;
    
    /**
     * @var string|null $statusDetail The statusDetail property
    */
    private ?string $statusDetail = null;
    
    /**
     * Instantiates a new longRunningOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.longRunningOperation');
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
     * Gets the createdDateTime property value. The createdDateTime property
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
            'resourceLocation' => function (ParseNode $n) use ($o) { $o->setResourceLocation($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(LongRunningOperationStatus::class)); },
            'statusDetail' => function (ParseNode $n) use ($o) { $o->setStatusDetail($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the resourceLocation property value. The resourceLocation property
     * @return string|null
    */
    public function getResourceLocation(): ?string {
        return $this->resourceLocation;
    }

    /**
     * Gets the status property value. The status property
     * @return LongRunningOperationStatus|null
    */
    public function getStatus(): ?LongRunningOperationStatus {
        return $this->status;
    }

    /**
     * Gets the statusDetail property value. The statusDetail property
     * @return string|null
    */
    public function getStatusDetail(): ?string {
        return $this->statusDetail;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeStringValue('resourceLocation', $this->resourceLocation);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('statusDetail', $this->statusDetail);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the resourceLocation property value. The resourceLocation property
     *  @param string|null $value Value to set for the resourceLocation property.
    */
    public function setResourceLocation(?string $value ): void {
        $this->resourceLocation = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param LongRunningOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LongRunningOperationStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the statusDetail property value. The statusDetail property
     *  @param string|null $value Value to set for the statusDetail property.
    */
    public function setStatusDetail(?string $value ): void {
        $this->statusDetail = $value;
    }

}
