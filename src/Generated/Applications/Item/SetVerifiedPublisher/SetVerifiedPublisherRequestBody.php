<?php

namespace Microsoft\Graph\Generated\Applications\Item\SetVerifiedPublisher;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetVerifiedPublisherRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $verifiedPublisherId  */
    private ?string $verifiedPublisherId = null;
    
    /**
     * Instantiates a new setVerifiedPublisherRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetVerifiedPublisherRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SetVerifiedPublisherRequestBody {
        return new SetVerifiedPublisherRequestBody();
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
            'verifiedPublisherId' => function (self $o, ParseNode $n) { $o->setVerifiedPublisherId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the verifiedPublisherId property value. 
     * @return string|null
    */
    public function getVerifiedPublisherId(): ?string {
        return $this->verifiedPublisherId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('verifiedPublisherId', $this->verifiedPublisherId);
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
     * Sets the verifiedPublisherId property value. 
     *  @param string|null $value Value to set for the verifiedPublisherId property.
    */
    public function setVerifiedPublisherId(?string $value ): void {
        $this->verifiedPublisherId = $value;
    }

}
