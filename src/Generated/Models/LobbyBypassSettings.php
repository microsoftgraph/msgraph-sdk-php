<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LobbyBypassSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $isDialInBypassEnabled Specifies whether or not to always let dial-in callers bypass the lobby. Optional. */
    private ?bool $isDialInBypassEnabled = null;
    
    /** @var LobbyBypassScope|null $scope Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Optional. */
    private ?LobbyBypassScope $scope = null;
    
    /**
     * Instantiates a new lobbyBypassSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LobbyBypassSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): LobbyBypassSettings {
        return new LobbyBypassSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'isDialInBypassEnabled' => function (self $o, ParseNode $n) { $o->setIsDialInBypassEnabled($n->getBooleanValue()); },
            'scope' => function (self $o, ParseNode $n) { $o->setScope($n->getEnumValue(LobbyBypassScope::class)); },
        ];
    }

    /**
     * Gets the isDialInBypassEnabled property value. Specifies whether or not to always let dial-in callers bypass the lobby. Optional.
     * @return bool|null
    */
    public function getIsDialInBypassEnabled(): ?bool {
        return $this->isDialInBypassEnabled;
    }

    /**
     * Gets the scope property value. Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Optional.
     * @return LobbyBypassScope|null
    */
    public function getScope(): ?LobbyBypassScope {
        return $this->scope;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isDialInBypassEnabled', $this->isDialInBypassEnabled);
        $writer->writeEnumValue('scope', $this->scope);
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
     * Sets the isDialInBypassEnabled property value. Specifies whether or not to always let dial-in callers bypass the lobby. Optional.
     *  @param bool|null $value Value to set for the isDialInBypassEnabled property.
    */
    public function setIsDialInBypassEnabled(?bool $value ): void {
        $this->isDialInBypassEnabled = $value;
    }

    /**
     * Sets the scope property value. Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Optional.
     *  @param LobbyBypassScope|null $value Value to set for the scope property.
    */
    public function setScope(?LobbyBypassScope $value ): void {
        $this->scope = $value;
    }

}
