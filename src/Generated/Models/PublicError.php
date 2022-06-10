<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PublicError implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $code Represents the error code.
    */
    private ?string $code = null;
    
    /**
     * @var array<PublicErrorDetail>|null $details Details of the error.
    */
    private ?array $details = null;
    
    /**
     * @var PublicInnerError|null $innerError Details of the inner error.
    */
    private ?PublicInnerError $innerError = null;
    
    /**
     * @var string|null $message A non-localized message for the developer.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $target The target of the error.
    */
    private ?string $target = null;
    
    /**
     * Instantiates a new publicError and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PublicError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PublicError {
        return new PublicError();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the code property value. Represents the error code.
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the details property value. Details of the error.
     * @return array<PublicErrorDetail>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'code' => function (ParseNode $n) use ($o) { $o->setCode($n->getStringValue()); },
            'details' => function (ParseNode $n) use ($o) { $o->setDetails($n->getCollectionOfObjectValues(array(PublicErrorDetail::class, 'createFromDiscriminatorValue'))); },
            'innerError' => function (ParseNode $n) use ($o) { $o->setInnerError($n->getObjectValue(array(PublicInnerError::class, 'createFromDiscriminatorValue'))); },
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getStringValue()); },
        ];
    }

    /**
     * Gets the innerError property value. Details of the inner error.
     * @return PublicInnerError|null
    */
    public function getInnerError(): ?PublicInnerError {
        return $this->innerError;
    }

    /**
     * Gets the message property value. A non-localized message for the developer.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the target property value. The target of the error.
     * @return string|null
    */
    public function getTarget(): ?string {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('code', $this->code);
        $writer->writeCollectionOfObjectValues('details', $this->details);
        $writer->writeObjectValue('innerError', $this->innerError);
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('target', $this->target);
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
     * Sets the code property value. Represents the error code.
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the details property value. Details of the error.
     *  @param array<PublicErrorDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the innerError property value. Details of the inner error.
     *  @param PublicInnerError|null $value Value to set for the innerError property.
    */
    public function setInnerError(?PublicInnerError $value ): void {
        $this->innerError = $value;
    }

    /**
     * Sets the message property value. A non-localized message for the developer.
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the target property value. The target of the error.
     *  @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value ): void {
        $this->target = $value;
    }

}
