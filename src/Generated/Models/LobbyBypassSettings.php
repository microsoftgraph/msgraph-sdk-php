<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LobbyBypassSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new lobbyBypassSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LobbyBypassSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LobbyBypassSettings {
        return new LobbyBypassSettings();
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
            'isDialInBypassEnabled' => fn(ParseNode $n) => $o->setIsDialInBypassEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getEnumValue(LobbyBypassScope::class)),
        ];
    }

    /**
     * Gets the isDialInBypassEnabled property value. Specifies whether or not to always let dial-in callers bypass the lobby. Optional.
     * @return bool|null
    */
    public function getIsDialInBypassEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isDialInBypassEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDialInBypassEnabled'");
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
     * Gets the scope property value. Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Optional.
     * @return LobbyBypassScope|null
    */
    public function getScope(): ?LobbyBypassScope {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || $val instanceof LobbyBypassScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isDialInBypassEnabled', $this->getIsDialInBypassEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('scope', $this->getScope());
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
     * Sets the isDialInBypassEnabled property value. Specifies whether or not to always let dial-in callers bypass the lobby. Optional.
     * @param bool|null $value Value to set for the isDialInBypassEnabled property.
    */
    public function setIsDialInBypassEnabled(?bool $value): void {
        $this->getBackingStore()->set('isDialInBypassEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the scope property value. Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Optional.
     * @param LobbyBypassScope|null $value Value to set for the scope property.
    */
    public function setScope(?LobbyBypassScope $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

}
