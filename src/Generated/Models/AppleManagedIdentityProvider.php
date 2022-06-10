<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleManagedIdentityProvider extends IdentityProviderBase implements Parsable 
{
    /**
     * @var string|null $certificateData The certificate data which is a long string of text from the certificate, can be null.
    */
    private ?string $certificateData = null;
    
    /**
     * @var string|null $developerId The Apple developer identifier. Required.
    */
    private ?string $developerId = null;
    
    /**
     * @var string|null $keyId The Apple key identifier. Required.
    */
    private ?string $keyId = null;
    
    /**
     * @var string|null $serviceId The Apple service identifier. Required.
    */
    private ?string $serviceId = null;
    
    /**
     * Instantiates a new AppleManagedIdentityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleManagedIdentityProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleManagedIdentityProvider {
        return new AppleManagedIdentityProvider();
    }

    /**
     * Gets the certificateData property value. The certificate data which is a long string of text from the certificate, can be null.
     * @return string|null
    */
    public function getCertificateData(): ?string {
        return $this->certificateData;
    }

    /**
     * Gets the developerId property value. The Apple developer identifier. Required.
     * @return string|null
    */
    public function getDeveloperId(): ?string {
        return $this->developerId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateData' => function (ParseNode $n) use ($o) { $o->setCertificateData($n->getStringValue()); },
            'developerId' => function (ParseNode $n) use ($o) { $o->setDeveloperId($n->getStringValue()); },
            'keyId' => function (ParseNode $n) use ($o) { $o->setKeyId($n->getStringValue()); },
            'serviceId' => function (ParseNode $n) use ($o) { $o->setServiceId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the keyId property value. The Apple key identifier. Required.
     * @return string|null
    */
    public function getKeyId(): ?string {
        return $this->keyId;
    }

    /**
     * Gets the serviceId property value. The Apple service identifier. Required.
     * @return string|null
    */
    public function getServiceId(): ?string {
        return $this->serviceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificateData', $this->certificateData);
        $writer->writeStringValue('developerId', $this->developerId);
        $writer->writeStringValue('keyId', $this->keyId);
        $writer->writeStringValue('serviceId', $this->serviceId);
    }

    /**
     * Sets the certificateData property value. The certificate data which is a long string of text from the certificate, can be null.
     *  @param string|null $value Value to set for the certificateData property.
    */
    public function setCertificateData(?string $value ): void {
        $this->certificateData = $value;
    }

    /**
     * Sets the developerId property value. The Apple developer identifier. Required.
     *  @param string|null $value Value to set for the developerId property.
    */
    public function setDeveloperId(?string $value ): void {
        $this->developerId = $value;
    }

    /**
     * Sets the keyId property value. The Apple key identifier. Required.
     *  @param string|null $value Value to set for the keyId property.
    */
    public function setKeyId(?string $value ): void {
        $this->keyId = $value;
    }

    /**
     * Sets the serviceId property value. The Apple service identifier. Required.
     *  @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value ): void {
        $this->serviceId = $value;
    }

}
