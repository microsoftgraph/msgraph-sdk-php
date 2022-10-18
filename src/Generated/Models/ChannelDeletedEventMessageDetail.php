<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChannelDeletedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var string|null $channelDisplayName Display name of the channel.
    */
    private ?string $channelDisplayName = null;
    
    /**
     * @var string|null $channelId Unique identifier of the channel.
    */
    private ?string $channelId = null;
    
    /**
     * @var IdentitySet|null $initiator Initiator of the event.
    */
    private ?IdentitySet $initiator = null;
    
    /**
     * Instantiates a new ChannelDeletedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.channelDeletedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChannelDeletedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChannelDeletedEventMessageDetail {
        return new ChannelDeletedEventMessageDetail();
    }

    /**
     * Gets the channelDisplayName property value. Display name of the channel.
     * @return string|null
    */
    public function getChannelDisplayName(): ?string {
        return $this->channelDisplayName;
    }

    /**
     * Gets the channelId property value. Unique identifier of the channel.
     * @return string|null
    */
    public function getChannelId(): ?string {
        return $this->channelId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'channelDisplayName' => fn(ParseNode $n) => $o->setChannelDisplayName($n->getStringValue()),
            'channelId' => fn(ParseNode $n) => $o->setChannelId($n->getStringValue()),
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        return $this->initiator;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('channelDisplayName', $this->channelDisplayName);
        $writer->writeStringValue('channelId', $this->channelId);
        $writer->writeObjectValue('initiator', $this->initiator);
    }

    /**
     * Sets the channelDisplayName property value. Display name of the channel.
     *  @param string|null $value Value to set for the channelDisplayName property.
    */
    public function setChannelDisplayName(?string $value ): void {
        $this->channelDisplayName = $value;
    }

    /**
     * Sets the channelId property value. Unique identifier of the channel.
     *  @param string|null $value Value to set for the channelId property.
    */
    public function setChannelId(?string $value ): void {
        $this->channelId = $value;
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

}
