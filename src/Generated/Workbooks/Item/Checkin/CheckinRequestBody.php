<?php

namespace Microsoft\Graph\Generated\Workbooks\Item\Checkin;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CheckinRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $checkInAs  */
    private ?string $checkInAs = null;
    
    /** @var string|null $comment  */
    private ?string $comment = null;
    
    /**
     * Instantiates a new checkinRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CheckinRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CheckinRequestBody {
        return new CheckinRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the checkInAs property value. 
     * @return string|null
    */
    public function getCheckInAs(): ?string {
        return $this->checkInAs;
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
            'checkInAs' => function (self $o, ParseNode $n) { $o->setCheckInAs($n->getStringValue()); },
            'comment' => function (self $o, ParseNode $n) { $o->setComment($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('checkInAs', $this->checkInAs);
        $writer->writeStringValue('comment', $this->comment);
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
     * Sets the checkInAs property value. 
     *  @param string|null $value Value to set for the checkInAs property.
    */
    public function setCheckInAs(?string $value ): void {
        $this->checkInAs = $value;
    }

    /**
     * Sets the comment property value. 
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

}
