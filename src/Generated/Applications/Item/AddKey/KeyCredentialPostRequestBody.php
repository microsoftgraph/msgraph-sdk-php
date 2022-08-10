<?php

namespace Microsoft\Graph\Generated\Applications\Item\AddKey;

use Microsoft\Graph\Generated\Models\KeyCredential;
use Microsoft\Graph\Generated\Models\PasswordCredential;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class KeyCredentialPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var KeyCredential|null $keyCredential The keyCredential property
    */
    private ?KeyCredential $keyCredential = null;
    
    /**
     * @var PasswordCredential|null $passwordCredential The passwordCredential property
    */
    private ?PasswordCredential $passwordCredential = null;
    
    /**
     * @var string|null $proof The proof property
    */
    private ?string $proof = null;
    
    /**
     * Instantiates a new KeyCredentialPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KeyCredentialPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KeyCredentialPostRequestBody {
        return new KeyCredentialPostRequestBody();
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
            'keyCredential' => function (ParseNode $n) use ($o) { $o->setKeyCredential($n->getObjectValue(array(KeyCredential::class, 'createFromDiscriminatorValue'))); },
            'passwordCredential' => function (ParseNode $n) use ($o) { $o->setPasswordCredential($n->getObjectValue(array(PasswordCredential::class, 'createFromDiscriminatorValue'))); },
            'proof' => function (ParseNode $n) use ($o) { $o->setProof($n->getStringValue()); },
        ];
    }

    /**
     * Gets the keyCredential property value. The keyCredential property
     * @return KeyCredential|null
    */
    public function getKeyCredential(): ?KeyCredential {
        return $this->keyCredential;
    }

    /**
     * Gets the passwordCredential property value. The passwordCredential property
     * @return PasswordCredential|null
    */
    public function getPasswordCredential(): ?PasswordCredential {
        return $this->passwordCredential;
    }

    /**
     * Gets the proof property value. The proof property
     * @return string|null
    */
    public function getProof(): ?string {
        return $this->proof;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('keyCredential', $this->keyCredential);
        $writer->writeObjectValue('passwordCredential', $this->passwordCredential);
        $writer->writeStringValue('proof', $this->proof);
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
     * Sets the keyCredential property value. The keyCredential property
     *  @param KeyCredential|null $value Value to set for the keyCredential property.
    */
    public function setKeyCredential(?KeyCredential $value ): void {
        $this->keyCredential = $value;
    }

    /**
     * Sets the passwordCredential property value. The passwordCredential property
     *  @param PasswordCredential|null $value Value to set for the passwordCredential property.
    */
    public function setPasswordCredential(?PasswordCredential $value ): void {
        $this->passwordCredential = $value;
    }

    /**
     * Sets the proof property value. The proof property
     *  @param string|null $value Value to set for the proof property.
    */
    public function setProof(?string $value ): void {
        $this->proof = $value;
    }

}
