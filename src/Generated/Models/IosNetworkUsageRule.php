<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Network Usage Rules allow enterprises to specify how managed apps use networks, such as cellular data networks.
*/
class IosNetworkUsageRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new iosNetworkUsageRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosNetworkUsageRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosNetworkUsageRule {
        return new IosNetworkUsageRule();
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
     * Gets the cellularDataBlocked property value. If set to true, corresponding managed apps will not be allowed to use cellular data at any time.
     * @return bool|null
    */
    public function getCellularDataBlocked(): ?bool {
        return $this->getBackingStore()->get('cellularDataBlocked');
    }

    /**
     * Gets the cellularDataBlockWhenRoaming property value. If set to true, corresponding managed apps will not be allowed to use cellular data when roaming.
     * @return bool|null
    */
    public function getCellularDataBlockWhenRoaming(): ?bool {
        return $this->getBackingStore()->get('cellularDataBlockWhenRoaming');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cellularDataBlocked' => fn(ParseNode $n) => $o->setCellularDataBlocked($n->getBooleanValue()),
            'cellularDataBlockWhenRoaming' => fn(ParseNode $n) => $o->setCellularDataBlockWhenRoaming($n->getBooleanValue()),
            'managedApps' => fn(ParseNode $n) => $o->setManagedApps($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the managedApps property value. Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getManagedApps(): ?array {
        return $this->getBackingStore()->get('managedApps');
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
        $writer->writeBooleanValue('cellularDataBlocked', $this->getCellularDataBlocked());
        $writer->writeBooleanValue('cellularDataBlockWhenRoaming', $this->getCellularDataBlockWhenRoaming());
        $writer->writeCollectionOfObjectValues('managedApps', $this->getManagedApps());
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
     * Sets the cellularDataBlocked property value. If set to true, corresponding managed apps will not be allowed to use cellular data at any time.
     * @param bool|null $value Value to set for the cellularDataBlocked property.
    */
    public function setCellularDataBlocked(?bool $value): void {
        $this->getBackingStore()->set('cellularDataBlocked', $value);
    }

    /**
     * Sets the cellularDataBlockWhenRoaming property value. If set to true, corresponding managed apps will not be allowed to use cellular data when roaming.
     * @param bool|null $value Value to set for the cellularDataBlockWhenRoaming property.
    */
    public function setCellularDataBlockWhenRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularDataBlockWhenRoaming', $value);
    }

    /**
     * Sets the managedApps property value. Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the managedApps property.
    */
    public function setManagedApps(?array $value): void {
        $this->getBackingStore()->set('managedApps', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
