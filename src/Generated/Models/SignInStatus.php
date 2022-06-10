<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignInStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $additionalDetails Provides additional details on the sign-in activity
    */
    private ?string $additionalDetails = null;
    
    /**
     * @var int|null $errorCode Provides the 5-6 digit error code that's generated during a sign-in failure. Check out the list of error codes and messages.
    */
    private ?int $errorCode = null;
    
    /**
     * @var string|null $failureReason Provides the error message or the reason for failure for the corresponding sign-in activity. Check out the list of error codes and messages.
    */
    private ?string $failureReason = null;
    
    /**
     * Instantiates a new signInStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignInStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignInStatus {
        return new SignInStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalDetails property value. Provides additional details on the sign-in activity
     * @return string|null
    */
    public function getAdditionalDetails(): ?string {
        return $this->additionalDetails;
    }

    /**
     * Gets the errorCode property value. Provides the 5-6 digit error code that's generated during a sign-in failure. Check out the list of error codes and messages.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * Gets the failureReason property value. Provides the error message or the reason for failure for the corresponding sign-in activity. Check out the list of error codes and messages.
     * @return string|null
    */
    public function getFailureReason(): ?string {
        return $this->failureReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalDetails' => function (ParseNode $n) use ($o) { $o->setAdditionalDetails($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'failureReason' => function (ParseNode $n) use ($o) { $o->setFailureReason($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalDetails', $this->additionalDetails);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeStringValue('failureReason', $this->failureReason);
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
     * Sets the additionalDetails property value. Provides additional details on the sign-in activity
     *  @param string|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?string $value ): void {
        $this->additionalDetails = $value;
    }

    /**
     * Sets the errorCode property value. Provides the 5-6 digit error code that's generated during a sign-in failure. Check out the list of error codes and messages.
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the failureReason property value. Provides the error message or the reason for failure for the corresponding sign-in activity. Check out the list of error codes and messages.
     *  @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value ): void {
        $this->failureReason = $value;
    }

}
