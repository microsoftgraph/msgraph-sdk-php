<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CustomExtensionCalloutInstance implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CustomExtensionCalloutInstance and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomExtensionCalloutInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomExtensionCalloutInstance {
        return new CustomExtensionCalloutInstance();
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
     * Gets the customExtensionId property value. Identification of the custom extension that was triggered at this instance.
     * @return string|null
    */
    public function getCustomExtensionId(): ?string {
        $val = $this->getBackingStore()->get('customExtensionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionId'");
    }

    /**
     * Gets the detail property value. Details provided by the logic app during the callback of the request instance.
     * @return string|null
    */
    public function getDetail(): ?string {
        $val = $this->getBackingStore()->get('detail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detail'");
    }

    /**
     * Gets the externalCorrelationId property value. The unique run identifier for the logic app.
     * @return string|null
    */
    public function getExternalCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('externalCorrelationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalCorrelationId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customExtensionId' => fn(ParseNode $n) => $o->setCustomExtensionId($n->getStringValue()),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getStringValue()),
            'externalCorrelationId' => fn(ParseNode $n) => $o->setExternalCorrelationId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CustomExtensionCalloutInstanceStatus::class)),
        ];
    }

    /**
     * Gets the id property value. Unique identifier for the callout instance. Read-only.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
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
     * Gets the status property value. The status of the request to the custom extension. The possible values are: calloutSent, callbackReceived, calloutFailed, callbackTimedOut, waitingForCallback, unknownFutureValue.
     * @return CustomExtensionCalloutInstanceStatus|null
    */
    public function getStatus(): ?CustomExtensionCalloutInstanceStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CustomExtensionCalloutInstanceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('customExtensionId', $this->getCustomExtensionId());
        $writer->writeStringValue('detail', $this->getDetail());
        $writer->writeStringValue('externalCorrelationId', $this->getExternalCorrelationId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the customExtensionId property value. Identification of the custom extension that was triggered at this instance.
     * @param string|null $value Value to set for the customExtensionId property.
    */
    public function setCustomExtensionId(?string $value): void {
        $this->getBackingStore()->set('customExtensionId', $value);
    }

    /**
     * Sets the detail property value. Details provided by the logic app during the callback of the request instance.
     * @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value): void {
        $this->getBackingStore()->set('detail', $value);
    }

    /**
     * Sets the externalCorrelationId property value. The unique run identifier for the logic app.
     * @param string|null $value Value to set for the externalCorrelationId property.
    */
    public function setExternalCorrelationId(?string $value): void {
        $this->getBackingStore()->set('externalCorrelationId', $value);
    }

    /**
     * Sets the id property value. Unique identifier for the callout instance. Read-only.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. The status of the request to the custom extension. The possible values are: calloutSent, callbackReceived, calloutFailed, callbackTimedOut, waitingForCallback, unknownFutureValue.
     * @param CustomExtensionCalloutInstanceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CustomExtensionCalloutInstanceStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
