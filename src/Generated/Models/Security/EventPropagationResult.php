<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EventPropagationResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EventPropagationResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventPropagationResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventPropagationResult {
        return new EventPropagationResult();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'serviceName' => fn(ParseNode $n) => $o->setServiceName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(EventPropagationStatus::class)),
            'statusInformation' => fn(ParseNode $n) => $o->setStatusInformation($n->getStringValue()),
        ];
    }

    /**
     * Gets the location property value. The name of the specific location in the workload associated with the event.
     * @return string|null
    */
    public function getLocation(): ?string {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
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
     * Gets the serviceName property value. The name of the workload associated with the event.
     * @return string|null
    */
    public function getServiceName(): ?string {
        $val = $this->getBackingStore()->get('serviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceName'");
    }

    /**
     * Gets the status property value. Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success, unknownFutureValue.
     * @return EventPropagationStatus|null
    */
    public function getStatus(): ?EventPropagationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof EventPropagationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the statusInformation property value. Additional information about the status of the event creation request.
     * @return string|null
    */
    public function getStatusInformation(): ?string {
        $val = $this->getBackingStore()->get('statusInformation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusInformation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('serviceName', $this->getServiceName());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusInformation', $this->getStatusInformation());
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
     * Sets the location property value. The name of the specific location in the workload associated with the event.
     * @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the serviceName property value. The name of the workload associated with the event.
     * @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value): void {
        $this->getBackingStore()->set('serviceName', $value);
    }

    /**
     * Sets the status property value. Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success, unknownFutureValue.
     * @param EventPropagationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?EventPropagationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusInformation property value. Additional information about the status of the event creation request.
     * @param string|null $value Value to set for the statusInformation property.
    */
    public function setStatusInformation(?string $value): void {
        $this->getBackingStore()->set('statusInformation', $value);
    }

}
