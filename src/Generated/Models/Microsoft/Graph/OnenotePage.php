<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OnenotePage extends OnenoteEntitySchemaObjectModel 
{
    /** @var StreamInterface|null $content The page's HTML content. */
    private ?StreamInterface $content = null;
    
    /** @var string|null $contentUrl The URL for the page's HTML content.  Read-only. */
    private ?string $contentUrl = null;
    
    /** @var string|null $createdByAppId The unique identifier of the application that created the page. Read-only. */
    private ?string $createdByAppId = null;
    
    /** @var DateTime|null $lastModifiedDateTime The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var int|null $level The indentation level of the page. Read-only. */
    private ?int $level = null;
    
    /** @var PageLinks|null $links Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only. */
    private ?PageLinks $links = null;
    
    /** @var int|null $order The order of the page within its parent section. Read-only. */
    private ?int $order = null;
    
    /** @var Notebook|null $parentNotebook The notebook that contains the page.  Read-only. */
    private ?Notebook $parentNotebook = null;
    
    /** @var OnenoteSection|null $parentSection The section that contains the page. Read-only. */
    private ?OnenoteSection $parentSection = null;
    
    /** @var string|null $title The title of the page. */
    private ?string $title = null;
    
    /** @var array<string>|null $userTags  */
    private ?array $userTags = null;
    
    /**
     * Instantiates a new onenotePage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenotePage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OnenotePage {
        return new OnenotePage();
    }

    /**
     * Gets the content property value. The page's HTML content.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the contentUrl property value. The URL for the page's HTML content.  Read-only.
     * @return string|null
    */
    public function getContentUrl(): ?string {
        return $this->contentUrl;
    }

    /**
     * Gets the createdByAppId property value. The unique identifier of the application that created the page. Read-only.
     * @return string|null
    */
    public function getCreatedByAppId(): ?string {
        return $this->createdByAppId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'content' => function (self $o, ParseNode $n) { $o->setContent($n->getBinaryContent()); },
            'contentUrl' => function (self $o, ParseNode $n) { $o->setContentUrl($n->getStringValue()); },
            'createdByAppId' => function (self $o, ParseNode $n) { $o->setCreatedByAppId($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'level' => function (self $o, ParseNode $n) { $o->setLevel($n->getIntegerValue()); },
            'links' => function (self $o, ParseNode $n) { $o->setLinks($n->getObjectValue(PageLinks::class)); },
            'order' => function (self $o, ParseNode $n) { $o->setOrder($n->getIntegerValue()); },
            'parentNotebook' => function (self $o, ParseNode $n) { $o->setParentNotebook($n->getObjectValue(Notebook::class)); },
            'parentSection' => function (self $o, ParseNode $n) { $o->setParentSection($n->getObjectValue(OnenoteSection::class)); },
            'title' => function (self $o, ParseNode $n) { $o->setTitle($n->getStringValue()); },
            'userTags' => function (self $o, ParseNode $n) { $o->setUserTags($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the level property value. The indentation level of the page. Read-only.
     * @return int|null
    */
    public function getLevel(): ?int {
        return $this->level;
    }

    /**
     * Gets the links property value. Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only.
     * @return PageLinks|null
    */
    public function getLinks(): ?PageLinks {
        return $this->links;
    }

    /**
     * Gets the order property value. The order of the page within its parent section. Read-only.
     * @return int|null
    */
    public function getOrder(): ?int {
        return $this->order;
    }

    /**
     * Gets the parentNotebook property value. The notebook that contains the page.  Read-only.
     * @return Notebook|null
    */
    public function getParentNotebook(): ?Notebook {
        return $this->parentNotebook;
    }

    /**
     * Gets the parentSection property value. The section that contains the page. Read-only.
     * @return OnenoteSection|null
    */
    public function getParentSection(): ?OnenoteSection {
        return $this->parentSection;
    }

    /**
     * Gets the title property value. The title of the page.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the userTags property value. 
     * @return array<string>|null
    */
    public function getUserTags(): ?array {
        return $this->userTags;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeStringValue('contentUrl', $this->contentUrl);
        $writer->writeStringValue('createdByAppId', $this->createdByAppId);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeIntegerValue('level', $this->level);
        $writer->writeObjectValue('links', $this->links);
        $writer->writeIntegerValue('order', $this->order);
        $writer->writeObjectValue('parentNotebook', $this->parentNotebook);
        $writer->writeObjectValue('parentSection', $this->parentSection);
        $writer->writeStringValue('title', $this->title);
        $writer->writeCollectionOfPrimitiveValues('userTags', $this->userTags);
    }

    /**
     * Sets the content property value. The page's HTML content.
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the contentUrl property value. The URL for the page's HTML content.  Read-only.
     *  @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value ): void {
        $this->contentUrl = $value;
    }

    /**
     * Sets the createdByAppId property value. The unique identifier of the application that created the page. Read-only.
     *  @param string|null $value Value to set for the createdByAppId property.
    */
    public function setCreatedByAppId(?string $value ): void {
        $this->createdByAppId = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the level property value. The indentation level of the page. Read-only.
     *  @param int|null $value Value to set for the level property.
    */
    public function setLevel(?int $value ): void {
        $this->level = $value;
    }

    /**
     * Sets the links property value. Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only.
     *  @param PageLinks|null $value Value to set for the links property.
    */
    public function setLinks(?PageLinks $value ): void {
        $this->links = $value;
    }

    /**
     * Sets the order property value. The order of the page within its parent section. Read-only.
     *  @param int|null $value Value to set for the order property.
    */
    public function setOrder(?int $value ): void {
        $this->order = $value;
    }

    /**
     * Sets the parentNotebook property value. The notebook that contains the page.  Read-only.
     *  @param Notebook|null $value Value to set for the parentNotebook property.
    */
    public function setParentNotebook(?Notebook $value ): void {
        $this->parentNotebook = $value;
    }

    /**
     * Sets the parentSection property value. The section that contains the page. Read-only.
     *  @param OnenoteSection|null $value Value to set for the parentSection property.
    */
    public function setParentSection(?OnenoteSection $value ): void {
        $this->parentSection = $value;
    }

    /**
     * Sets the title property value. The title of the page.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the userTags property value. 
     *  @param array<string>|null $value Value to set for the userTags property.
    */
    public function setUserTags(?array $value ): void {
        $this->userTags = $value;
    }

}
