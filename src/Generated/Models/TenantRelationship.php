<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the delegatedAdminCustomers property value. 
     * @return array<DelegatedAdminCustomer>|null
    */
    public function getDelegatedAdminCustomers(): ?array {
        return $this->getBackingStore()->get('delegatedAdminCustomers');
    }

    /**
     * Gets the delegatedAdminRelationships property value. 
     * @return array<DelegatedAdminRelationship>|null
    */
    public function getDelegatedAdminRelationships(): ?array {
        return $this->getBackingStore()->get('delegatedAdminRelationships');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
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
     * Sets the delegatedAdminCustomers property value. 
     * @param array<DelegatedAdminCustomer>|null $value Value to set for the delegatedAdminCustomers property.
    */
    public function setDelegatedAdminCustomers(?array $value): void {
        $this->getBackingStore()->set('delegatedAdminCustomers', $value);
    }

    /**
     * Sets the delegatedAdminRelationships property value. 
     * @param array<DelegatedAdminRelationship>|null $value Value to set for the delegatedAdminRelationships property.
    */
    public function setDelegatedAdminRelationships(?array $value): void {
        $this->getBackingStore()->set('delegatedAdminRelationships', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
