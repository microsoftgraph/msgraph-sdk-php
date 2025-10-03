<?php

namespace Microsoft\\Graph\\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TopWorkflowsInsightsSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TopWorkflowsInsightsSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TopWorkflowsInsightsSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TopWorkflowsInsightsSummary {
        return new TopWorkflowsInsightsSummary();
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
     * Gets the failedRuns property value. Count of failed runs for workflow.
     * @return int|null
    */
    public function getFailedRuns(): ?int {
        $val = $this->getBackingStore()->get('failedRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedRuns'");
    }

    /**
     * Gets the failedUsers property value. Count of failed users who were processed.
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
            'failedRuns' => fn(ParseNode $n) => $o->setFailedRuns($n->getIntegerValue()),
            'failedUsers' => fn(ParseNode $n) => $o->setFailedUsers($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successfulRuns' => fn(ParseNode $n) => $o->setSuccessfulRuns($n->getIntegerValue()),
            'successfulUsers' => fn(ParseNode $n) => $o->setSuccessfulUsers($n->getIntegerValue()),
            'totalRuns' => fn(ParseNode $n) => $o->setTotalRuns($n->getIntegerValue()),
            'totalUsers' => fn(ParseNode $n) => $o->setTotalUsers($n->getIntegerValue()),
            'workflowCategory' => fn(ParseNode $n) => $o->setWorkflowCategory($n->getEnumValue(LifecycleWorkflowCategory::class)),
            'workflowDisplayName' => fn(ParseNode $n) => $o->setWorkflowDisplayName($n->getStringValue()),
            'workflowId' => fn(ParseNode $n) => $o->setWorkflowId($n->getStringValue()),
            'workflowVersion' => fn(ParseNode $n) => $o->setWorkflowVersion($n->getIntegerValue()),
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
     * Gets the successfulRuns property value. Count of successful runs of the workflow.
     * @return int|null
    */
    public function getSuccessfulRuns(): ?int {
        $val = $this->getBackingStore()->get('successfulRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulRuns'");
    }

    /**
     * Gets the successfulUsers property value. Count of successful users processed by the workflow.
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
     * Gets the totalRuns property value. Count of total runs of workflow.
     * @return int|null
    */
    public function getTotalRuns(): ?int {
        $val = $this->getBackingStore()->get('totalRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalRuns'");
    }

    /**
     * Gets the totalUsers property value. Total number of users processed by the workflow.
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
     * Gets the workflowCategory property value. The workflowCategory property
     * @return LifecycleWorkflowCategory|null
    */
    public function getWorkflowCategory(): ?LifecycleWorkflowCategory {
        $val = $this->getBackingStore()->get('workflowCategory');
        if (is_null($val) || $val instanceof LifecycleWorkflowCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflowCategory'");
    }

    /**
     * Gets the workflowDisplayName property value. The name of the workflow.
     * @return string|null
    */
    public function getWorkflowDisplayName(): ?string {
        $val = $this->getBackingStore()->get('workflowDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflowDisplayName'");
    }

    /**
     * Gets the workflowId property value. The workflow ID.
     * @return string|null
    */
    public function getWorkflowId(): ?string {
        $val = $this->getBackingStore()->get('workflowId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflowId'");
    }

    /**
     * Gets the workflowVersion property value. The version of the workflow that was a top workflow ran.
     * @return int|null
    */
    public function getWorkflowVersion(): ?int {
        $val = $this->getBackingStore()->get('workflowVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflowVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedRuns', $this->getFailedRuns());
        $writer->writeIntegerValue('failedUsers', $this->getFailedUsers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('successfulRuns', $this->getSuccessfulRuns());
        $writer->writeIntegerValue('successfulUsers', $this->getSuccessfulUsers());
        $writer->writeIntegerValue('totalRuns', $this->getTotalRuns());
        $writer->writeIntegerValue('totalUsers', $this->getTotalUsers());
        $writer->writeEnumValue('workflowCategory', $this->getWorkflowCategory());
        $writer->writeStringValue('workflowDisplayName', $this->getWorkflowDisplayName());
        $writer->writeStringValue('workflowId', $this->getWorkflowId());
        $writer->writeIntegerValue('workflowVersion', $this->getWorkflowVersion());
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
     * Sets the failedRuns property value. Count of failed runs for workflow.
     * @param int|null $value Value to set for the failedRuns property.
    */
    public function setFailedRuns(?int $value): void {
        $this->getBackingStore()->set('failedRuns', $value);
    }

    /**
     * Sets the failedUsers property value. Count of failed users who were processed.
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
     * Sets the successfulRuns property value. Count of successful runs of the workflow.
     * @param int|null $value Value to set for the successfulRuns property.
    */
    public function setSuccessfulRuns(?int $value): void {
        $this->getBackingStore()->set('successfulRuns', $value);
    }

    /**
     * Sets the successfulUsers property value. Count of successful users processed by the workflow.
     * @param int|null $value Value to set for the successfulUsers property.
    */
    public function setSuccessfulUsers(?int $value): void {
        $this->getBackingStore()->set('successfulUsers', $value);
    }

    /**
     * Sets the totalRuns property value. Count of total runs of workflow.
     * @param int|null $value Value to set for the totalRuns property.
    */
    public function setTotalRuns(?int $value): void {
        $this->getBackingStore()->set('totalRuns', $value);
    }

    /**
     * Sets the totalUsers property value. Total number of users processed by the workflow.
     * @param int|null $value Value to set for the totalUsers property.
    */
    public function setTotalUsers(?int $value): void {
        $this->getBackingStore()->set('totalUsers', $value);
    }

    /**
     * Sets the workflowCategory property value. The workflowCategory property
     * @param LifecycleWorkflowCategory|null $value Value to set for the workflowCategory property.
    */
    public function setWorkflowCategory(?LifecycleWorkflowCategory $value): void {
        $this->getBackingStore()->set('workflowCategory', $value);
    }

    /**
     * Sets the workflowDisplayName property value. The name of the workflow.
     * @param string|null $value Value to set for the workflowDisplayName property.
    */
    public function setWorkflowDisplayName(?string $value): void {
        $this->getBackingStore()->set('workflowDisplayName', $value);
    }

    /**
     * Sets the workflowId property value. The workflow ID.
     * @param string|null $value Value to set for the workflowId property.
    */
    public function setWorkflowId(?string $value): void {
        $this->getBackingStore()->set('workflowId', $value);
    }

    /**
     * Sets the workflowVersion property value. The version of the workflow that was a top workflow ran.
     * @param int|null $value Value to set for the workflowVersion property.
    */
    public function setWorkflowVersion(?int $value): void {
        $this->getBackingStore()->set('workflowVersion', $value);
    }

}
