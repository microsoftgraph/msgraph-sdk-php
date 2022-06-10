<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsTabConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $contentUrl Url used for rendering tab contents in Teams. Required.
    */
    private ?string $contentUrl = null;
    
    /**
     * @var string|null $entityId Identifier for the entity hosted by the tab provider.
    */
    private ?string $entityId = null;
    
    /**
     * @var string|null $removeUrl Url called by Teams client when a Tab is removed using the Teams Client.
    */
    private ?string $removeUrl = null;
    
    /**
     * @var string|null $websiteUrl Url for showing tab contents outside of Teams.
    */
    private ?string $websiteUrl = null;
    
    /**
     * Instantiates a new teamsTabConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsTabConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsTabConfiguration {
        return new TeamsTabConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentUrl property value. Url used for rendering tab contents in Teams. Required.
     * @return string|null
    */
    public function getContentUrl(): ?string {
        return $this->contentUrl;
    }

    /**
     * Gets the entityId property value. Identifier for the entity hosted by the tab provider.
     * @return string|null
    */
    public function getEntityId(): ?string {
        return $this->entityId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentUrl' => function (ParseNode $n) use ($o) { $o->setContentUrl($n->getStringValue()); },
            'entityId' => function (ParseNode $n) use ($o) { $o->setEntityId($n->getStringValue()); },
            'removeUrl' => function (ParseNode $n) use ($o) { $o->setRemoveUrl($n->getStringValue()); },
            'websiteUrl' => function (ParseNode $n) use ($o) { $o->setWebsiteUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the removeUrl property value. Url called by Teams client when a Tab is removed using the Teams Client.
     * @return string|null
    */
    public function getRemoveUrl(): ?string {
        return $this->removeUrl;
    }

    /**
     * Gets the websiteUrl property value. Url for showing tab contents outside of Teams.
     * @return string|null
    */
    public function getWebsiteUrl(): ?string {
        return $this->websiteUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentUrl', $this->contentUrl);
        $writer->writeStringValue('entityId', $this->entityId);
        $writer->writeStringValue('removeUrl', $this->removeUrl);
        $writer->writeStringValue('websiteUrl', $this->websiteUrl);
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
     * Sets the contentUrl property value. Url used for rendering tab contents in Teams. Required.
     *  @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value ): void {
        $this->contentUrl = $value;
    }

    /**
     * Sets the entityId property value. Identifier for the entity hosted by the tab provider.
     *  @param string|null $value Value to set for the entityId property.
    */
    public function setEntityId(?string $value ): void {
        $this->entityId = $value;
    }

    /**
     * Sets the removeUrl property value. Url called by Teams client when a Tab is removed using the Teams Client.
     *  @param string|null $value Value to set for the removeUrl property.
    */
    public function setRemoveUrl(?string $value ): void {
        $this->removeUrl = $value;
    }

    /**
     * Sets the websiteUrl property value. Url for showing tab contents outside of Teams.
     *  @param string|null $value Value to set for the websiteUrl property.
    */
    public function setWebsiteUrl(?string $value ): void {
        $this->websiteUrl = $value;
    }

}
