<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CrossTenantMigrationServiceStatusDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CrossTenantMigrationServiceStatusDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantMigrationServiceStatusDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantMigrationServiceStatusDetails {
        return new CrossTenantMigrationServiceStatusDetails();
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
     * Gets the errors property value. Errors associated with the migration for this service.
     * @return array<Error>|null
    */
    public function getErrors(): ?array {
        $val = $this->getBackingStore()->get('errors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Error::class);
            /** @var array<Error>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CrossTenantMigrationServiceStatus::class)),
        ];
    }

    /**
     * Gets the message property value. Service status message.
     * @return string|null
    */
    public function getMessage(): ?string {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
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
     * Gets the service property value. Service or workload associated with the status details.
     * @return string|null
    */
    public function getService(): ?string {
        $val = $this->getBackingStore()->get('service');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'service'");
    }

    /**
     * Gets the status property value. The status property
     * @return CrossTenantMigrationServiceStatus|null
    */
    public function getStatus(): ?CrossTenantMigrationServiceStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CrossTenantMigrationServiceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('service', $this->getService());
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
     * Sets the errors property value. Errors associated with the migration for this service.
     * @param array<Error>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->getBackingStore()->set('errors', $value);
    }

    /**
     * Sets the message property value. Service status message.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the service property value. Service or workload associated with the status details.
     * @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->getBackingStore()->set('service', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CrossTenantMigrationServiceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CrossTenantMigrationServiceStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
