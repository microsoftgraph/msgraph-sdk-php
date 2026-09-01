<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SubjectSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SubjectSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectSummary {
        return new SubjectSummary();
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
     * Gets the failedSubjects property value. The number of subjects with at least one failed task in a subject summary.
     * @return int|null
    */
    public function getFailedSubjects(): ?int {
        $val = $this->getBackingStore()->get('failedSubjects');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedSubjects'");
    }

    /**
     * Gets the failedTasks property value. The number of failed tasks for subjects in a subject summary.
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
            'failedSubjects' => fn(ParseNode $n) => $o->setFailedSubjects($n->getIntegerValue()),
            'failedTasks' => fn(ParseNode $n) => $o->setFailedTasks($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successfulSubjects' => fn(ParseNode $n) => $o->setSuccessfulSubjects($n->getIntegerValue()),
            'totalSubjects' => fn(ParseNode $n) => $o->setTotalSubjects($n->getIntegerValue()),
            'totalTasks' => fn(ParseNode $n) => $o->setTotalTasks($n->getIntegerValue()),
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
     * Gets the successfulSubjects property value. The number of subjects where all tasks succeeded in a subject summary.
     * @return int|null
    */
    public function getSuccessfulSubjects(): ?int {
        $val = $this->getBackingStore()->get('successfulSubjects');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulSubjects'");
    }

    /**
     * Gets the totalSubjects property value. The total number of subjects in a subject summary.
     * @return int|null
    */
    public function getTotalSubjects(): ?int {
        $val = $this->getBackingStore()->get('totalSubjects');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalSubjects'");
    }

    /**
     * Gets the totalTasks property value. The total tasks of subjects in a subject summary.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedSubjects', $this->getFailedSubjects());
        $writer->writeIntegerValue('failedTasks', $this->getFailedTasks());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('successfulSubjects', $this->getSuccessfulSubjects());
        $writer->writeIntegerValue('totalSubjects', $this->getTotalSubjects());
        $writer->writeIntegerValue('totalTasks', $this->getTotalTasks());
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
     * Sets the failedSubjects property value. The number of subjects with at least one failed task in a subject summary.
     * @param int|null $value Value to set for the failedSubjects property.
    */
    public function setFailedSubjects(?int $value): void {
        $this->getBackingStore()->set('failedSubjects', $value);
    }

    /**
     * Sets the failedTasks property value. The number of failed tasks for subjects in a subject summary.
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
     * Sets the successfulSubjects property value. The number of subjects where all tasks succeeded in a subject summary.
     * @param int|null $value Value to set for the successfulSubjects property.
    */
    public function setSuccessfulSubjects(?int $value): void {
        $this->getBackingStore()->set('successfulSubjects', $value);
    }

    /**
     * Sets the totalSubjects property value. The total number of subjects in a subject summary.
     * @param int|null $value Value to set for the totalSubjects property.
    */
    public function setTotalSubjects(?int $value): void {
        $this->getBackingStore()->set('totalSubjects', $value);
    }

    /**
     * Sets the totalTasks property value. The total tasks of subjects in a subject summary.
     * @param int|null $value Value to set for the totalTasks property.
    */
    public function setTotalTasks(?int $value): void {
        $this->getBackingStore()->set('totalTasks', $value);
    }

}
