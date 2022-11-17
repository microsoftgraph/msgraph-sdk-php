<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAsyncOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamsAsyncOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamsAsyncOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAsyncOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAsyncOperation {
        return new TeamsAsyncOperation();
    }

    /**
     * Gets the attemptsCount property value. Number of times the operation was attempted before being marked successful or failed.
     * @return int|null
    */
    public function getAttemptsCount(): ?int {
        return $this->getBackingStore()->get('attemptsCount');
    }

    /**
     * Gets the createdDateTime property value. Time when the operation was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the error property value. Any error that causes the async operation to fail.
     * @return OperationError|null
    */
    public function getError(): ?OperationError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attemptsCount' => fn(ParseNode $n) => $o->setAttemptsCount($n->getIntegerValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([OperationError::class, 'createFromDiscriminatorValue'])),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getEnumValue(TeamsAsyncOperationType::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(TeamsAsyncOperationStatus::class)),
            'targetResourceId' => fn(ParseNode $n) => $o->setTargetResourceId($n->getStringValue()),
            'targetResourceLocation' => fn(ParseNode $n) => $o->setTargetResourceLocation($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastActionDateTime property value. Time when the async operation was last updated.
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastActionDateTime');
    }

    /**
     * Gets the operationType property value. The operationType property
     * @return TeamsAsyncOperationType|null
    */
    public function getOperationType(): ?TeamsAsyncOperationType {
        return $this->getBackingStore()->get('operationType');
    }

    /**
     * Gets the status property value. The status property
     * @return TeamsAsyncOperationStatus|null
    */
    public function getStatus(): ?TeamsAsyncOperationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the targetResourceId property value. The ID of the object that's created or modified as result of this async operation, typically a team.
     * @return string|null
    */
    public function getTargetResourceId(): ?string {
        return $this->getBackingStore()->get('targetResourceId');
    }

    /**
     * Gets the targetResourceLocation property value. The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths.
     * @return string|null
    */
    public function getTargetResourceLocation(): ?string {
        return $this->getBackingStore()->get('targetResourceLocation');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('attemptsCount', $this->getAttemptsCount());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeEnumValue('operationType', $this->getOperationType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('targetResourceId', $this->getTargetResourceId());
        $writer->writeStringValue('targetResourceLocation', $this->getTargetResourceLocation());
    }

    /**
     * Sets the attemptsCount property value. Number of times the operation was attempted before being marked successful or failed.
     *  @param int|null $value Value to set for the attemptsCount property.
    */
    public function setAttemptsCount(?int $value): void {
        $this->getBackingStore()->set('attemptsCount', $value);
    }

    /**
     * Sets the createdDateTime property value. Time when the operation was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the error property value. Any error that causes the async operation to fail.
     *  @param OperationError|null $value Value to set for the error property.
    */
    public function setError(?OperationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the lastActionDateTime property value. Time when the async operation was last updated.
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the operationType property value. The operationType property
     *  @param TeamsAsyncOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?TeamsAsyncOperationType $value): void {
        $this->getBackingStore()->set('operationType', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param TeamsAsyncOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TeamsAsyncOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the targetResourceId property value. The ID of the object that's created or modified as result of this async operation, typically a team.
     *  @param string|null $value Value to set for the targetResourceId property.
    */
    public function setTargetResourceId(?string $value): void {
        $this->getBackingStore()->set('targetResourceId', $value);
    }

    /**
     * Sets the targetResourceLocation property value. The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths.
     *  @param string|null $value Value to set for the targetResourceLocation property.
    */
    public function setTargetResourceLocation(?string $value): void {
        $this->getBackingStore()->set('targetResourceLocation', $value);
    }

}
