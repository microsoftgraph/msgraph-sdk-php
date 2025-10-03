<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationTeamsAppResource extends EducationResource implements Parsable 
{
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
     * Gets the appIconWebUrl property value. URL that points to the icon of the app.
     * @return string|null
    */
    public function getAppIconWebUrl(): ?string {
        $val = $this->getBackingStore()->get('appIconWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appIconWebUrl'");
    }

    /**
     * Gets the appId property value. Teams app ID of the application.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appIconWebUrl' => fn(ParseNode $n) => $o->setAppIconWebUrl($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'teamsEmbeddedContentUrl' => fn(ParseNode $n) => $o->setTeamsEmbeddedContentUrl($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the teamsEmbeddedContentUrl property value. URL for the app resource that will be opened by Teams.
     * @return string|null
    */
    public function getTeamsEmbeddedContentUrl(): ?string {
        $val = $this->getBackingStore()->get('teamsEmbeddedContentUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsEmbeddedContentUrl'");
    }

    /**
     * Gets the webUrl property value. URL for the app resource that can be opened in the browser.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appIconWebUrl', $this->getAppIconWebUrl());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('teamsEmbeddedContentUrl', $this->getTeamsEmbeddedContentUrl());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the appIconWebUrl property value. URL that points to the icon of the app.
     * @param string|null $value Value to set for the appIconWebUrl property.
    */
    public function setAppIconWebUrl(?string $value): void {
        $this->getBackingStore()->set('appIconWebUrl', $value);
    }

    /**
     * Sets the appId property value. Teams app ID of the application.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the teamsEmbeddedContentUrl property value. URL for the app resource that will be opened by Teams.
     * @param string|null $value Value to set for the teamsEmbeddedContentUrl property.
    */
    public function setTeamsEmbeddedContentUrl(?string $value): void {
        $this->getBackingStore()->set('teamsEmbeddedContentUrl', $value);
    }

    /**
     * Sets the webUrl property value. URL for the app resource that can be opened in the browser.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
