<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TopTasksInsightsSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TopTasksInsightsSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TopTasksInsightsSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TopTasksInsightsSummary {
        return new TopTasksInsightsSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the failedTasks property value. Count of failed runs of the task.
     * @return int|null
    */
    public function getFailedTasks(): ?int {
        $val = $this->getBackingStore()->get('failedTasks');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedTasks'");
    }

    /**
     * Gets the failedUsers property value. Count of failed users who were processed by the task.
     * @return int|null
    */
    public function getFailedUsers(): ?int {
        $val = $this->getBackingStore()->get('failedUsers');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedUsers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedTasks' => fn(ParseNode $n) => $o->setFailedTasks($n->getIntegerValue()),
            'failedUsers' => fn(ParseNode $n) => $o->setFailedUsers($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successfulTasks' => fn(ParseNode $n) => $o->setSuccessfulTasks($n->getIntegerValue()),
            'successfulUsers' => fn(ParseNode $n) => $o->setSuccessfulUsers($n->getIntegerValue()),
            'taskDefinitionDisplayName' => fn(ParseNode $n) => $o->setTaskDefinitionDisplayName($n->getStringValue()),
            'taskDefinitionId' => fn(ParseNode $n) => $o->setTaskDefinitionId($n->getStringValue()),
            'totalTasks' => fn(ParseNode $n) => $o->setTotalTasks($n->getIntegerValue()),
            'totalUsers' => fn(ParseNode $n) => $o->setTotalUsers($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the successfulTasks property value. Count of successful runs of the task.
     * @return int|null
    */
    public function getSuccessfulTasks(): ?int {
        $val = $this->getBackingStore()->get('successfulTasks');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulTasks'");
    }

    /**
     * Gets the successfulUsers property value. Count of successful users processed by the task.
     * @return int|null
    */
    public function getSuccessfulUsers(): ?int {
        $val = $this->getBackingStore()->get('successfulUsers');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulUsers'");
    }

    /**
     * Gets the taskDefinitionDisplayName property value. The name of the task.
     * @return string|null
    */
    public function getTaskDefinitionDisplayName(): ?string {
        $val = $this->getBackingStore()->get('taskDefinitionDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskDefinitionDisplayName'");
    }

    /**
     * Gets the taskDefinitionId property value. The task ID.
     * @return string|null
    */
    public function getTaskDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('taskDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskDefinitionId'");
    }

    /**
     * Gets the totalTasks property value. Count of total runs of the task.
     * @return int|null
    */
    public function getTotalTasks(): ?int {
        $val = $this->getBackingStore()->get('totalTasks');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalTasks'");
    }

    /**
     * Gets the totalUsers property value. Count of total users processed by the task.
     * @return int|null
    */
    public function getTotalUsers(): ?int {
        $val = $this->getBackingStore()->get('totalUsers');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalUsers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedTasks', $this->getFailedTasks());
        $writer->writeIntegerValue('failedUsers', $this->getFailedUsers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('successfulTasks', $this->getSuccessfulTasks());
        $writer->writeIntegerValue('successfulUsers', $this->getSuccessfulUsers());
        $writer->writeStringValue('taskDefinitionDisplayName', $this->getTaskDefinitionDisplayName());
        $writer->writeStringValue('taskDefinitionId', $this->getTaskDefinitionId());
        $writer->writeIntegerValue('totalTasks', $this->getTotalTasks());
        $writer->writeIntegerValue('totalUsers', $this->getTotalUsers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the failedTasks property value. Count of failed runs of the task.
     * @param int|null $value Value to set for the failedTasks property.
    */
    public function setFailedTasks(?int $value): void {
        $this->getBackingStore()->set('failedTasks', $value);
    }

    /**
     * Sets the failedUsers property value. Count of failed users who were processed by the task.
     * @param int|null $value Value to set for the failedUsers property.
    */
    public function setFailedUsers(?int $value): void {
        $this->getBackingStore()->set('failedUsers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the successfulTasks property value. Count of successful runs of the task.
     * @param int|null $value Value to set for the successfulTasks property.
    */
    public function setSuccessfulTasks(?int $value): void {
        $this->getBackingStore()->set('successfulTasks', $value);
    }

    /**
     * Sets the successfulUsers property value. Count of successful users processed by the task.
     * @param int|null $value Value to set for the successfulUsers property.
    */
    public function setSuccessfulUsers(?int $value): void {
        $this->getBackingStore()->set('successfulUsers', $value);
    }

    /**
     * Sets the taskDefinitionDisplayName property value. The name of the task.
     * @param string|null $value Value to set for the taskDefinitionDisplayName property.
    */
    public function setTaskDefinitionDisplayName(?string $value): void {
        $this->getBackingStore()->set('taskDefinitionDisplayName', $value);
    }

    /**
     * Sets the taskDefinitionId property value. The task ID.
     * @param string|null $value Value to set for the taskDefinitionId property.
    */
    public function setTaskDefinitionId(?string $value): void {
        $this->getBackingStore()->set('taskDefinitionId', $value);
    }

    /**
     * Sets the totalTasks property value. Count of total runs of the task.
     * @param int|null $value Value to set for the totalTasks property.
    */
    public function setTotalTasks(?int $value): void {
        $this->getBackingStore()->set('totalTasks', $value);
    }

    /**
     * Sets the totalUsers property value. Count of total users processed by the task.
     * @param int|null $value Value to set for the totalUsers property.
    */
    public function setTotalUsers(?int $value): void {
        $this->getBackingStore()->set('totalUsers', $value);
    }

}
