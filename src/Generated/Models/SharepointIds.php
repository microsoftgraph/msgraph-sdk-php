<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharepointIds implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $listId The unique identifier (guid) for the item's list in SharePoint.
    */
    private ?string $listId = null;
    
    /**
     * @var string|null $listItemId An integer identifier for the item within the containing list.
    */
    private ?string $listItemId = null;
    
    /**
     * @var string|null $listItemUniqueId The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site.
    */
    private ?string $listItemUniqueId = null;
    
    /**
     * @var string|null $siteId The unique identifier (guid) for the item's site collection (SPSite).
    */
    private ?string $siteId = null;
    
    /**
     * @var string|null $siteUrl The SharePoint URL for the site that contains the item.
    */
    private ?string $siteUrl = null;
    
    /**
     * @var string|null $tenantId The unique identifier (guid) for the tenancy.
    */
    private ?string $tenantId = null;
    
    /**
     * @var string|null $webId The unique identifier (guid) for the item's site (SPWeb).
    */
    private ?string $webId = null;
    
    /**
     * Instantiates a new sharepointIds and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharepointIds
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharepointIds {
        return new SharepointIds();
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
            'listId' => function (ParseNode $n) use ($o) { $o->setListId($n->getStringValue()); },
            'listItemId' => function (ParseNode $n) use ($o) { $o->setListItemId($n->getStringValue()); },
            'listItemUniqueId' => function (ParseNode $n) use ($o) { $o->setListItemUniqueId($n->getStringValue()); },
            'siteId' => function (ParseNode $n) use ($o) { $o->setSiteId($n->getStringValue()); },
            'siteUrl' => function (ParseNode $n) use ($o) { $o->setSiteUrl($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'webId' => function (ParseNode $n) use ($o) { $o->setWebId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the listId property value. The unique identifier (guid) for the item's list in SharePoint.
     * @return string|null
    */
    public function getListId(): ?string {
        return $this->listId;
    }

    /**
     * Gets the listItemId property value. An integer identifier for the item within the containing list.
     * @return string|null
    */
    public function getListItemId(): ?string {
        return $this->listItemId;
    }

    /**
     * Gets the listItemUniqueId property value. The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site.
     * @return string|null
    */
    public function getListItemUniqueId(): ?string {
        return $this->listItemUniqueId;
    }

    /**
     * Gets the siteId property value. The unique identifier (guid) for the item's site collection (SPSite).
     * @return string|null
    */
    public function getSiteId(): ?string {
        return $this->siteId;
    }

    /**
     * Gets the siteUrl property value. The SharePoint URL for the site that contains the item.
     * @return string|null
    */
    public function getSiteUrl(): ?string {
        return $this->siteUrl;
    }

    /**
     * Gets the tenantId property value. The unique identifier (guid) for the tenancy.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the webId property value. The unique identifier (guid) for the item's site (SPWeb).
     * @return string|null
    */
    public function getWebId(): ?string {
        return $this->webId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('listId', $this->listId);
        $writer->writeStringValue('listItemId', $this->listItemId);
        $writer->writeStringValue('listItemUniqueId', $this->listItemUniqueId);
        $writer->writeStringValue('siteId', $this->siteId);
        $writer->writeStringValue('siteUrl', $this->siteUrl);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('webId', $this->webId);
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
     * Sets the listId property value. The unique identifier (guid) for the item's list in SharePoint.
     *  @param string|null $value Value to set for the listId property.
    */
    public function setListId(?string $value ): void {
        $this->listId = $value;
    }

    /**
     * Sets the listItemId property value. An integer identifier for the item within the containing list.
     *  @param string|null $value Value to set for the listItemId property.
    */
    public function setListItemId(?string $value ): void {
        $this->listItemId = $value;
    }

    /**
     * Sets the listItemUniqueId property value. The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site.
     *  @param string|null $value Value to set for the listItemUniqueId property.
    */
    public function setListItemUniqueId(?string $value ): void {
        $this->listItemUniqueId = $value;
    }

    /**
     * Sets the siteId property value. The unique identifier (guid) for the item's site collection (SPSite).
     *  @param string|null $value Value to set for the siteId property.
    */
    public function setSiteId(?string $value ): void {
        $this->siteId = $value;
    }

    /**
     * Sets the siteUrl property value. The SharePoint URL for the site that contains the item.
     *  @param string|null $value Value to set for the siteUrl property.
    */
    public function setSiteUrl(?string $value ): void {
        $this->siteUrl = $value;
    }

    /**
     * Sets the tenantId property value. The unique identifier (guid) for the tenancy.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the webId property value. The unique identifier (guid) for the item's site (SPWeb).
     *  @param string|null $value Value to set for the webId property.
    */
    public function setWebId(?string $value ): void {
        $this->webId = $value;
    }

}
