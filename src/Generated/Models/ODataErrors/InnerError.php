<?php

namespace Microsoft\Graph\Models\ODataErrors;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InnerError implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $clientRequestId Client request Id as sent by the client application.
    */
    private ?string $clientRequestId = null;
    
    /**
     * @var DateTime|null $Date Date when the error occured.
    */
    private ?DateTime $date = null;
    
    /**
     * @var string|null $requestId Request Id as tracked internally by the service
    */
    private ?string $requestId = null;
    
    /**
     * Instantiates a new InnerError and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InnerError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InnerError {
        return new InnerError();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the client-request-id property value. Client request Id as sent by the client application.
     * @return string|null
    */
    public function getClientRequestId(): ?string {
        return $this->clientRequestId;
    }

    /**
     * Gets the date property value. Date when the error occured.
     * @return DateTime|null
    */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'client-request-id' => function (ParseNode $n) use ($o) { $o->setClientRequestId($n->getStringValue()); },
            'date' => function (ParseNode $n) use ($o) { $o->setDate($n->getDateTimeValue()); },
            'request-id' => function (ParseNode $n) use ($o) { $o->setRequestId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the request-id property value. Request Id as tracked internally by the service
     * @return string|null
    */
    public function getRequestId(): ?string {
        return $this->requestId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('client-request-id', $this->clientRequestId);
        $writer->writeDateTimeValue('date', $this->date);
        $writer->writeStringValue('request-id', $this->requestId);
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
     * Sets the client-request-id property value. Client request Id as sent by the client application.
     *  @param string|null $value Value to set for the clientRequestId property.
    */
    public function setClientRequestId(?string $value ): void {
        $this->clientRequestId = $value;
    }

    /**
     * Sets the date property value. Date when the error occured.
     *  @param DateTime|null $value Value to set for the Date property.
    */
    public function setDate(?DateTime $value ): void {
        $this->date = $value;
    }

    /**
     * Sets the request-id property value. Request Id as tracked internally by the service
     *  @param string|null $value Value to set for the requestId property.
    */
    public function setRequestId(?string $value ): void {
        $this->requestId = $value;
    }

}
