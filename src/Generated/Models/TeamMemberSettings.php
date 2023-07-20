<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamMemberSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamMemberSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamMemberSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamMemberSettings {
        return new TeamMemberSettings();
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
     * Gets the allowAddRemoveApps property value. If set to true, members can add and remove apps.
     * @return bool|null
    */
    public function getAllowAddRemoveApps(): ?bool {
        $val = $this->getBackingStore()->get('allowAddRemoveApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAddRemoveApps'");
    }

    /**
     * Gets the allowCreatePrivateChannels property value. If set to true, members can add and update private channels.
     * @return bool|null
    */
    public function getAllowCreatePrivateChannels(): ?bool {
        $val = $this->getBackingStore()->get('allowCreatePrivateChannels');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCreatePrivateChannels'");
    }

    /**
     * Gets the allowCreateUpdateChannels property value. If set to true, members can add and update channels.
     * @return bool|null
    */
    public function getAllowCreateUpdateChannels(): ?bool {
        $val = $this->getBackingStore()->get('allowCreateUpdateChannels');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCreateUpdateChannels'");
    }

    /**
     * Gets the allowCreateUpdateRemoveConnectors property value. If set to true, members can add, update, and remove connectors.
     * @return bool|null
    */
    public function getAllowCreateUpdateRemoveConnectors(): ?bool {
        $val = $this->getBackingStore()->get('allowCreateUpdateRemoveConnectors');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCreateUpdateRemoveConnectors'");
    }

    /**
     * Gets the allowCreateUpdateRemoveTabs property value. If set to true, members can add, update, and remove tabs.
     * @return bool|null
    */
    public function getAllowCreateUpdateRemoveTabs(): ?bool {
        $val = $this->getBackingStore()->get('allowCreateUpdateRemoveTabs');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCreateUpdateRemoveTabs'");
    }

    /**
     * Gets the allowDeleteChannels property value. If set to true, members can delete channels.
     * @return bool|null
    */
    public function getAllowDeleteChannels(): ?bool {
        $val = $this->getBackingStore()->get('allowDeleteChannels');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowDeleteChannels'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
            'allowAddRemoveApps' => fn(ParseNode $n) => $o->setAllowAddRemoveApps($n->getBooleanValue()),
            'allowCreatePrivateChannels' => fn(ParseNode $n) => $o->setAllowCreatePrivateChannels($n->getBooleanValue()),
            'allowCreateUpdateChannels' => fn(ParseNode $n) => $o->setAllowCreateUpdateChannels($n->getBooleanValue()),
            'allowCreateUpdateRemoveConnectors' => fn(ParseNode $n) => $o->setAllowCreateUpdateRemoveConnectors($n->getBooleanValue()),
            'allowCreateUpdateRemoveTabs' => fn(ParseNode $n) => $o->setAllowCreateUpdateRemoveTabs($n->getBooleanValue()),
            'allowDeleteChannels' => fn(ParseNode $n) => $o->setAllowDeleteChannels($n->getBooleanValue()),
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
        $writer->writeBooleanValue('allowAddRemoveApps', $this->getAllowAddRemoveApps());
        $writer->writeBooleanValue('allowCreatePrivateChannels', $this->getAllowCreatePrivateChannels());
        $writer->writeBooleanValue('allowCreateUpdateChannels', $this->getAllowCreateUpdateChannels());
        $writer->writeBooleanValue('allowCreateUpdateRemoveConnectors', $this->getAllowCreateUpdateRemoveConnectors());
        $writer->writeBooleanValue('allowCreateUpdateRemoveTabs', $this->getAllowCreateUpdateRemoveTabs());
        $writer->writeBooleanValue('allowDeleteChannels', $this->getAllowDeleteChannels());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowAddRemoveApps property value. If set to true, members can add and remove apps.
     * @param bool|null $value Value to set for the allowAddRemoveApps property.
    */
    public function setAllowAddRemoveApps(?bool $value): void {
        $this->getBackingStore()->set('allowAddRemoveApps', $value);
    }

    /**
     * Sets the allowCreatePrivateChannels property value. If set to true, members can add and update private channels.
     * @param bool|null $value Value to set for the allowCreatePrivateChannels property.
    */
    public function setAllowCreatePrivateChannels(?bool $value): void {
        $this->getBackingStore()->set('allowCreatePrivateChannels', $value);
    }

    /**
     * Sets the allowCreateUpdateChannels property value. If set to true, members can add and update channels.
     * @param bool|null $value Value to set for the allowCreateUpdateChannels property.
    */
    public function setAllowCreateUpdateChannels(?bool $value): void {
        $this->getBackingStore()->set('allowCreateUpdateChannels', $value);
    }

    /**
     * Sets the allowCreateUpdateRemoveConnectors property value. If set to true, members can add, update, and remove connectors.
     * @param bool|null $value Value to set for the allowCreateUpdateRemoveConnectors property.
    */
    public function setAllowCreateUpdateRemoveConnectors(?bool $value): void {
        $this->getBackingStore()->set('allowCreateUpdateRemoveConnectors', $value);
    }

    /**
     * Sets the allowCreateUpdateRemoveTabs property value. If set to true, members can add, update, and remove tabs.
     * @param bool|null $value Value to set for the allowCreateUpdateRemoveTabs property.
    */
    public function setAllowCreateUpdateRemoveTabs(?bool $value): void {
        $this->getBackingStore()->set('allowCreateUpdateRemoveTabs', $value);
    }

    /**
     * Sets the allowDeleteChannels property value. If set to true, members can delete channels.
     * @param bool|null $value Value to set for the allowDeleteChannels property.
    */
    public function setAllowDeleteChannels(?bool $value): void {
        $this->getBackingStore()->set('allowDeleteChannels', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
