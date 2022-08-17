<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class DriveItem extends BaseItem implements Parsable 
{
    /**
     * @var ItemAnalytics|null $analytics Analytics about the view activities that took place on this item.
    */
    private ?ItemAnalytics $analytics = null;
    
    /**
     * @var Audio|null $audio Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal.
    */
    private ?Audio $audio = null;
    
    /**
     * @var Bundle|null $bundle Bundle metadata, if the item is a bundle. Read-only.
    */
    private ?Bundle $bundle = null;
    
    /**
     * @var array<DriveItem>|null $children Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
    */
    private ?array $children = null;
    
    /**
     * @var StreamInterface|null $content The content stream, if the item represents a file.
    */
    private ?StreamInterface $content = null;
    
    /**
     * @var string|null $cTag An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.
    */
    private ?string $cTag = null;
    
    /**
     * @var Deleted|null $deleted Information about the deleted state of the item. Read-only.
    */
    private ?Deleted $deleted = null;
    
    /**
     * @var File|null $file File metadata, if the item is a file. Read-only.
    */
    private ?File $file = null;
    
    /**
     * @var FileSystemInfo|null $fileSystemInfo File system information on client. Read-write.
    */
    private ?FileSystemInfo $fileSystemInfo = null;
    
    /**
     * @var Folder|null $folder Folder metadata, if the item is a folder. Read-only.
    */
    private ?Folder $folder = null;
    
    /**
     * @var Image|null $image Image metadata, if the item is an image. Read-only.
    */
    private ?Image $image = null;
    
    /**
     * @var ListItem|null $listItem For drives in SharePoint, the associated document library list item. Read-only. Nullable.
    */
    private ?ListItem $listItem = null;
    
    /**
     * @var GeoCoordinates|null $location Location metadata, if the item has location data. Read-only.
    */
    private ?GeoCoordinates $location = null;
    
    /**
     * @var Malware|null $malware Malware metadata, if the item was detected to contain malware. Read-only.
    */
    private ?Malware $malware = null;
    
    /**
     * @var Package|null $package If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
    */
    private ?Package $package = null;
    
    /**
     * @var PendingOperations|null $pendingOperations If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only.
    */
    private ?PendingOperations $pendingOperations = null;
    
    /**
     * @var array<Permission>|null $permissions The set of permissions for the item. Read-only. Nullable.
    */
    private ?array $permissions = null;
    
    /**
     * @var Photo|null $photo Photo metadata, if the item is a photo. Read-only.
    */
    private ?Photo $photo = null;
    
    /**
     * @var PublicationFacet|null $publication Provides information about the published or checked-out state of an item, in locations that support such actions. This property is not returned by default. Read-only.
    */
    private ?PublicationFacet $publication = null;
    
    /**
     * @var RemoteItem|null $remoteItem Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
    */
    private ?RemoteItem $remoteItem = null;
    
    /**
     * @var Root|null $root If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.
    */
    private ?Root $root = null;
    
    /**
     * @var SearchResult|null $searchResult Search metadata, if the item is from a search result. Read-only.
    */
    private ?SearchResult $searchResult = null;
    
    /**
     * @var Shared|null $shared Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
    */
    private ?Shared $shared = null;
    
    /**
     * @var SharepointIds|null $sharepointIds Returns identifiers useful for SharePoint REST compatibility. Read-only.
    */
    private ?SharepointIds $sharepointIds = null;
    
    /**
     * @var int|null $size Size of the item in bytes. Read-only.
    */
    private ?int $size = null;
    
    /**
     * @var SpecialFolder|null $specialFolder If the current item is also available as a special folder, this facet is returned. Read-only.
    */
    private ?SpecialFolder $specialFolder = null;
    
    /**
     * @var array<Subscription>|null $subscriptions The set of subscriptions on the item. Only supported on the root of a drive.
    */
    private ?array $subscriptions = null;
    
    /**
     * @var array<ThumbnailSet>|null $thumbnails Collection containing [ThumbnailSet][] objects associated with the item. For more info, see [getting thumbnails][]. Read-only. Nullable.
    */
    private ?array $thumbnails = null;
    
    /**
     * @var array<DriveItemVersion>|null $versions The list of previous versions of the item. For more info, see [getting previous versions][]. Read-only. Nullable.
    */
    private ?array $versions = null;
    
    /**
     * @var Video|null $video Video metadata, if the item is a video. Read-only.
    */
    private ?Video $video = null;
    
    /**
     * @var string|null $webDavUrl WebDAV compatible URL for the item.
    */
    private ?string $webDavUrl = null;
    
    /**
     * @var Workbook|null $workbook For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet's contents. Nullable.
    */
    private ?Workbook $workbook = null;
    
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
        return $this->analytics;
    }

    /**
     * Gets the audio property value. Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal.
     * @return Audio|null
    */
    public function getAudio(): ?Audio {
        return $this->audio;
    }

    /**
     * Gets the bundle property value. Bundle metadata, if the item is a bundle. Read-only.
     * @return Bundle|null
    */
    public function getBundle(): ?Bundle {
        return $this->bundle;
    }

    /**
     * Gets the children property value. Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
     * @return array<DriveItem>|null
    */
    public function getChildren(): ?array {
        return $this->children;
    }

    /**
     * Gets the content property value. The content stream, if the item represents a file.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the cTag property value. An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.
     * @return string|null
    */
    public function getCTag(): ?string {
        return $this->cTag;
    }

    /**
     * Gets the deleted property value. Information about the deleted state of the item. Read-only.
     * @return Deleted|null
    */
    public function getDeleted(): ?Deleted {
        return $this->deleted;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'analytics' => function (ParseNode $n) use ($o) { $o->setAnalytics($n->getObjectValue(array(ItemAnalytics::class, 'createFromDiscriminatorValue'))); },
            'audio' => function (ParseNode $n) use ($o) { $o->setAudio($n->getObjectValue(array(Audio::class, 'createFromDiscriminatorValue'))); },
            'bundle' => function (ParseNode $n) use ($o) { $o->setBundle($n->getObjectValue(array(Bundle::class, 'createFromDiscriminatorValue'))); },
            'children' => function (ParseNode $n) use ($o) { $o->setChildren($n->getCollectionOfObjectValues(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getBinaryContent()); },
            'cTag' => function (ParseNode $n) use ($o) { $o->setCTag($n->getStringValue()); },
            'deleted' => function (ParseNode $n) use ($o) { $o->setDeleted($n->getObjectValue(array(Deleted::class, 'createFromDiscriminatorValue'))); },
            'file' => function (ParseNode $n) use ($o) { $o->setFile($n->getObjectValue(array(File::class, 'createFromDiscriminatorValue'))); },
            'fileSystemInfo' => function (ParseNode $n) use ($o) { $o->setFileSystemInfo($n->getObjectValue(array(FileSystemInfo::class, 'createFromDiscriminatorValue'))); },
            'folder' => function (ParseNode $n) use ($o) { $o->setFolder($n->getObjectValue(array(Folder::class, 'createFromDiscriminatorValue'))); },
            'image' => function (ParseNode $n) use ($o) { $o->setImage($n->getObjectValue(array(Image::class, 'createFromDiscriminatorValue'))); },
            'listItem' => function (ParseNode $n) use ($o) { $o->setListItem($n->getObjectValue(array(ListItem::class, 'createFromDiscriminatorValue'))); },
            'location' => function (ParseNode $n) use ($o) { $o->setLocation($n->getObjectValue(array(GeoCoordinates::class, 'createFromDiscriminatorValue'))); },
            'malware' => function (ParseNode $n) use ($o) { $o->setMalware($n->getObjectValue(array(Malware::class, 'createFromDiscriminatorValue'))); },
            'package' => function (ParseNode $n) use ($o) { $o->setPackage($n->getObjectValue(array(Package::class, 'createFromDiscriminatorValue'))); },
            'pendingOperations' => function (ParseNode $n) use ($o) { $o->setPendingOperations($n->getObjectValue(array(PendingOperations::class, 'createFromDiscriminatorValue'))); },
            'permissions' => function (ParseNode $n) use ($o) { $o->setPermissions($n->getCollectionOfObjectValues(array(Permission::class, 'createFromDiscriminatorValue'))); },
            'photo' => function (ParseNode $n) use ($o) { $o->setPhoto($n->getObjectValue(array(Photo::class, 'createFromDiscriminatorValue'))); },
            'publication' => function (ParseNode $n) use ($o) { $o->setPublication($n->getObjectValue(array(PublicationFacet::class, 'createFromDiscriminatorValue'))); },
            'remoteItem' => function (ParseNode $n) use ($o) { $o->setRemoteItem($n->getObjectValue(array(RemoteItem::class, 'createFromDiscriminatorValue'))); },
            'root' => function (ParseNode $n) use ($o) { $o->setRoot($n->getObjectValue(array(Root::class, 'createFromDiscriminatorValue'))); },
            'searchResult' => function (ParseNode $n) use ($o) { $o->setSearchResult($n->getObjectValue(array(SearchResult::class, 'createFromDiscriminatorValue'))); },
            'shared' => function (ParseNode $n) use ($o) { $o->setShared($n->getObjectValue(array(Shared::class, 'createFromDiscriminatorValue'))); },
            'sharepointIds' => function (ParseNode $n) use ($o) { $o->setSharepointIds($n->getObjectValue(array(SharepointIds::class, 'createFromDiscriminatorValue'))); },
            'size' => function (ParseNode $n) use ($o) { $o->setSize($n->getIntegerValue()); },
            'specialFolder' => function (ParseNode $n) use ($o) { $o->setSpecialFolder($n->getObjectValue(array(SpecialFolder::class, 'createFromDiscriminatorValue'))); },
            'subscriptions' => function (ParseNode $n) use ($o) { $o->setSubscriptions($n->getCollectionOfObjectValues(array(Subscription::class, 'createFromDiscriminatorValue'))); },
            'thumbnails' => function (ParseNode $n) use ($o) { $o->setThumbnails($n->getCollectionOfObjectValues(array(ThumbnailSet::class, 'createFromDiscriminatorValue'))); },
            'versions' => function (ParseNode $n) use ($o) { $o->setVersions($n->getCollectionOfObjectValues(array(DriveItemVersion::class, 'createFromDiscriminatorValue'))); },
            'video' => function (ParseNode $n) use ($o) { $o->setVideo($n->getObjectValue(array(Video::class, 'createFromDiscriminatorValue'))); },
            'webDavUrl' => function (ParseNode $n) use ($o) { $o->setWebDavUrl($n->getStringValue()); },
            'workbook' => function (ParseNode $n) use ($o) { $o->setWorkbook($n->getObjectValue(array(Workbook::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the file property value. File metadata, if the item is a file. Read-only.
     * @return File|null
    */
    public function getFile(): ?File {
        return $this->file;
    }

    /**
     * Gets the fileSystemInfo property value. File system information on client. Read-write.
     * @return FileSystemInfo|null
    */
    public function getFileSystemInfo(): ?FileSystemInfo {
        return $this->fileSystemInfo;
    }

    /**
     * Gets the folder property value. Folder metadata, if the item is a folder. Read-only.
     * @return Folder|null
    */
    public function getFolder(): ?Folder {
        return $this->folder;
    }

    /**
     * Gets the image property value. Image metadata, if the item is an image. Read-only.
     * @return Image|null
    */
    public function getImage(): ?Image {
        return $this->image;
    }

    /**
     * Gets the listItem property value. For drives in SharePoint, the associated document library list item. Read-only. Nullable.
     * @return ListItem|null
    */
    public function getListItem(): ?ListItem {
        return $this->listItem;
    }

    /**
     * Gets the location property value. Location metadata, if the item has location data. Read-only.
     * @return GeoCoordinates|null
    */
    public function getLocation(): ?GeoCoordinates {
        return $this->location;
    }

    /**
     * Gets the malware property value. Malware metadata, if the item was detected to contain malware. Read-only.
     * @return Malware|null
    */
    public function getMalware(): ?Malware {
        return $this->malware;
    }

    /**
     * Gets the package property value. If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     * @return Package|null
    */
    public function getPackage(): ?Package {
        return $this->package;
    }

    /**
     * Gets the pendingOperations property value. If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only.
     * @return PendingOperations|null
    */
    public function getPendingOperations(): ?PendingOperations {
        return $this->pendingOperations;
    }

    /**
     * Gets the permissions property value. The set of permissions for the item. Read-only. Nullable.
     * @return array<Permission>|null
    */
    public function getPermissions(): ?array {
        return $this->permissions;
    }

    /**
     * Gets the photo property value. Photo metadata, if the item is a photo. Read-only.
     * @return Photo|null
    */
    public function getPhoto(): ?Photo {
        return $this->photo;
    }

    /**
     * Gets the publication property value. Provides information about the published or checked-out state of an item, in locations that support such actions. This property is not returned by default. Read-only.
     * @return PublicationFacet|null
    */
    public function getPublication(): ?PublicationFacet {
        return $this->publication;
    }

    /**
     * Gets the remoteItem property value. Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
     * @return RemoteItem|null
    */
    public function getRemoteItem(): ?RemoteItem {
        return $this->remoteItem;
    }

    /**
     * Gets the root property value. If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        return $this->root;
    }

    /**
     * Gets the searchResult property value. Search metadata, if the item is from a search result. Read-only.
     * @return SearchResult|null
    */
    public function getSearchResult(): ?SearchResult {
        return $this->searchResult;
    }

    /**
     * Gets the shared property value. Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
     * @return Shared|null
    */
    public function getShared(): ?Shared {
        return $this->shared;
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        return $this->sharepointIds;
    }

    /**
     * Gets the size property value. Size of the item in bytes. Read-only.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the specialFolder property value. If the current item is also available as a special folder, this facet is returned. Read-only.
     * @return SpecialFolder|null
    */
    public function getSpecialFolder(): ?SpecialFolder {
        return $this->specialFolder;
    }

    /**
     * Gets the subscriptions property value. The set of subscriptions on the item. Only supported on the root of a drive.
     * @return array<Subscription>|null
    */
    public function getSubscriptions(): ?array {
        return $this->subscriptions;
    }

    /**
     * Gets the thumbnails property value. Collection containing [ThumbnailSet][] objects associated with the item. For more info, see [getting thumbnails][]. Read-only. Nullable.
     * @return array<ThumbnailSet>|null
    */
    public function getThumbnails(): ?array {
        return $this->thumbnails;
    }

    /**
     * Gets the versions property value. The list of previous versions of the item. For more info, see [getting previous versions][]. Read-only. Nullable.
     * @return array<DriveItemVersion>|null
    */
    public function getVersions(): ?array {
        return $this->versions;
    }

    /**
     * Gets the video property value. Video metadata, if the item is a video. Read-only.
     * @return Video|null
    */
    public function getVideo(): ?Video {
        return $this->video;
    }

    /**
     * Gets the webDavUrl property value. WebDAV compatible URL for the item.
     * @return string|null
    */
    public function getWebDavUrl(): ?string {
        return $this->webDavUrl;
    }

    /**
     * Gets the workbook property value. For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet's contents. Nullable.
     * @return Workbook|null
    */
    public function getWorkbook(): ?Workbook {
        return $this->workbook;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('analytics', $this->analytics);
        $writer->writeObjectValue('audio', $this->audio);
        $writer->writeObjectValue('bundle', $this->bundle);
        $writer->writeCollectionOfObjectValues('children', $this->children);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeStringValue('cTag', $this->cTag);
        $writer->writeObjectValue('deleted', $this->deleted);
        $writer->writeObjectValue('file', $this->file);
        $writer->writeObjectValue('fileSystemInfo', $this->fileSystemInfo);
        $writer->writeObjectValue('folder', $this->folder);
        $writer->writeObjectValue('image', $this->image);
        $writer->writeObjectValue('listItem', $this->listItem);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeObjectValue('malware', $this->malware);
        $writer->writeObjectValue('package', $this->package);
        $writer->writeObjectValue('pendingOperations', $this->pendingOperations);
        $writer->writeCollectionOfObjectValues('permissions', $this->permissions);
        $writer->writeObjectValue('photo', $this->photo);
        $writer->writeObjectValue('publication', $this->publication);
        $writer->writeObjectValue('remoteItem', $this->remoteItem);
        $writer->writeObjectValue('root', $this->root);
        $writer->writeObjectValue('searchResult', $this->searchResult);
        $writer->writeObjectValue('shared', $this->shared);
        $writer->writeObjectValue('sharepointIds', $this->sharepointIds);
        $writer->writeIntegerValue('size', $this->size);
        $writer->writeObjectValue('specialFolder', $this->specialFolder);
        $writer->writeCollectionOfObjectValues('subscriptions', $this->subscriptions);
        $writer->writeCollectionOfObjectValues('thumbnails', $this->thumbnails);
        $writer->writeCollectionOfObjectValues('versions', $this->versions);
        $writer->writeObjectValue('video', $this->video);
        $writer->writeStringValue('webDavUrl', $this->webDavUrl);
        $writer->writeObjectValue('workbook', $this->workbook);
    }

    /**
     * Sets the analytics property value. Analytics about the view activities that took place on this item.
     *  @param ItemAnalytics|null $value Value to set for the analytics property.
    */
    public function setAnalytics(?ItemAnalytics $value ): void {
        $this->analytics = $value;
    }

    /**
     * Sets the audio property value. Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal.
     *  @param Audio|null $value Value to set for the audio property.
    */
    public function setAudio(?Audio $value ): void {
        $this->audio = $value;
    }

    /**
     * Sets the bundle property value. Bundle metadata, if the item is a bundle. Read-only.
     *  @param Bundle|null $value Value to set for the bundle property.
    */
    public function setBundle(?Bundle $value ): void {
        $this->bundle = $value;
    }

    /**
     * Sets the children property value. Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
     *  @param array<DriveItem>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

    /**
     * Sets the content property value. The content stream, if the item represents a file.
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the cTag property value. An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.
     *  @param string|null $value Value to set for the cTag property.
    */
    public function setCTag(?string $value ): void {
        $this->cTag = $value;
    }

    /**
     * Sets the deleted property value. Information about the deleted state of the item. Read-only.
     *  @param Deleted|null $value Value to set for the deleted property.
    */
    public function setDeleted(?Deleted $value ): void {
        $this->deleted = $value;
    }

    /**
     * Sets the file property value. File metadata, if the item is a file. Read-only.
     *  @param File|null $value Value to set for the file property.
    */
    public function setFile(?File $value ): void {
        $this->file = $value;
    }

    /**
     * Sets the fileSystemInfo property value. File system information on client. Read-write.
     *  @param FileSystemInfo|null $value Value to set for the fileSystemInfo property.
    */
    public function setFileSystemInfo(?FileSystemInfo $value ): void {
        $this->fileSystemInfo = $value;
    }

    /**
     * Sets the folder property value. Folder metadata, if the item is a folder. Read-only.
     *  @param Folder|null $value Value to set for the folder property.
    */
    public function setFolder(?Folder $value ): void {
        $this->folder = $value;
    }

    /**
     * Sets the image property value. Image metadata, if the item is an image. Read-only.
     *  @param Image|null $value Value to set for the image property.
    */
    public function setImage(?Image $value ): void {
        $this->image = $value;
    }

    /**
     * Sets the listItem property value. For drives in SharePoint, the associated document library list item. Read-only. Nullable.
     *  @param ListItem|null $value Value to set for the listItem property.
    */
    public function setListItem(?ListItem $value ): void {
        $this->listItem = $value;
    }

    /**
     * Sets the location property value. Location metadata, if the item has location data. Read-only.
     *  @param GeoCoordinates|null $value Value to set for the location property.
    */
    public function setLocation(?GeoCoordinates $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the malware property value. Malware metadata, if the item was detected to contain malware. Read-only.
     *  @param Malware|null $value Value to set for the malware property.
    */
    public function setMalware(?Malware $value ): void {
        $this->malware = $value;
    }

    /**
     * Sets the package property value. If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     *  @param Package|null $value Value to set for the package property.
    */
    public function setPackage(?Package $value ): void {
        $this->package = $value;
    }

    /**
     * Sets the pendingOperations property value. If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only.
     *  @param PendingOperations|null $value Value to set for the pendingOperations property.
    */
    public function setPendingOperations(?PendingOperations $value ): void {
        $this->pendingOperations = $value;
    }

    /**
     * Sets the permissions property value. The set of permissions for the item. Read-only. Nullable.
     *  @param array<Permission>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value ): void {
        $this->permissions = $value;
    }

    /**
     * Sets the photo property value. Photo metadata, if the item is a photo. Read-only.
     *  @param Photo|null $value Value to set for the photo property.
    */
    public function setPhoto(?Photo $value ): void {
        $this->photo = $value;
    }

    /**
     * Sets the publication property value. Provides information about the published or checked-out state of an item, in locations that support such actions. This property is not returned by default. Read-only.
     *  @param PublicationFacet|null $value Value to set for the publication property.
    */
    public function setPublication(?PublicationFacet $value ): void {
        $this->publication = $value;
    }

    /**
     * Sets the remoteItem property value. Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
     *  @param RemoteItem|null $value Value to set for the remoteItem property.
    */
    public function setRemoteItem(?RemoteItem $value ): void {
        $this->remoteItem = $value;
    }

    /**
     * Sets the root property value. If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.
     *  @param Root|null $value Value to set for the root property.
    */
    public function setRoot(?Root $value ): void {
        $this->root = $value;
    }

    /**
     * Sets the searchResult property value. Search metadata, if the item is from a search result. Read-only.
     *  @param SearchResult|null $value Value to set for the searchResult property.
    */
    public function setSearchResult(?SearchResult $value ): void {
        $this->searchResult = $value;
    }

    /**
     * Sets the shared property value. Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
     *  @param Shared|null $value Value to set for the shared property.
    */
    public function setShared(?Shared $value ): void {
        $this->shared = $value;
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     *  @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value ): void {
        $this->sharepointIds = $value;
    }

    /**
     * Sets the size property value. Size of the item in bytes. Read-only.
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the specialFolder property value. If the current item is also available as a special folder, this facet is returned. Read-only.
     *  @param SpecialFolder|null $value Value to set for the specialFolder property.
    */
    public function setSpecialFolder(?SpecialFolder $value ): void {
        $this->specialFolder = $value;
    }

    /**
     * Sets the subscriptions property value. The set of subscriptions on the item. Only supported on the root of a drive.
     *  @param array<Subscription>|null $value Value to set for the subscriptions property.
    */
    public function setSubscriptions(?array $value ): void {
        $this->subscriptions = $value;
    }

    /**
     * Sets the thumbnails property value. Collection containing [ThumbnailSet][] objects associated with the item. For more info, see [getting thumbnails][]. Read-only. Nullable.
     *  @param array<ThumbnailSet>|null $value Value to set for the thumbnails property.
    */
    public function setThumbnails(?array $value ): void {
        $this->thumbnails = $value;
    }

    /**
     * Sets the versions property value. The list of previous versions of the item. For more info, see [getting previous versions][]. Read-only. Nullable.
     *  @param array<DriveItemVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value ): void {
        $this->versions = $value;
    }

    /**
     * Sets the video property value. Video metadata, if the item is a video. Read-only.
     *  @param Video|null $value Value to set for the video property.
    */
    public function setVideo(?Video $value ): void {
        $this->video = $value;
    }

    /**
     * Sets the webDavUrl property value. WebDAV compatible URL for the item.
     *  @param string|null $value Value to set for the webDavUrl property.
    */
    public function setWebDavUrl(?string $value ): void {
        $this->webDavUrl = $value;
    }

    /**
     * Sets the workbook property value. For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet's contents. Nullable.
     *  @param Workbook|null $value Value to set for the workbook property.
    */
    public function setWorkbook(?Workbook $value ): void {
        $this->workbook = $value;
    }

}
