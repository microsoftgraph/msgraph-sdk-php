<?php

namespace Microsoft\Graph\Generated\Users\Item\ChangePassword;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChangePasswordRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $currentPassword  */
    private ?string $currentPassword = null;
    
    /** @var string|null $newPassword  */
    private ?string $newPassword = null;
    
    /**
     * Instantiates a new changePasswordRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangePasswordRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ChangePasswordRequestBody {
        return new ChangePasswordRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the currentPassword property value. 
     * @return string|null
    */
    public function getCurrentPassword(): ?string {
        return $this->currentPassword;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'currentPassword' => function (self $o, ParseNode $n) { $o->setCurrentPassword($n->getStringValue()); },
            'newPassword' => function (self $o, ParseNode $n) { $o->setNewPassword($n->getStringValue()); },
        ];
    }

    /**
     * Gets the newPassword property value. 
     * @return string|null
    */
    public function getNewPassword(): ?string {
        return $this->newPassword;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currentPassword', $this->currentPassword);
        $writer->writeStringValue('newPassword', $this->newPassword);
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
     * Sets the currentPassword property value. 
     *  @param string|null $value Value to set for the currentPassword property.
    */
    public function setCurrentPassword(?string $value ): void {
        $this->currentPassword = $value;
    }

    /**
     * Sets the newPassword property value. 
     *  @param string|null $value Value to set for the newPassword property.
    */
    public function setNewPassword(?string $value ): void {
        $this->newPassword = $value;
    }

}
