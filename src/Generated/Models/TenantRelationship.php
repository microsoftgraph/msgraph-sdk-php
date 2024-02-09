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

class TenantRelationship implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TenantRelationship and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantRelationship
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantRelationship {
        return new TenantRelationship();
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
     * Gets the delegatedAdminCustomers property value. The customer who has a delegated admin relationship with a Microsoft partner.
     * @return array<DelegatedAdminCustomer>|null
    */
    public function getDelegatedAdminCustomers(): ?array {
        $val = $this->getBackingStore()->get('delegatedAdminCustomers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegatedAdminCustomer::class);
            /** @var array<DelegatedAdminCustomer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegatedAdminCustomers'");
    }

    /**
     * Gets the delegatedAdminRelationships property value. The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant.
     * @return array<DelegatedAdminRelationship>|null
    */
    public function getDelegatedAdminRelationships(): ?array {
        $val = $this->getBackingStore()->get('delegatedAdminRelationships');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegatedAdminRelationship::class);
            /** @var array<DelegatedAdminRelationship>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegatedAdminRelationships'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'delegatedAdminCustomers' => fn(ParseNode $n) => $o->setDelegatedAdminCustomers($n->getCollectionOfObjectValues([DelegatedAdminCustomer::class, 'createFromDiscriminatorValue'])),
            'delegatedAdminRelationships' => fn(ParseNode $n) => $o->setDelegatedAdminRelationships($n->getCollectionOfObjectValues([DelegatedAdminRelationship::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('delegatedAdminCustomers', $this->getDelegatedAdminCustomers());
        $writer->writeCollectionOfObjectValues('delegatedAdminRelationships', $this->getDelegatedAdminRelationships());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the delegatedAdminCustomers property value. The customer who has a delegated admin relationship with a Microsoft partner.
     * @param array<DelegatedAdminCustomer>|null $value Value to set for the delegatedAdminCustomers property.
    */
    public function setDelegatedAdminCustomers(?array $value): void {
        $this->getBackingStore()->set('delegatedAdminCustomers', $value);
    }

    /**
     * Sets the delegatedAdminRelationships property value. The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant.
     * @param array<DelegatedAdminRelationship>|null $value Value to set for the delegatedAdminRelationships property.
    */
    public function setDelegatedAdminRelationships(?array $value): void {
        $this->getBackingStore()->set('delegatedAdminRelationships', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
