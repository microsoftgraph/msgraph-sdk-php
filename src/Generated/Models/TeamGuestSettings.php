<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamGuestSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $allowCreateUpdateChannels If set to true, guests can add and update channels. */
    private ?bool $allowCreateUpdateChannels = null;
    
    /** @var bool|null $allowDeleteChannels If set to true, guests can delete channels. */
    private ?bool $allowDeleteChannels = null;
    
    /**
     * Instantiates a new teamGuestSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamGuestSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamGuestSettings {
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
        return  [
            'allowCreateUpdateChannels' => function (self $o, ParseNode $n) { $o->setAllowCreateUpdateChannels($n->getBooleanValue()); },
            'allowDeleteChannels' => function (self $o, ParseNode $n) { $o->setAllowDeleteChannels($n->getBooleanValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowCreateUpdateChannels', $this->allowCreateUpdateChannels);
        $writer->writeBooleanValue('allowDeleteChannels', $this->allowDeleteChannels);
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

}
