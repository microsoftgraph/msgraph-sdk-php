<?php

namespace Microsoft\Graph\Applications\Item\SetVerifiedPublisher;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetVerifiedPublisherPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $verifiedPublisherId The verifiedPublisherId property
    */
    private ?string $verifiedPublisherId = null;
    
    /**
     * Instantiates a new setVerifiedPublisherPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetVerifiedPublisherPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetVerifiedPublisherPostRequestBody {
        return new SetVerifiedPublisherPostRequestBody();
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
            'verifiedPublisherId' => function (ParseNode $n) use ($o) { $o->setVerifiedPublisherId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the verifiedPublisherId property value. The verifiedPublisherId property
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
     * Sets the verifiedPublisherId property value. The verifiedPublisherId property
     *  @param string|null $value Value to set for the verifiedPublisherId property.
    */
    public function setVerifiedPublisherId(?string $value ): void {
        $this->verifiedPublisherId = $value;
    }

}
