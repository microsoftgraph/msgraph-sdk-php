<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OptionalClaims implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new optionalClaims and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OptionalClaims
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OptionalClaims {
        return new OptionalClaims();
    }

    /**
     * Gets the accessToken property value. The optional claims returned in the JWT access token.
     * @return array<OptionalClaim>|null
    */
    public function getAccessToken(): ?array {
        $val = $this->getBackingStore()->get('accessToken');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OptionalClaim::class);
            /** @var array<OptionalClaim>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessToken'");
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
            'accessToken' => fn(ParseNode $n) => $o->setAccessToken($n->getCollectionOfObjectValues([OptionalClaim::class, 'createFromDiscriminatorValue'])),
            'idToken' => fn(ParseNode $n) => $o->setIdToken($n->getCollectionOfObjectValues([OptionalClaim::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'saml2Token' => fn(ParseNode $n) => $o->setSaml2Token($n->getCollectionOfObjectValues([OptionalClaim::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the idToken property value. The optional claims returned in the JWT ID token.
     * @return array<OptionalClaim>|null
    */
    public function getIdToken(): ?array {
        $val = $this->getBackingStore()->get('idToken');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OptionalClaim::class);
            /** @var array<OptionalClaim>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'idToken'");
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
     * Gets the saml2Token property value. The optional claims returned in the SAML token.
     * @return array<OptionalClaim>|null
    */
    public function getSaml2Token(): ?array {
        $val = $this->getBackingStore()->get('saml2Token');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OptionalClaim::class);
            /** @var array<OptionalClaim>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'saml2Token'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('accessToken', $this->getAccessToken());
        $writer->writeCollectionOfObjectValues('idToken', $this->getIdToken());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('saml2Token', $this->getSaml2Token());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessToken property value. The optional claims returned in the JWT access token.
     * @param array<OptionalClaim>|null $value Value to set for the accessToken property.
    */
    public function setAccessToken(?array $value): void {
        $this->getBackingStore()->set('accessToken', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the idToken property value. The optional claims returned in the JWT ID token.
     * @param array<OptionalClaim>|null $value Value to set for the idToken property.
    */
    public function setIdToken(?array $value): void {
        $this->getBackingStore()->set('idToken', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the saml2Token property value. The optional claims returned in the SAML token.
     * @param array<OptionalClaim>|null $value Value to set for the saml2Token property.
    */
    public function setSaml2Token(?array $value): void {
        $this->getBackingStore()->set('saml2Token', $value);
    }

}
