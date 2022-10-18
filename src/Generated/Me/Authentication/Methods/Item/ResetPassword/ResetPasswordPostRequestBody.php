<?php

namespace Microsoft\Graph\Generated\Me\Authentication\Methods\Item\ResetPassword;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResetPasswordPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $newPassword The newPassword property
    */
    private ?string $newPassword = null;
    
    /**
     * @var bool|null $requireChangeOnNextSignIn The requireChangeOnNextSignIn property
    */
    private ?bool $requireChangeOnNextSignIn = null;
    
    /**
     * Instantiates a new resetPasswordPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResetPasswordPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResetPasswordPostRequestBody {
        return new ResetPasswordPostRequestBody();
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
            'newPassword' => fn(ParseNode $n) => $o->setNewPassword($n->getStringValue()),
            'requireChangeOnNextSignIn' => fn(ParseNode $n) => $o->setRequireChangeOnNextSignIn($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the newPassword property value. The newPassword property
     * @return string|null
    */
    public function getNewPassword(): ?string {
        return $this->newPassword;
    }

    /**
     * Gets the requireChangeOnNextSignIn property value. The requireChangeOnNextSignIn property
     * @return bool|null
    */
    public function getRequireChangeOnNextSignIn(): ?bool {
        return $this->requireChangeOnNextSignIn;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('newPassword', $this->newPassword);
        $writer->writeBooleanValue('requireChangeOnNextSignIn', $this->requireChangeOnNextSignIn);
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
     * Sets the newPassword property value. The newPassword property
     *  @param string|null $value Value to set for the newPassword property.
    */
    public function setNewPassword(?string $value ): void {
        $this->newPassword = $value;
    }

    /**
     * Sets the requireChangeOnNextSignIn property value. The requireChangeOnNextSignIn property
     *  @param bool|null $value Value to set for the requireChangeOnNextSignIn property.
    */
    public function setRequireChangeOnNextSignIn(?bool $value ): void {
        $this->requireChangeOnNextSignIn = $value;
    }

}
