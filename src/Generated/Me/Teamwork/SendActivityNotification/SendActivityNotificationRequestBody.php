<?php

namespace Microsoft\Graph\Generated\Me\Teamwork\SendActivityNotification;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\ItemBody;
use Microsoft\Graph\Generated\Models\Microsoft\Graph\KeyValuePair;
use Microsoft\Graph\Generated\Models\Microsoft\Graph\TeamworkActivityTopic;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendActivityNotificationRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var string|null $activityType  */
    private ?string $activityType = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $chainId  */
    private ?int $chainId = null;
    
    /** @var ItemBody|null $previewText  */
    private ?ItemBody $previewText = null;
    
    /** @var array<KeyValuePair>|null $templateParameters  */
    private ?array $templateParameters = null;
    
    /** @var TeamworkActivityTopic|null $topic  */
    private ?TeamworkActivityTopic $topic = null;
    
    /**
     * Instantiates a new sendActivityNotificationRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendActivityNotificationRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SendActivityNotificationRequestBody {
        return new SendActivityNotificationRequestBody();
    }

    /**
     * Gets the activityType property value. 
     * @return string|null
    */
    public function getActivityType(): ?string {
        return $this->activityType;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the chainId property value. 
     * @return int|null
    */
    public function getChainId(): ?int {
        return $this->chainId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'activityType' => function (self $o, ParseNode $n) { $o->setActivityType($n->getStringValue()); },
            'chainId' => function (self $o, ParseNode $n) { $o->setChainId($n->getIntegerValue()); },
            'previewText' => function (self $o, ParseNode $n) { $o->setPreviewText($n->getObjectValue(ItemBody::class)); },
            'templateParameters' => function (self $o, ParseNode $n) { $o->setTemplateParameters($n->getCollectionOfObjectValues(KeyValuePair::class)); },
            'topic' => function (self $o, ParseNode $n) { $o->setTopic($n->getObjectValue(TeamworkActivityTopic::class)); },
        ];
    }

    /**
     * Gets the previewText property value. 
     * @return ItemBody|null
    */
    public function getPreviewText(): ?ItemBody {
        return $this->previewText;
    }

    /**
     * Gets the templateParameters property value. 
     * @return array<KeyValuePair>|null
    */
    public function getTemplateParameters(): ?array {
        return $this->templateParameters;
    }

    /**
     * Gets the topic property value. 
     * @return TeamworkActivityTopic|null
    */
    public function getTopic(): ?TeamworkActivityTopic {
        return $this->topic;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('activityType', $this->activityType);
        $writer->writeIntegerValue('chainId', $this->chainId);
        $writer->writeObjectValue('previewText', $this->previewText);
        $writer->writeCollectionOfObjectValues('templateParameters', $this->templateParameters);
        $writer->writeObjectValue('topic', $this->topic);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the activityType property value. 
     *  @param string|null $value Value to set for the activityType property.
    */
    public function setActivityType(?string $value ): void {
        $this->activityType = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the chainId property value. 
     *  @param int|null $value Value to set for the chainId property.
    */
    public function setChainId(?int $value ): void {
        $this->chainId = $value;
    }

    /**
     * Sets the previewText property value. 
     *  @param ItemBody|null $value Value to set for the previewText property.
    */
    public function setPreviewText(?ItemBody $value ): void {
        $this->previewText = $value;
    }

    /**
     * Sets the templateParameters property value. 
     *  @param array<KeyValuePair>|null $value Value to set for the templateParameters property.
    */
    public function setTemplateParameters(?array $value ): void {
        $this->templateParameters = $value;
    }

    /**
     * Sets the topic property value. 
     *  @param TeamworkActivityTopic|null $value Value to set for the topic property.
    */
    public function setTopic(?TeamworkActivityTopic $value ): void {
        $this->topic = $value;
    }

}
