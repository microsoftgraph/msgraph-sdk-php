<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Invite;

use Microsoft\Graph\Generated\Models\DriveRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class InvitePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new invitePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitePostRequestBody {
        return new InvitePostRequestBody();
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
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return string|null
    */
    public function getExpirationDateTime(): ?string {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'recipients' => fn(ParseNode $n) => $o->setRecipients($n->getCollectionOfObjectValues([DriveRecipient::class, 'createFromDiscriminatorValue'])),
            'requireSignIn' => fn(ParseNode $n) => $o->setRequireSignIn($n->getBooleanValue()),
            'retainInheritedPermissions' => fn(ParseNode $n) => $o->setRetainInheritedPermissions($n->getBooleanValue()),
            'roles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoles($val);
            },
            'sendInvitation' => fn(ParseNode $n) => $o->setSendInvitation($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
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
     * Gets the recipients property value. The recipients property
     * @return array<DriveRecipient>|null
    */
    public function getRecipients(): ?array {
        $val = $this->getBackingStore()->get('recipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveRecipient::class);
            /** @var array<DriveRecipient>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipients'");
    }

    /**
     * Gets the requireSignIn property value. The requireSignIn property
     * @return bool|null
    */
    public function getRequireSignIn(): ?bool {
        $val = $this->getBackingStore()->get('requireSignIn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireSignIn'");
    }

    /**
     * Gets the retainInheritedPermissions property value. The retainInheritedPermissions property
     * @return bool|null
    */
    public function getRetainInheritedPermissions(): ?bool {
        $val = $this->getBackingStore()->get('retainInheritedPermissions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retainInheritedPermissions'");
    }

    /**
     * Gets the roles property value. The roles property
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        $val = $this->getBackingStore()->get('roles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roles'");
    }

    /**
     * Gets the sendInvitation property value. The sendInvitation property
     * @return bool|null
    */
    public function getSendInvitation(): ?bool {
        $val = $this->getBackingStore()->get('sendInvitation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sendInvitation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeCollectionOfObjectValues('recipients', $this->getRecipients());
        $writer->writeBooleanValue('requireSignIn', $this->getRequireSignIn());
        $writer->writeBooleanValue('retainInheritedPermissions', $this->getRetainInheritedPermissions());
        $writer->writeCollectionOfPrimitiveValues('roles', $this->getRoles());
        $writer->writeBooleanValue('sendInvitation', $this->getSendInvitation());
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
     * Sets the expirationDateTime property value. The expirationDateTime property
     * @param string|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?string $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the password property value. The password property
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->getBackingStore()->set('password', $value);
    }

    /**
     * Sets the recipients property value. The recipients property
     * @param array<DriveRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value): void {
        $this->getBackingStore()->set('recipients', $value);
    }

    /**
     * Sets the requireSignIn property value. The requireSignIn property
     * @param bool|null $value Value to set for the requireSignIn property.
    */
    public function setRequireSignIn(?bool $value): void {
        $this->getBackingStore()->set('requireSignIn', $value);
    }

    /**
     * Sets the retainInheritedPermissions property value. The retainInheritedPermissions property
     * @param bool|null $value Value to set for the retainInheritedPermissions property.
    */
    public function setRetainInheritedPermissions(?bool $value): void {
        $this->getBackingStore()->set('retainInheritedPermissions', $value);
    }

    /**
     * Sets the roles property value. The roles property
     * @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

    /**
     * Sets the sendInvitation property value. The sendInvitation property
     * @param bool|null $value Value to set for the sendInvitation property.
    */
    public function setSendInvitation(?bool $value): void {
        $this->getBackingStore()->set('sendInvitation', $value);
    }

}
