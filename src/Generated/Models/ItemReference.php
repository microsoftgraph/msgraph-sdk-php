<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $driveId Unique identifier of the drive instance that contains the item. Read-only.
    */
    private ?string $driveId = null;
    
    /**
     * @var string|null $driveType Identifies the type of drive. See [drive][] resource for values.
    */
    private ?string $driveType = null;
    
    /**
     * @var string|null $id Unique identifier of the item in the drive. Read-only.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name The name of the item being referenced. Read-only.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $path Path that can be used to navigate to the item. Read-only.
    */
    private ?string $path = null;
    
    /**
     * @var string|null $shareId A unique identifier for a shared resource that can be accessed via the [Shares][] API.
    */
    private ?string $shareId = null;
    
    /**
     * @var SharepointIds|null $sharepointIds Returns identifiers useful for SharePoint REST compatibility. Read-only.
    */
    private ?SharepointIds $sharepointIds = null;
    
    /**
     * @var string|null $siteId For OneDrive for Business and SharePoint, this property represents the ID of the site that contains the parent document library of the driveItem resource. The value is the same as the id property of that [site][] resource. It is an opaque string that consists of three identifiers of the site. For OneDrive, this property is not populated.
    */
    private ?string $siteId = null;
    
    /**
     * Instantiates a new itemReference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.itemReference');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemReference {
        return new ItemReference();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the driveId property value. Unique identifier of the drive instance that contains the item. Read-only.
     * @return string|null
    */
    public function getDriveId(): ?string {
        return $this->driveId;
    }

    /**
     * Gets the driveType property value. Identifies the type of drive. See [drive][] resource for values.
     * @return string|null
    */
    public function getDriveType(): ?string {
        return $this->driveType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'driveId' => fn(ParseNode $n) => $o->setDriveId($n->getStringValue()),
            'driveType' => fn(ParseNode $n) => $o->setDriveType($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'shareId' => fn(ParseNode $n) => $o->setShareId($n->getStringValue()),
            'sharepointIds' => fn(ParseNode $n) => $o->setSharepointIds($n->getObjectValue([SharepointIds::class, 'createFromDiscriminatorValue'])),
            'siteId' => fn(ParseNode $n) => $o->setSiteId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique identifier of the item in the drive. Read-only.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. The name of the item being referenced. Read-only.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the path property value. Path that can be used to navigate to the item. Read-only.
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Gets the shareId property value. A unique identifier for a shared resource that can be accessed via the [Shares][] API.
     * @return string|null
    */
    public function getShareId(): ?string {
        return $this->shareId;
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        return $this->sharepointIds;
    }

    /**
     * Gets the siteId property value. For OneDrive for Business and SharePoint, this property represents the ID of the site that contains the parent document library of the driveItem resource. The value is the same as the id property of that [site][] resource. It is an opaque string that consists of three identifiers of the site. For OneDrive, this property is not populated.
     * @return string|null
    */
    public function getSiteId(): ?string {
        return $this->siteId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('driveId', $this->driveId);
        $writer->writeStringValue('driveType', $this->driveType);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('path', $this->path);
        $writer->writeStringValue('shareId', $this->shareId);
        $writer->writeObjectValue('sharepointIds', $this->sharepointIds);
        $writer->writeStringValue('siteId', $this->siteId);
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
     * Sets the driveId property value. Unique identifier of the drive instance that contains the item. Read-only.
     *  @param string|null $value Value to set for the driveId property.
    */
    public function setDriveId(?string $value ): void {
        $this->driveId = $value;
    }

    /**
     * Sets the driveType property value. Identifies the type of drive. See [drive][] resource for values.
     *  @param string|null $value Value to set for the driveType property.
    */
    public function setDriveType(?string $value ): void {
        $this->driveType = $value;
    }

    /**
     * Sets the id property value. Unique identifier of the item in the drive. Read-only.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. The name of the item being referenced. Read-only.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the path property value. Path that can be used to navigate to the item. Read-only.
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

    /**
     * Sets the shareId property value. A unique identifier for a shared resource that can be accessed via the [Shares][] API.
     *  @param string|null $value Value to set for the shareId property.
    */
    public function setShareId(?string $value ): void {
        $this->shareId = $value;
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     *  @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value ): void {
        $this->sharepointIds = $value;
    }

    /**
     * Sets the siteId property value. For OneDrive for Business and SharePoint, this property represents the ID of the site that contains the parent document library of the driveItem resource. The value is the same as the id property of that [site][] resource. It is an opaque string that consists of three identifiers of the site. For OneDrive, this property is not populated.
     *  @param string|null $value Value to set for the siteId property.
    */
    public function setSiteId(?string $value ): void {
        $this->siteId = $value;
    }

}
