<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FreeBusyError implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $message Describes the error.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $responseCode The response code from querying for the availability of the user, distribution list, or resource.
    */
    private ?string $responseCode = null;
    
    /**
     * Instantiates a new freeBusyError and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FreeBusyError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FreeBusyError {
        return new FreeBusyError();
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
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            'responseCode' => function (ParseNode $n) use ($o) { $o->setResponseCode($n->getStringValue()); },
        ];
    }

    /**
     * Gets the message property value. Describes the error.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the responseCode property value. The response code from querying for the availability of the user, distribution list, or resource.
     * @return string|null
    */
    public function getResponseCode(): ?string {
        return $this->responseCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('responseCode', $this->responseCode);
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
     * Sets the message property value. Describes the error.
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the responseCode property value. The response code from querying for the availability of the user, distribution list, or resource.
     *  @param string|null $value Value to set for the responseCode property.
    */
    public function setResponseCode(?string $value ): void {
        $this->responseCode = $value;
    }

}
