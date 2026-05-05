<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WebauthnAuthenticatorSelectionCriteria implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WebauthnAuthenticatorSelectionCriteria and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebauthnAuthenticatorSelectionCriteria
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebauthnAuthenticatorSelectionCriteria {
        return new WebauthnAuthenticatorSelectionCriteria();
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
     * Gets the authenticatorAttachment property value. The authenticatorAttachment property
     * @return string|null
    */
    public function getAuthenticatorAttachment(): ?string {
        $val = $this->getBackingStore()->get('authenticatorAttachment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticatorAttachment'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
            'authenticatorAttachment' => fn(ParseNode $n) => $o->setAuthenticatorAttachment($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'requireResidentKey' => fn(ParseNode $n) => $o->setRequireResidentKey($n->getBooleanValue()),
            'userVerification' => fn(ParseNode $n) => $o->setUserVerification($n->getStringValue()),
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
     * Gets the requireResidentKey property value. The requireResidentKey property
     * @return bool|null
    */
    public function getRequireResidentKey(): ?bool {
        $val = $this->getBackingStore()->get('requireResidentKey');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireResidentKey'");
    }

    /**
     * Gets the userVerification property value. The userVerification property
     * @return string|null
    */
    public function getUserVerification(): ?string {
        $val = $this->getBackingStore()->get('userVerification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userVerification'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('authenticatorAttachment', $this->getAuthenticatorAttachment());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('requireResidentKey', $this->getRequireResidentKey());
        $writer->writeStringValue('userVerification', $this->getUserVerification());
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
     * Sets the authenticatorAttachment property value. The authenticatorAttachment property
     * @param string|null $value Value to set for the authenticatorAttachment property.
    */
    public function setAuthenticatorAttachment(?string $value): void {
        $this->getBackingStore()->set('authenticatorAttachment', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the requireResidentKey property value. The requireResidentKey property
     * @param bool|null $value Value to set for the requireResidentKey property.
    */
    public function setRequireResidentKey(?bool $value): void {
        $this->getBackingStore()->set('requireResidentKey', $value);
    }

    /**
     * Sets the userVerification property value. The userVerification property
     * @param string|null $value Value to set for the userVerification property.
    */
    public function setUserVerification(?string $value): void {
        $this->getBackingStore()->set('userVerification', $value);
    }

}
