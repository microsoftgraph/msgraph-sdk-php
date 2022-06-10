<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DocumentSet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ContentTypeInfo>|null $allowedContentTypes Content types allowed in document set.
    */
    private ?array $allowedContentTypes = null;
    
    /**
     * @var array<DocumentSetContent>|null $defaultContents Default contents of document set.
    */
    private ?array $defaultContents = null;
    
    /**
     * @var bool|null $propagateWelcomePageChanges Indicates whether to add the name of the document set to each file name.
    */
    private ?bool $propagateWelcomePageChanges = null;
    
    /**
     * @var array<ColumnDefinition>|null $sharedColumns The sharedColumns property
    */
    private ?array $sharedColumns = null;
    
    /**
     * @var bool|null $shouldPrefixNameToFile Add the name of the Document Set to each file name.
    */
    private ?bool $shouldPrefixNameToFile = null;
    
    /**
     * @var array<ColumnDefinition>|null $welcomePageColumns The welcomePageColumns property
    */
    private ?array $welcomePageColumns = null;
    
    /**
     * @var string|null $welcomePageUrl Welcome page absolute URL.
    */
    private ?string $welcomePageUrl = null;
    
    /**
     * Instantiates a new documentSet and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentSet {
        return new DocumentSet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedContentTypes property value. Content types allowed in document set.
     * @return array<ContentTypeInfo>|null
    */
    public function getAllowedContentTypes(): ?array {
        return $this->allowedContentTypes;
    }

    /**
     * Gets the defaultContents property value. Default contents of document set.
     * @return array<DocumentSetContent>|null
    */
    public function getDefaultContents(): ?array {
        return $this->defaultContents;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedContentTypes' => function (ParseNode $n) use ($o) { $o->setAllowedContentTypes($n->getCollectionOfObjectValues(array(ContentTypeInfo::class, 'createFromDiscriminatorValue'))); },
            'defaultContents' => function (ParseNode $n) use ($o) { $o->setDefaultContents($n->getCollectionOfObjectValues(array(DocumentSetContent::class, 'createFromDiscriminatorValue'))); },
            'propagateWelcomePageChanges' => function (ParseNode $n) use ($o) { $o->setPropagateWelcomePageChanges($n->getBooleanValue()); },
            'sharedColumns' => function (ParseNode $n) use ($o) { $o->setSharedColumns($n->getCollectionOfObjectValues(array(ColumnDefinition::class, 'createFromDiscriminatorValue'))); },
            'shouldPrefixNameToFile' => function (ParseNode $n) use ($o) { $o->setShouldPrefixNameToFile($n->getBooleanValue()); },
            'welcomePageColumns' => function (ParseNode $n) use ($o) { $o->setWelcomePageColumns($n->getCollectionOfObjectValues(array(ColumnDefinition::class, 'createFromDiscriminatorValue'))); },
            'welcomePageUrl' => function (ParseNode $n) use ($o) { $o->setWelcomePageUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the propagateWelcomePageChanges property value. Indicates whether to add the name of the document set to each file name.
     * @return bool|null
    */
    public function getPropagateWelcomePageChanges(): ?bool {
        return $this->propagateWelcomePageChanges;
    }

    /**
     * Gets the sharedColumns property value. The sharedColumns property
     * @return array<ColumnDefinition>|null
    */
    public function getSharedColumns(): ?array {
        return $this->sharedColumns;
    }

    /**
     * Gets the shouldPrefixNameToFile property value. Add the name of the Document Set to each file name.
     * @return bool|null
    */
    public function getShouldPrefixNameToFile(): ?bool {
        return $this->shouldPrefixNameToFile;
    }

    /**
     * Gets the welcomePageColumns property value. The welcomePageColumns property
     * @return array<ColumnDefinition>|null
    */
    public function getWelcomePageColumns(): ?array {
        return $this->welcomePageColumns;
    }

    /**
     * Gets the welcomePageUrl property value. Welcome page absolute URL.
     * @return string|null
    */
    public function getWelcomePageUrl(): ?string {
        return $this->welcomePageUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('allowedContentTypes', $this->allowedContentTypes);
        $writer->writeCollectionOfObjectValues('defaultContents', $this->defaultContents);
        $writer->writeBooleanValue('propagateWelcomePageChanges', $this->propagateWelcomePageChanges);
        $writer->writeCollectionOfObjectValues('sharedColumns', $this->sharedColumns);
        $writer->writeBooleanValue('shouldPrefixNameToFile', $this->shouldPrefixNameToFile);
        $writer->writeCollectionOfObjectValues('welcomePageColumns', $this->welcomePageColumns);
        $writer->writeStringValue('welcomePageUrl', $this->welcomePageUrl);
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
     * Sets the allowedContentTypes property value. Content types allowed in document set.
     *  @param array<ContentTypeInfo>|null $value Value to set for the allowedContentTypes property.
    */
    public function setAllowedContentTypes(?array $value ): void {
        $this->allowedContentTypes = $value;
    }

    /**
     * Sets the defaultContents property value. Default contents of document set.
     *  @param array<DocumentSetContent>|null $value Value to set for the defaultContents property.
    */
    public function setDefaultContents(?array $value ): void {
        $this->defaultContents = $value;
    }

    /**
     * Sets the propagateWelcomePageChanges property value. Indicates whether to add the name of the document set to each file name.
     *  @param bool|null $value Value to set for the propagateWelcomePageChanges property.
    */
    public function setPropagateWelcomePageChanges(?bool $value ): void {
        $this->propagateWelcomePageChanges = $value;
    }

    /**
     * Sets the sharedColumns property value. The sharedColumns property
     *  @param array<ColumnDefinition>|null $value Value to set for the sharedColumns property.
    */
    public function setSharedColumns(?array $value ): void {
        $this->sharedColumns = $value;
    }

    /**
     * Sets the shouldPrefixNameToFile property value. Add the name of the Document Set to each file name.
     *  @param bool|null $value Value to set for the shouldPrefixNameToFile property.
    */
    public function setShouldPrefixNameToFile(?bool $value ): void {
        $this->shouldPrefixNameToFile = $value;
    }

    /**
     * Sets the welcomePageColumns property value. The welcomePageColumns property
     *  @param array<ColumnDefinition>|null $value Value to set for the welcomePageColumns property.
    */
    public function setWelcomePageColumns(?array $value ): void {
        $this->welcomePageColumns = $value;
    }

    /**
     * Sets the welcomePageUrl property value. Welcome page absolute URL.
     *  @param string|null $value Value to set for the welcomePageUrl property.
    */
    public function setWelcomePageUrl(?string $value ): void {
        $this->welcomePageUrl = $value;
    }

}
