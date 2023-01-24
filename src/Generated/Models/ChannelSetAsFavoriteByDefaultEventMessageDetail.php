<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChannelSetAsFavoriteByDefaultEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new ChannelSetAsFavoriteByDefaultEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.channelSetAsFavoriteByDefaultEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChannelSetAsFavoriteByDefaultEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChannelSetAsFavoriteByDefaultEventMessageDetail {
        return new ChannelSetAsFavoriteByDefaultEventMessageDetail();
    }

    /**
     * Gets the channelId property value. Unique identifier of the channel.
     * @return string|null
    */
    public function getChannelId(): ?string {
        return $this->getBackingStore()->get('channelId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'channelId' => fn(ParseNode $n) => $o->setChannelId($n->getStringValue()),
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        return $this->getBackingStore()->get('initiator');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('channelId', $this->getChannelId());
        $writer->writeObjectValue('initiator', $this->getInitiator());
    }

    /**
     * Sets the channelId property value. Unique identifier of the channel.
     * @param string|null $value Value to set for the channelId property.
    */
    public function setChannelId(?string $value): void {
        $this->getBackingStore()->set('channelId', $value);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

}
