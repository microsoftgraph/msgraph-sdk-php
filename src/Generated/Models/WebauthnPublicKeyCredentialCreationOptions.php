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

class WebauthnPublicKeyCredentialCreationOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WebauthnPublicKeyCredentialCreationOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebauthnPublicKeyCredentialCreationOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebauthnPublicKeyCredentialCreationOptions {
        return new WebauthnPublicKeyCredentialCreationOptions();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the attestation property value. The attestation property
     * @return string|null
    */
    public function getAttestation(): ?string {
        $val = $this->getBackingStore()->get('attestation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attestation'");
    }

    /**
     * Gets the authenticatorSelection property value. The authenticatorSelection property
     * @return WebauthnAuthenticatorSelectionCriteria|null
    */
    public function getAuthenticatorSelection(): ?WebauthnAuthenticatorSelectionCriteria {
        $val = $this->getBackingStore()->get('authenticatorSelection');
        if (is_null($val) || $val instanceof WebauthnAuthenticatorSelectionCriteria) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticatorSelection'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the challenge property value. The challenge property
     * @return string|null
    */
    public function getChallenge(): ?string {
        $val = $this->getBackingStore()->get('challenge');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'challenge'");
    }

    /**
     * Gets the excludeCredentials property value. The excludeCredentials property
     * @return array<WebauthnPublicKeyCredentialDescriptor>|null
    */
    public function getExcludeCredentials(): ?array {
        $val = $this->getBackingStore()->get('excludeCredentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebauthnPublicKeyCredentialDescriptor::class);
            /** @var array<WebauthnPublicKeyCredentialDescriptor>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeCredentials'");
    }

    /**
     * Gets the extensions property value. The extensions property
     * @return WebauthnAuthenticationExtensionsClientInputs|null
    */
    public function getExtensions(): ?WebauthnAuthenticationExtensionsClientInputs {
        $val = $this->getBackingStore()->get('extensions');
        if (is_null($val) || $val instanceof WebauthnAuthenticationExtensionsClientInputs) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attestation' => fn(ParseNode $n) => $o->setAttestation($n->getStringValue()),
            'authenticatorSelection' => fn(ParseNode $n) => $o->setAuthenticatorSelection($n->getObjectValue([WebauthnAuthenticatorSelectionCriteria::class, 'createFromDiscriminatorValue'])),
            'challenge' => fn(ParseNode $n) => $o->setChallenge($n->getStringValue()),
            'excludeCredentials' => fn(ParseNode $n) => $o->setExcludeCredentials($n->getCollectionOfObjectValues([WebauthnPublicKeyCredentialDescriptor::class, 'createFromDiscriminatorValue'])),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getObjectValue([WebauthnAuthenticationExtensionsClientInputs::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pubKeyCredParams' => fn(ParseNode $n) => $o->setPubKeyCredParams($n->getCollectionOfObjectValues([WebauthnPublicKeyCredentialParameters::class, 'createFromDiscriminatorValue'])),
            'rp' => fn(ParseNode $n) => $o->setRp($n->getObjectValue([WebauthnPublicKeyCredentialRpEntity::class, 'createFromDiscriminatorValue'])),
            'timeout' => fn(ParseNode $n) => $o->setTimeout($n->getIntegerValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([WebauthnPublicKeyCredentialUserEntity::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the pubKeyCredParams property value. The pubKeyCredParams property
     * @return array<WebauthnPublicKeyCredentialParameters>|null
    */
    public function getPubKeyCredParams(): ?array {
        $val = $this->getBackingStore()->get('pubKeyCredParams');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebauthnPublicKeyCredentialParameters::class);
            /** @var array<WebauthnPublicKeyCredentialParameters>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pubKeyCredParams'");
    }

    /**
     * Gets the rp property value. The rp property
     * @return WebauthnPublicKeyCredentialRpEntity|null
    */
    public function getRp(): ?WebauthnPublicKeyCredentialRpEntity {
        $val = $this->getBackingStore()->get('rp');
        if (is_null($val) || $val instanceof WebauthnPublicKeyCredentialRpEntity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rp'");
    }

    /**
     * Gets the timeout property value. The timeout property
     * @return int|null
    */
    public function getTimeout(): ?int {
        $val = $this->getBackingStore()->get('timeout');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeout'");
    }

    /**
     * Gets the user property value. The user property
     * @return WebauthnPublicKeyCredentialUserEntity|null
    */
    public function getUser(): ?WebauthnPublicKeyCredentialUserEntity {
        $val = $this->getBackingStore()->get('user');
        if (is_null($val) || $val instanceof WebauthnPublicKeyCredentialUserEntity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'user'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('attestation', $this->getAttestation());
        $writer->writeObjectValue('authenticatorSelection', $this->getAuthenticatorSelection());
        $writer->writeStringValue('challenge', $this->getChallenge());
        $writer->writeCollectionOfObjectValues('excludeCredentials', $this->getExcludeCredentials());
        $writer->writeObjectValue('extensions', $this->getExtensions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('pubKeyCredParams', $this->getPubKeyCredParams());
        $writer->writeObjectValue('rp', $this->getRp());
        $writer->writeIntegerValue('timeout', $this->getTimeout());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attestation property value. The attestation property
     * @param string|null $value Value to set for the attestation property.
    */
    public function setAttestation(?string $value): void {
        $this->getBackingStore()->set('attestation', $value);
    }

    /**
     * Sets the authenticatorSelection property value. The authenticatorSelection property
     * @param WebauthnAuthenticatorSelectionCriteria|null $value Value to set for the authenticatorSelection property.
    */
    public function setAuthenticatorSelection(?WebauthnAuthenticatorSelectionCriteria $value): void {
        $this->getBackingStore()->set('authenticatorSelection', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the challenge property value. The challenge property
     * @param string|null $value Value to set for the challenge property.
    */
    public function setChallenge(?string $value): void {
        $this->getBackingStore()->set('challenge', $value);
    }

    /**
     * Sets the excludeCredentials property value. The excludeCredentials property
     * @param array<WebauthnPublicKeyCredentialDescriptor>|null $value Value to set for the excludeCredentials property.
    */
    public function setExcludeCredentials(?array $value): void {
        $this->getBackingStore()->set('excludeCredentials', $value);
    }

    /**
     * Sets the extensions property value. The extensions property
     * @param WebauthnAuthenticationExtensionsClientInputs|null $value Value to set for the extensions property.
    */
    public function setExtensions(?WebauthnAuthenticationExtensionsClientInputs $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pubKeyCredParams property value. The pubKeyCredParams property
     * @param array<WebauthnPublicKeyCredentialParameters>|null $value Value to set for the pubKeyCredParams property.
    */
    public function setPubKeyCredParams(?array $value): void {
        $this->getBackingStore()->set('pubKeyCredParams', $value);
    }

    /**
     * Sets the rp property value. The rp property
     * @param WebauthnPublicKeyCredentialRpEntity|null $value Value to set for the rp property.
    */
    public function setRp(?WebauthnPublicKeyCredentialRpEntity $value): void {
        $this->getBackingStore()->set('rp', $value);
    }

    /**
     * Sets the timeout property value. The timeout property
     * @param int|null $value Value to set for the timeout property.
    */
    public function setTimeout(?int $value): void {
        $this->getBackingStore()->set('timeout', $value);
    }

    /**
     * Sets the user property value. The user property
     * @param WebauthnPublicKeyCredentialUserEntity|null $value Value to set for the user property.
    */
    public function setUser(?WebauthnPublicKeyCredentialUserEntity $value): void {
        $this->getBackingStore()->set('user', $value);
    }

}
