<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChannelAddedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new ChannelAddedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.channelAddedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChannelAddedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChannelAddedEventMessageDetail {
        return new ChannelAddedEventMessageDetail();
    }

    /**
     * Gets the channelDisplayName property value. Display name of the channel.
     * @return string|null
    */
    public function getChannelDisplayName(): ?string {
        $val = $this->getBackingStore()->get('channelDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'channelDisplayName'");
    }

    /**
     * Gets the channelId property value. Unique identifier of the channel.
     * @return string|null
    */
    public function getChannelId(): ?string {
        $val = $this->getBackingStore()->get('channelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'channelId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('initiator');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiator'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('channelDisplayName', $this->getChannelDisplayName());
        $writer->writeStringValue('channelId', $this->getChannelId());
        $writer->writeObjectValue('initiator', $this->getInitiator());
    }

    /**
     * Sets the channelDisplayName property value. Display name of the channel.
     * @param string|null $value Value to set for the channelDisplayName property.
    */
    public function setChannelDisplayName(?string $value): void {
        $this->getBackingStore()->set('channelDisplayName', $value);
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
