<?php

namespace Microsoft\Graph\Generated\Applications\Item\RemoveKey;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoveKeyPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $keyId The keyId property
    */
    private ?string $keyId = null;
    
    /**
     * @var string|null $proof The proof property
    */
    private ?string $proof = null;
    
    /**
     * Instantiates a new removeKeyPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoveKeyPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoveKeyPostRequestBody {
        return new RemoveKeyPostRequestBody();
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
            'keyId' => fn(ParseNode $n) => $o->setKeyId($n->getStringValue()),
            'proof' => fn(ParseNode $n) => $o->setProof($n->getStringValue()),
        ];
    }

    /**
     * Gets the keyId property value. The keyId property
     * @return string|null
    */
    public function getKeyId(): ?string {
        return $this->keyId;
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
        $writer->writeStringValue('keyId', $this->keyId);
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
     * Sets the keyId property value. The keyId property
     *  @param string|null $value Value to set for the keyId property.
    */
    public function setKeyId(?string $value ): void {
        $this->keyId = $value;
    }

    /**
     * Sets the proof property value. The proof property
     *  @param string|null $value Value to set for the proof property.
    */
    public function setProof(?string $value ): void {
        $this->proof = $value;
    }

}
