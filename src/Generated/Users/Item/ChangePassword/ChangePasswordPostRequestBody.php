<?php

namespace Microsoft\Graph\Generated\Users\Item\ChangePassword;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChangePasswordPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new changePasswordPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangePasswordPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChangePasswordPostRequestBody {
        return new ChangePasswordPostRequestBody();
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
     * Gets the currentPassword property value. The currentPassword property
     * @return string|null
    */
    public function getCurrentPassword(): ?string {
        $val = $this->getBackingStore()->get('currentPassword');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentPassword'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentPassword' => fn(ParseNode $n) => $o->setCurrentPassword($n->getStringValue()),
            'newPassword' => fn(ParseNode $n) => $o->setNewPassword($n->getStringValue()),
        ];
    }

    /**
     * Gets the newPassword property value. The newPassword property
     * @return string|null
    */
    public function getNewPassword(): ?string {
        $val = $this->getBackingStore()->get('newPassword');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newPassword'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currentPassword', $this->getCurrentPassword());
        $writer->writeStringValue('newPassword', $this->getNewPassword());
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
     * Sets the currentPassword property value. The currentPassword property
     * @param string|null $value Value to set for the currentPassword property.
    */
    public function setCurrentPassword(?string $value): void {
        $this->getBackingStore()->set('currentPassword', $value);
    }

    /**
     * Sets the newPassword property value. The newPassword property
     * @param string|null $value Value to set for the newPassword property.
    */
    public function setNewPassword(?string $value): void {
        $this->getBackingStore()->set('newPassword', $value);
    }

}
