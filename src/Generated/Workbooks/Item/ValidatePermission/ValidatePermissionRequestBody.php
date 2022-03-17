<?php

namespace Microsoft\Graph\Generated\Workbooks\Item\ValidatePermission;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ValidatePermissionRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $challengeToken  */
    private ?string $challengeToken = null;
    
    /** @var string|null $password  */
    private ?string $password = null;
    
    /**
     * Instantiates a new validatePermissionRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidatePermissionRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ValidatePermissionRequestBody {
        return new ValidatePermissionRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the challengeToken property value. 
     * @return string|null
    */
    public function getChallengeToken(): ?string {
        return $this->challengeToken;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'challengeToken' => function (self $o, ParseNode $n) { $o->setChallengeToken($n->getStringValue()); },
            'password' => function (self $o, ParseNode $n) { $o->setPassword($n->getStringValue()); },
        ];
    }

    /**
     * Gets the password property value. 
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('challengeToken', $this->challengeToken);
        $writer->writeStringValue('password', $this->password);
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
     * Sets the challengeToken property value. 
     *  @param string|null $value Value to set for the challengeToken property.
    */
    public function setChallengeToken(?string $value ): void {
        $this->challengeToken = $value;
    }

    /**
     * Sets the password property value. 
     *  @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value ): void {
        $this->password = $value;
    }

}
