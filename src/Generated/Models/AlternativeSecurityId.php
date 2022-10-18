<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class AlternativeSecurityId implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $identityProvider For internal use only
    */
    private ?string $identityProvider = null;
    
    /**
     * @var StreamInterface|null $key For internal use only
    */
    private ?StreamInterface $key = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $type For internal use only
    */
    private ?int $type = null;
    
    /**
     * Instantiates a new alternativeSecurityId and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.alternativeSecurityId');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlternativeSecurityId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlternativeSecurityId {
        return new AlternativeSecurityId();
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
            'identityProvider' => fn(ParseNode $n) => $o->setIdentityProvider($n->getStringValue()),
            'key' => fn(ParseNode $n) => $o->setKey($n->getBinaryContent()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the identityProvider property value. For internal use only
     * @return string|null
    */
    public function getIdentityProvider(): ?string {
        return $this->identityProvider;
    }

    /**
     * Gets the key property value. For internal use only
     * @return StreamInterface
    */
    public function getKey(): StreamInterface {
        return $this->key;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the type property value. For internal use only
     * @return int|null
    */
    public function getType(): ?int {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('identityProvider', $this->identityProvider);
        $writer->writeBinaryContent('key', $this->key);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('type', $this->type);
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
     * Sets the identityProvider property value. For internal use only
     *  @param string|null $value Value to set for the identityProvider property.
    */
    public function setIdentityProvider(?string $value ): void {
        $this->identityProvider = $value;
    }

    /**
     * Sets the key property value. For internal use only
     *  @param StreamInterface|null $value Value to set for the key property.
    */
    public function setKey(?StreamInterface $value ): void {
        $this->key = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the type property value. For internal use only
     *  @param int|null $value Value to set for the type property.
    */
    public function setType(?int $value ): void {
        $this->type = $value;
    }

}
