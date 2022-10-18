<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatViewpoint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isHidden Indicates whether the chat is hidden for the current user.
    */
    private ?bool $isHidden = null;
    
    /**
     * @var DateTime|null $lastMessageReadDateTime Represents the dateTime up until which the current user has read chatMessages in a specific chat.
    */
    private ?DateTime $lastMessageReadDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new chatViewpoint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.chatViewpoint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatViewpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatViewpoint {
        return new ChatViewpoint();
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
            'isHidden' => fn(ParseNode $n) => $o->setIsHidden($n->getBooleanValue()),
            'lastMessageReadDateTime' => fn(ParseNode $n) => $o->setLastMessageReadDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isHidden property value. Indicates whether the chat is hidden for the current user.
     * @return bool|null
    */
    public function getIsHidden(): ?bool {
        return $this->isHidden;
    }

    /**
     * Gets the lastMessageReadDateTime property value. Represents the dateTime up until which the current user has read chatMessages in a specific chat.
     * @return DateTime|null
    */
    public function getLastMessageReadDateTime(): ?DateTime {
        return $this->lastMessageReadDateTime;
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
        $writer->writeBooleanValue('isHidden', $this->isHidden);
        $writer->writeDateTimeValue('lastMessageReadDateTime', $this->lastMessageReadDateTime);
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
     * Sets the isHidden property value. Indicates whether the chat is hidden for the current user.
     *  @param bool|null $value Value to set for the isHidden property.
    */
    public function setIsHidden(?bool $value ): void {
        $this->isHidden = $value;
    }

    /**
     * Sets the lastMessageReadDateTime property value. Represents the dateTime up until which the current user has read chatMessages in a specific chat.
     *  @param DateTime|null $value Value to set for the lastMessageReadDateTime property.
    */
    public function setLastMessageReadDateTime(?DateTime $value ): void {
        $this->lastMessageReadDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
