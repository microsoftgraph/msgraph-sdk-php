<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharingLink implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Identity|null $application The app the link is associated with.
    */
    private ?Identity $application = null;
    
    /**
     * @var bool|null $preventsDownload If true then the user can only use this link to view the item on the web, and cannot use it to download the contents of the item. Only for OneDrive for Business and SharePoint.
    */
    private ?bool $preventsDownload = null;
    
    /**
     * @var string|null $scope The scope of the link represented by this permission. Value anonymous indicates the link is usable by anyone, organization indicates the link is only usable for users signed into the same tenant.
    */
    private ?string $scope = null;
    
    /**
     * @var string|null $type The type of the link created.
    */
    private ?string $type = null;
    
    /**
     * @var string|null $webHtml For embed links, this property contains the HTML code for an <iframe> element that will embed the item in a webpage.
    */
    private ?string $webHtml = null;
    
    /**
     * @var string|null $webUrl A URL that opens the item in the browser on the OneDrive website.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new sharingLink and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharingLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharingLink {
        return new SharingLink();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the application property value. The app the link is associated with.
     * @return Identity|null
    */
    public function getApplication(): ?Identity {
        return $this->application;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'application' => function (ParseNode $n) use ($o) { $o->setApplication($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'preventsDownload' => function (ParseNode $n) use ($o) { $o->setPreventsDownload($n->getBooleanValue()); },
            'scope' => function (ParseNode $n) use ($o) { $o->setScope($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
            'webHtml' => function (ParseNode $n) use ($o) { $o->setWebHtml($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the preventsDownload property value. If true then the user can only use this link to view the item on the web, and cannot use it to download the contents of the item. Only for OneDrive for Business and SharePoint.
     * @return bool|null
    */
    public function getPreventsDownload(): ?bool {
        return $this->preventsDownload;
    }

    /**
     * Gets the scope property value. The scope of the link represented by this permission. Value anonymous indicates the link is usable by anyone, organization indicates the link is only usable for users signed into the same tenant.
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->scope;
    }

    /**
     * Gets the type property value. The type of the link created.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the webHtml property value. For embed links, this property contains the HTML code for an <iframe> element that will embed the item in a webpage.
     * @return string|null
    */
    public function getWebHtml(): ?string {
        return $this->webHtml;
    }

    /**
     * Gets the webUrl property value. A URL that opens the item in the browser on the OneDrive website.
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
        $writer->writeObjectValue('application', $this->application);
        $writer->writeBooleanValue('preventsDownload', $this->preventsDownload);
        $writer->writeStringValue('scope', $this->scope);
        $writer->writeStringValue('type', $this->type);
        $writer->writeStringValue('webHtml', $this->webHtml);
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
     * Sets the application property value. The app the link is associated with.
     *  @param Identity|null $value Value to set for the application property.
    */
    public function setApplication(?Identity $value ): void {
        $this->application = $value;
    }

    /**
     * Sets the preventsDownload property value. If true then the user can only use this link to view the item on the web, and cannot use it to download the contents of the item. Only for OneDrive for Business and SharePoint.
     *  @param bool|null $value Value to set for the preventsDownload property.
    */
    public function setPreventsDownload(?bool $value ): void {
        $this->preventsDownload = $value;
    }

    /**
     * Sets the scope property value. The scope of the link represented by this permission. Value anonymous indicates the link is usable by anyone, organization indicates the link is only usable for users signed into the same tenant.
     *  @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the type property value. The type of the link created.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the webHtml property value. For embed links, this property contains the HTML code for an <iframe> element that will embed the item in a webpage.
     *  @param string|null $value Value to set for the webHtml property.
    */
    public function setWebHtml(?string $value ): void {
        $this->webHtml = $value;
    }

    /**
     * Sets the webUrl property value. A URL that opens the item in the browser on the OneDrive website.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
