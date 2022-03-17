<?php

namespace Microsoft\Graph\Generated\Contracts\ValidateProperties;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ValidatePropertiesRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $entityType  */
    private ?string $entityType = null;
    
    /** @var string|null $mailNickname  */
    private ?string $mailNickname = null;
    
    /** @var string|null $onBehalfOfUserId  */
    private ?string $onBehalfOfUserId = null;
    
    /**
     * Instantiates a new validatePropertiesRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidatePropertiesRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ValidatePropertiesRequestBody {
        return new ValidatePropertiesRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the entityType property value. 
     * @return string|null
    */
    public function getEntityType(): ?string {
        return $this->entityType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'entityType' => function (self $o, ParseNode $n) { $o->setEntityType($n->getStringValue()); },
            'mailNickname' => function (self $o, ParseNode $n) { $o->setMailNickname($n->getStringValue()); },
            'onBehalfOfUserId' => function (self $o, ParseNode $n) { $o->setOnBehalfOfUserId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the mailNickname property value. 
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->mailNickname;
    }

    /**
     * Gets the onBehalfOfUserId property value. 
     * @return string|null
    */
    public function getOnBehalfOfUserId(): ?string {
        return $this->onBehalfOfUserId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('entityType', $this->entityType);
        $writer->writeStringValue('mailNickname', $this->mailNickname);
        $writer->writeStringValue('onBehalfOfUserId', $this->onBehalfOfUserId);
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
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the entityType property value. 
     *  @param string|null $value Value to set for the entityType property.
    */
    public function setEntityType(?string $value ): void {
        $this->entityType = $value;
    }

    /**
     * Sets the mailNickname property value. 
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value ): void {
        $this->mailNickname = $value;
    }

    /**
     * Sets the onBehalfOfUserId property value. 
     *  @param string|null $value Value to set for the onBehalfOfUserId property.
    */
    public function setOnBehalfOfUserId(?string $value ): void {
        $this->onBehalfOfUserId = $value;
    }

}
