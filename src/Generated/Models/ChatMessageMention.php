<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessageMention implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $id Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding <at id='{index}'> tag in the message body.
    */
    private ?int $id = null;
    
    /**
     * @var ChatMessageMentionedIdentitySet|null $mentioned The entity (user, application, team, or channel) that was @mentioned.
    */
    private ?ChatMessageMentionedIdentitySet $mentioned = null;
    
    /**
     * @var string|null $mentionText String used to represent the mention. For example, a user's display name, a team name.
    */
    private ?string $mentionText = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new chatMessageMention and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.chatMessageMention');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessageMention
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessageMention {
        return new ChatMessageMention();
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
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'mentioned' => fn(ParseNode $n) => $o->setMentioned($n->getObjectValue([ChatMessageMentionedIdentitySet::class, 'createFromDiscriminatorValue'])),
            'mentionText' => fn(ParseNode $n) => $o->setMentionText($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding <at id='{index}'> tag in the message body.
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the mentioned property value. The entity (user, application, team, or channel) that was @mentioned.
     * @return ChatMessageMentionedIdentitySet|null
    */
    public function getMentioned(): ?ChatMessageMentionedIdentitySet {
        return $this->mentioned;
    }

    /**
     * Gets the mentionText property value. String used to represent the mention. For example, a user's display name, a team name.
     * @return string|null
    */
    public function getMentionText(): ?string {
        return $this->mentionText;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('id', $this->id);
        $writer->writeObjectValue('mentioned', $this->mentioned);
        $writer->writeStringValue('mentionText', $this->mentionText);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the id property value. Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding <at id='{index}'> tag in the message body.
     *  @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the mentioned property value. The entity (user, application, team, or channel) that was @mentioned.
     *  @param ChatMessageMentionedIdentitySet|null $value Value to set for the mentioned property.
    */
    public function setMentioned(?ChatMessageMentionedIdentitySet $value ): void {
        $this->mentioned = $value;
    }

    /**
     * Sets the mentionText property value. String used to represent the mention. For example, a user's display name, a team name.
     *  @param string|null $value Value to set for the mentionText property.
    */
    public function setMentionText(?string $value ): void {
        $this->mentionText = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
