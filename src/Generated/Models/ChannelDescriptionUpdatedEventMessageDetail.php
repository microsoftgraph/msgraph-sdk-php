<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChannelDescriptionUpdatedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var string|null $channelDescription The updated description of the channel.
    */
    private ?string $channelDescription = null;
    
    /**
     * @var string|null $channelId Unique identifier of the channel.
    */
    private ?string $channelId = null;
    
    /**
     * @var IdentitySet|null $initiator Initiator of the event.
    */
    private ?IdentitySet $initiator = null;
    
    /**
     * Instantiates a new ChannelDescriptionUpdatedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.channelDescriptionUpdatedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChannelDescriptionUpdatedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChannelDescriptionUpdatedEventMessageDetail {
        return new ChannelDescriptionUpdatedEventMessageDetail();
    }

    /**
     * Gets the channelDescription property value. The updated description of the channel.
     * @return string|null
    */
    public function getChannelDescription(): ?string {
        return $this->channelDescription;
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
            'channelDescription' => fn(ParseNode $n) => $o->setChannelDescription($n->getStringValue()),
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
        $writer->writeStringValue('channelDescription', $this->channelDescription);
        $writer->writeStringValue('channelId', $this->channelId);
        $writer->writeObjectValue('initiator', $this->initiator);
    }

    /**
     * Sets the channelDescription property value. The updated description of the channel.
     *  @param string|null $value Value to set for the channelDescription property.
    */
    public function setChannelDescription(?string $value ): void {
        $this->channelDescription = $value;
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
