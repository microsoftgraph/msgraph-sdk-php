<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationTeamsAppResource extends EducationResource implements Parsable 
{
    /**
     * @var string|null $appIconWebUrl URL that points to the app's icon.
    */
    private ?string $appIconWebUrl = null;
    
    /**
     * @var string|null $appId Teams App ID of the application.
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $teamsEmbeddedContentUrl URL for the app resource that will be opened by Teams.
    */
    private ?string $teamsEmbeddedContentUrl = null;
    
    /**
     * @var string|null $webUrl URL for the app resource that can be opened in the browser.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new EducationTeamsAppResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationTeamsAppResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationTeamsAppResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationTeamsAppResource {
        return new EducationTeamsAppResource();
    }

    /**
     * Gets the appIconWebUrl property value. URL that points to the app's icon.
     * @return string|null
    */
    public function getAppIconWebUrl(): ?string {
        return $this->appIconWebUrl;
    }

    /**
     * Gets the appId property value. Teams App ID of the application.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appIconWebUrl' => function (ParseNode $n) use ($o) { $o->setAppIconWebUrl($n->getStringValue()); },
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'teamsEmbeddedContentUrl' => function (ParseNode $n) use ($o) { $o->setTeamsEmbeddedContentUrl($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the teamsEmbeddedContentUrl property value. URL for the app resource that will be opened by Teams.
     * @return string|null
    */
    public function getTeamsEmbeddedContentUrl(): ?string {
        return $this->teamsEmbeddedContentUrl;
    }

    /**
     * Gets the webUrl property value. URL for the app resource that can be opened in the browser.
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
        parent::serialize($writer);
        $writer->writeStringValue('appIconWebUrl', $this->appIconWebUrl);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('teamsEmbeddedContentUrl', $this->teamsEmbeddedContentUrl);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the appIconWebUrl property value. URL that points to the app's icon.
     *  @param string|null $value Value to set for the appIconWebUrl property.
    */
    public function setAppIconWebUrl(?string $value ): void {
        $this->appIconWebUrl = $value;
    }

    /**
     * Sets the appId property value. Teams App ID of the application.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the teamsEmbeddedContentUrl property value. URL for the app resource that will be opened by Teams.
     *  @param string|null $value Value to set for the teamsEmbeddedContentUrl property.
    */
    public function setTeamsEmbeddedContentUrl(?string $value ): void {
        $this->teamsEmbeddedContentUrl = $value;
    }

    /**
     * Sets the webUrl property value. URL for the app resource that can be opened in the browser.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
