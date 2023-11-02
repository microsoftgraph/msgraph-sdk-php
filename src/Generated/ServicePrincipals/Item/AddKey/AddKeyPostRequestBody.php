<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\AddKey;

use Microsoft\Graph\Generated\Models\KeyCredential;
use Microsoft\Graph\Generated\Models\PasswordCredential;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AddKeyPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new addKeyPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddKeyPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddKeyPostRequestBody {
        return new AddKeyPostRequestBody();
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
            'keyCredential' => fn(ParseNode $n) => $o->setKeyCredential($n->getObjectValue([KeyCredential::class, 'createFromDiscriminatorValue'])),
            'passwordCredential' => fn(ParseNode $n) => $o->setPasswordCredential($n->getObjectValue([PasswordCredential::class, 'createFromDiscriminatorValue'])),
            'proof' => fn(ParseNode $n) => $o->setProof($n->getStringValue()),
        ];
    }

    /**
     * Gets the keyCredential property value. The keyCredential property
     * @return KeyCredential|null
    */
    public function getKeyCredential(): ?KeyCredential {
        $val = $this->getBackingStore()->get('keyCredential');
        if (is_null($val) || $val instanceof KeyCredential) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyCredential'");
    }

    /**
     * Gets the passwordCredential property value. The passwordCredential property
     * @return PasswordCredential|null
    */
    public function getPasswordCredential(): ?PasswordCredential {
        $val = $this->getBackingStore()->get('passwordCredential');
        if (is_null($val) || $val instanceof PasswordCredential) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordCredential'");
    }

    /**
     * Gets the proof property value. The proof property
     * @return string|null
    */
    public function getProof(): ?string {
        $val = $this->getBackingStore()->get('proof');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proof'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('keyCredential', $this->getKeyCredential());
        $writer->writeObjectValue('passwordCredential', $this->getPasswordCredential());
        $writer->writeStringValue('proof', $this->getProof());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the keyCredential property value. The keyCredential property
     * @param KeyCredential|null $value Value to set for the keyCredential property.
    */
    public function setKeyCredential(?KeyCredential $value): void {
        $this->getBackingStore()->set('keyCredential', $value);
    }

    /**
     * Sets the passwordCredential property value. The passwordCredential property
     * @param PasswordCredential|null $value Value to set for the passwordCredential property.
    */
    public function setPasswordCredential(?PasswordCredential $value): void {
        $this->getBackingStore()->set('passwordCredential', $value);
    }

    /**
     * Sets the proof property value. The proof property
     * @param string|null $value Value to set for the proof property.
    */
    public function setProof(?string $value): void {
        $this->getBackingStore()->set('proof', $value);
    }

}
