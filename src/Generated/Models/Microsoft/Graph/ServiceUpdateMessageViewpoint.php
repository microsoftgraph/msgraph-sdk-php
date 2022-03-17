<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceUpdateMessageViewpoint implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $isArchived Indicates whether the user archived the message. */
    private ?bool $isArchived = null;
    
    /** @var bool|null $isFavorited Indicates whether the user marked the message as favorite. */
    private ?bool $isFavorited = null;
    
    /** @var bool|null $isRead Indicates whether the user read the message. */
    private ?bool $isRead = null;
    
    /**
     * Instantiates a new serviceUpdateMessageViewpoint and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceUpdateMessageViewpoint
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ServiceUpdateMessageViewpoint {
        return new ServiceUpdateMessageViewpoint();
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
        return  [
            'isArchived' => function (self $o, ParseNode $n) { $o->setIsArchived($n->getBooleanValue()); },
            'isFavorited' => function (self $o, ParseNode $n) { $o->setIsFavorited($n->getBooleanValue()); },
            'isRead' => function (self $o, ParseNode $n) { $o->setIsRead($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isArchived property value. Indicates whether the user archived the message.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->isArchived;
    }

    /**
     * Gets the isFavorited property value. Indicates whether the user marked the message as favorite.
     * @return bool|null
    */
    public function getIsFavorited(): ?bool {
        return $this->isFavorited;
    }

    /**
     * Gets the isRead property value. Indicates whether the user read the message.
     * @return bool|null
    */
    public function getIsRead(): ?bool {
        return $this->isRead;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isArchived', $this->isArchived);
        $writer->writeBooleanValue('isFavorited', $this->isFavorited);
        $writer->writeBooleanValue('isRead', $this->isRead);
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
     * Sets the isArchived property value. Indicates whether the user archived the message.
     *  @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value ): void {
        $this->isArchived = $value;
    }

    /**
     * Sets the isFavorited property value. Indicates whether the user marked the message as favorite.
     *  @param bool|null $value Value to set for the isFavorited property.
    */
    public function setIsFavorited(?bool $value ): void {
        $this->isFavorited = $value;
    }

    /**
     * Sets the isRead property value. Indicates whether the user read the message.
     *  @param bool|null $value Value to set for the isRead property.
    */
    public function setIsRead(?bool $value ): void {
        $this->isRead = $value;
    }

}
