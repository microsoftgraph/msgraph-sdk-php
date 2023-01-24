<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedMobileLobApp extends ManagedApp implements Parsable 
{
    /**
     * Instantiates a new ManagedMobileLobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedMobileLobApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedMobileLobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedMobileLobApp {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.managedAndroidLobApp': return new ManagedAndroidLobApp();
                case '#microsoft.graph.managedIOSLobApp': return new ManagedIOSLobApp();
            }
        }
        return new ManagedMobileLobApp();
    }

    /**
     * Gets the committedContentVersion property value. The internal committed content version.
     * @return string|null
    */
    public function getCommittedContentVersion(): ?string {
        return $this->getBackingStore()->get('committedContentVersion');
    }

    /**
     * Gets the contentVersions property value. The list of content versions for this app.
     * @return array<MobileAppContent>|null
    */
    public function getContentVersions(): ?array {
        return $this->getBackingStore()->get('contentVersions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'committedContentVersion' => fn(ParseNode $n) => $o->setCommittedContentVersion($n->getStringValue()),
            'contentVersions' => fn(ParseNode $n) => $o->setContentVersions($n->getCollectionOfObjectValues([MobileAppContent::class, 'createFromDiscriminatorValue'])),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the fileName property value. The name of the main Lob application file.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->getBackingStore()->get('fileName');
    }

    /**
     * Gets the size property value. The total size, including all uploaded files.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('committedContentVersion', $this->getCommittedContentVersion());
        $writer->writeCollectionOfObjectValues('contentVersions', $this->getContentVersions());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeIntegerValue('size', $this->getSize());
    }

    /**
     * Sets the committedContentVersion property value. The internal committed content version.
     * @param string|null $value Value to set for the committedContentVersion property.
    */
    public function setCommittedContentVersion(?string $value): void {
        $this->getBackingStore()->set('committedContentVersion', $value);
    }

    /**
     * Sets the contentVersions property value. The list of content versions for this app.
     * @param array<MobileAppContent>|null $value Value to set for the contentVersions property.
    */
    public function setContentVersions(?array $value): void {
        $this->getBackingStore()->set('contentVersions', $value);
    }

    /**
     * Sets the fileName property value. The name of the main Lob application file.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the size property value. The total size, including all uploaded files.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

}
