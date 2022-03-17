<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecentNotebook implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $displayName The name of the notebook. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastAccessedTime The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    private ?DateTime $lastAccessedTime = null;
    
    /** @var RecentNotebookLinks|null $links Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote client, if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web. */
    private ?RecentNotebookLinks $links = null;
    
    /** @var OnenoteSourceService|null $sourceService The backend store where the Notebook resides, either OneDriveForBusiness or OneDrive. */
    private ?OnenoteSourceService $sourceService = null;
    
    /**
     * Instantiates a new recentNotebook and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecentNotebook
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RecentNotebook {
        return new RecentNotebook();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The name of the notebook.
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
        return  [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastAccessedTime' => function (self $o, ParseNode $n) { $o->setLastAccessedTime($n->getDateTimeValue()); },
            'links' => function (self $o, ParseNode $n) { $o->setLinks($n->getObjectValue(RecentNotebookLinks::class)); },
            'sourceService' => function (self $o, ParseNode $n) { $o->setSourceService($n->getEnumValue(OnenoteSourceService::class)); },
        ];
    }

    /**
     * Gets the lastAccessedTime property value. The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getLastAccessedTime(): ?DateTime {
        return $this->lastAccessedTime;
    }

    /**
     * Gets the links property value. Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote client, if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     * @return RecentNotebookLinks|null
    */
    public function getLinks(): ?RecentNotebookLinks {
        return $this->links;
    }

    /**
     * Gets the sourceService property value. The backend store where the Notebook resides, either OneDriveForBusiness or OneDrive.
     * @return OnenoteSourceService|null
    */
    public function getSourceService(): ?OnenoteSourceService {
        return $this->sourceService;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastAccessedTime', $this->lastAccessedTime);
        $writer->writeObjectValue('links', $this->links);
        $writer->writeEnumValue('sourceService', $this->sourceService);
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
     * Sets the displayName property value. The name of the notebook.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastAccessedTime property value. The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the lastAccessedTime property.
    */
    public function setLastAccessedTime(?DateTime $value ): void {
        $this->lastAccessedTime = $value;
    }

    /**
     * Sets the links property value. Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote client, if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     *  @param RecentNotebookLinks|null $value Value to set for the links property.
    */
    public function setLinks(?RecentNotebookLinks $value ): void {
        $this->links = $value;
    }

    /**
     * Sets the sourceService property value. The backend store where the Notebook resides, either OneDriveForBusiness or OneDrive.
     *  @param OnenoteSourceService|null $value Value to set for the sourceService property.
    */
    public function setSourceService(?OnenoteSourceService $value ): void {
        $this->sourceService = $value;
    }

}
