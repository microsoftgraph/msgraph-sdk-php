<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TaskReportSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new taskReportSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskReportSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskReportSummary {
        return new TaskReportSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the failedTasks property value. The number of failed tasks in a report.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedTasks' => fn(ParseNode $n) => $o->setFailedTasks($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successfulTasks' => fn(ParseNode $n) => $o->setSuccessfulTasks($n->getIntegerValue()),
            'totalTasks' => fn(ParseNode $n) => $o->setTotalTasks($n->getIntegerValue()),
            'unprocessedTasks' => fn(ParseNode $n) => $o->setUnprocessedTasks($n->getIntegerValue()),
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
     * Gets the successfulTasks property value. The total number of successful tasks in a report.
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
     * Gets the totalTasks property value. The total number of tasks in a report.
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
     * Gets the unprocessedTasks property value. The number of unprocessed tasks in a report.
     * @return int|null
    */
    public function getUnprocessedTasks(): ?int {
        $val = $this->getBackingStore()->get('unprocessedTasks');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unprocessedTasks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedTasks', $this->getFailedTasks());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('successfulTasks', $this->getSuccessfulTasks());
        $writer->writeIntegerValue('totalTasks', $this->getTotalTasks());
        $writer->writeIntegerValue('unprocessedTasks', $this->getUnprocessedTasks());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the failedTasks property value. The number of failed tasks in a report.
     * @param int|null $value Value to set for the failedTasks property.
    */
    public function setFailedTasks(?int $value): void {
        $this->getBackingStore()->set('failedTasks', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the successfulTasks property value. The total number of successful tasks in a report.
     * @param int|null $value Value to set for the successfulTasks property.
    */
    public function setSuccessfulTasks(?int $value): void {
        $this->getBackingStore()->set('successfulTasks', $value);
    }

    /**
     * Sets the totalTasks property value. The total number of tasks in a report.
     * @param int|null $value Value to set for the totalTasks property.
    */
    public function setTotalTasks(?int $value): void {
        $this->getBackingStore()->set('totalTasks', $value);
    }

    /**
     * Sets the unprocessedTasks property value. The number of unprocessed tasks in a report.
     * @param int|null $value Value to set for the unprocessedTasks property.
    */
    public function setUnprocessedTasks(?int $value): void {
        $this->getBackingStore()->set('unprocessedTasks', $value);
    }

}
