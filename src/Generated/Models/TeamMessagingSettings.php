<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamMessagingSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeamMessagingSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamMessagingSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamMessagingSettings {
        return new TeamMessagingSettings();
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
     * Gets the allowChannelMentions property value. If set to true, @channel mentions are allowed.
     * @return bool|null
    */
    public function getAllowChannelMentions(): ?bool {
        $val = $this->getBackingStore()->get('allowChannelMentions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowChannelMentions'");
    }

    /**
     * Gets the allowOwnerDeleteMessages property value. If set to true, owners can delete any message.
     * @return bool|null
    */
    public function getAllowOwnerDeleteMessages(): ?bool {
        $val = $this->getBackingStore()->get('allowOwnerDeleteMessages');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowOwnerDeleteMessages'");
    }

    /**
     * Gets the allowTeamMentions property value. If set to true, @team mentions are allowed.
     * @return bool|null
    */
    public function getAllowTeamMentions(): ?bool {
        $val = $this->getBackingStore()->get('allowTeamMentions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowTeamMentions'");
    }

    /**
     * Gets the allowUserDeleteMessages property value. If set to true, users can delete their messages.
     * @return bool|null
    */
    public function getAllowUserDeleteMessages(): ?bool {
        $val = $this->getBackingStore()->get('allowUserDeleteMessages');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowUserDeleteMessages'");
    }

    /**
     * Gets the allowUserEditMessages property value. If set to true, users can edit their messages.
     * @return bool|null
    */
    public function getAllowUserEditMessages(): ?bool {
        $val = $this->getBackingStore()->get('allowUserEditMessages');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowUserEditMessages'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
            'allowChannelMentions' => fn(ParseNode $n) => $o->setAllowChannelMentions($n->getBooleanValue()),
            'allowOwnerDeleteMessages' => fn(ParseNode $n) => $o->setAllowOwnerDeleteMessages($n->getBooleanValue()),
            'allowTeamMentions' => fn(ParseNode $n) => $o->setAllowTeamMentions($n->getBooleanValue()),
            'allowUserDeleteMessages' => fn(ParseNode $n) => $o->setAllowUserDeleteMessages($n->getBooleanValue()),
            'allowUserEditMessages' => fn(ParseNode $n) => $o->setAllowUserEditMessages($n->getBooleanValue()),
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
        $writer->writeBooleanValue('allowChannelMentions', $this->getAllowChannelMentions());
        $writer->writeBooleanValue('allowOwnerDeleteMessages', $this->getAllowOwnerDeleteMessages());
        $writer->writeBooleanValue('allowTeamMentions', $this->getAllowTeamMentions());
        $writer->writeBooleanValue('allowUserDeleteMessages', $this->getAllowUserDeleteMessages());
        $writer->writeBooleanValue('allowUserEditMessages', $this->getAllowUserEditMessages());
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
     * Sets the allowChannelMentions property value. If set to true, @channel mentions are allowed.
     * @param bool|null $value Value to set for the allowChannelMentions property.
    */
    public function setAllowChannelMentions(?bool $value): void {
        $this->getBackingStore()->set('allowChannelMentions', $value);
    }

    /**
     * Sets the allowOwnerDeleteMessages property value. If set to true, owners can delete any message.
     * @param bool|null $value Value to set for the allowOwnerDeleteMessages property.
    */
    public function setAllowOwnerDeleteMessages(?bool $value): void {
        $this->getBackingStore()->set('allowOwnerDeleteMessages', $value);
    }

    /**
     * Sets the allowTeamMentions property value. If set to true, @team mentions are allowed.
     * @param bool|null $value Value to set for the allowTeamMentions property.
    */
    public function setAllowTeamMentions(?bool $value): void {
        $this->getBackingStore()->set('allowTeamMentions', $value);
    }

    /**
     * Sets the allowUserDeleteMessages property value. If set to true, users can delete their messages.
     * @param bool|null $value Value to set for the allowUserDeleteMessages property.
    */
    public function setAllowUserDeleteMessages(?bool $value): void {
        $this->getBackingStore()->set('allowUserDeleteMessages', $value);
    }

    /**
     * Sets the allowUserEditMessages property value. If set to true, users can edit their messages.
     * @param bool|null $value Value to set for the allowUserEditMessages property.
    */
    public function setAllowUserEditMessages(?bool $value): void {
        $this->getBackingStore()->set('allowUserEditMessages', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
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
