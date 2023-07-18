<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleManagedIdentityProvider extends IdentityProviderBase implements Parsable 
{
    /**
     * Instantiates a new appleManagedIdentityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appleManagedIdentityProvider');
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
     * Gets the certificateData property value. The certificate data, which is a long string of text from the certificate. Can be null.
     * @return string|null
    */
    public function getCertificateData(): ?string {
        $val = $this->getBackingStore()->get('certificateData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateData'");
    }

    /**
     * Gets the developerId property value. The Apple developer identifier. Required.
     * @return string|null
    */
    public function getDeveloperId(): ?string {
        $val = $this->getBackingStore()->get('developerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'developerId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateData' => fn(ParseNode $n) => $o->setCertificateData($n->getStringValue()),
            'developerId' => fn(ParseNode $n) => $o->setDeveloperId($n->getStringValue()),
            'keyId' => fn(ParseNode $n) => $o->setKeyId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'serviceId' => fn(ParseNode $n) => $o->setServiceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the keyId property value. The Apple key identifier. Required.
     * @return string|null
    */
    public function getKeyId(): ?string {
        $val = $this->getBackingStore()->get('keyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyId'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the serviceId property value. The Apple service identifier. Required.
     * @return string|null
    */
    public function getServiceId(): ?string {
        $val = $this->getBackingStore()->get('serviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificateData', $this->getCertificateData());
        $writer->writeStringValue('developerId', $this->getDeveloperId());
        $writer->writeStringValue('keyId', $this->getKeyId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('serviceId', $this->getServiceId());
    }

    /**
     * Sets the certificateData property value. The certificate data, which is a long string of text from the certificate. Can be null.
     * @param string|null $value Value to set for the certificateData property.
    */
    public function setCertificateData(?string $value): void {
        $this->getBackingStore()->set('certificateData', $value);
    }

    /**
     * Sets the developerId property value. The Apple developer identifier. Required.
     * @param string|null $value Value to set for the developerId property.
    */
    public function setDeveloperId(?string $value): void {
        $this->getBackingStore()->set('developerId', $value);
    }

    /**
     * Sets the keyId property value. The Apple key identifier. Required.
     * @param string|null $value Value to set for the keyId property.
    */
    public function setKeyId(?string $value): void {
        $this->getBackingStore()->set('keyId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the serviceId property value. The Apple service identifier. Required.
     * @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value): void {
        $this->getBackingStore()->set('serviceId', $value);
    }

}
