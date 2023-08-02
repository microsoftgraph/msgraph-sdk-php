<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\ApiConnectorConfiguration\PostFederationSignup\UploadClientCertificate;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UploadClientCertificatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new uploadClientCertificatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadClientCertificatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UploadClientCertificatePostRequestBody {
        return new UploadClientCertificatePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'pkcs12Value' => fn(ParseNode $n) => $o->setPkcs12Value($n->getStringValue()),
        ];
    }

    /**
     * Gets the password property value. The password property
     * @return string|null
    */
    public function getPassword(): ?string {
        $val = $this->getBackingStore()->get('password');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'password'");
    }

    /**
     * Gets the pkcs12Value property value. The pkcs12Value property
     * @return string|null
    */
    public function getPkcs12Value(): ?string {
        $val = $this->getBackingStore()->get('pkcs12Value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pkcs12Value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeStringValue('pkcs12Value', $this->getPkcs12Value());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the password property value. The password property
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->getBackingStore()->set('password', $value);
    }

    /**
     * Sets the pkcs12Value property value. The pkcs12Value property
     * @param string|null $value Value to set for the pkcs12Value property.
    */
    public function setPkcs12Value(?string $value): void {
        $this->getBackingStore()->set('pkcs12Value', $value);
    }

}
