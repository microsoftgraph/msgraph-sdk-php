<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAsyncOperation extends Entity 
{
    /** @var int|null $attemptsCount Number of times the operation was attempted before being marked successful or failed. */
    private ?int $attemptsCount = null;
    
    /** @var DateTime|null $createdDateTime Time when the operation was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var OperationError|null $error Any error that causes the async operation to fail. */
    private ?OperationError $error = null;
    
    /** @var DateTime|null $lastActionDateTime Time when the async operation was last updated. */
    private ?DateTime $lastActionDateTime = null;
    
    /** @var TeamsAsyncOperationType|null $operationType Denotes which type of operation is being described. */
    private ?TeamsAsyncOperationType $operationType = null;
    
    /** @var TeamsAsyncOperationStatus|null $status Operation status. */
    private ?TeamsAsyncOperationStatus $status = null;
    
    /** @var string|null $targetResourceId The ID of the object that's created or modified as result of this async operation, typically a team. */
    private ?string $targetResourceId = null;
    
    /** @var string|null $targetResourceLocation The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths. */
    private ?string $targetResourceLocation = null;
    
    /**
     * Instantiates a new teamsAsyncOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAsyncOperation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAsyncOperation {
        return new TeamsAsyncOperation();
    }

    /**
     * Gets the attemptsCount property value. Number of times the operation was attempted before being marked successful or failed.
     * @return int|null
    */
    public function getAttemptsCount(): ?int {
        return $this->attemptsCount;
    }

    /**
     * Gets the createdDateTime property value. Time when the operation was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the error property value. Any error that causes the async operation to fail.
     * @return OperationError|null
    */
    public function getError(): ?OperationError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'attemptsCount' => function (self $o, ParseNode $n) { $o->setAttemptsCount($n->getIntegerValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'error' => function (self $o, ParseNode $n) { $o->setError($n->getObjectValue(OperationError::class)); },
            'lastActionDateTime' => function (self $o, ParseNode $n) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'operationType' => function (self $o, ParseNode $n) { $o->setOperationType($n->getEnumValue(TeamsAsyncOperationType::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(TeamsAsyncOperationStatus::class)); },
            'targetResourceId' => function (self $o, ParseNode $n) { $o->setTargetResourceId($n->getStringValue()); },
            'targetResourceLocation' => function (self $o, ParseNode $n) { $o->setTargetResourceLocation($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastActionDateTime property value. Time when the async operation was last updated.
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the operationType property value. Denotes which type of operation is being described.
     * @return TeamsAsyncOperationType|null
    */
    public function getOperationType(): ?TeamsAsyncOperationType {
        return $this->operationType;
    }

    /**
     * Gets the status property value. Operation status.
     * @return TeamsAsyncOperationStatus|null
    */
    public function getStatus(): ?TeamsAsyncOperationStatus {
        return $this->status;
    }

    /**
     * Gets the targetResourceId property value. The ID of the object that's created or modified as result of this async operation, typically a team.
     * @return string|null
    */
    public function getTargetResourceId(): ?string {
        return $this->targetResourceId;
    }

    /**
     * Gets the targetResourceLocation property value. The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths.
     * @return string|null
    */
    public function getTargetResourceLocation(): ?string {
        return $this->targetResourceLocation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('attemptsCount', $this->attemptsCount);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeEnumValue('operationType', $this->operationType);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('targetResourceId', $this->targetResourceId);
        $writer->writeStringValue('targetResourceLocation', $this->targetResourceLocation);
    }

    /**
     * Sets the attemptsCount property value. Number of times the operation was attempted before being marked successful or failed.
     *  @param int|null $value Value to set for the attemptsCount property.
    */
    public function setAttemptsCount(?int $value ): void {
        $this->attemptsCount = $value;
    }

    /**
     * Sets the createdDateTime property value. Time when the operation was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the error property value. Any error that causes the async operation to fail.
     *  @param OperationError|null $value Value to set for the error property.
    */
    public function setError(?OperationError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the lastActionDateTime property value. Time when the async operation was last updated.
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the operationType property value. Denotes which type of operation is being described.
     *  @param TeamsAsyncOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?TeamsAsyncOperationType $value ): void {
        $this->operationType = $value;
    }

    /**
     * Sets the status property value. Operation status.
     *  @param TeamsAsyncOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TeamsAsyncOperationStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the targetResourceId property value. The ID of the object that's created or modified as result of this async operation, typically a team.
     *  @param string|null $value Value to set for the targetResourceId property.
    */
    public function setTargetResourceId(?string $value ): void {
        $this->targetResourceId = $value;
    }

    /**
     * Sets the targetResourceLocation property value. The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths.
     *  @param string|null $value Value to set for the targetResourceLocation property.
    */
    public function setTargetResourceLocation(?string $value ): void {
        $this->targetResourceLocation = $value;
    }

}
