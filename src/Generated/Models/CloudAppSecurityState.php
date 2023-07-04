<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudAppSecurityState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cloudAppSecurityState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudAppSecurityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudAppSecurityState {
        return new CloudAppSecurityState();
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
     * Gets the destinationServiceIp property value. Destination IP Address of the connection to the cloud application/service.
     * @return string|null
    */
    public function getDestinationServiceIp(): ?string {
        $val = $this->getBackingStore()->get('destinationServiceIp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationServiceIp'");
    }

    /**
     * Gets the destinationServiceName property value. Cloud application/service name (for example 'Salesforce', 'DropBox', etc.).
     * @return string|null
    */
    public function getDestinationServiceName(): ?string {
        $val = $this->getBackingStore()->get('destinationServiceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationServiceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'destinationServiceIp' => fn(ParseNode $n) => $o->setDestinationServiceIp($n->getStringValue()),
            'destinationServiceName' => fn(ParseNode $n) => $o->setDestinationServiceName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getStringValue()),
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
     * Gets the riskScore property value. Provider-generated/calculated risk score of the Cloud Application/Service. Recommended value range of 0-1, which equates to a percentage.
     * @return string|null
    */
    public function getRiskScore(): ?string {
        $val = $this->getBackingStore()->get('riskScore');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskScore'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('destinationServiceIp', $this->getDestinationServiceIp());
        $writer->writeStringValue('destinationServiceName', $this->getDestinationServiceName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('riskScore', $this->getRiskScore());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the destinationServiceIp property value. Destination IP Address of the connection to the cloud application/service.
     * @param string|null $value Value to set for the destinationServiceIp property.
    */
    public function setDestinationServiceIp(?string $value): void {
        $this->getBackingStore()->set('destinationServiceIp', $value);
    }

    /**
     * Sets the destinationServiceName property value. Cloud application/service name (for example 'Salesforce', 'DropBox', etc.).
     * @param string|null $value Value to set for the destinationServiceName property.
    */
    public function setDestinationServiceName(?string $value): void {
        $this->getBackingStore()->set('destinationServiceName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the riskScore property value. Provider-generated/calculated risk score of the Cloud Application/Service. Recommended value range of 0-1, which equates to a percentage.
     * @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

}
