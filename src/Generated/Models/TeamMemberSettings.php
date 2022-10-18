<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamMemberSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowAddRemoveApps If set to true, members can add and remove apps.
    */
    private ?bool $allowAddRemoveApps = null;
    
    /**
     * @var bool|null $allowCreatePrivateChannels If set to true, members can add and update private channels.
    */
    private ?bool $allowCreatePrivateChannels = null;
    
    /**
     * @var bool|null $allowCreateUpdateChannels If set to true, members can add and update channels.
    */
    private ?bool $allowCreateUpdateChannels = null;
    
    /**
     * @var bool|null $allowCreateUpdateRemoveConnectors If set to true, members can add, update, and remove connectors.
    */
    private ?bool $allowCreateUpdateRemoveConnectors = null;
    
    /**
     * @var bool|null $allowCreateUpdateRemoveTabs If set to true, members can add, update, and remove tabs.
    */
    private ?bool $allowCreateUpdateRemoveTabs = null;
    
    /**
     * @var bool|null $allowDeleteChannels If set to true, members can delete channels.
    */
    private ?bool $allowDeleteChannels = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new teamMemberSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamMemberSettings');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowAddRemoveApps property value. If set to true, members can add and remove apps.
     * @return bool|null
    */
    public function getAllowAddRemoveApps(): ?bool {
        return $this->allowAddRemoveApps;
    }

    /**
     * Gets the allowCreatePrivateChannels property value. If set to true, members can add and update private channels.
     * @return bool|null
    */
    public function getAllowCreatePrivateChannels(): ?bool {
        return $this->allowCreatePrivateChannels;
    }

    /**
     * Gets the allowCreateUpdateChannels property value. If set to true, members can add and update channels.
     * @return bool|null
    */
    public function getAllowCreateUpdateChannels(): ?bool {
        return $this->allowCreateUpdateChannels;
    }

    /**
     * Gets the allowCreateUpdateRemoveConnectors property value. If set to true, members can add, update, and remove connectors.
     * @return bool|null
    */
    public function getAllowCreateUpdateRemoveConnectors(): ?bool {
        return $this->allowCreateUpdateRemoveConnectors;
    }

    /**
     * Gets the allowCreateUpdateRemoveTabs property value. If set to true, members can add, update, and remove tabs.
     * @return bool|null
    */
    public function getAllowCreateUpdateRemoveTabs(): ?bool {
        return $this->allowCreateUpdateRemoveTabs;
    }

    /**
     * Gets the allowDeleteChannels property value. If set to true, members can delete channels.
     * @return bool|null
    */
    public function getAllowDeleteChannels(): ?bool {
        return $this->allowDeleteChannels;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowAddRemoveApps', $this->allowAddRemoveApps);
        $writer->writeBooleanValue('allowCreatePrivateChannels', $this->allowCreatePrivateChannels);
        $writer->writeBooleanValue('allowCreateUpdateChannels', $this->allowCreateUpdateChannels);
        $writer->writeBooleanValue('allowCreateUpdateRemoveConnectors', $this->allowCreateUpdateRemoveConnectors);
        $writer->writeBooleanValue('allowCreateUpdateRemoveTabs', $this->allowCreateUpdateRemoveTabs);
        $writer->writeBooleanValue('allowDeleteChannels', $this->allowDeleteChannels);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowAddRemoveApps property value. If set to true, members can add and remove apps.
     *  @param bool|null $value Value to set for the allowAddRemoveApps property.
    */
    public function setAllowAddRemoveApps(?bool $value ): void {
        $this->allowAddRemoveApps = $value;
    }

    /**
     * Sets the allowCreatePrivateChannels property value. If set to true, members can add and update private channels.
     *  @param bool|null $value Value to set for the allowCreatePrivateChannels property.
    */
    public function setAllowCreatePrivateChannels(?bool $value ): void {
        $this->allowCreatePrivateChannels = $value;
    }

    /**
     * Sets the allowCreateUpdateChannels property value. If set to true, members can add and update channels.
     *  @param bool|null $value Value to set for the allowCreateUpdateChannels property.
    */
    public function setAllowCreateUpdateChannels(?bool $value ): void {
        $this->allowCreateUpdateChannels = $value;
    }

    /**
     * Sets the allowCreateUpdateRemoveConnectors property value. If set to true, members can add, update, and remove connectors.
     *  @param bool|null $value Value to set for the allowCreateUpdateRemoveConnectors property.
    */
    public function setAllowCreateUpdateRemoveConnectors(?bool $value ): void {
        $this->allowCreateUpdateRemoveConnectors = $value;
    }

    /**
     * Sets the allowCreateUpdateRemoveTabs property value. If set to true, members can add, update, and remove tabs.
     *  @param bool|null $value Value to set for the allowCreateUpdateRemoveTabs property.
    */
    public function setAllowCreateUpdateRemoveTabs(?bool $value ): void {
        $this->allowCreateUpdateRemoveTabs = $value;
    }

    /**
     * Sets the allowDeleteChannels property value. If set to true, members can delete channels.
     *  @param bool|null $value Value to set for the allowDeleteChannels property.
    */
    public function setAllowDeleteChannels(?bool $value ): void {
        $this->allowDeleteChannels = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
