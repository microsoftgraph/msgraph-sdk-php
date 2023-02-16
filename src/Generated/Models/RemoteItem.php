<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RemoteItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new remoteItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteItem {
        return new RemoteItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the createdBy property value. Identity of the user, device, and application which created the item. Read-only.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. Date and time of item creation. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'file' => fn(ParseNode $n) => $o->setFile($n->getObjectValue([File::class, 'createFromDiscriminatorValue'])),
            'fileSystemInfo' => fn(ParseNode $n) => $o->setFileSystemInfo($n->getObjectValue([FileSystemInfo::class, 'createFromDiscriminatorValue'])),
            'folder' => fn(ParseNode $n) => $o->setFolder($n->getObjectValue([Folder::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'image' => fn(ParseNode $n) => $o->setImage($n->getObjectValue([Image::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'package' => fn(ParseNode $n) => $o->setPackage($n->getObjectValue([Package::class, 'createFromDiscriminatorValue'])),
            'parentReference' => fn(ParseNode $n) => $o->setParentReference($n->getObjectValue([ItemReference::class, 'createFromDiscriminatorValue'])),
            'shared' => fn(ParseNode $n) => $o->setShared($n->getObjectValue([Shared::class, 'createFromDiscriminatorValue'])),
            'sharepointIds' => fn(ParseNode $n) => $o->setSharepointIds($n->getObjectValue([SharepointIds::class, 'createFromDiscriminatorValue'])),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'specialFolder' => fn(ParseNode $n) => $o->setSpecialFolder($n->getObjectValue([SpecialFolder::class, 'createFromDiscriminatorValue'])),
            'video' => fn(ParseNode $n) => $o->setVideo($n->getObjectValue([Video::class, 'createFromDiscriminatorValue'])),
            'webDavUrl' => fn(ParseNode $n) => $o->setWebDavUrl($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the file property value. Indicates that the remote item is a file. Read-only.
     * @return File|null
    */
    public function getFile(): ?File {
        return $this->getBackingStore()->get('file');
    }

    /**
     * Gets the fileSystemInfo property value. Information about the remote item from the local file system. Read-only.
     * @return FileSystemInfo|null
    */
    public function getFileSystemInfo(): ?FileSystemInfo {
        return $this->getBackingStore()->get('fileSystemInfo');
    }

    /**
     * Gets the folder property value. Indicates that the remote item is a folder. Read-only.
     * @return Folder|null
    */
    public function getFolder(): ?Folder {
        return $this->getBackingStore()->get('folder');
    }

    /**
     * Gets the id property value. Unique identifier for the remote item in its drive. Read-only.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the image property value. Image metadata, if the item is an image. Read-only.
     * @return Image|null
    */
    public function getImage(): ?Image {
        return $this->getBackingStore()->get('image');
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user, device, and application which last modified the item. Read-only.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time the item was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the name property value. Optional. Filename of the remote item. Read-only.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the package property value. If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     * @return Package|null
    */
    public function getPackage(): ?Package {
        return $this->getBackingStore()->get('package');
    }

    /**
     * Gets the parentReference property value. Properties of the parent of the remote item. Read-only.
     * @return ItemReference|null
    */
    public function getParentReference(): ?ItemReference {
        return $this->getBackingStore()->get('parentReference');
    }

    /**
     * Gets the shared property value. Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
     * @return Shared|null
    */
    public function getShared(): ?Shared {
        return $this->getBackingStore()->get('shared');
    }

    /**
     * Gets the sharepointIds property value. Provides interop between items in OneDrive for Business and SharePoint with the full set of item identifiers. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        return $this->getBackingStore()->get('sharepointIds');
    }

    /**
     * Gets the size property value. Size of the remote item. Read-only.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Gets the specialFolder property value. If the current item is also available as a special folder, this facet is returned. Read-only.
     * @return SpecialFolder|null
    */
    public function getSpecialFolder(): ?SpecialFolder {
        return $this->getBackingStore()->get('specialFolder');
    }

    /**
     * Gets the video property value. Video metadata, if the item is a video. Read-only.
     * @return Video|null
    */
    public function getVideo(): ?Video {
        return $this->getBackingStore()->get('video');
    }

    /**
     * Gets the webDavUrl property value. DAV compatible URL for the item.
     * @return string|null
    */
    public function getWebDavUrl(): ?string {
        return $this->getBackingStore()->get('webDavUrl');
    }

    /**
     * Gets the webUrl property value. URL that displays the resource in the browser. Read-only.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('file', $this->getFile());
        $writer->writeObjectValue('fileSystemInfo', $this->getFileSystemInfo());
        $writer->writeObjectValue('folder', $this->getFolder());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('image', $this->getImage());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('package', $this->getPackage());
        $writer->writeObjectValue('parentReference', $this->getParentReference());
        $writer->writeObjectValue('shared', $this->getShared());
        $writer->writeObjectValue('sharepointIds', $this->getSharepointIds());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeObjectValue('specialFolder', $this->getSpecialFolder());
        $writer->writeObjectValue('video', $this->getVideo());
        $writer->writeStringValue('webDavUrl', $this->getWebDavUrl());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the createdBy property value. Identity of the user, device, and application which created the item. Read-only.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time of item creation. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the file property value. Indicates that the remote item is a file. Read-only.
     * @param File|null $value Value to set for the file property.
    */
    public function setFile(?File $value): void {
        $this->getBackingStore()->set('file', $value);
    }

    /**
     * Sets the fileSystemInfo property value. Information about the remote item from the local file system. Read-only.
     * @param FileSystemInfo|null $value Value to set for the fileSystemInfo property.
    */
    public function setFileSystemInfo(?FileSystemInfo $value): void {
        $this->getBackingStore()->set('fileSystemInfo', $value);
    }

    /**
     * Sets the folder property value. Indicates that the remote item is a folder. Read-only.
     * @param Folder|null $value Value to set for the folder property.
    */
    public function setFolder(?Folder $value): void {
        $this->getBackingStore()->set('folder', $value);
    }

    /**
     * Sets the id property value. Unique identifier for the remote item in its drive. Read-only.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the image property value. Image metadata, if the item is an image. Read-only.
     * @param Image|null $value Value to set for the image property.
    */
    public function setImage(?Image $value): void {
        $this->getBackingStore()->set('image', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user, device, and application which last modified the item. Read-only.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time the item was last modified. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the name property value. Optional. Filename of the remote item. Read-only.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the package property value. If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     * @param Package|null $value Value to set for the package property.
    */
    public function setPackage(?Package $value): void {
        $this->getBackingStore()->set('package', $value);
    }

    /**
     * Sets the parentReference property value. Properties of the parent of the remote item. Read-only.
     * @param ItemReference|null $value Value to set for the parentReference property.
    */
    public function setParentReference(?ItemReference $value): void {
        $this->getBackingStore()->set('parentReference', $value);
    }

    /**
     * Sets the shared property value. Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
     * @param Shared|null $value Value to set for the shared property.
    */
    public function setShared(?Shared $value): void {
        $this->getBackingStore()->set('shared', $value);
    }

    /**
     * Sets the sharepointIds property value. Provides interop between items in OneDrive for Business and SharePoint with the full set of item identifiers. Read-only.
     * @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value): void {
        $this->getBackingStore()->set('sharepointIds', $value);
    }

    /**
     * Sets the size property value. Size of the remote item. Read-only.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the specialFolder property value. If the current item is also available as a special folder, this facet is returned. Read-only.
     * @param SpecialFolder|null $value Value to set for the specialFolder property.
    */
    public function setSpecialFolder(?SpecialFolder $value): void {
        $this->getBackingStore()->set('specialFolder', $value);
    }

    /**
     * Sets the video property value. Video metadata, if the item is a video. Read-only.
     * @param Video|null $value Value to set for the video property.
    */
    public function setVideo(?Video $value): void {
        $this->getBackingStore()->set('video', $value);
    }

    /**
     * Sets the webDavUrl property value. DAV compatible URL for the item.
     * @param string|null $value Value to set for the webDavUrl property.
    */
    public function setWebDavUrl(?string $value): void {
        $this->getBackingStore()->set('webDavUrl', $value);
    }

    /**
     * Sets the webUrl property value. URL that displays the resource in the browser. Read-only.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
