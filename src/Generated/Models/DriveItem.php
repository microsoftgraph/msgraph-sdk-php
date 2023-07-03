<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class DriveItem extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new driveItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.driveItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriveItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriveItem {
        return new DriveItem();
    }

    /**
     * Gets the analytics property value. Analytics about the view activities that took place on this item.
     * @return ItemAnalytics|null
    */
    public function getAnalytics(): ?ItemAnalytics {
        $val = $this->getBackingStore()->get('analytics');
        if (is_null($val) || $val instanceof ItemAnalytics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'analytics'");
    }

    /**
     * Gets the audio property value. Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal.
     * @return Audio|null
    */
    public function getAudio(): ?Audio {
        $val = $this->getBackingStore()->get('audio');
        if (is_null($val) || $val instanceof Audio) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audio'");
    }

    /**
     * Gets the bundle property value. Bundle metadata, if the item is a bundle. Read-only.
     * @return Bundle|null
    */
    public function getBundle(): ?Bundle {
        $val = $this->getBackingStore()->get('bundle');
        if (is_null($val) || $val instanceof Bundle) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bundle'");
    }

    /**
     * Gets the children property value. Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
     * @return array<DriveItem>|null
    */
    public function getChildren(): ?array {
        $val = $this->getBackingStore()->get('children');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveItem::class);
            /** @var array<DriveItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'children'");
    }

    /**
     * Gets the content property value. The content stream, if the item represents a file.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the cTag property value. An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.
     * @return string|null
    */
    public function getCTag(): ?string {
        $val = $this->getBackingStore()->get('cTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cTag'");
    }

    /**
     * Gets the deleted property value. Information about the deleted state of the item. Read-only.
     * @return Deleted|null
    */
    public function getDeleted(): ?Deleted {
        $val = $this->getBackingStore()->get('deleted');
        if (is_null($val) || $val instanceof Deleted) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deleted'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'analytics' => fn(ParseNode $n) => $o->setAnalytics($n->getObjectValue([ItemAnalytics::class, 'createFromDiscriminatorValue'])),
            'audio' => fn(ParseNode $n) => $o->setAudio($n->getObjectValue([Audio::class, 'createFromDiscriminatorValue'])),
            'bundle' => fn(ParseNode $n) => $o->setBundle($n->getObjectValue([Bundle::class, 'createFromDiscriminatorValue'])),
            'children' => fn(ParseNode $n) => $o->setChildren($n->getCollectionOfObjectValues([DriveItem::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'cTag' => fn(ParseNode $n) => $o->setCTag($n->getStringValue()),
            'deleted' => fn(ParseNode $n) => $o->setDeleted($n->getObjectValue([Deleted::class, 'createFromDiscriminatorValue'])),
            'file' => fn(ParseNode $n) => $o->setFile($n->getObjectValue([File::class, 'createFromDiscriminatorValue'])),
            'fileSystemInfo' => fn(ParseNode $n) => $o->setFileSystemInfo($n->getObjectValue([FileSystemInfo::class, 'createFromDiscriminatorValue'])),
            'folder' => fn(ParseNode $n) => $o->setFolder($n->getObjectValue([Folder::class, 'createFromDiscriminatorValue'])),
            'image' => fn(ParseNode $n) => $o->setImage($n->getObjectValue([Image::class, 'createFromDiscriminatorValue'])),
            'listItem' => fn(ParseNode $n) => $o->setListItem($n->getObjectValue([ListItem::class, 'createFromDiscriminatorValue'])),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([GeoCoordinates::class, 'createFromDiscriminatorValue'])),
            'malware' => fn(ParseNode $n) => $o->setMalware($n->getObjectValue([Malware::class, 'createFromDiscriminatorValue'])),
            'package' => fn(ParseNode $n) => $o->setPackage($n->getObjectValue([Package::class, 'createFromDiscriminatorValue'])),
            'pendingOperations' => fn(ParseNode $n) => $o->setPendingOperations($n->getObjectValue([PendingOperations::class, 'createFromDiscriminatorValue'])),
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getCollectionOfObjectValues([Permission::class, 'createFromDiscriminatorValue'])),
            'photo' => fn(ParseNode $n) => $o->setPhoto($n->getObjectValue([Photo::class, 'createFromDiscriminatorValue'])),
            'publication' => fn(ParseNode $n) => $o->setPublication($n->getObjectValue([PublicationFacet::class, 'createFromDiscriminatorValue'])),
            'remoteItem' => fn(ParseNode $n) => $o->setRemoteItem($n->getObjectValue([RemoteItem::class, 'createFromDiscriminatorValue'])),
            'root' => fn(ParseNode $n) => $o->setRoot($n->getObjectValue([Root::class, 'createFromDiscriminatorValue'])),
            'searchResult' => fn(ParseNode $n) => $o->setSearchResult($n->getObjectValue([SearchResult::class, 'createFromDiscriminatorValue'])),
            'shared' => fn(ParseNode $n) => $o->setShared($n->getObjectValue([Shared::class, 'createFromDiscriminatorValue'])),
            'sharepointIds' => fn(ParseNode $n) => $o->setSharepointIds($n->getObjectValue([SharepointIds::class, 'createFromDiscriminatorValue'])),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'specialFolder' => fn(ParseNode $n) => $o->setSpecialFolder($n->getObjectValue([SpecialFolder::class, 'createFromDiscriminatorValue'])),
            'subscriptions' => fn(ParseNode $n) => $o->setSubscriptions($n->getCollectionOfObjectValues([Subscription::class, 'createFromDiscriminatorValue'])),
            'thumbnails' => fn(ParseNode $n) => $o->setThumbnails($n->getCollectionOfObjectValues([ThumbnailSet::class, 'createFromDiscriminatorValue'])),
            'versions' => fn(ParseNode $n) => $o->setVersions($n->getCollectionOfObjectValues([DriveItemVersion::class, 'createFromDiscriminatorValue'])),
            'video' => fn(ParseNode $n) => $o->setVideo($n->getObjectValue([Video::class, 'createFromDiscriminatorValue'])),
            'webDavUrl' => fn(ParseNode $n) => $o->setWebDavUrl($n->getStringValue()),
            'workbook' => fn(ParseNode $n) => $o->setWorkbook($n->getObjectValue([Workbook::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the file property value. File metadata, if the item is a file. Read-only.
     * @return File|null
    */
    public function getFile(): ?File {
        $val = $this->getBackingStore()->get('file');
        if (is_null($val) || $val instanceof File) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'file'");
    }

    /**
     * Gets the fileSystemInfo property value. File system information on client. Read-write.
     * @return FileSystemInfo|null
    */
    public function getFileSystemInfo(): ?FileSystemInfo {
        $val = $this->getBackingStore()->get('fileSystemInfo');
        if (is_null($val) || $val instanceof FileSystemInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileSystemInfo'");
    }

    /**
     * Gets the folder property value. Folder metadata, if the item is a folder. Read-only.
     * @return Folder|null
    */
    public function getFolder(): ?Folder {
        $val = $this->getBackingStore()->get('folder');
        if (is_null($val) || $val instanceof Folder) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'folder'");
    }

    /**
     * Gets the image property value. Image metadata, if the item is an image. Read-only.
     * @return Image|null
    */
    public function getImage(): ?Image {
        $val = $this->getBackingStore()->get('image');
        if (is_null($val) || $val instanceof Image) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'image'");
    }

    /**
     * Gets the listItem property value. For drives in SharePoint, the associated document library list item. Read-only. Nullable.
     * @return ListItem|null
    */
    public function getListItem(): ?ListItem {
        $val = $this->getBackingStore()->get('listItem');
        if (is_null($val) || $val instanceof ListItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'listItem'");
    }

    /**
     * Gets the location property value. Location metadata, if the item has location data. Read-only.
     * @return GeoCoordinates|null
    */
    public function getLocation(): ?GeoCoordinates {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || $val instanceof GeoCoordinates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
    }

    /**
     * Gets the malware property value. Malware metadata, if the item was detected to contain malware. Read-only.
     * @return Malware|null
    */
    public function getMalware(): ?Malware {
        $val = $this->getBackingStore()->get('malware');
        if (is_null($val) || $val instanceof Malware) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'malware'");
    }

    /**
     * Gets the package property value. If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     * @return Package|null
    */
    public function getPackage(): ?Package {
        $val = $this->getBackingStore()->get('package');
        if (is_null($val) || $val instanceof Package) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'package'");
    }

    /**
     * Gets the pendingOperations property value. If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only.
     * @return PendingOperations|null
    */
    public function getPendingOperations(): ?PendingOperations {
        $val = $this->getBackingStore()->get('pendingOperations');
        if (is_null($val) || $val instanceof PendingOperations) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingOperations'");
    }

    /**
     * Gets the permissions property value. The set of permissions for the item. Read-only. Nullable.
     * @return array<Permission>|null
    */
    public function getPermissions(): ?array {
        $val = $this->getBackingStore()->get('permissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Permission::class);
            /** @var array<Permission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissions'");
    }

    /**
     * Gets the photo property value. Photo metadata, if the item is a photo. Read-only.
     * @return Photo|null
    */
    public function getPhoto(): ?Photo {
        $val = $this->getBackingStore()->get('photo');
        if (is_null($val) || $val instanceof Photo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'photo'");
    }

    /**
     * Gets the publication property value. Provides information about the published or checked-out state of an item, in locations that support such actions. This property is not returned by default. Read-only.
     * @return PublicationFacet|null
    */
    public function getPublication(): ?PublicationFacet {
        $val = $this->getBackingStore()->get('publication');
        if (is_null($val) || $val instanceof PublicationFacet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publication'");
    }

    /**
     * Gets the remoteItem property value. Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
     * @return RemoteItem|null
    */
    public function getRemoteItem(): ?RemoteItem {
        $val = $this->getBackingStore()->get('remoteItem');
        if (is_null($val) || $val instanceof RemoteItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteItem'");
    }

    /**
     * Gets the root property value. If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        $val = $this->getBackingStore()->get('root');
        if (is_null($val) || $val instanceof Root) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'root'");
    }

    /**
     * Gets the searchResult property value. Search metadata, if the item is from a search result. Read-only.
     * @return SearchResult|null
    */
    public function getSearchResult(): ?SearchResult {
        $val = $this->getBackingStore()->get('searchResult');
        if (is_null($val) || $val instanceof SearchResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchResult'");
    }

    /**
     * Gets the shared property value. Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
     * @return Shared|null
    */
    public function getShared(): ?Shared {
        $val = $this->getBackingStore()->get('shared');
        if (is_null($val) || $val instanceof Shared) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shared'");
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        $val = $this->getBackingStore()->get('sharepointIds');
        if (is_null($val) || $val instanceof SharepointIds) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharepointIds'");
    }

    /**
     * Gets the size property value. Size of the item in bytes. Read-only.
     * @return int|null
    */
    public function getSize(): ?int {
        $val = $this->getBackingStore()->get('size');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'size'");
    }

    /**
     * Gets the specialFolder property value. If the current item is also available as a special folder, this facet is returned. Read-only.
     * @return SpecialFolder|null
    */
    public function getSpecialFolder(): ?SpecialFolder {
        $val = $this->getBackingStore()->get('specialFolder');
        if (is_null($val) || $val instanceof SpecialFolder) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'specialFolder'");
    }

    /**
     * Gets the subscriptions property value. The set of subscriptions on the item. Only supported on the root of a drive.
     * @return array<Subscription>|null
    */
    public function getSubscriptions(): ?array {
        $val = $this->getBackingStore()->get('subscriptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Subscription::class);
            /** @var array<Subscription>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptions'");
    }

    /**
     * Gets the thumbnails property value. Collection containing [ThumbnailSet][] objects associated with the item. For more info, see [getting thumbnails][]. Read-only. Nullable.
     * @return array<ThumbnailSet>|null
    */
    public function getThumbnails(): ?array {
        $val = $this->getBackingStore()->get('thumbnails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ThumbnailSet::class);
            /** @var array<ThumbnailSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thumbnails'");
    }

    /**
     * Gets the versions property value. The list of previous versions of the item. For more info, see [getting previous versions][]. Read-only. Nullable.
     * @return array<DriveItemVersion>|null
    */
    public function getVersions(): ?array {
        $val = $this->getBackingStore()->get('versions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveItemVersion::class);
            /** @var array<DriveItemVersion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versions'");
    }

    /**
     * Gets the video property value. Video metadata, if the item is a video. Read-only.
     * @return Video|null
    */
    public function getVideo(): ?Video {
        $val = $this->getBackingStore()->get('video');
        if (is_null($val) || $val instanceof Video) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'video'");
    }

    /**
     * Gets the webDavUrl property value. WebDAV compatible URL for the item.
     * @return string|null
    */
    public function getWebDavUrl(): ?string {
        $val = $this->getBackingStore()->get('webDavUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webDavUrl'");
    }

    /**
     * Gets the workbook property value. For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet's contents. Nullable.
     * @return Workbook|null
    */
    public function getWorkbook(): ?Workbook {
        $val = $this->getBackingStore()->get('workbook');
        if (is_null($val) || $val instanceof Workbook) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workbook'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('analytics', $this->getAnalytics());
        $writer->writeObjectValue('audio', $this->getAudio());
        $writer->writeObjectValue('bundle', $this->getBundle());
        $writer->writeCollectionOfObjectValues('children', $this->getChildren());
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeStringValue('cTag', $this->getCTag());
        $writer->writeObjectValue('deleted', $this->getDeleted());
        $writer->writeObjectValue('file', $this->getFile());
        $writer->writeObjectValue('fileSystemInfo', $this->getFileSystemInfo());
        $writer->writeObjectValue('folder', $this->getFolder());
        $writer->writeObjectValue('image', $this->getImage());
        $writer->writeObjectValue('listItem', $this->getListItem());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeObjectValue('malware', $this->getMalware());
        $writer->writeObjectValue('package', $this->getPackage());
        $writer->writeObjectValue('pendingOperations', $this->getPendingOperations());
        $writer->writeCollectionOfObjectValues('permissions', $this->getPermissions());
        $writer->writeObjectValue('photo', $this->getPhoto());
        $writer->writeObjectValue('publication', $this->getPublication());
        $writer->writeObjectValue('remoteItem', $this->getRemoteItem());
        $writer->writeObjectValue('root', $this->getRoot());
        $writer->writeObjectValue('searchResult', $this->getSearchResult());
        $writer->writeObjectValue('shared', $this->getShared());
        $writer->writeObjectValue('sharepointIds', $this->getSharepointIds());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeObjectValue('specialFolder', $this->getSpecialFolder());
        $writer->writeCollectionOfObjectValues('subscriptions', $this->getSubscriptions());
        $writer->writeCollectionOfObjectValues('thumbnails', $this->getThumbnails());
        $writer->writeCollectionOfObjectValues('versions', $this->getVersions());
        $writer->writeObjectValue('video', $this->getVideo());
        $writer->writeStringValue('webDavUrl', $this->getWebDavUrl());
        $writer->writeObjectValue('workbook', $this->getWorkbook());
    }

    /**
     * Sets the analytics property value. Analytics about the view activities that took place on this item.
     * @param ItemAnalytics|null $value Value to set for the analytics property.
    */
    public function setAnalytics(?ItemAnalytics $value): void {
        $this->getBackingStore()->set('analytics', $value);
    }

    /**
     * Sets the audio property value. Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal.
     * @param Audio|null $value Value to set for the audio property.
    */
    public function setAudio(?Audio $value): void {
        $this->getBackingStore()->set('audio', $value);
    }

    /**
     * Sets the bundle property value. Bundle metadata, if the item is a bundle. Read-only.
     * @param Bundle|null $value Value to set for the bundle property.
    */
    public function setBundle(?Bundle $value): void {
        $this->getBackingStore()->set('bundle', $value);
    }

    /**
     * Sets the children property value. Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
     * @param array<DriveItem>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value): void {
        $this->getBackingStore()->set('children', $value);
    }

    /**
     * Sets the content property value. The content stream, if the item represents a file.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the cTag property value. An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.
     * @param string|null $value Value to set for the cTag property.
    */
    public function setCTag(?string $value): void {
        $this->getBackingStore()->set('cTag', $value);
    }

    /**
     * Sets the deleted property value. Information about the deleted state of the item. Read-only.
     * @param Deleted|null $value Value to set for the deleted property.
    */
    public function setDeleted(?Deleted $value): void {
        $this->getBackingStore()->set('deleted', $value);
    }

    /**
     * Sets the file property value. File metadata, if the item is a file. Read-only.
     * @param File|null $value Value to set for the file property.
    */
    public function setFile(?File $value): void {
        $this->getBackingStore()->set('file', $value);
    }

    /**
     * Sets the fileSystemInfo property value. File system information on client. Read-write.
     * @param FileSystemInfo|null $value Value to set for the fileSystemInfo property.
    */
    public function setFileSystemInfo(?FileSystemInfo $value): void {
        $this->getBackingStore()->set('fileSystemInfo', $value);
    }

    /**
     * Sets the folder property value. Folder metadata, if the item is a folder. Read-only.
     * @param Folder|null $value Value to set for the folder property.
    */
    public function setFolder(?Folder $value): void {
        $this->getBackingStore()->set('folder', $value);
    }

    /**
     * Sets the image property value. Image metadata, if the item is an image. Read-only.
     * @param Image|null $value Value to set for the image property.
    */
    public function setImage(?Image $value): void {
        $this->getBackingStore()->set('image', $value);
    }

    /**
     * Sets the listItem property value. For drives in SharePoint, the associated document library list item. Read-only. Nullable.
     * @param ListItem|null $value Value to set for the listItem property.
    */
    public function setListItem(?ListItem $value): void {
        $this->getBackingStore()->set('listItem', $value);
    }

    /**
     * Sets the location property value. Location metadata, if the item has location data. Read-only.
     * @param GeoCoordinates|null $value Value to set for the location property.
    */
    public function setLocation(?GeoCoordinates $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the malware property value. Malware metadata, if the item was detected to contain malware. Read-only.
     * @param Malware|null $value Value to set for the malware property.
    */
    public function setMalware(?Malware $value): void {
        $this->getBackingStore()->set('malware', $value);
    }

    /**
     * Sets the package property value. If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     * @param Package|null $value Value to set for the package property.
    */
    public function setPackage(?Package $value): void {
        $this->getBackingStore()->set('package', $value);
    }

    /**
     * Sets the pendingOperations property value. If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only.
     * @param PendingOperations|null $value Value to set for the pendingOperations property.
    */
    public function setPendingOperations(?PendingOperations $value): void {
        $this->getBackingStore()->set('pendingOperations', $value);
    }

    /**
     * Sets the permissions property value. The set of permissions for the item. Read-only. Nullable.
     * @param array<Permission>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the photo property value. Photo metadata, if the item is a photo. Read-only.
     * @param Photo|null $value Value to set for the photo property.
    */
    public function setPhoto(?Photo $value): void {
        $this->getBackingStore()->set('photo', $value);
    }

    /**
     * Sets the publication property value. Provides information about the published or checked-out state of an item, in locations that support such actions. This property is not returned by default. Read-only.
     * @param PublicationFacet|null $value Value to set for the publication property.
    */
    public function setPublication(?PublicationFacet $value): void {
        $this->getBackingStore()->set('publication', $value);
    }

    /**
     * Sets the remoteItem property value. Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
     * @param RemoteItem|null $value Value to set for the remoteItem property.
    */
    public function setRemoteItem(?RemoteItem $value): void {
        $this->getBackingStore()->set('remoteItem', $value);
    }

    /**
     * Sets the root property value. If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.
     * @param Root|null $value Value to set for the root property.
    */
    public function setRoot(?Root $value): void {
        $this->getBackingStore()->set('root', $value);
    }

    /**
     * Sets the searchResult property value. Search metadata, if the item is from a search result. Read-only.
     * @param SearchResult|null $value Value to set for the searchResult property.
    */
    public function setSearchResult(?SearchResult $value): void {
        $this->getBackingStore()->set('searchResult', $value);
    }

    /**
     * Sets the shared property value. Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
     * @param Shared|null $value Value to set for the shared property.
    */
    public function setShared(?Shared $value): void {
        $this->getBackingStore()->set('shared', $value);
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value): void {
        $this->getBackingStore()->set('sharepointIds', $value);
    }

    /**
     * Sets the size property value. Size of the item in bytes. Read-only.
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
     * Sets the subscriptions property value. The set of subscriptions on the item. Only supported on the root of a drive.
     * @param array<Subscription>|null $value Value to set for the subscriptions property.
    */
    public function setSubscriptions(?array $value): void {
        $this->getBackingStore()->set('subscriptions', $value);
    }

    /**
     * Sets the thumbnails property value. Collection containing [ThumbnailSet][] objects associated with the item. For more info, see [getting thumbnails][]. Read-only. Nullable.
     * @param array<ThumbnailSet>|null $value Value to set for the thumbnails property.
    */
    public function setThumbnails(?array $value): void {
        $this->getBackingStore()->set('thumbnails', $value);
    }

    /**
     * Sets the versions property value. The list of previous versions of the item. For more info, see [getting previous versions][]. Read-only. Nullable.
     * @param array<DriveItemVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value): void {
        $this->getBackingStore()->set('versions', $value);
    }

    /**
     * Sets the video property value. Video metadata, if the item is a video. Read-only.
     * @param Video|null $value Value to set for the video property.
    */
    public function setVideo(?Video $value): void {
        $this->getBackingStore()->set('video', $value);
    }

    /**
     * Sets the webDavUrl property value. WebDAV compatible URL for the item.
     * @param string|null $value Value to set for the webDavUrl property.
    */
    public function setWebDavUrl(?string $value): void {
        $this->getBackingStore()->set('webDavUrl', $value);
    }

    /**
     * Sets the workbook property value. For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet's contents. Nullable.
     * @param Workbook|null $value Value to set for the workbook property.
    */
    public function setWorkbook(?Workbook $value): void {
        $this->getBackingStore()->set('workbook', $value);
    }

}
