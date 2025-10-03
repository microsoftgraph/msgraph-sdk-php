<?php

namespace Microsoft\\Graph\\Generated\Teams\Item\SendActivityNotification;

use Microsoft\\Graph\\Generated\Models\ItemBody;
use Microsoft\\Graph\\Generated\Models\KeyValuePair;
use Microsoft\\Graph\\Generated\Models\TeamworkActivityTopic;
use Microsoft\\Graph\\Generated\Models\TeamworkNotificationRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SendActivityNotificationPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SendActivityNotificationPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendActivityNotificationPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendActivityNotificationPostRequestBody {
        return new SendActivityNotificationPostRequestBody();
    }

    /**
     * Gets the activityType property value. The activityType property
     * @return string|null
    */
    public function getActivityType(): ?string {
        $val = $this->getBackingStore()->get('activityType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityType'");
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
     * Gets the chainId property value. The chainId property
     * @return int|null
    */
    public function getChainId(): ?int {
        $val = $this->getBackingStore()->get('chainId');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chainId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activityType' => fn(ParseNode $n) => $o->setActivityType($n->getStringValue()),
            'chainId' => fn(ParseNode $n) => $o->setChainId($n->getIntegerValue()),
            'iconId' => fn(ParseNode $n) => $o->setIconId($n->getStringValue()),
            'previewText' => fn(ParseNode $n) => $o->setPreviewText($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'recipient' => fn(ParseNode $n) => $o->setRecipient($n->getObjectValue([TeamworkNotificationRecipient::class, 'createFromDiscriminatorValue'])),
            'teamsAppId' => fn(ParseNode $n) => $o->setTeamsAppId($n->getStringValue()),
            'templateParameters' => fn(ParseNode $n) => $o->setTemplateParameters($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'topic' => fn(ParseNode $n) => $o->setTopic($n->getObjectValue([TeamworkActivityTopic::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the iconId property value. The iconId property
     * @return string|null
    */
    public function getIconId(): ?string {
        $val = $this->getBackingStore()->get('iconId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iconId'");
    }

    /**
     * Gets the previewText property value. The previewText property
     * @return ItemBody|null
    */
    public function getPreviewText(): ?ItemBody {
        $val = $this->getBackingStore()->get('previewText');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previewText'");
    }

    /**
     * Gets the recipient property value. The recipient property
     * @return TeamworkNotificationRecipient|null
    */
    public function getRecipient(): ?TeamworkNotificationRecipient {
        $val = $this->getBackingStore()->get('recipient');
        if (is_null($val) || $val instanceof TeamworkNotificationRecipient) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipient'");
    }

    /**
     * Gets the teamsAppId property value. The teamsAppId property
     * @return string|null
    */
    public function getTeamsAppId(): ?string {
        $val = $this->getBackingStore()->get('teamsAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsAppId'");
    }

    /**
     * Gets the templateParameters property value. The templateParameters property
     * @return array<KeyValuePair>|null
    */
    public function getTemplateParameters(): ?array {
        $val = $this->getBackingStore()->get('templateParameters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateParameters'");
    }

    /**
     * Gets the topic property value. The topic property
     * @return TeamworkActivityTopic|null
    */
    public function getTopic(): ?TeamworkActivityTopic {
        $val = $this->getBackingStore()->get('topic');
        if (is_null($val) || $val instanceof TeamworkActivityTopic) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topic'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('activityType', $this->getActivityType());
        $writer->writeIntegerValue('chainId', $this->getChainId());
        $writer->writeStringValue('iconId', $this->getIconId());
        $writer->writeObjectValue('previewText', $this->getPreviewText());
        $writer->writeObjectValue('recipient', $this->getRecipient());
        $writer->writeStringValue('teamsAppId', $this->getTeamsAppId());
        $writer->writeCollectionOfObjectValues('templateParameters', $this->getTemplateParameters());
        $writer->writeObjectValue('topic', $this->getTopic());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activityType property value. The activityType property
     * @param string|null $value Value to set for the activityType property.
    */
    public function setActivityType(?string $value): void {
        $this->getBackingStore()->set('activityType', $value);
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
     * Sets the chainId property value. The chainId property
     * @param int|null $value Value to set for the chainId property.
    */
    public function setChainId(?int $value): void {
        $this->getBackingStore()->set('chainId', $value);
    }

    /**
     * Sets the iconId property value. The iconId property
     * @param string|null $value Value to set for the iconId property.
    */
    public function setIconId(?string $value): void {
        $this->getBackingStore()->set('iconId', $value);
    }

    /**
     * Sets the previewText property value. The previewText property
     * @param ItemBody|null $value Value to set for the previewText property.
    */
    public function setPreviewText(?ItemBody $value): void {
        $this->getBackingStore()->set('previewText', $value);
    }

    /**
     * Sets the recipient property value. The recipient property
     * @param TeamworkNotificationRecipient|null $value Value to set for the recipient property.
    */
    public function setRecipient(?TeamworkNotificationRecipient $value): void {
        $this->getBackingStore()->set('recipient', $value);
    }

    /**
     * Sets the teamsAppId property value. The teamsAppId property
     * @param string|null $value Value to set for the teamsAppId property.
    */
    public function setTeamsAppId(?string $value): void {
        $this->getBackingStore()->set('teamsAppId', $value);
    }

    /**
     * Sets the templateParameters property value. The templateParameters property
     * @param array<KeyValuePair>|null $value Value to set for the templateParameters property.
    */
    public function setTemplateParameters(?array $value): void {
        $this->getBackingStore()->set('templateParameters', $value);
    }

    /**
     * Sets the topic property value. The topic property
     * @param TeamworkActivityTopic|null $value Value to set for the topic property.
    */
    public function setTopic(?TeamworkActivityTopic $value): void {
        $this->getBackingStore()->set('topic', $value);
    }

}
