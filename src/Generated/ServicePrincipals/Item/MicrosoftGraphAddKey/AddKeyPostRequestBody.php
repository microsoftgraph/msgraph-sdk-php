<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphAddKey;

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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
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
     * @return array<string, callable>
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
     * Gets the keyCredential property value. 
     * @return KeyCredential|null
    */
    public function getKeyCredential(): ?KeyCredential {
        return $this->getBackingStore()->get('keyCredential');
    }

    /**
     * Gets the passwordCredential property value. 
     * @return PasswordCredential|null
    */
    public function getPasswordCredential(): ?PasswordCredential {
        return $this->getBackingStore()->get('passwordCredential');
    }

    /**
     * Gets the proof property value. 
     * @return string|null
    */
    public function getProof(): ?string {
        return $this->getBackingStore()->get('proof');
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
     * Sets the keyCredential property value. 
     * @param KeyCredential|null $value Value to set for the keyCredential property.
    */
    public function setKeyCredential(?KeyCredential $value): void {
        $this->getBackingStore()->set('keyCredential', $value);
    }

    /**
     * Sets the passwordCredential property value. 
     * @param PasswordCredential|null $value Value to set for the passwordCredential property.
    */
    public function setPasswordCredential(?PasswordCredential $value): void {
        $this->getBackingStore()->set('passwordCredential', $value);
    }

    /**
     * Sets the proof property value. 
     * @param string|null $value Value to set for the proof property.
    */
    public function setProof(?string $value): void {
        $this->getBackingStore()->set('proof', $value);
    }

}
