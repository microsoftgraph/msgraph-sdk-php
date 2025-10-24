<?php

namespace Microsoft\\Graph\\Generated\Chats\Item\MarkChatUnreadForUser;

use DateTime;
use Microsoft\\Graph\\Generated\Models\TeamworkUserIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MarkChatUnreadForUserPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MarkChatUnreadForUserPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MarkChatUnreadForUserPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MarkChatUnreadForUserPostRequestBody {
        return new MarkChatUnreadForUserPostRequestBody();
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
            'lastMessageReadDateTime' => fn(ParseNode $n) => $o->setLastMessageReadDateTime($n->getDateTimeValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([TeamworkUserIdentity::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lastMessageReadDateTime property value. The lastMessageReadDateTime property
     * @return DateTime|null
    */
    public function getLastMessageReadDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastMessageReadDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastMessageReadDateTime'");
    }

    /**
     * Gets the user property value. The user property
     * @return TeamworkUserIdentity|null
    */
    public function getUser(): ?TeamworkUserIdentity {
        $val = $this->getBackingStore()->get('user');
        if (is_null($val) || $val instanceof TeamworkUserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'user'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastMessageReadDateTime', $this->getLastMessageReadDateTime());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the lastMessageReadDateTime property value. The lastMessageReadDateTime property
     * @param DateTime|null $value Value to set for the lastMessageReadDateTime property.
    */
    public function setLastMessageReadDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastMessageReadDateTime', $value);
    }

    /**
     * Sets the user property value. The user property
     * @param TeamworkUserIdentity|null $value Value to set for the user property.
    */
    public function setUser(?TeamworkUserIdentity $value): void {
        $this->getBackingStore()->set('user', $value);
    }

}
