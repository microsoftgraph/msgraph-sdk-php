<?php

namespace Microsoft\Graph\Generated\Groups\Item\Calendar\Events\Item\Instances\Item\Accept;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AcceptRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $Comment  */
    private ?string $comment = null;
    
    /** @var bool|null $SendResponse  */
    private ?bool $sendResponse = null;
    
    /**
     * Instantiates a new acceptRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AcceptRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AcceptRequestBody {
        return new AcceptRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the comment property value. 
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'comment' => function (self $o, ParseNode $n) { $o->setComment($n->getStringValue()); },
            'sendResponse' => function (self $o, ParseNode $n) { $o->setSendResponse($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the sendResponse property value. 
     * @return bool|null
    */
    public function getSendResponse(): ?bool {
        return $this->sendResponse;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeBooleanValue('sendResponse', $this->sendResponse);
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
     * Sets the comment property value. 
     *  @param string|null $value Value to set for the Comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the sendResponse property value. 
     *  @param bool|null $value Value to set for the SendResponse property.
    */
    public function setSendResponse(?bool $value ): void {
        $this->sendResponse = $value;
    }

}
