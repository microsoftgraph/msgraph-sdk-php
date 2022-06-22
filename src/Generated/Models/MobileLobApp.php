<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileLobApp extends MobileApp implements Parsable 
{
    /**
     * @var string|null $committedContentVersion The internal committed content version.
    */
    private ?string $committedContentVersion = null;
    
    /**
     * @var array<MobileAppContent>|null $contentVersions The list of content versions for this app.
    */
    private ?array $contentVersions = null;
    
    /**
     * @var string|null $fileName The name of the main Lob application file.
    */
    private ?string $fileName = null;
    
    /**
     * @var int|null $size The total size, including all uploaded files.
    */
    private ?int $size = null;
    
    /**
     * Instantiates a new MobileLobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileLobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileLobApp {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidLobApp': return new AndroidLobApp();
                case '#microsoft.graph.iosLobApp': return new IosLobApp();
                case '#microsoft.graph.win32LobApp': return new Win32LobApp();
                case '#microsoft.graph.windowsMobileMSI': return new WindowsMobileMSI();
                case '#microsoft.graph.windowsUniversalAppX': return new WindowsUniversalAppX();
            }
        }
        return new MobileLobApp();
    }

    /**
     * Gets the committedContentVersion property value. The internal committed content version.
     * @return string|null
    */
    public function getCommittedContentVersion(): ?string {
        return $this->committedContentVersion;
    }

    /**
     * Gets the contentVersions property value. The list of content versions for this app.
     * @return array<MobileAppContent>|null
    */
    public function getContentVersions(): ?array {
        return $this->contentVersions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'committedContentVersion' => function (ParseNode $n) use ($o) { $o->setCommittedContentVersion($n->getStringValue()); },
            'contentVersions' => function (ParseNode $n) use ($o) { $o->setContentVersions($n->getCollectionOfObjectValues(array(MobileAppContent::class, 'createFromDiscriminatorValue'))); },
            'fileName' => function (ParseNode $n) use ($o) { $o->setFileName($n->getStringValue()); },
            'size' => function (ParseNode $n) use ($o) { $o->setSize($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the fileName property value. The name of the main Lob application file.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the size property value. The total size, including all uploaded files.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('committedContentVersion', $this->committedContentVersion);
        $writer->writeCollectionOfObjectValues('contentVersions', $this->contentVersions);
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeIntegerValue('size', $this->size);
    }

    /**
     * Sets the committedContentVersion property value. The internal committed content version.
     *  @param string|null $value Value to set for the committedContentVersion property.
    */
    public function setCommittedContentVersion(?string $value ): void {
        $this->committedContentVersion = $value;
    }

    /**
     * Sets the contentVersions property value. The list of content versions for this app.
     *  @param array<MobileAppContent>|null $value Value to set for the contentVersions property.
    */
    public function setContentVersions(?array $value ): void {
        $this->contentVersions = $value;
    }

    /**
     * Sets the fileName property value. The name of the main Lob application file.
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the size property value. The total size, including all uploaded files.
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

}
