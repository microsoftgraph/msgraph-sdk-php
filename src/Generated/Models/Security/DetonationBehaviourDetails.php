<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DetonationBehaviourDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DetonationBehaviourDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DetonationBehaviourDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DetonationBehaviourDetails {
        return new DetonationBehaviourDetails();
    }

    /**
     * Gets the actionStatus property value. The status of the action performed during detonation (e.g., 'Successful', 'Failed', 'Blocked').
     * @return string|null
    */
    public function getActionStatus(): ?string {
        $val = $this->getBackingStore()->get('actionStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionStatus'");
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
     * Gets the behaviourCapability property value. Categorizes the capability or type of behavior observed.
     * @return string|null
    */
    public function getBehaviourCapability(): ?string {
        $val = $this->getBackingStore()->get('behaviourCapability');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'behaviourCapability'");
    }

    /**
     * Gets the behaviourGroup property value. Groups related behaviors together for classification purposes.
     * @return string|null
    */
    public function getBehaviourGroup(): ?string {
        $val = $this->getBackingStore()->get('behaviourGroup');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'behaviourGroup'");
    }

    /**
     * Gets the details property value. More contextual information about the observed behavior or action.
     * @return string|null
    */
    public function getDetails(): ?string {
        $val = $this->getBackingStore()->get('details');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * Gets the eventDateTime property value. The date and time when the behavior or action was observed during detonation.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionStatus' => fn(ParseNode $n) => $o->setActionStatus($n->getStringValue()),
            'behaviourCapability' => fn(ParseNode $n) => $o->setBehaviourCapability($n->getStringValue()),
            'behaviourGroup' => fn(ParseNode $n) => $o->setBehaviourGroup($n->getStringValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getStringValue()),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operation' => fn(ParseNode $n) => $o->setOperation($n->getStringValue()),
            'processId' => fn(ParseNode $n) => $o->setProcessId($n->getStringValue()),
            'processName' => fn(ParseNode $n) => $o->setProcessName($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getStringValue()),
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
     * Gets the operation property value. The specific operation or action that was performed.
     * @return string|null
    */
    public function getOperation(): ?string {
        $val = $this->getBackingStore()->get('operation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operation'");
    }

    /**
     * Gets the processId property value. The unique identifier of the process involved in the behavior.
     * @return string|null
    */
    public function getProcessId(): ?string {
        $val = $this->getBackingStore()->get('processId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processId'");
    }

    /**
     * Gets the processName property value. The name of the process that performed or was involved in the behavior.
     * @return string|null
    */
    public function getProcessName(): ?string {
        $val = $this->getBackingStore()->get('processName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processName'");
    }

    /**
     * Gets the target property value. The target of the operation.
     * @return string|null
    */
    public function getTarget(): ?string {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'target'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionStatus', $this->getActionStatus());
        $writer->writeStringValue('behaviourCapability', $this->getBehaviourCapability());
        $writer->writeStringValue('behaviourGroup', $this->getBehaviourGroup());
        $writer->writeStringValue('details', $this->getDetails());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operation', $this->getOperation());
        $writer->writeStringValue('processId', $this->getProcessId());
        $writer->writeStringValue('processName', $this->getProcessName());
        $writer->writeStringValue('target', $this->getTarget());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionStatus property value. The status of the action performed during detonation (e.g., 'Successful', 'Failed', 'Blocked').
     * @param string|null $value Value to set for the actionStatus property.
    */
    public function setActionStatus(?string $value): void {
        $this->getBackingStore()->set('actionStatus', $value);
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
     * Sets the behaviourCapability property value. Categorizes the capability or type of behavior observed.
     * @param string|null $value Value to set for the behaviourCapability property.
    */
    public function setBehaviourCapability(?string $value): void {
        $this->getBackingStore()->set('behaviourCapability', $value);
    }

    /**
     * Sets the behaviourGroup property value. Groups related behaviors together for classification purposes.
     * @param string|null $value Value to set for the behaviourGroup property.
    */
    public function setBehaviourGroup(?string $value): void {
        $this->getBackingStore()->set('behaviourGroup', $value);
    }

    /**
     * Sets the details property value. More contextual information about the observed behavior or action.
     * @param string|null $value Value to set for the details property.
    */
    public function setDetails(?string $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the eventDateTime property value. The date and time when the behavior or action was observed during detonation.
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operation property value. The specific operation or action that was performed.
     * @param string|null $value Value to set for the operation property.
    */
    public function setOperation(?string $value): void {
        $this->getBackingStore()->set('operation', $value);
    }

    /**
     * Sets the processId property value. The unique identifier of the process involved in the behavior.
     * @param string|null $value Value to set for the processId property.
    */
    public function setProcessId(?string $value): void {
        $this->getBackingStore()->set('processId', $value);
    }

    /**
     * Sets the processName property value. The name of the process that performed or was involved in the behavior.
     * @param string|null $value Value to set for the processName property.
    */
    public function setProcessName(?string $value): void {
        $this->getBackingStore()->set('processName', $value);
    }

    /**
     * Sets the target property value. The target of the operation.
     * @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
