<?php

namespace Microsoft\Graph\Generated\Me\Drives\Item\Items\Item\CreateLink;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CreateLinkPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new createLinkPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateLinkPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateLinkPostRequestBody {
        return new CreateLinkPostRequestBody();
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
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'retainInheritedPermissions' => fn(ParseNode $n) => $o->setRetainInheritedPermissions($n->getBooleanValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->getBackingStore()->get('message');
    }

    /**
     * Gets the password property value. The password property
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->getBackingStore()->get('password');
    }

    /**
     * Gets the retainInheritedPermissions property value. The retainInheritedPermissions property
     * @return bool|null
    */
    public function getRetainInheritedPermissions(): ?bool {
        return $this->getBackingStore()->get('retainInheritedPermissions');
    }

    /**
     * Gets the scope property value. The scope property
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->getBackingStore()->get('scope');
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeBooleanValue('retainInheritedPermissions', $this->getRetainInheritedPermissions());
        $writer->writeStringValue('scope', $this->getScope());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the message property value. The message property
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the password property value. The password property
     *  @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->getBackingStore()->set('password', $value);
    }

    /**
     * Sets the retainInheritedPermissions property value. The retainInheritedPermissions property
     *  @param bool|null $value Value to set for the retainInheritedPermissions property.
    */
    public function setRetainInheritedPermissions(?bool $value): void {
        $this->getBackingStore()->set('retainInheritedPermissions', $value);
    }

    /**
     * Sets the scope property value. The scope property
     *  @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
