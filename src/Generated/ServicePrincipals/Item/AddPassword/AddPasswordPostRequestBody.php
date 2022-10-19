<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\AddPassword;

use Microsoft\Graph\Generated\Models\PasswordCredential;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddPasswordPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PasswordCredential|null $passwordCredential The passwordCredential property
    */
    private ?PasswordCredential $passwordCredential = null;
    
    /**
     * Instantiates a new addPasswordPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddPasswordPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddPasswordPostRequestBody {
        return new AddPasswordPostRequestBody();
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
            'passwordCredential' => fn(ParseNode $n) => $o->setPasswordCredential($n->getObjectValue([PasswordCredential::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the passwordCredential property value. The passwordCredential property
     * @return PasswordCredential|null
    */
    public function getPasswordCredential(): ?PasswordCredential {
        return $this->passwordCredential;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('passwordCredential', $this->passwordCredential);
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
     * Sets the passwordCredential property value. The passwordCredential property
     *  @param PasswordCredential|null $value Value to set for the passwordCredential property.
    */
    public function setPasswordCredential(?PasswordCredential $value ): void {
        $this->passwordCredential = $value;
    }

}
