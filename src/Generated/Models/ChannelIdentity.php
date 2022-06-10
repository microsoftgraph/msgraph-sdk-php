<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChannelIdentity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $channelId The identity of the channel in which the message was posted.
    */
    private ?string $channelId = null;
    
    /**
     * @var string|null $teamId The identity of the team in which the message was posted.
    */
    private ?string $teamId = null;
    
    /**
     * Instantiates a new channelIdentity and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChannelIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChannelIdentity {
        return new ChannelIdentity();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the channelId property value. The identity of the channel in which the message was posted.
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
        return  [
            'channelId' => function (ParseNode $n) use ($o) { $o->setChannelId($n->getStringValue()); },
            'teamId' => function (ParseNode $n) use ($o) { $o->setTeamId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the teamId property value. The identity of the team in which the message was posted.
     * @return string|null
    */
    public function getTeamId(): ?string {
        return $this->teamId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('channelId', $this->channelId);
        $writer->writeStringValue('teamId', $this->teamId);
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
     * Sets the channelId property value. The identity of the channel in which the message was posted.
     *  @param string|null $value Value to set for the channelId property.
    */
    public function setChannelId(?string $value ): void {
        $this->channelId = $value;
    }

    /**
     * Sets the teamId property value. The identity of the team in which the message was posted.
     *  @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value ): void {
        $this->teamId = $value;
    }

}
