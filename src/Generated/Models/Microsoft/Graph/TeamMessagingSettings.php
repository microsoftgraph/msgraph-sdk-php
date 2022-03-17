<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamMessagingSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $allowChannelMentions If set to true, @channel mentions are allowed. */
    private ?bool $allowChannelMentions = null;
    
    /** @var bool|null $allowOwnerDeleteMessages If set to true, owners can delete any message. */
    private ?bool $allowOwnerDeleteMessages = null;
    
    /** @var bool|null $allowTeamMentions If set to true, @team mentions are allowed. */
    private ?bool $allowTeamMentions = null;
    
    /** @var bool|null $allowUserDeleteMessages If set to true, users can delete their messages. */
    private ?bool $allowUserDeleteMessages = null;
    
    /** @var bool|null $allowUserEditMessages If set to true, users can edit their messages. */
    private ?bool $allowUserEditMessages = null;
    
    /**
     * Instantiates a new teamMessagingSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamMessagingSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamMessagingSettings {
        return new TeamMessagingSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowChannelMentions property value. If set to true, @channel mentions are allowed.
     * @return bool|null
    */
    public function getAllowChannelMentions(): ?bool {
        return $this->allowChannelMentions;
    }

    /**
     * Gets the allowOwnerDeleteMessages property value. If set to true, owners can delete any message.
     * @return bool|null
    */
    public function getAllowOwnerDeleteMessages(): ?bool {
        return $this->allowOwnerDeleteMessages;
    }

    /**
     * Gets the allowTeamMentions property value. If set to true, @team mentions are allowed.
     * @return bool|null
    */
    public function getAllowTeamMentions(): ?bool {
        return $this->allowTeamMentions;
    }

    /**
     * Gets the allowUserDeleteMessages property value. If set to true, users can delete their messages.
     * @return bool|null
    */
    public function getAllowUserDeleteMessages(): ?bool {
        return $this->allowUserDeleteMessages;
    }

    /**
     * Gets the allowUserEditMessages property value. If set to true, users can edit their messages.
     * @return bool|null
    */
    public function getAllowUserEditMessages(): ?bool {
        return $this->allowUserEditMessages;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'allowChannelMentions' => function (self $o, ParseNode $n) { $o->setAllowChannelMentions($n->getBooleanValue()); },
            'allowOwnerDeleteMessages' => function (self $o, ParseNode $n) { $o->setAllowOwnerDeleteMessages($n->getBooleanValue()); },
            'allowTeamMentions' => function (self $o, ParseNode $n) { $o->setAllowTeamMentions($n->getBooleanValue()); },
            'allowUserDeleteMessages' => function (self $o, ParseNode $n) { $o->setAllowUserDeleteMessages($n->getBooleanValue()); },
            'allowUserEditMessages' => function (self $o, ParseNode $n) { $o->setAllowUserEditMessages($n->getBooleanValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowChannelMentions', $this->allowChannelMentions);
        $writer->writeBooleanValue('allowOwnerDeleteMessages', $this->allowOwnerDeleteMessages);
        $writer->writeBooleanValue('allowTeamMentions', $this->allowTeamMentions);
        $writer->writeBooleanValue('allowUserDeleteMessages', $this->allowUserDeleteMessages);
        $writer->writeBooleanValue('allowUserEditMessages', $this->allowUserEditMessages);
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
     * Sets the allowChannelMentions property value. If set to true, @channel mentions are allowed.
     *  @param bool|null $value Value to set for the allowChannelMentions property.
    */
    public function setAllowChannelMentions(?bool $value ): void {
        $this->allowChannelMentions = $value;
    }

    /**
     * Sets the allowOwnerDeleteMessages property value. If set to true, owners can delete any message.
     *  @param bool|null $value Value to set for the allowOwnerDeleteMessages property.
    */
    public function setAllowOwnerDeleteMessages(?bool $value ): void {
        $this->allowOwnerDeleteMessages = $value;
    }

    /**
     * Sets the allowTeamMentions property value. If set to true, @team mentions are allowed.
     *  @param bool|null $value Value to set for the allowTeamMentions property.
    */
    public function setAllowTeamMentions(?bool $value ): void {
        $this->allowTeamMentions = $value;
    }

    /**
     * Sets the allowUserDeleteMessages property value. If set to true, users can delete their messages.
     *  @param bool|null $value Value to set for the allowUserDeleteMessages property.
    */
    public function setAllowUserDeleteMessages(?bool $value ): void {
        $this->allowUserDeleteMessages = $value;
    }

    /**
     * Sets the allowUserEditMessages property value. If set to true, users can edit their messages.
     *  @param bool|null $value Value to set for the allowUserEditMessages property.
    */
    public function setAllowUserEditMessages(?bool $value ): void {
        $this->allowUserEditMessages = $value;
    }

}
