<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\Item\UpdateRequest;

use Microsoft\Graph\Generated\Models\EvaluationOutcome;
use Microsoft\Graph\Generated\Models\RequestSchedule;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateRequestPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateRequestPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateRequestPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateRequestPostRequestBody {
        return new UpdateRequestPostRequestBody();
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
     * Gets the evaluationId property value. The evaluationId property
     * @return string|null
    */
    public function getEvaluationId(): ?string {
        $val = $this->getBackingStore()->get('evaluationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluationId'");
    }

    /**
     * Gets the evaluationOutcome property value. The evaluationOutcome property
     * @return EvaluationOutcome|null
    */
    public function getEvaluationOutcome(): ?EvaluationOutcome {
        $val = $this->getBackingStore()->get('evaluationOutcome');
        if (is_null($val) || $val instanceof EvaluationOutcome) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluationOutcome'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'evaluationId' => fn(ParseNode $n) => $o->setEvaluationId($n->getStringValue()),
            'evaluationOutcome' => fn(ParseNode $n) => $o->setEvaluationOutcome($n->getEnumValue(EvaluationOutcome::class)),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'scheduleInfo' => fn(ParseNode $n) => $o->setScheduleInfo($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the scheduleInfo property value. The scheduleInfo property
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        $val = $this->getBackingStore()->get('scheduleInfo');
        if (is_null($val) || $val instanceof RequestSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduleInfo'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('evaluationId', $this->getEvaluationId());
        $writer->writeEnumValue('evaluationOutcome', $this->getEvaluationOutcome());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeObjectValue('scheduleInfo', $this->getScheduleInfo());
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
     * Sets the evaluationId property value. The evaluationId property
     * @param string|null $value Value to set for the evaluationId property.
    */
    public function setEvaluationId(?string $value): void {
        $this->getBackingStore()->set('evaluationId', $value);
    }

    /**
     * Sets the evaluationOutcome property value. The evaluationOutcome property
     * @param EvaluationOutcome|null $value Value to set for the evaluationOutcome property.
    */
    public function setEvaluationOutcome(?EvaluationOutcome $value): void {
        $this->getBackingStore()->set('evaluationOutcome', $value);
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the scheduleInfo property value. The scheduleInfo property
     * @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value): void {
        $this->getBackingStore()->set('scheduleInfo', $value);
    }

}
