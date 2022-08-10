<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplicationTemplate extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $categories The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer, Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design & hosting.
    */
    private ?array $categories = null;
    
    /**
     * @var string|null $description A description of the application.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The name of the application.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $homePageUrl The home page URL of the application.
    */
    private ?string $homePageUrl = null;
    
    /**
     * @var string|null $logoUrl The URL to get the logo for this application.
    */
    private ?string $logoUrl = null;
    
    /**
     * @var string|null $publisher The name of the publisher for this application.
    */
    private ?string $publisher = null;
    
    /**
     * @var array<string>|null $supportedProvisioningTypes The list of provisioning modes supported by this application. The only valid value is sync.
    */
    private ?array $supportedProvisioningTypes = null;
    
    /**
     * @var array<string>|null $supportedSingleSignOnModes The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported.
    */
    private ?array $supportedSingleSignOnModes = null;
    
    /**
     * Instantiates a new applicationTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.applicationTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationTemplate {
        return new ApplicationTemplate();
    }

    /**
     * Gets the categories property value. The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer, Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design & hosting.
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the description property value. A description of the application.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of the application.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categories' => function (ParseNode $n) use ($o) { $o->setCategories($n->getCollectionOfPrimitiveValues()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'homePageUrl' => function (ParseNode $n) use ($o) { $o->setHomePageUrl($n->getStringValue()); },
            'logoUrl' => function (ParseNode $n) use ($o) { $o->setLogoUrl($n->getStringValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
            'supportedProvisioningTypes' => function (ParseNode $n) use ($o) { $o->setSupportedProvisioningTypes($n->getCollectionOfPrimitiveValues()); },
            'supportedSingleSignOnModes' => function (ParseNode $n) use ($o) { $o->setSupportedSingleSignOnModes($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the homePageUrl property value. The home page URL of the application.
     * @return string|null
    */
    public function getHomePageUrl(): ?string {
        return $this->homePageUrl;
    }

    /**
     * Gets the logoUrl property value. The URL to get the logo for this application.
     * @return string|null
    */
    public function getLogoUrl(): ?string {
        return $this->logoUrl;
    }

    /**
     * Gets the publisher property value. The name of the publisher for this application.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the supportedProvisioningTypes property value. The list of provisioning modes supported by this application. The only valid value is sync.
     * @return array<string>|null
    */
    public function getSupportedProvisioningTypes(): ?array {
        return $this->supportedProvisioningTypes;
    }

    /**
     * Gets the supportedSingleSignOnModes property value. The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported.
     * @return array<string>|null
    */
    public function getSupportedSingleSignOnModes(): ?array {
        return $this->supportedSingleSignOnModes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->categories);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('homePageUrl', $this->homePageUrl);
        $writer->writeStringValue('logoUrl', $this->logoUrl);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeCollectionOfPrimitiveValues('supportedProvisioningTypes', $this->supportedProvisioningTypes);
        $writer->writeCollectionOfPrimitiveValues('supportedSingleSignOnModes', $this->supportedSingleSignOnModes);
    }

    /**
     * Sets the categories property value. The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer, Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design & hosting.
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the description property value. A description of the application.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of the application.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the homePageUrl property value. The home page URL of the application.
     *  @param string|null $value Value to set for the homePageUrl property.
    */
    public function setHomePageUrl(?string $value ): void {
        $this->homePageUrl = $value;
    }

    /**
     * Sets the logoUrl property value. The URL to get the logo for this application.
     *  @param string|null $value Value to set for the logoUrl property.
    */
    public function setLogoUrl(?string $value ): void {
        $this->logoUrl = $value;
    }

    /**
     * Sets the publisher property value. The name of the publisher for this application.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the supportedProvisioningTypes property value. The list of provisioning modes supported by this application. The only valid value is sync.
     *  @param array<string>|null $value Value to set for the supportedProvisioningTypes property.
    */
    public function setSupportedProvisioningTypes(?array $value ): void {
        $this->supportedProvisioningTypes = $value;
    }

    /**
     * Sets the supportedSingleSignOnModes property value. The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported.
     *  @param array<string>|null $value Value to set for the supportedSingleSignOnModes property.
    */
    public function setSupportedSingleSignOnModes(?array $value ): void {
        $this->supportedSingleSignOnModes = $value;
    }

}
