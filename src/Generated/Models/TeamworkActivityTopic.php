<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkActivityTopic implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkActivityTopicSource|null $source Type of source. Possible values are: entityUrl, text. For supported Microsoft Graph URLs, use entityUrl. For custom text, use text.
    */
    private ?TeamworkActivityTopicSource $source = null;
    
    /**
     * @var string|null $value The topic value. If the value of the source property is entityUrl, this must be a Microsoft Graph URL. If the vaule is text, this must be a plain text value.
    */
    private ?string $value = null;
    
    /**
     * @var string|null $webUrl The link the user clicks when they select the notification. Optional when source is entityUrl; required when source is text.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new teamworkActivityTopic and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkActivityTopic
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkActivityTopic {
        return new TeamworkActivityTopic();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getEnumValue(TeamworkActivityTopicSource::class)); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the source property value. Type of source. Possible values are: entityUrl, text. For supported Microsoft Graph URLs, use entityUrl. For custom text, use text.
     * @return TeamworkActivityTopicSource|null
    */
    public function getSource(): ?TeamworkActivityTopicSource {
        return $this->source;
    }

    /**
     * Gets the value property value. The topic value. If the value of the source property is entityUrl, this must be a Microsoft Graph URL. If the vaule is text, this must be a plain text value.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Gets the webUrl property value. The link the user clicks when they select the notification. Optional when source is entityUrl; required when source is text.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('source', $this->source);
        $writer->writeStringValue('value', $this->value);
        $writer->writeStringValue('webUrl', $this->webUrl);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the source property value. Type of source. Possible values are: entityUrl, text. For supported Microsoft Graph URLs, use entityUrl. For custom text, use text.
     *  @param TeamworkActivityTopicSource|null $value Value to set for the source property.
    */
    public function setSource(?TeamworkActivityTopicSource $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the value property value. The topic value. If the value of the source property is entityUrl, this must be a Microsoft Graph URL. If the vaule is text, this must be a plain text value.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

    /**
     * Sets the webUrl property value. The link the user clicks when they select the notification. Optional when source is entityUrl; required when source is text.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
