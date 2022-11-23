<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\SendActivityNotification;

use Microsoft\Graph\Generated\Models\ItemBody;
use Microsoft\Graph\Generated\Models\KeyValuePair;
use Microsoft\Graph\Generated\Models\TeamworkActivityTopic;
use Microsoft\Graph\Generated\Models\TeamworkNotificationRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SendActivityNotificationPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new sendActivityNotificationPostRequestBody and sets the default values.
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
        return $this->getBackingStore()->get('activityType');
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
     * Gets the chainId property value. The chainId property
     * @return int|null
    */
    public function getChainId(): ?int {
        return $this->getBackingStore()->get('chainId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activityType' => fn(ParseNode $n) => $o->setActivityType($n->getStringValue()),
            'chainId' => fn(ParseNode $n) => $o->setChainId($n->getIntegerValue()),
            'previewText' => fn(ParseNode $n) => $o->setPreviewText($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'recipient' => fn(ParseNode $n) => $o->setRecipient($n->getObjectValue([TeamworkNotificationRecipient::class, 'createFromDiscriminatorValue'])),
            'templateParameters' => fn(ParseNode $n) => $o->setTemplateParameters($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'topic' => fn(ParseNode $n) => $o->setTopic($n->getObjectValue([TeamworkActivityTopic::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the previewText property value. The previewText property
     * @return ItemBody|null
    */
    public function getPreviewText(): ?ItemBody {
        return $this->getBackingStore()->get('previewText');
    }

    /**
     * Gets the recipient property value. The recipient property
     * @return TeamworkNotificationRecipient|null
    */
    public function getRecipient(): ?TeamworkNotificationRecipient {
        return $this->getBackingStore()->get('recipient');
    }

    /**
     * Gets the templateParameters property value. The templateParameters property
     * @return array<KeyValuePair>|null
    */
    public function getTemplateParameters(): ?array {
        return $this->getBackingStore()->get('templateParameters');
    }

    /**
     * Gets the topic property value. The topic property
     * @return TeamworkActivityTopic|null
    */
    public function getTopic(): ?TeamworkActivityTopic {
        return $this->getBackingStore()->get('topic');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('activityType', $this->getActivityType());
        $writer->writeIntegerValue('chainId', $this->getChainId());
        $writer->writeObjectValue('previewText', $this->getPreviewText());
        $writer->writeObjectValue('recipient', $this->getRecipient());
        $writer->writeCollectionOfObjectValues('templateParameters', $this->getTemplateParameters());
        $writer->writeObjectValue('topic', $this->getTopic());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activityType property value. The activityType property
     *  @param string|null $value Value to set for the activityType property.
    */
    public function setActivityType(?string $value): void {
        $this->getBackingStore()->set('activityType', $value);
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
     * Sets the chainId property value. The chainId property
     *  @param int|null $value Value to set for the chainId property.
    */
    public function setChainId(?int $value): void {
        $this->getBackingStore()->set('chainId', $value);
    }

    /**
     * Sets the previewText property value. The previewText property
     *  @param ItemBody|null $value Value to set for the previewText property.
    */
    public function setPreviewText(?ItemBody $value): void {
        $this->getBackingStore()->set('previewText', $value);
    }

    /**
     * Sets the recipient property value. The recipient property
     *  @param TeamworkNotificationRecipient|null $value Value to set for the recipient property.
    */
    public function setRecipient(?TeamworkNotificationRecipient $value): void {
        $this->getBackingStore()->set('recipient', $value);
    }

    /**
     * Sets the templateParameters property value. The templateParameters property
     *  @param array<KeyValuePair>|null $value Value to set for the templateParameters property.
    */
    public function setTemplateParameters(?array $value): void {
        $this->getBackingStore()->set('templateParameters', $value);
    }

    /**
     * Sets the topic property value. The topic property
     *  @param TeamworkActivityTopic|null $value Value to set for the topic property.
    */
    public function setTopic(?TeamworkActivityTopic $value): void {
        $this->getBackingStore()->set('topic', $value);
    }

}
