<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkforceIntegrationEncryption implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WorkforceIntegrationEncryptionProtocol|null $protocol Possible values are: sharedSecret, unknownFutureValue.
    */
    private ?WorkforceIntegrationEncryptionProtocol $protocol = null;
    
    /**
     * @var string|null $secret Encryption shared secret.
    */
    private ?string $secret = null;
    
    /**
     * Instantiates a new workforceIntegrationEncryption and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkforceIntegrationEncryption
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkforceIntegrationEncryption {
        return new WorkforceIntegrationEncryption();
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
            'protocol' => function (ParseNode $n) use ($o) { $o->setProtocol($n->getEnumValue(WorkforceIntegrationEncryptionProtocol::class)); },
            'secret' => function (ParseNode $n) use ($o) { $o->setSecret($n->getStringValue()); },
        ];
    }

    /**
     * Gets the protocol property value. Possible values are: sharedSecret, unknownFutureValue.
     * @return WorkforceIntegrationEncryptionProtocol|null
    */
    public function getProtocol(): ?WorkforceIntegrationEncryptionProtocol {
        return $this->protocol;
    }

    /**
     * Gets the secret property value. Encryption shared secret.
     * @return string|null
    */
    public function getSecret(): ?string {
        return $this->secret;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('protocol', $this->protocol);
        $writer->writeStringValue('secret', $this->secret);
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
     * Sets the protocol property value. Possible values are: sharedSecret, unknownFutureValue.
     *  @param WorkforceIntegrationEncryptionProtocol|null $value Value to set for the protocol property.
    */
    public function setProtocol(?WorkforceIntegrationEncryptionProtocol $value ): void {
        $this->protocol = $value;
    }

    /**
     * Sets the secret property value. Encryption shared secret.
     *  @param string|null $value Value to set for the secret property.
    */
    public function setSecret(?string $value ): void {
        $this->secret = $value;
    }

}
