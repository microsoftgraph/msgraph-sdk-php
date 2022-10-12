<?php

namespace Microsoft\Graph\Generated\Teamwork\SendActivityNotificationToRecipients;

use Microsoft\Graph\Generated\Models\ItemBody;
use Microsoft\Graph\Generated\Models\KeyValuePair;
use Microsoft\Graph\Generated\Models\TeamworkActivityTopic;
use Microsoft\Graph\Generated\Models\TeamworkNotificationRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendActivityNotificationToRecipientsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $activityType The activityType property
    */
    private ?string $activityType = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $chainId The chainId property
    */
    private ?int $chainId = null;
    
    /**
     * @var ItemBody|null $previewText The previewText property
    */
    private ?ItemBody $previewText = null;
    
    /**
     * @var array<TeamworkNotificationRecipient>|null $recipients The recipients property
    */
    private ?array $recipients = null;
    
    /**
     * @var string|null $teamsAppId The teamsAppId property
    */
    private ?string $teamsAppId = null;
    
    /**
     * @var array<KeyValuePair>|null $templateParameters The templateParameters property
    */
    private ?array $templateParameters = null;
    
    /**
     * @var TeamworkActivityTopic|null $topic The topic property
    */
    private ?TeamworkActivityTopic $topic = null;
    
    /**
     * Instantiates a new sendActivityNotificationToRecipientsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendActivityNotificationToRecipientsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendActivityNotificationToRecipientsPostRequestBody {
        return new SendActivityNotificationToRecipientsPostRequestBody();
    }

    /**
     * Gets the activityType property value. The activityType property
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
     * Gets the chainId property value. The chainId property
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
        $o = $this;
        return  [
            'activityType' => function (ParseNode $n) use ($o) { $o->setActivityType($n->getStringValue()); },
            'chainId' => function (ParseNode $n) use ($o) { $o->setChainId($n->getIntegerValue()); },
            'previewText' => function (ParseNode $n) use ($o) { $o->setPreviewText($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            'recipients' => function (ParseNode $n) use ($o) { $o->setRecipients($n->getCollectionOfObjectValues(array(TeamworkNotificationRecipient::class, 'createFromDiscriminatorValue'))); },
            'teamsAppId' => function (ParseNode $n) use ($o) { $o->setTeamsAppId($n->getStringValue()); },
            'templateParameters' => function (ParseNode $n) use ($o) { $o->setTemplateParameters($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'topic' => function (ParseNode $n) use ($o) { $o->setTopic($n->getObjectValue(array(TeamworkActivityTopic::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the previewText property value. The previewText property
     * @return ItemBody|null
    */
    public function getPreviewText(): ?ItemBody {
        return $this->previewText;
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<TeamworkNotificationRecipient>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Gets the teamsAppId property value. The teamsAppId property
     * @return string|null
    */
    public function getTeamsAppId(): ?string {
        return $this->teamsAppId;
    }

    /**
     * Gets the templateParameters property value. The templateParameters property
     * @return array<KeyValuePair>|null
    */
    public function getTemplateParameters(): ?array {
        return $this->templateParameters;
    }

    /**
     * Gets the topic property value. The topic property
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
        $writer->writeCollectionOfObjectValues('recipients', $this->recipients);
        $writer->writeStringValue('teamsAppId', $this->teamsAppId);
        $writer->writeCollectionOfObjectValues('templateParameters', $this->templateParameters);
        $writer->writeObjectValue('topic', $this->topic);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the activityType property value. The activityType property
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
     * Sets the chainId property value. The chainId property
     *  @param int|null $value Value to set for the chainId property.
    */
    public function setChainId(?int $value ): void {
        $this->chainId = $value;
    }

    /**
     * Sets the previewText property value. The previewText property
     *  @param ItemBody|null $value Value to set for the previewText property.
    */
    public function setPreviewText(?ItemBody $value ): void {
        $this->previewText = $value;
    }

    /**
     * Sets the recipients property value. The recipients property
     *  @param array<TeamworkNotificationRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

    /**
     * Sets the teamsAppId property value. The teamsAppId property
     *  @param string|null $value Value to set for the teamsAppId property.
    */
    public function setTeamsAppId(?string $value ): void {
        $this->teamsAppId = $value;
    }

    /**
     * Sets the templateParameters property value. The templateParameters property
     *  @param array<KeyValuePair>|null $value Value to set for the templateParameters property.
    */
    public function setTemplateParameters(?array $value ): void {
        $this->templateParameters = $value;
    }

    /**
     * Sets the topic property value. The topic property
     *  @param TeamworkActivityTopic|null $value Value to set for the topic property.
    */
    public function setTopic(?TeamworkActivityTopic $value ): void {
        $this->topic = $value;
    }

}
