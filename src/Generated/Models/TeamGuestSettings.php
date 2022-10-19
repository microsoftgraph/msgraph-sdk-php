<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamGuestSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowCreateUpdateChannels If set to true, guests can add and update channels.
    */
    private ?bool $allowCreateUpdateChannels = null;
    
    /**
     * @var bool|null $allowDeleteChannels If set to true, guests can delete channels.
    */
    private ?bool $allowDeleteChannels = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new teamGuestSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamGuestSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamGuestSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamGuestSettings {
        return new TeamGuestSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowCreateUpdateChannels property value. If set to true, guests can add and update channels.
     * @return bool|null
    */
    public function getAllowCreateUpdateChannels(): ?bool {
        return $this->allowCreateUpdateChannels;
    }

    /**
     * Gets the allowDeleteChannels property value. If set to true, guests can delete channels.
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
            'allowCreateUpdateChannels' => fn(ParseNode $n) => $o->setAllowCreateUpdateChannels($n->getBooleanValue()),
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
        $writer->writeBooleanValue('allowCreateUpdateChannels', $this->allowCreateUpdateChannels);
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
     * Sets the allowCreateUpdateChannels property value. If set to true, guests can add and update channels.
     *  @param bool|null $value Value to set for the allowCreateUpdateChannels property.
    */
    public function setAllowCreateUpdateChannels(?bool $value ): void {
        $this->allowCreateUpdateChannels = $value;
    }

    /**
     * Sets the allowDeleteChannels property value. If set to true, guests can delete channels.
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
