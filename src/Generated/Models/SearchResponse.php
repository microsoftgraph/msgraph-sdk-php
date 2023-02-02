<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SearchResponse implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new searchResponse and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchResponse {
        return new SearchResponse();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hitsContainers' => fn(ParseNode $n) => $o->setHitsContainers($n->getCollectionOfObjectValues([SearchHitsContainer::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'queryAlterationResponse' => fn(ParseNode $n) => $o->setQueryAlterationResponse($n->getObjectValue([AlterationResponse::class, 'createFromDiscriminatorValue'])),
            'resultTemplates' => fn(ParseNode $n) => $o->setResultTemplates($n->getObjectValue([ResultTemplateDictionary::class, 'createFromDiscriminatorValue'])),
            'searchTerms' => fn(ParseNode $n) => $o->setSearchTerms($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the hitsContainers property value. A collection of search results.
     * @return array<SearchHitsContainer>|null
    */
    public function getHitsContainers(): ?array {
        return $this->getBackingStore()->get('hitsContainers');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the queryAlterationResponse property value. Provides information related to spelling corrections in the alteration response.
     * @return AlterationResponse|null
    */
    public function getQueryAlterationResponse(): ?AlterationResponse {
        return $this->getBackingStore()->get('queryAlterationResponse');
    }

    /**
     * Gets the resultTemplates property value. A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates.
     * @return ResultTemplateDictionary|null
    */
    public function getResultTemplates(): ?ResultTemplateDictionary {
        return $this->getBackingStore()->get('resultTemplates');
    }

    /**
     * Gets the searchTerms property value. Contains the search terms sent in the initial search query.
     * @return array<string>|null
    */
    public function getSearchTerms(): ?array {
        return $this->getBackingStore()->get('searchTerms');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('hitsContainers', $this->getHitsContainers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('queryAlterationResponse', $this->getQueryAlterationResponse());
        $writer->writeObjectValue('resultTemplates', $this->getResultTemplates());
        $writer->writeCollectionOfPrimitiveValues('searchTerms', $this->getSearchTerms());
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
     * Sets the hitsContainers property value. A collection of search results.
     * @param array<SearchHitsContainer>|null $value Value to set for the hitsContainers property.
    */
    public function setHitsContainers(?array $value): void {
        $this->getBackingStore()->set('hitsContainers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the queryAlterationResponse property value. Provides information related to spelling corrections in the alteration response.
     * @param AlterationResponse|null $value Value to set for the queryAlterationResponse property.
    */
    public function setQueryAlterationResponse(?AlterationResponse $value): void {
        $this->getBackingStore()->set('queryAlterationResponse', $value);
    }

    /**
     * Sets the resultTemplates property value. A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates.
     * @param ResultTemplateDictionary|null $value Value to set for the resultTemplates property.
    */
    public function setResultTemplates(?ResultTemplateDictionary $value): void {
        $this->getBackingStore()->set('resultTemplates', $value);
    }

    /**
     * Sets the searchTerms property value. Contains the search terms sent in the initial search query.
     * @param array<string>|null $value Value to set for the searchTerms property.
    */
    public function setSearchTerms(?array $value): void {
        $this->getBackingStore()->set('searchTerms', $value);
    }

}
