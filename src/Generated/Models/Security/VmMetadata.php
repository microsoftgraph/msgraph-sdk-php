<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class VmMetadata implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new vmMetadata and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VmMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VmMetadata {
        return new VmMetadata();
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
     * Gets the cloudProvider property value. The cloudProvider property
     * @return VmCloudProvider|null
    */
    public function getCloudProvider(): ?VmCloudProvider {
        return $this->getBackingStore()->get('cloudProvider');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cloudProvider' => fn(ParseNode $n) => $o->setCloudProvider($n->getEnumValue(VmCloudProvider::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'vmId' => fn(ParseNode $n) => $o->setVmId($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the resourceId property value. Unique identifier of the Azure resource.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->getBackingStore()->get('resourceId');
    }

    /**
     * Gets the subscriptionId property value. Unique identifier of the Azure subscription the customer tenant belongs to.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->getBackingStore()->get('subscriptionId');
    }

    /**
     * Gets the vmId property value. Unique identifier of the virtual machine instance.
     * @return string|null
    */
    public function getVmId(): ?string {
        return $this->getBackingStore()->get('vmId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('cloudProvider', $this->getCloudProvider());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('vmId', $this->getVmId());
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
     * Sets the cloudProvider property value. The cloudProvider property
     * @param VmCloudProvider|null $value Value to set for the cloudProvider property.
    */
    public function setCloudProvider(?VmCloudProvider $value): void {
        $this->getBackingStore()->set('cloudProvider', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceId property value. Unique identifier of the Azure resource.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the subscriptionId property value. Unique identifier of the Azure subscription the customer tenant belongs to.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the vmId property value. Unique identifier of the virtual machine instance.
     * @param string|null $value Value to set for the vmId property.
    */
    public function setVmId(?string $value): void {
        $this->getBackingStore()->set('vmId', $value);
    }

}
